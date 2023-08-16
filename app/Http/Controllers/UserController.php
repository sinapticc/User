<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Province;
use App\Models\City;


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
            'birth_date' => 'required|string|max:255'
            ],[
            "name.regex" =>"مقدار فیلد را فارسی وارد نمایید",
            "family_name.regex" =>"مقدار فیلد را فارسی وارد نمایید",
            "father_name.regex" =>"مقدار فیلد را فارسی وارد نمایید",
            "birth_place.regex" =>"مقدار فیلد را فارسی وارد نمایید",
            "nat_id" =>"مقدار کد ملی 10 کاراکتر است",
            "address.regex" =>"مقدار فیلد را فارسی وارد نمایید",

        ]);


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
        $user->save();

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
            'nat_id' => 'required|string|max:255',
            'birth_place' => 'required|string|max:255',
            'province' => 'required|int',
            'city' => 'required|int',
            'address' => 'required|string|max:255',
            'marriage' => 'required|in:single,married',
            'birth_date' => 'required|string|max:255',
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
        $user->save();

        return redirect()->route('users.show', ['user' => $user->id]);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }


}
