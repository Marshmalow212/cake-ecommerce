@extends('components.backend.layouts.master')
@section('content')
<section id="create__form">
    <div class="container">
        <div class="row col-md">
            <h1 class="text-center mb-4 mt-2">Add New</h1>

            <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3 row" >
                    <!--                        <label for="inputId" class="col-sm-2 col-form-label">Id</label>-->
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="inputId" name="id" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" name="title" value="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" name="description" value="">
                    </div>
                </div>

                
                
                
                <div class="mb-3 row">
                    <label for="inputPicture" class="col-sm-2 col-form-label">Picture</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputPicture" name="picture" value="">
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="inputActive" name="is_active">
                    <label class="form-check-label" for="inputActive">
                        Active
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="inputActive" name="is_draft">
                    <label class="form-check-label" for="inputActive">
                        Draft
                    </label>
                </div>
          
                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">MRP</label>
                    <div class="col-sm-10">
                        <input type="numeric" class="form-control" id="inputTitle" name="mrp" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Special Price</label>
                    <div class="col-sm-10">
                        <input type="numeric" class="form-control" id="inputTitle" name="special_price" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <!-- <label for="inputTitle" class="col-sm-2 col-form-label"></label> -->
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" placeholder="Category" name="category_id">

                            <option selected>Category</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>                                
                            @endforeach
                        </select>
                        
                    </div>
                </div>
            
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3" >Add</button>
                    <a href="{{route('products.index')}}" class="btn btn-secondary mb-3">Cancel</a>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection