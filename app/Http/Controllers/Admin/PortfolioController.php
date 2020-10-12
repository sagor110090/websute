<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Portfolio;
use Illuminate\Http\Request;
use Toastr;
use Helpers;

class PortfolioController extends Controller
{

    public function index(Request $request)
    {
        $portfolio = Portfolio::all();
        return view('admin.portfolio.index', compact('portfolio'));
    }


    public function create()
    {
        return view('admin.portfolio.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
			'project_name' => 'required',
			'porject_description' => 'required'
		]);
        $requestData = $request->all();
                if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
            if($request->oldimage){
                Storage::delete($request->oldimage);
            }
        }

        Portfolio::create($requestData);
        Toastr::success('Portfolio added!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/portfolio');
    }


    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        return view('admin.portfolio.show', compact('portfolio'));
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        return view('admin.portfolio.edit', compact('portfolio'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'project_name' => 'required',
			'porject_description' => 'required'
		]);
        $requestData = $request->all();
                if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
            if($request->oldimage){
                Storage::delete($request->oldimage);
            }
        }

        $portfolio = Portfolio::findOrFail($id);
        $portfolio->update($requestData);

        Toastr::success('Portfolio updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/portfolio');
    }


    public function destroy($id)
    {
        Portfolio::destroy($id);
        Toastr::success('Portfolio deleted!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/portfolio');
    }
}
