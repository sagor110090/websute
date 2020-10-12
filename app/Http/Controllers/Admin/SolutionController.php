<?php

namespace App\Http\Controllers\Admin;

use Toastr;
use Helpers;

use App\Solution;
use Str;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SolutionController extends Controller
{

    public function index(Request $request)
    {
        $solution = Solution::all();
        return view('admin.solution.index', compact('solution'));
    }


    public function create()
    {
        return view('admin.solution.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
			'header' => 'required',
			'shortDescription' => 'required',
			'description' => 'required'
		]);
        $requestData = $request->all();
                if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
            if($request->oldimage){
                Storage::delete($request->oldimage);
            }
        }
        $requestData['slug'] = Str::slug($request->header);
        Solution::create($requestData);
        Toastr::success('Solution added!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/solution');
    }


    public function show($id)
    {
        $solution = Solution::findOrFail($id);

        return view('admin.solution.show', compact('solution'));
    }

    public function edit($id)
    {
        $solution = Solution::findOrFail($id);

        return view('admin.solution.edit', compact('solution'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'header' => 'required',
			'shortDescription' => 'required',
			'description' => 'required'
		]);
        $requestData = $request->all();
                if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
            if($request->oldimage){
                Storage::delete($request->oldimage);
            }
        }

        $solution = Solution::findOrFail($id);
        $solution->update($requestData);

        Toastr::success('Solution updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/solution');
    }


    public function destroy($id)
    {
        Solution::destroy($id);
        Toastr::success('Solution deleted!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/solution');
    }
}