@extends('components.backend.layouts.master')
@section('content')
<section id="sliders__index">
    <div class="container">
        <div class="row col-md-10">
            <h1 class="text-center mb-4 mt-2"> Products </h1>
            <div class="inline-list">
                <p class="inline-list-item nav-link">
                    <a href="{{route('products.create')}}" class="btn btn-outline-dark">Create Product</a>  <a href="trashlist.php" class="btn btn-outline-dark">Trash</a></p>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">PID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Status</th>
                    <th scope="col">Price</th>
                    <th scope="col">Special Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody >
                @foreach($products as $product)
                <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->picture}}</td>
                @if($product->is_active > 0)
                <td>Active</td>
                @else
                <td>Deactivate</td>
                @endif
                <td>{{$product->mrp}}</td>
                <td>{{$product->special_price}}</td>
                {{-- @foreach ($categories as $category) --}}
                {{-- @if ($category->id == $product->category_id) --}}
                    <td>
                        {{$product->category->name}}
                    </td>
                    {{-- @endif --}}
                {{-- @endforeach --}}
                <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}}</td>
                    <td>
                        <div class="btn-group">

                            <form class="d-flex" action="{{route('products.destroy',$product->id)}}" method="post">
                                <a class="btn btn-primary" href="{{route('products.edit',$product->id)}}">
                                    Edit
                                </a>
                                <a class="btn btn-secondary" href="{{route('products.show',$product->id)}}">
                                    Show
                                </a>
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</button>

                            </form>

                        </div>
                    </td>
                </tr>
                @endforeach


                </tbody>
            </table>



        </div>
    </div>
</section>
@endsection
