<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Toastr;
use Image;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        return view('admin.client.index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
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
            'client_name' => 'required',
            'address' => 'required',
            'service' => 'required',
            'link' => 'required',
		]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
        }
        Client::create($requestData);
        $setImage = 'storage/'.$requestData['image'];
        $img = Image::make($setImage)->resize(250, 90, function($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($setImage);
        // $img = Image::make($setImage)->resize(100, 100)->save($setImage);

        Toastr::success('Class added!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/client/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);

        return view('admin.client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);

        return view('admin.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'client_name' => 'required',
            'address' => 'required',
            'service' => 'required',
            'link' => 'required',
		]);
        $requestData = $request->all();
        $client = Client::findOrFail($id);
        if ($request->hasFile('image')) {
            if (!$request->old_image='') {
                Storage::delete('public/' . $client->image);
            }
        }

        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
            $setImage = 'storage/'.$requestData['image'];
            $img = Image::make($setImage)->resize(250, 90, function($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($setImage);
        }else{
            $requestData['image'] = $request->old_image;
        }

        // $img = Image::make($setImage)->resize(100, 100)->save($setImage);
        $client->update($requestData);

        Toastr::success('Class updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        Storage::delete('public/' . $client->image);
        Client::destroy($id);
        Toastr::success('client deleted!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/client');
    }
}
