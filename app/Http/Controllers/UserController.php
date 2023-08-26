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
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:512',
            'name' => 'required|string|regex:/[ء-ي‌]+/u',
            'family_name' => 'required|string|regex:/[ء-ي‌]+/u',
            'father_name' => 'required|string|regex:/[ء-ي‌]+/u',
            'nat_id' => 'required|string|size:10',
            'birth_place' => 'required|string|max:255|regex:/[ء-ي‌]+/u',
            'province' => 'required|int',
            'city' => 'required|int',
            'address' => 'required|string|max:255|regex:/[ء-ي‌]+/u',
            'marriage' => 'required|in:single,married',
            'birth_date' => 'required|string|max:255',
            'phone_num' => 'required|string|size:11',
            'telephone' => 'required|string|size:11',
            'phone_numbers' => 'array',
            'phone_numbers.*' => 'size:11',
        ], [
            "profile_image.mimes" => "jpeg,png,jpg,gif",
            "name.regex" => "مقدار فیلد را فارسی وارد نمایید",
            "family_name.regex" => "مقدار فیلد را فارسی وارد نمایید",
            "father_name.regex" => "مقدار فیلد را فارسی وارد نمایید",
            "birth_place.regex" => "مقدار فیلد را فارسی وارد نمایید",
            "nat_id.size" => "مقدار کد ملی 10 کاراکتر است",
            "phone_num.size" => "مقدار شماره همراه 11 کاراکتر است",
            "telephone.size" => "مقدار شماره تلفن 11 کاراکتر است",
            "address.regex" => "مقدار فیلد را فارسی وارد نمایید",

            "profile_image.required" => "فیلد اجباری است.",
            "name.required" => "فیلد اجباری است.",
            "family_name.required" => "فیلد اجباری است.",
            "father_name.required" => "فیلد اجباری است.",
            "birth_place.required" => "فیلد اجباری است.",
            "nat_id.required" => "فیلد اجباری است.",
            "address.required" => "فیلد اجباری است.",
            "birth_date.required" => "فیلد اجباری است.",
            "phone_num.required" => "فیلد اجباری است.",
            "telephone.required" => "فیلد اجباری است.",

            "profile_image.max" => "حجم عکس نباید بیشتر از 512 کیلوبایت باشد.",

        ]);
        //dd($request->all());

        $imagePath = $request->file('profile_image')->store('public/user_images');

        $user = new User();

        $user->image_path = $imagePath;
        $user->name = $validatedData['name'];
        $user->family_name = $validatedData['family_name'];
        $user->father_name = $validatedData['father_name'];
        $user->nat_id = $validatedData['nat_id'];
        $user->birth_place = $validatedData['birth_place'];
        $user->province = $validatedData['province'];
        $user->city = $validatedData['city'];
        $user->address = $validatedData['address'];
        $user->marriage = $validatedData['marriage'];
        $user->birth_date = $validatedData['birth_date'];
        $user->phone_num = $validatedData['phone_num'];
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

    public function index()
    {

        $users = User::all();
        return view('users_list', ['users' => $users]);
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
        $userProvince = Province::find($user->province)->name;
        $userCity = City::find($user->city)->name;
        return view('edit_user', compact('provinces', 'user', 'userProvince', 'userCity'));
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:512',
            'name' => 'required|string|max:255',
            'family_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'nat_id' => 'required|string|size:10',
            'birth_place' => 'required|string|max:255',
            'province' => 'required|int',
            'city' => 'required|int',
            'address' => 'required|string|max:255',
            'marriage' => 'required|in:single,married',
            'birth_date' => 'required|string|max:255',
            'phone_num' => 'required|string|size:11',
            'telephone' => 'required|string|size:11',
            'phone_numbers' => 'array',
            'phone_numbers.*' => 'string|size:11',
        ]);


        $previousImagePath = $user->image_path;

        if ($request->hasFile('profile_image')) {

            $imagePath = $request->file('profile_image')->store('public/user_images');
            $user->image_path = $imagePath;
            $user->save();

        } else {
            // استفاده از تصویر قبلی
            $user->image_path = $previousImagePath;
            $user->save();
        }

        $user->name = $validatedData['name'];
        $user->family_name = $validatedData['family_name'];
        $user->father_name = $validatedData['father_name'];
        $user->nat_id = $validatedData['nat_id'];
        $user->birth_place = $validatedData['birth_place'];
        $user->province = $validatedData['province'];
        $user->city = $validatedData['city'];
        $user->address = $validatedData['address'];
        $user->marriage = $validatedData['marriage'];
        $user->birth_date = $validatedData['birth_date'];
        $user->phone_num = $validatedData['phone_num'];
        $user->telephone = $validatedData['telephone'];
        $user->save();

        $user->phoneNumbers()->delete();
        $user->Addresses()->delete();

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

        return redirect()->route('users.index');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

}
