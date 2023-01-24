<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{


    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('admin.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);
        $rules = [

            'site_name' => 'sometimes|required',
            'site_logo' => 'sometimes|required',
            'slider_title' => 'sometimes|required',
            'about_us_title' => 'sometimes|required',
            'about_us_description' => 'sometimes|required',
            'about_us_image' => 'sometimes|required',
            'service_title' => 'sometimes|required',
            'service_description' => 'sometimes|required',
            'slider_description' => 'sometimes|required',
            'blog_title' => 'sometimes|required',
            'blog_description' => 'sometimes|required',
            'slider_image' => 'sometimes|required',
            'slider_video_link' => 'sometimes|required',
            'site_mobile' => 'sometimes|required',
            'site_email' => 'sometimes|required',
            'site_address' => 'sometimes|required',
            'site_schedule' => 'sometimes|required',
            'footer_logo' => 'sometimes|required',
            'footer_description' => 'sometimes|required',
            'who_are_you' => 'sometimes|required',
            'our_vision' => 'sometimes|required',
            'our_history' => 'sometimes|required',

        ];

        $this->validate($request, $rules);


        $setting = $setting->update([

            'site_name' => $request->get('site_name'),
            'slider_title' => $request->get('slider_title'),
            'about_us_title' => $request->get('about_us_title'),
            'about_us_description' => $request->get('about_us_description'),
            'service_title' => $request->get('service_title'),
            'service_description' => $request->get('service_description'),
            'slider_description' => $request->get('slider_description'),
            'blog_title' => $request->get('blog_title'),
            'blog_description' => $request->get('blog_description'),
            'slider_video_link' => $request->get('slider_video_link'),
            'site_mobile' => $request->get('site_mobile'),
            'site_email' => $request->get('site_email'),
            'site_address' => $request->get('site_address'),
            'site_schedule' => $request->get('site_schedule'),
            'footer_description' => $request->get('footer_description'),
            'who_are_you' => $request->get('who_are_you'),
            'our_vision' => $request->get('our_vision'),
            'our_history' => $request->get('our_history'),

        ]);
        $setting = Setting::findOrFail($id);
        if (($request->hasFile('slider_image'))) {
//////


            $xy = $request->file('slider_image');

            //return $xy;


            $extension = strtolower($xy->getClientOriginalExtension());
            //return $extension;
            if (in_array($extension, $this->image_extensions())) {

                $path = $request->file('slider_image')->store('public/blogs');
                $path = str_replace('public', 'storage', $path);

                $setting->slider_image = $path;
                $setting->save();


            }


        }
        if (($request->hasFile('footer_logo'))) {
//////


            $xy = $request->file('footer_logo');

            //return $xy;


            $extension = strtolower($xy->getClientOriginalExtension());
            //return $extension;
            if (in_array($extension, $this->image_extensions())) {

                $path = $request->file('footer_logo')->store('public/settings');
                $path = str_replace('public', 'storage', $path);

                $setting->setting = $path;
                $setting->save();


            }


        }
        if (($request->hasFile('about_us_image'))) {
//////


            $xy = $request->file('about_us_image');

            //return $xy;


            $extension = strtolower($xy->getClientOriginalExtension());
            //return $extension;
            if (in_array($extension, $this->image_extensions())) {

                $path = $request->file('about_us_image')->store('public/settings');
                $path = str_replace('public', 'storage', $path);

                $setting->about_us_image = $path;
                $setting->save();


            }


        }
        if (($request->hasFile('site_logo'))) {
//////


            $xy = $request->file('site_logo');

            //return $xy;


            $extension = strtolower($xy->getClientOriginalExtension());
            //return $extension;
            if (in_array($extension, $this->image_extensions())) {

                $path = $request->file('site_logo')->store('public/settings');
                $path = str_replace('public', 'storage', $path);

                $setting->site_logo = $path;
                $setting->save();


            }


        }


        return redirect()->route('admin.settings.edit', 1);
    }
}
