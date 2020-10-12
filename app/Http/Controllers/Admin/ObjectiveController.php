<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Objective;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Toastr;
use Image;

class ObjectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objective = Objective::all();
        return view('admin.objective.index', compact('objective'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Objective  $Objective
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objective = Objective::findOrFail($id);

        return view('admin.objective.show', compact('objective'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objective = Objective::findOrFail($id);

        return view('admin.Objective.edit', compact('objective'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'header' => 'required',
            'description' => 'required',
		]);
        $requestData = $request->all();
        $objective = Objective::findOrFail($id);
        if ($request->hasFile('image')) {
            if (!$request->old_image='') {
                Storage::delete('public/' . $objective->image);
            }
        }

        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
            $setImage = 'storage/'.$requestData['image'];
            $img = Image::make($setImage)->resize(470, 570)->save($setImage);
        }else{
            $requestData['image'] = $request->old_image;
        }
        $objective->update($requestData);

        Toastr::success('Class updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/objective');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objective $objective)
    {
        //
    }
}
