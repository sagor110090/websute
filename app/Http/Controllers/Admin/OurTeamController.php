<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\OurTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Toastr;
use Image;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $our_team = OurTeam::all();
        return view('admin.our_team.index', compact('our_team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.our_team.create');
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
            'name' => 'required',
            'designation' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'google_plus' => 'required',
            'linkedin' => 'required',
		]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
            $setImage = 'storage/'.$requestData['image'];
            $img = Image::make($setImage)->resize(270, 470)->save($setImage);
        }
        OurTeam::create($requestData);
        Toastr::success('Class added!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/our_team/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $our_team = ourTeam::findOrFail($id);

        return view('admin.our_team.show', compact('our_team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $our_team = OurTeam::findOrFail($id);

        return view('admin.our_team.edit', compact('our_team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'name' => 'required',
            'designation' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'google_plus' => 'required',
            'linkedin' => 'required',
		]);
        $requestData = $request->all();
        $our_team = OurTeam::findOrFail($id);
        if ($request->hasFile('image')) {
            if (!$request->old_image='') {
                Storage::delete('public/' . $our_team->image);
            }
        }

        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
            $setImage = 'storage/'.$requestData['image'];
            $img = Image::make($setImage)->resize(270, 470)->save($setImage);
        }else{
            $requestData['image'] = $request->old_image;
        }
        $our_team->update($requestData);

        Toastr::success('Class updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/our_team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $our_team = OurTeam::findOrFail($id);
        Storage::delete('public/' . $our_team->image);
        OurTeam::destroy($id);
        Toastr::success('Our Team deleted!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/our_team');
    }
}
