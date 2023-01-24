<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $settings=Setting::first();
        $services=Service::limit(6)->get();
        $blogs=Blog::limit(3)->get();
        return view('home',compact('settings','services','blogs'));
    }
    public function contact_us(Request $request)
    {
        $rules = [
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'subject'=> 'required',
            'body'=> 'required',


        ];

        $this->validate($request, $rules);


        $blog = ContactUs::create([

            'name'=> $request->get('name'),
            'email'=> $request->get('email'),
            'phone'=> $request->get('phone'),
            'subject'=> $request->get('subject'),
            'body'=> $request->get('body'),

        ]);



        return redirect()->route('home');
    }
}
