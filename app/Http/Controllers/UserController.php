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

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'family_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'nat_id' => 'required|string|max:255',
            'birth_place' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'month' => 'required|string|max:255',
            'year' => 'required|string|max:255',
        ]);


        $user = new User();
        $user->name = $validatedData['name'];
        $user->family_name = $validatedData['family_name'];
        $user->father_name = $validatedData['father_name'];
        $user->nat_id = $validatedData['nat_id'];
        $user->birth_place = $validatedData['birth_place'];
        $user->day = $validatedData['day'];
        $user->month = $validatedData['month'];
        $user->year = $validatedData['year'];
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
        return view('edit_user', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'family_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'nat_id' => 'required|string|max:255',
            'birth_place' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'month' => 'required|string|max:255',
            'year' => 'required|string|max:255',
        ]);

        $user->name = $validatedData['name'];
        $user->family_name = $validatedData['family_name'];
        $user->father_name = $validatedData['father_name'];
        $user->nat_id = $validatedData['nat_id'];
        $user->birth_place = $validatedData['birth_place'];
        $user->day = $validatedData['day'];
        $user->month = $validatedData['month'];
        $user->year = $validatedData['year'];
        $user->save();

        return redirect()->route('users.show', ['user' => $user->id]);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }


}
