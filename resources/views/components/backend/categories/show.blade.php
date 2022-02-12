@extends('components.backend.layouts.master')
@section('content')
<section id="create__form">
    <div class="container">
        <div class="row col-md-10">
            <h1 class="text-center mb-4 mt-2">Category Details</h1>
            <dl class="row">


                <dt class="col-sm-4">Name</dt>
                <dd class="col-sm-5">{{$category->name}}</dd>
            </dl>
            <dl class="row">


                <dt class="col-sm-4">Link</dt>
                <dd class="col-sm-5">{{$category->link}}</dd>
            </dl>

            <dl class="row">


                <dt class="col-sm-4">Draft</dt>
                <dd class="col-sm-5">{{$category->is_draft}}</dd>
            </dl>

            <dl class="row">


                <dt class="col-sm-4">Created</dt>
                <dd class="col-sm-5">{{$category->created_at}}</dd>
            </dl>
            <dl class="row">


                <dt class="col-sm-4">Updated</dt>
                <dd class="col-sm-5">{{$category->updated_at}}</dd>
            </dl>
            <dl class="row">


                <dt class="col-sm-4">Products:</dt>
                <dd class="col-sm-5">
                    <ul>
                        @foreach ($category->products as $products )

                        <li>{{$products->title}}</li>
                        @endforeach
                    </ul>
                </dd>
            </dl>

            <dl class="row">
                <div>
                    <a href="{{route('categories.index')}}" class="btn btn-primary">Return</a>
                </div>
</dl>





        </div>
    </div>
</section>
@endsection
