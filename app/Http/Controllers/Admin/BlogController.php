<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::get();

        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'blog_title'=> 'required',
            'blog_description'=> 'required',
            'blog_image'=> 'required',
            'blog_create_by'=> 'required',


        ];

        $this->validate($request, $rules);


        $blog = Blog::create([
            'blog_title' => $request->get('blog_title'),
            'blog_description' => $request->get('blog_description'),
            'blog_create_by' => $request->get('blog_create_by'),

        ]);

        if (($request->hasFile('blog_image'))) {
//////


            $xy = $request->file('blog_image');

            //return $xy;


            $extension = strtolower($xy->getClientOriginalExtension());
            //return $extension;
            if (in_array($extension, $this->image_extensions())) {

                $path = $request->file('blog_image')->store('public/blogs');
                $path = str_replace('public', 'storage', $path);

                $blog->blog_image = $path;
                $blog->save();


            }


        }
        \Session::flash('success', trans('تم ارسال بيانات الدفع بنجاح'));

        return redirect()->route('admin.blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::findOrFail($id);
        return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog=Blog::findOrFail($id);
        $rules = [
            'blog_title'=> 'sometimes|required',
            'blog_description'=> 'sometimes|required',
            'blog_image'=> 'sometimes|required',
            'blog_create_by'=> 'sometimes|required',


        ];

        $this->validate($request, $rules);


        $blog = $blog->update([
            'blog_title' => $request->get('blog_title'),
            'blog_description' => $request->get('blog_description'),
            'blog_create_by' => $request->get('blog_create_by'),

        ]);
        $blog=Blog::findOrFail($id);
        if (($request->hasFile('blog_image'))) {
//////


            $xy = $request->file('blog_image');

            //return $xy;


            $extension = strtolower($xy->getClientOriginalExtension());
            //return $extension;
            if (in_array($extension, $this->image_extensions())) {

                $path = $request->file('blog_image')->store('public/blogs');
                $path = str_replace('public', 'storage', $path);

                $blog->blog_image = $path;
                $blog->save();


            }


        }
        \Session::flash('success', trans('تم ارسال بيانات الدفع بنجاح'));

        return redirect()->route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('admin.blogs.index');
    }
}
