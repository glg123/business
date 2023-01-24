<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function edit()
    {
        $admin = User::first();
        return view('admin.user.edit', compact('admin'));
    }


    public function update(Request $request)
    {

        $user = User::first();
        $rules = [

            'name' => 'sometimes|required',
            'email' => 'sometimes|required',
           // 'password' => 'sometimes|required|confirmed',
         //   'password_confirmation' => 'sometimes|required',


        ];

       $this->validate($request, $rules);



        $user = $user->update([

            'name' => $request->get('name'),
            'email' => $request->get('email'),


        ]);
        $user = User::first();
        if (($request->get('password'))) {
//////
            $user->password = app('hash')->make($request->password);
            $user->save();


        }


        return redirect()->route('admin.users.edit', 1);
    }

}
