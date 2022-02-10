@extends('components.backend.layouts.master')
@section('content')
<section id="create__form">
    <div class="container">
        <div class="row col-md-8">
            <h1 class="text-center mb-4 mt-2">Update category</h1>

            <form method="post" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 row" >
                    <!--                        <label for="inputId" class="col-sm-2 col-form-label">Id</label>-->
                    <div class="col-sm-10">
                        {{--<input type="hidden" class="form-control" id="inputId" name="id" value="{{$category->id}}">--}}
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" name="name" value="{{$category->name}}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" name="link" value="{{$category->link}}">
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="inputActive" name="is_draft" @if($category->is_draft > 0)checked @else "" @endif >
                    <label class="form-check-label" for="inputActive">
                        Draft
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="inputActive" name="soft_delete" @if($category->soft_delete > 0)checked @else "" @endif >
                    <label class="form-check-label" for="inputActive">
                        Soft Delete
                    </label>
                </div>





                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3" >Update</button>
                    <a href="{{route('categories.index')}}" class="btn btn-secondary mb-3" >Cancel</a>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection