<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('components.backend.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.backend.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $picture = $this->fileUpload($request->file('picture'));
        $slider = new Slider($request->all());
        $slider->picture = $picture;
        // echo $slider.'<br>';
        $slider->save();
        return redirect()->route('sliders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('components.backend.sliders.show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('components.backend.sliders.edit',compact('slider'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $picture = $this->fileUpload($request->file('picture'));
        if(empty($picture))$picture = $slider->picture;
        $slider->fill($request->all());
        if(!isset($request->is_active))$slider->is_active=0;
        if(!isset($request->is_draft))$slider->is_draft=0;
        if(!isset($request->soft_delete))$slider->soft_delete=0;
        $slider->picture = $picture;
        $slider->save();
        // $slider = Slider::create($request->all());
        // $oldslider = Slider::where('id',$id)->first();
        // $picture = $this->fileUpload($request->file('picture')) ?? $oldslider->picture;
        // $slider->picture = $picture;
        // dd($slider);
        // dd($slider);
        // var_dump($slider);
        // $slider->where('id',$id)->save();
        // $oldslider->fill($slider);
        return redirect()->route('sliders.index');

    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('sliders.index');
    }
    
    private function fileUpload($file){
        $prefix='Slider_'.time().'_';
        $picture='';
        if(!empty($file)){
            $name='img.';
            $fileext = $file->getClientOriginalExtension();
            $picture = $prefix.$name.$fileext;
            $path = $file->storeAs('public/uploads',$picture);
            // echo $picture.'<br>';
            // echo $path.'<br>';
        }
        return $picture;
    }
}
