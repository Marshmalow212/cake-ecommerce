@extends('components.backend.layouts.master')
@section('content')
<section id="sliders__index">
    <div class="container">
        <div class="row col-md-6">
            <h1 class="text-center mb-4 mt-2"> Sliders </h1>
            <div class="inline-list">
                <p class="inline-list-item nav-link">        <a href="{{route('sliders.create')}}" class="btn btn-outline-dark">Create Slider</a>  <a href="trashlist.php" class="btn btn-outline-dark">Trash</a></p>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody >
                @foreach($sliders as $slider)
                <tr>
                <td>{{$slider->title}}</td>
                <td>{{$slider->description}}</td>
                <td>{{$slider->link}}</td>
                <td>{{$slider->picture}}</td>
                @if($slider->is_active > 0)
                <td>Active</td>
                @else
                <td>Deactivate</td>
                @endif
                <td>{{$slider->created_at}}</td>
                <td>{{$slider->updated_at}}</td>
                    <td>
                        <div class="btn-group">
                            
                            <form class="d-flex" action="{{route('sliders.destroy',$slider->id)}}" method="post">
                                <a class="btn btn-primary" href="{{route('sliders.edit',$slider->id)}}">
                                    Edit
                                </a>
                                <a class="btn btn-secondary" href="{{route('sliders.show',$slider->id)}}">
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