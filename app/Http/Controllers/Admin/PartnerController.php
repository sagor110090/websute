<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Partner;
use Illuminate\Http\Request;
use Toastr;
use Helpers;

class PartnerController extends Controller
{

    public function index(Request $request)
    {
        $partner = Partner::all();
        return view('admin.partner.index', compact('partner'));
    }


    public function create()
    {
        return view('admin.partner.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
			'info' => 'required'
		]);
        $requestData = $request->all();
        
        Partner::create($requestData);
        Toastr::success('Partner added!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/partner');
    }


    public function show($id)
    {
        $partner = Partner::findOrFail($id);

        return view('admin.partner.show', compact('partner'));
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);

        return view('admin.partner.edit', compact('partner'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'info' => 'required'
		]);
        $requestData = $request->all();
        
        $partner = Partner::findOrFail($id);
        $partner->update($requestData);

        Toastr::success('Partner updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/partner');
    }


    public function destroy($id)
    {
        Partner::destroy($id);
        Toastr::success('Partner deleted!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/partner');
    }
}
