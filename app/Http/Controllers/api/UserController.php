<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = DB::table('users')
            ->when($request->input('name'), function($query, $name){
                return $query->where('name', 'like', '%'.$name.'%');
        })
        -> select('id', 'name', 'username', 'email', 'avatar', 'role', DB::raw('DATE_FORMAT(created_at, "%d %M %Y") as created_at'))
        -> paginate(10);
        //
        return view('pages.users.index', compact('users'));
    }

    public function create()
    {
        // return view('pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'avatar' => $request['avatar'],
            'role' => $request['role'],
        ]);

        return redirect(route('user.index'))->with('success', 'New User Successfully');

    }

    public function edit(User $user)
    {
        return view('pages.users.edit', compact('user', $user));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $validate = $request->validated();
        $user->update($validate);
        return redirect()->route('user.index')->with('success', 'Edit User Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Delete User Successfully');
    }
}
