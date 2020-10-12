<?php

namespace App\Http\Controllers;
use Toastr;
use Helpers;
use App\Blog;
use App\Message;
use App\Project;
use App\Service;
use App\Category;
use App\Solution;
use App\Newsletter;
use App\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FrontEndController extends Controller
{

    public function home()
    {
        return view('frontEnd.home');
    }
    public function serviceDetails($slug)
    {
        $services = Service::where('slug',$slug)->first();
        return view('frontEnd.serviceDetails',compact('services'));
    }
    public function solutionDetails($slug)
    {
        $solutions = Solution::where('slug',$slug)->first();
        return view('frontEnd.solutionDetails',compact('solutions'));
    }
    public function projectDetails($slug)
    {
        $projects = Project::where('slug',$slug)->first();
        return view('frontEnd.projectDetails',compact('projects'));
    }
    public function projects()
    {
        return view('frontEnd.projects');
    }
    public function services()
    {
        return view('frontEnd.services');
    }
    public function solutions()
    {
        return view('frontEnd.solution');
    }
    public function team()
    {
        return view('frontEnd.team');
    }
    public function clients()
    {
        return view('frontEnd.clients');
    }
    public function about()
    {
        return view('frontEnd.about');
    }
    public function blog()
    {
        $blogs = Blog::all()->sortByDesc("id");
        return view('frontEnd.blog',compact('blogs'));
    }
    public function slugBlog($slug)
    {
        $blog = BlogCategory::where('slug',$slug)->first();
        $blogs = $blog->blog;
        return view('frontEnd.blog',compact('blogs'));
    }
    public function blog_single($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        return view('frontEnd.blog_single',compact('blog'));
    }

    public function contacts()
    {
        return view('frontEnd.contacts');
    }
    public function addMessage(Request $request)
    {
        $this->validate($request, [
			'name' => 'required',
            'subject' => 'required',
            'mail' => 'required',
            'phone' => 'required',
            'message' => 'required',
		]);
        $requestData = $request->all();
        Message::create($requestData);
        Toastr::success('Class updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return back();
    }
    public function addEmail(Request $request)
    {
        $dataValidated = $this->validate($request, [
			'email' => 'required|email|unique:newsletter',
		]);
        $requestData = $request->all();
        Newsletter::create($requestData);
        Toastr::success('Class updated!', 'Done', ["positionClass" => "toast-top-right"]);

        return back()
            ->with('success', 'You have successfully submit.');
            // ->withErrors($dataValidated);
            // ->withInput();

    }

    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
		]);
        $requestData = $request->all();

        Category::create($requestData);
        Toastr::success('Class added!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/category/create');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'name' => 'required',
		]);
        $requestData = $request->all();
        $category = Category::findOrFail($id);
        if (!$request->old_image='') {
            Storage::delete('public/' . $category->image);
        }
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
        }
        $category->update($requestData);

        Toastr::success('Class updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/category');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        Toastr::success('Category deleted!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/category');
    }
}