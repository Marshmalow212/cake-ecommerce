@extends('components.backend.layouts.master')
@section('content')
<section id="create__form">
    <div class="container">
        <div class="row col-md-10">
            <h1 class="text-center mb-4 mt-2">Slider Details</h1>
            <dl class="row">

                
                <dt class="col-sm-4">Title</dt>
                <dd class="col-sm-5">{{$slider->title}}</dd>
            </dl>
            <dl class="row">

                
                <dt class="col-sm-4">Description</dt>
                <dd class="col-sm-5">{{$slider->description}}</dd>
            </dl>
            <dl class="row">

                
                <dt class="col-sm-4">Picture</dt>
                <dd class="col-sm-5">
                    <img src="{{asset('storage/uploads/'.$slider->picture)}}" alt="{{$slider->picture}}" class="img-fluid">
                </dd>
            </dl>
            <dl class="row">

                
                <dt class="col-sm-4">Active</dt>
                <dd class="col-sm-5">{{$slider->is_active}}</dd>
            </dl>
            <dl class="row">

                
                <dt class="col-sm-4">Draft</dt>
                <dd class="col-sm-5">{{$slider->is_draft}}</dd>
            </dl>
            
            <dl class="row">

                
                <dt class="col-sm-4">Created</dt>
                <dd class="col-sm-5">{{$slider->created_at}}</dd>
            </dl>
            <dl class="row">

                
                <dt class="col-sm-4">Updated</dt>
                <dd class="col-sm-5">{{$slider->updated_at}}</dd>
            </dl>

            <dl class="row">
                <div>
                    <a href="{{route('sliders.index')}}" class="btn btn-primary">Return</a>
                </div>
</dl>


            


        </div>
    </div>
</section>
@endsection