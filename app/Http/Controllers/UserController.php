<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('create_user_form');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->family_name = $request->input('family_name');
        $user->father_name = $request->input('father_name');
        $user->nat_id = $request->input('nat_id');
        $user->birth_place = $request->input('birth_place');
        $user->day = $request->input('day');
        $user->month = $request->input('month');
        $user->year = $request->input('year');
        $user->save();

        return redirect('/');
    }

    public function index()
    {
        $users = User::all();
        return view('users_list', ['users' => $users]);
    }
}
