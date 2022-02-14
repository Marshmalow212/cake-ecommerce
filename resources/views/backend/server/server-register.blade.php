@extends('backend.server.master')
@section('forms')
{{-- server login form begin --}}
<header id="server-header">
    <div class="container mt-2 mb-4">
        <h1 class="display-1 text-center">Admin Registration</h1>

    </div>
</header>
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="">
                <div class="container mb-4 ">
                    <form action="{{route('admins.store')}}" method="post" class="form border p-3" id="form__container">
                        @csrf
                        @method('Post')
                        <div class=" mt-2 p-2">
                            <label class="form-label" for="Name">Name</label>
                            <input class="form-control" type="text" name="name" id="inputname" value="{{old('name')}}">
                            @error('name')
                            <span for="" role="alert" class=" alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class=" mt-2 p-2">
                            <label class="form-label" for="Email">Email</label>
                            <input class="form-control" type="email" name="email" id="inputemail" value="{{old('email')}}">
                            @error('email')
                            <span for="" role="alert" class=" alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class=" mt-2 p-2">
                            <label class="form-label" for="Name">Password</label>
                            <input class="form-control" type="password" name="password" id="inputname">
                            @error('password')
                            <span for="" role="alert" class=" alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class=" mt-2 p-2">
                            <label class="form-label" for="Name">Confirm Password</label>
                            <input class="form-control" type="password" name="confirm_password" id="inputname">
                            @error('confirm_password')
                            <span for="" role="alert" class=" alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mt-2 p-2">
                            <input class="" type="checkbox" value="1" id="inputActive" name="is_active">
                            <label class="form-check-label" for="inputActive">
                                Active
                            </label>
                        </div>
                        <div class="mt-2 p-2">
                            <input class="" type="checkbox" value="1" id="inputActive" name="is_draft">
                            <label class="form-check-label" for="inputActive">
                                Draft
                            </label>
                        </div>
                        <div class="mt-2 p-2">
                            <input class="" type="checkbox" value="1" id="inputActive" name="soft_delete">
                            <label class="form-check-label" for="inputActive">
                                Soft Delete
                            </label>
                        </div>

                        <div class="mt-2 p-2 btn-grp">
                            <button type="submit" class="btn btn-outline-primary">Register</button>
                        </div>



                    </form>
                </div>
            </div>
        </div>

    </div>


{{-- server form end --}}

@endsection
