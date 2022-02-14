@extends('backend.server.master')
@section('forms')
{{-- server login form begin --}}
<header id="server-header">
    <div class="container mt-2 mb-4">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Great!</strong>{{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

        @endif
        <h1 class="display-1 text-center">Server Login</h1>

    </div>
</header>

    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="">
                <div class="container mb-4 ">
                    <form action="{{route('admins.auth')}}" method="get" class="form border p-3" id="form__container">
                        @csrf

                        <div class=" mt-2 p-2">
                            <label class="form-label" for="Email">Email</label>
                            <input class="form-control" type="email" name="email" id="inputemail">
                        </div>
                        <div class=" mt-2 p-2">
                            <label class="form-label" for="Name">Password</label>
                            <input class="form-control" type="password" name="password" id="inputname">
                        </div>

                        <div class="mt-2 p-2 btn-grp">
                            <button type="submit" class="btn btn-outline-primary">Login</button>
                            <div><a class="btn btn-outline-secondary" href="{{route('admins.register')}}">Want to be a admin</a></div>
                        </div>



                    </form>
                </div>
            </div>
        </div>

    </div>


{{-- server form end --}}

@endsection
