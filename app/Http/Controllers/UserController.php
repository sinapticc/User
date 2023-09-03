<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\City;
use App\Models\PhoneNumber;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function create()
    {
        {
            $provinces = Province::all();
            return view('create_user_form', compact('provinces'));
        }
    }
    public function getCities($provinceId)
    {
        $province = Province::findOrFail($provinceId);
        $cities = $province->cities;
        return response()->json($cities);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:50000',
            'name' => 'required|string|regex:/[ء-ي‌]+/u',
            'family_name' => 'required|string|regex:/[ء-ي‌]+/u',
            'father_name' => 'required|string|regex:/[ء-ي‌]+/u',
            'nat_id' => 'required|string|size:10',
            'province1' => 'required|int',
            'city1' => 'required|int|not_in:0',
            'province2' => 'required|int',
            'city2' => 'required|int|not_in:0',
            'address' => 'required|string|max:255|regex:/[ء-ي‌]+/u',
            'phone_num' => 'required|string|size:11',
            'phone_numbers' => 'array',
            'phone_numbers.*' => 'size:11',
            'marriage' => 'required|in:single,married',
            'birth_date' => 'required|string|max:255',
            'telephone' => 'required|string|size:11',

        ], [
            "profile_image.mimes" => "jpeg,png,jpg,gif",
            "name.regex" => "مقدار فیلد را فارسی وارد نمایید",
            "family_name.regex" => "مقدار فیلد را فارسی وارد نمایید",
            "father_name.regex" => "مقدار فیلد را فارسی وارد نمایید",
            "nat_id.size" => "مقدار کد ملی 10 کاراکتر است",
            "phone_num.size" => "مقدار شماره همراه 11 کاراکتر است",
            "telephone.size" => "مقدار شماره تلفن 11 کاراکتر است",
            "address.regex" => "مقدار فیلد را فارسی وارد نمایید",

            "name.required" => "فیلد اجباری است.",
            "family_name.required" => "فیلد اجباری است.",
            "father_name.required" => "فیلد اجباری است.",
            "nat_id.required" => "فیلد اجباری است.",
            "address.required" => "فیلد اجباری است.",
            "birth_date.required" => "فیلد اجباری است.",
            "phone_num.required" => "فیلد اجباری است.",
            "telephone.required" => "فیلد اجباری است.",

            "profile_image.max" => "حجم عکس نباید بیشتر از 50 مگابایت باشد.",

            "city1.not_in" => "لطفا یک شهر را انتخاب کنید.",
            "city2.not_in" => "لطفا یک شهر را انتخاب کنید."

        ]);
