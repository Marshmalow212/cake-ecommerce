@extends('components.backend.layouts.master')
@section('content')
<section id="create__form">
    <div class="container">
        <div class="row col-md">
            <h1 class="text-center mb-4 mt-2">Add New</h1>

            <form method="post" action="{{route('carts.store')}}" enctype="multipart/form-data">
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
                    <label for="inputPicture" class="col-sm-2 col-form-label">Picture</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputPicture" name="picture" value="">
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Unit Price</label>
                    <div class="col-sm-10">
                        <input type="numeric" class="form-control" id="inputTitle" name="unit_price" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Qty</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputTitle" name="qty" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">User ID</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputTitle" name="user_id" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Product ID</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputTitle" name="product_id" value="">
                    </div>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3" >Add</button>
                    <a href="{{route('carts.index')}}" class="btn btn-secondary mb-3">Cancel</a>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection
