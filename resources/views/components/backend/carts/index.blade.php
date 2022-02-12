@extends('components.backend.layouts.master')
@section('content')
<section id="sliders__index">
    <div class="container">
        <div class="row col-md-10">
            <h1 class="text-center mb-4 mt-2"> Carts </h1>
            <div class="inline-list">
                    <p class="inline-list-item nav-link">        <a href="{{route('carts.create')}}" class="btn btn-outline-dark">Create Cart</a>  <a href="trashlist.php" class="btn btn-outline-dark">Trash</a></p>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Picture</th>
                    <th scope="col">Title</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">PID</th>
                    <th scope="col">UID</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody >
                @foreach($carts as $item)
                <tr>
                <td> <img src="{{asset('storage/uploads/'.$item->product->picture)}}" alt="{{$item->product->picture}}" class="img-fluid"> </td>
                <td>{{$item->product->title}}</td>
                <td>{{$item->unit_price}}</td>
                <td>{{$item->qty}}</td>
                <td>{{$item->total_price}}</td>
                <td>{{$item->product_id}}</td>
                <td>{{$item->user_id}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                    <td>
                        <div class="btn-group">

                            <form class="d-flex" action="{{route('carts.destroy',$item->id)}}" method="post">
                                <a class="btn btn-primary" href="{{route('carts.edit',$item->id)}}">
                                    Edit
                                </a>
                                <a class="btn btn-secondary" href="{{route('carts.show',$item->id)}}">
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
