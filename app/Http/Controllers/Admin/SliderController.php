<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Toastr;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'slider_large_title' => 'required',
            'slider_small_title' => 'required',
		]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
        }
        Slider::create($requestData);
        $setImage = 'storage/'.$requestData['image'];
        $img = Image::make($setImage)->resize(1920, 1000)->save($setImage);
        // $img = Image::make($setImage)->resize(200, 150, function($constraint) {
        //     $constraint->aspectRatio();
        // });
        // $img->save($setImage);


        Toastr::success('Class added!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/slider/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::findOrFail($id);

        return view('admin.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);

        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'slider_large_title' => 'required',
            'slider_small_title' => 'required',
		]);
        $requestData = $request->all();
        $slider = Slider::findOrFail($id);

        if ($request->hasFile('image')) {
            if (!$request->old_image='') {
                Storage::delete('public/' . $slider->image);
            }
        }
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
            $setImage = 'storage/'.$requestData['image'];
            $img = Image::make($setImage)->resize(1920, 1000)->save($setImage);
        }else{
            $requestData['image'] = $request->old_image;
        }
        $slider->update($requestData);

        Toastr::success('Class updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $slider = Slider::findOrFail($id);
        Storage::delete('public/' . $slider->image);
        Slider::destroy($id);
        Toastr::success('Slider deleted!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/slider');
    }
}
