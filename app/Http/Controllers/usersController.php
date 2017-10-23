<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index(){
        return view('users.index')
            ->with('users', User::all());
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'type' => 'required'
        ]);

        User::create([
            'name'      => $request['name'],
            'email'     => $request['email'],
            'password'  => bcrypt($request['password']),
            'type'      => $request['type'],
        ]);

        return redirect(action('UsersController@index'));
    }

    public function destroy($id)
    {
        User::destroy($id);
        return back();
    }

    public function edit(User $user)
    {
        return view('users.edit')
            ->with('user', $user);
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:6|confirmed',
            'type' => 'required'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        if ($request->password != NULL)
        {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect(action('UsersController@index'));
    }
}
