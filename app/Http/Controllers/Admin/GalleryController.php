<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Gallery;
use Illuminate\Http\Request;
use Toastr;
use Helpers;

class GalleryController extends Controller
{

    public function index(Request $request)
    {
        $gallery = Gallery::all();
        return view('admin.gallery.index', compact('gallery'));
    }


    public function create()
    {
        return view('admin.gallery.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
			'image' => 'required'
		]);
        $requestData = $request->all();
                if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
            if($request->oldimage){
                Storage::delete($request->oldimage);
            }
        }

        Gallery::create($requestData);
        Toastr::success('Gallery added!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/gallery');
    }


    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);

        return view('admin.gallery.show', compact('gallery'));
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);

        return view('admin.gallery.edit', compact('gallery'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'image' => 'required'
		]);
        $requestData = $request->all();
                if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
            if($request->oldimage){
                Storage::delete($request->oldimage);
            }
        }

        $gallery = Gallery::findOrFail($id);
        $gallery->update($requestData);

        Toastr::success('Gallery updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/gallery');
    }


    public function destroy($id)
    {
        Gallery::destroy($id);
        Toastr::success('Gallery deleted!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/gallery');
    }
}
