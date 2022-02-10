@extends('components.backend.layouts.master')
@section('content')
<section id="create__form">
    <div class="container">
        <div class="row col-md-8">
            <h1 class="text-center mb-4 mt-2">Update Slider</h1>

            <form method="post" action="{{route('sliders.update',$slider->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 row" >
                    <!--                        <label for="inputId" class="col-sm-2 col-form-label">Id</label>-->
                    <div class="col-sm-10">
                        {{--<input type="hidden" class="form-control" id="inputId" name="id" value="{{$slider->id}}">--}}
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" name="title" value="{{$slider->title}}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" name="description" value="{{$slider->description}}">
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" name="link" value="{{$slider->link}}">
                    </div>
                </div>



                <div class="mb-3 row">
                    <label for="inputPicture" class="col-sm-2 col-form-label">Picture</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputPicture" name="picture" value="">
                        <img src="{{asset('storage/uploads/'.$slider->picture)}}" alt="{{$slider->picture}}" class="img-fluid" >
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="inputActive" name="is_active" @if($slider->is_active > 0)checked @else "" @endif >
                    <label class="form-check-label" for="inputActive">
                        Active
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="inputActive" name="is_draft" @if($slider->is_draft > 0)checked @else "" @endif >
                    <label class="form-check-label" for="inputActive">
                        Draft
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="inputActive" name="soft_delete" @if($slider->soft_delete > 0)checked @else "" @endif >
                    <label class="form-check-label" for="inputActive">
                        Soft Delete
                    </label>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3" >Update</button>
                    <a href="{{route('sliders.index')}}" class="btn btn-secondary mb-3" >Cancel</a>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection