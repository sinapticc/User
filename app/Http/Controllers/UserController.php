<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Province;
use App\Models\City;
use App\Models\PhoneNumber;


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
            'phone_numbers.*'=> 'size:11'
            ],[
            "name.regex" =>"مقدار فیلد را فارسی وارد نمایید",
            "family_name.regex" =>"مقدار فیلد را فارسی وارد نمایید",
            "father_name.regex" =>"مقدار فیلد را فارسی وارد نمایید",
            "birth_place.regex" =>"مقدار فیلد را فارسی وارد نمایید",
            "nat_id.size" =>"مقدار کد ملی 10 کاراکتر است",
            "phone_num.size" =>"مقدار شماره همراه 11 کاراکتر است",
            "telephone.size" =>"مقدار شماره تلفن 11 کاراکتر است",
            "address.regex" =>"مقدار فیلد را فارسی وارد نمایید",

            "name.required" =>"فیلد اجباری است.",
            "family_name.required" =>"فیلد اجباری است.",
            "father_name.required" =>"فیلد اجباری است.",
            "birth_place.required" =>"فیلد اجباری است.",
            "nat_id.required" =>"فیلد اجباری است.",
            "address.required" =>"فیلد اجباری است.",
            "birth_date.required" =>"فیلد اجباری است.",
            "phone_num.required" =>"فیلد اجباری است.",
            "telephone.required" =>"فیلد اجباری است.",

        ]);
       //dd($request->all());


        $user = new User();


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
        if ($phoneNumbers) {
            foreach ($phoneNumbers as $phoneNumber) {
                $new_num = new PhoneNumber();
                $new_num-> user_id = $user->id;
                $new_num-> phone_number = $phoneNumber;
                $new_num-> phone_type = 'mobile';
                $new_num->save();

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




        return redirect()->route('users.index');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }


}
