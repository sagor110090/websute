<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Toastr;
use Helpers;
use Image;

class BlogController extends Controller
{

    public function index(Request $request)
    {
        $blog = Blog::all();
        return view('admin.blog.index', compact('blog'));
    }


    public function create()
    {
        return view('admin.blog.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
			'header' => 'required',
			'shortDescription' => 'required',
			'description' => 'required',
			'tag' => 'required',
			'blog_category_id' => 'required'
		]);
        $requestData = $request->all();
        if ($request->hasFile('thumbnail')) {
            $requestData['thumbnail'] = $request->file('thumbnail')->store('uploads', 'public');
            $setImage = 'storage/'.$requestData['thumbnail'];
            $img = Image::make($setImage)->resize(370, 270)->save($setImage);

        }
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
            $setImage = 'storage/'.$requestData['image'];
            $img = Image::make($setImage)->resize(770, 450)->save($setImage);
        }
        $requestData['slug'] = str_slug($request->header);
        Blog::create($requestData);
        Toastr::success('Blog added!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/blog');
    }


    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        return view('admin.blog.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('admin.blog.edit', compact('blog'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'header' => 'required',
			'shortDescription' => 'required',
			'description' => 'required',
			'tag' => 'required',
			'blog_category_id' => 'required'
		]);
        $requestData = $request->all();
        $blog = Blog::findOrFail($id);
        if ($request->hasFile('thumbnail')) {
            if (!$request->old_thumbnail='') {
                Storage::delete('public/' . $blog->thumbnail);
            }
        }

        if ($request->hasFile('thumbnail')) {
            $requestData['thumbnail'] = $request->file('thumbnail')->store('uploads', 'public');
            $setImage = 'storage/'.$requestData['thumbnail'];
            $img = Image::make($setImage)->resize(370, 270)->save($setImage);
        }else{
            $requestData['thumbnail'] = $request->old_thumbnail;
        }
        if ($request->hasFile('image')) {
            if (!$request->old_image='') {
                Storage::delete('public/' . $blog->image);
            }
        }

        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
            $setImage = 'storage/'.$requestData['image'];
            $img = Image::make($setImage)->resize(770, 450)->save($setImage);
        }else{
            $requestData['image'] = $request->old_image;
        }
        $requestData['slug'] = str_slug($request->header);
        $blog->update($requestData);

        Toastr::success('Blog updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/blog');
    }


    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        Storage::delete('public/' . $blog->thumbnail);
        Storage::delete('public/' . $blog->image);
        Blog::destroy($id);
        Toastr::success('Blog deleted!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/blog');
    }
}
