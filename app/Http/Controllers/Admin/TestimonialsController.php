<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Testimonial;
use Illuminate\Http\Request;
use Toastr;
use Helpers;

class TestimonialsController extends Controller
{

    public function index(Request $request)
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }


    public function create()
    {
        return view('admin.testimonials.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
			'text' => 'required'
		]);
        $requestData = $request->all();
        
        Testimonial::create($requestData);
        Toastr::success('Testimonial added!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/testimonials');
    }


    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonials.show', compact('testimonial'));
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonials.edit', compact('testimonial'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'text' => 'required'
		]);
        $requestData = $request->all();
        
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update($requestData);

        Toastr::success('Testimonial updated!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/testimonials');
    }


    public function destroy($id)
    {
        Testimonial::destroy($id);
        Toastr::success('Testimonial deleted!', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect('admin/testimonials');
    }
}
