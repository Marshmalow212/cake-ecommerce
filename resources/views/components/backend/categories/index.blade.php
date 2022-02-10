@extends('components.backend.layouts.master')
@section('content')
<section id="sliders__index">
    <div class="container">
        <div class="row col-md-6">
            <h1 class="text-center mb-4 mt-2"> Categories </h1>
            <div class="inline-list">
                <p class="inline-list-item nav-link">        <a href="{{route('categories.create')}}" class="btn btn-outline-dark">Create Category</a>  <a href="trashlist.php" class="btn btn-outline-dark">Trash</a></p>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Link</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody >
                @foreach($categories as $category)
                <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->link}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
                    <td>
                        <div class="btn-group">
                            
                            <form class="d-flex" action="{{route('categories.destroy',$category->id)}}" method="post">
                                <a class="btn btn-primary" href="{{route('categories.edit',$category->id)}}">
                                    Edit
                                </a>
                                <a class="btn btn-secondary" href="{{route('categories.show',$category->id)}}">
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