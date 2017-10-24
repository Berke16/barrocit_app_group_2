<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

/**
 * Class usersController
 * @package App\Http\Controllers
 */
class usersController extends Controller
{
    /**
     * usersController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * @return $this
     */
    public function index(){
        return view('users.index')
        ->with('users', User::all());
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'type' => 'required|min:0|max:2'
        ]);
        switch ($request->type)
        {
            case(0);
                $type = 'sales';
                break;
            case(1);
                $type = 'finance';
                break;
            case(2);
                $type = 'development';
                break;
            default;
                $type = 'sales';
        }

        User::create([
            'name'      => $request['name'],
            'email'     => $request['email'],
            'password'  => bcrypt($request['password']),
            'type'      => $type
        ]);

        return redirect(action('UsersController@index'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        User::destroy($id);
        return back();
    }

    /**
     * @param User $user
     * @return $this
     */
    public function edit(User $user)
    {
        return view('users.edit')
        ->with('user', $user);
    }

    /**
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:6|confirmed',
            'type' => 'required|min:0|max:2'
        ]);

        switch ($request->type)
        {
            case(0);
                $type = 'sales';
            break;
            case(1);
                $type = 'finance';
                break;
            case(2);
                $type = 'development';
                break;
                default;
                $type = 'sales';
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $type;
        if ($request->password != NULL)
        {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        
        return redirect(action('UsersController@index'));
    }
}