//        dd($request->all());


        $user = new User();
        $user->image_path = $request->hasFile('profile_image') ? $request->file('profile_image')->store('public/user_images') : 'default-image.png';
        $user->name = $validatedData['name'];
        $user->family_name = $validatedData['family_name'];
        $user->father_name = $validatedData['father_name'];
        $user->nat_id = $validatedData['nat_id'];
        $user->province1 = $validatedData['province1'];
        $user->city1 = $validatedData['city1'];
        $user->province2 = $validatedData['province2'];
        $user->city2 = $validatedData['city2'];
        $user->address = $validatedData['address'];
        $user->marriage = $validatedData['marriage'];
        $user->phone_num = $validatedData['phone_num'];
        $user->birth_date = $validatedData['birth_date'];
        $user->telephone = $validatedData['telephone'];
        $user->save();

        $phoneNumbers = $request->input('phone_numbers');
        $addresses = $request->input('addresses');

        if ($phoneNumbers) {
            foreach ($phoneNumbers as $phoneNumber) {
                $new_num = new PhoneNumber();
                $new_num->user_id = $user->id;
                $new_num->phone_number = $phoneNumber;
                $new_num->phone_type = 'mobile';
                $new_num->save();

            }
        }

        if ($addresses) {
            foreach ($addresses as $address) {
                $new_add = new Address();
                $new_add->user_id = $user->id;
                $new_add->address = $address;
                $new_add->save();

            }
        }
        return redirect('/');
    }

    public function index(Request $request)
    {
        $searchTerm = $request->input('search');
        $usersQuery = User::query();

        if ($searchTerm) {
            $usersQuery->where('phone_num', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('nat_id', 'LIKE', '%' . $searchTerm . '%')
                ->orWhereHas('phoneNumbers', function ($query) use ($searchTerm) {
                    $query->where('phone_number', 'LIKE', '%' . $searchTerm . '%');
                });
        }

        $users = $usersQuery->get();

        return view('users_list', compact('users'));
    }




    public function show($id)
    {
        $user = User::find($id);
        $phoneNumbers = $user->phoneNumbers;
        return view('user_details', compact('user'));
    }

    public function edit(User $user)
    {
        $provinces = Province::all();
        $userProvince1 = Province::find($user->province1)->name;
        $userCity1 = City::find($user->city1)->name;
        $userProvince2 = Province::find($user->province2)->name;
        $userCity2 = City::find($user->city2)->name;
        return view('edit_user', compact('provinces', 'user', 'userProvince1', 'userCity1', 'userProvince2', 'userCity2'));
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:50000',
            'name' => 'required|string|regex:/[ء-ي‌]+/u',
            'family_name' => 'required|string|regex:/[ء-ي‌]+/u',
            'father_name' => 'required|string|regex:/[ء-ي‌]+/u',
            'nat_id' => 'required|string|size:10',
            'province1' => 'required|int',
            'city1' => 'required|int|not_in:0',
            'province2' => 'required|int',
            'city2' => 'required|int|not_in:0',
            'address' => 'required|string|max:255|regex:/[ء-ي‌]+/u',
            'phone_num' => 'required|string|size:11',
            'phone_numbers' => 'array',
            'phone_numbers.*' => 'size:11',
            'marriage' => 'required|in:single,married',
            'birth_date' => 'required|string|max:255',
            'telephone' => 'required|string|size:11',
        ]);

        $previousImagePath = $user->image_path;

        if ($request->hasFile('profile_image')) {

            $imagePath = $request->file('profile_image')->store('public/user_images');
            $user->image_path = $imagePath;
            $user->save();

        } else {

            $user->image_path = $previousImagePath;
            $user->save();
        }

        $user->name = $validatedData['name'];
        $user->family_name = $validatedData['family_name'];
        $user->father_name = $validatedData['father_name'];
        $user->nat_id = $validatedData['nat_id'];
        $user->province1 = $validatedData['province1'];
        $user->city1 = $validatedData['city1'];
        $user->province2 = $validatedData['province2'];
        $user->city2 = $validatedData['city2'];
        $user->address = $validatedData['address'];
        $user->marriage = $validatedData['marriage'];
        $user->birth_date = $validatedData['birth_date'];
        $user->phone_num = $validatedData['phone_num'];
        $user->telephone = $validatedData['telephone'];
        $user->save();


        if ($request->has('delete_address')) {
            $addressToDelete = $request->input('delete_address');
            Address::where('address', $addressToDelete)->delete();
        }

        $user->phoneNumbers()->delete();
        $user->Addresses()->delete();

        $addresses = $request->input('addresses');
        $phoneNumbers = $request->input('phone_numbers');

        if ($phoneNumbers) {
            foreach ($phoneNumbers as $phoneNumber) {
                $new_num = new PhoneNumber();
                $new_num->user_id = $user->id;
                $new_num->phone_number = $phoneNumber;
                $new_num->phone_type = 'mobile';
                $new_num->save();
            }
        }

        if ($addresses) {
            foreach ($addresses as $address) {
                $new_add = new Address();
                $new_add->user_id = $user->id;
                $new_add->address = $address;
                $new_add->save();

            }
        }

        return redirect()->route('users.index');
    }
    public function deleteAddress(Request $request, User $user, Address $address)
    {

        DB::table('addresses')->where('address', $address)->delete();


        return redirect()->back()->with('success', 'آدرس با موفقیت حذف شد.');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

}
