<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Toastr;
use Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::all();
        return view('admin.project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'header' => 'required|unique:project',
            'description' => 'required',
            // 'client_name' => 'required',
            // 'location' => 'required',
            // 'year' => 'required',
            // 'value' => 'required',
		]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
            $setImage = 'storage/'.$requestData['image'];
            $img = Image::make($setImage)->resize(970, 570)->save($setImage);
        }
        if ($request->hasFile('thumbnail')) {
            $requestData['thumbnail'] = $request->file('thumbnail')->store('uploads', 'public');
            $setImage = 'storage/'.$requestData['thumbnail'];
            $img = Image::make($setImage)->resize(370, 470)->save($setImage);
        }
        $requestData['slug'] = str_slug($request->header);
        Project::create($requestData);
        Toastr::success('Class added!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/product/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('admin.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'header' => 'required',
            'description' => 'required',
            // 'client_name' => 'required',
            // 'location' => 'required',
            // 'year' => 'required',
            // 'value' => 'required',
		]);
        $requestData = $request->all();
        $project = Project::findOrFail($id);
        // dd($request->hasFile('thumbnail'));
        if($request->hasFile('thumbnail')){
            if (!$request->old_thumbnail='') {
                Storage::delete('public/' . $project->thumbnail);
            }
        }
        if ($request->hasFile('image')) {
            if (!$request->old_image='') {
                Storage::delete('public/' . $project->image);
            }
        }


        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
             
        }else{
            $requestData['image'] = $request->old_image;
        }
        if ($request->hasFile('thumbnail')) {
            $requestData['thumbnail'] = $request->file('thumbnail')->store('uploads', 'public');
            
        }else{
            $requestData['thumbnail'] = $request->old_thumbnail;
        }
        $requestData['slug'] = str_slug($request->header);
        $project->update($requestData);
        // dd($request->hasFile('old_image'));

        Toastr::success('Class updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        Storage::delete(['public/' . $project->thumbnail, 'public/' . $project->image]);
        Project::destroy($id);
        Toastr::success('Project deleted!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/product');
    }
}