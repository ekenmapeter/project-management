<?php

namespace App\Http\Controllers;
use Redirect;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Session;

class AdduserController extends Controller
{
    


    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storenewuser(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'division' => ['required', 'string', 'max:255'],
            'statelocated' => ['required', 'string', 'max:255'],
            'phonenumber' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'division' => $request->division,
            'statelocated' =>$request->statelocated ,
            'phonenumber' =>$request->phonenumber ,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        //Auth::login($user);
        Session::flash('message', 'New User <span class="badge text-bg-primary">'.$request->name.'</span> with <span class="badge text-bg-primary">'.$request->role.'</span> Role has being created'); 
        Session::flash('alert-class', 'alert-success');
        return Redirect::back();
        
    }
}
