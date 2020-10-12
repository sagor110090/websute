<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\BlogCategory;
use Illuminate\Http\Request;
use Toastr;
use Helpers;

class BlogCategoryController extends Controller
{

    public function index(Request $request)
    {
        $blogcategory = BlogCategory::all();
        return view('admin.blog-category.index', compact('blogcategory'));
    }


    public function create()
    {
        return view('admin.blog-category.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
			'name' => 'required|unique:blog_categories'
        ]);

        $requestData = $request->all();
        $requestData['slug'] = str_slug($request->name);
        BlogCategory::create($requestData);
        Toastr::success('BlogCategory added!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/blog-category');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $blogcategory = BlogCategory::findOrFail($id);

        return view('admin.blog-category.edit', compact('blogcategory'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'name' => 'required'
		]);
        $requestData = $request->all();

        $blogcategory = BlogCategory::findOrFail($id);
        $requestData['slug'] = str_slug($request->name);
        // dd($requestData['slug']);
        $blogcategory->update($requestData);

        Toastr::success('BlogCategory updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/blog-category');
    }


    public function destroy($id)
    {
        BlogCategory::destroy($id);
        Toastr::success('BlogCategory deleted!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/blog-category');
    }
}
