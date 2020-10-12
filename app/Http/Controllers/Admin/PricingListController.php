<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PricingList;
use Illuminate\Http\Request;
use Toastr;
use Helpers;

class PricingListController extends Controller
{

    public function index(Request $request)
    {
        $pricinglist = PricingList::all();
        return view('admin.pricing-list.index', compact('pricinglist'));
    }


    public function create()
    {
        return view('admin.pricing-list.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
			'pricing_name' => 'required',
			'short_description' => 'required',
			'price' => 'required'
		]);
        $requestData = $request->all();
        
        PricingList::create($requestData);
        Toastr::success('PricingList added!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/pricing-list');
    }


    public function show($id)
    {
        $pricinglist = PricingList::findOrFail($id);

        return view('admin.pricing-list.show', compact('pricinglist'));
    }

    public function edit($id)
    {
        $pricinglist = PricingList::findOrFail($id);

        return view('admin.pricing-list.edit', compact('pricinglist'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'pricing _name' => 'required',
			'short_description' => 'required',
			'price' => 'required'
		]);
        $requestData = $request->all();
        
        $pricinglist = PricingList::findOrFail($id);
        $pricinglist->update($requestData);

        Toastr::success('PricingList updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/pricing-list');
    }


    public function destroy($id)
    {
        PricingList::destroy($id);
        Toastr::success('PricingList deleted!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/pricing-list');
    }
}
