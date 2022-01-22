@extends('components.master')
@section('content')

    @include('elements.breadcrumb',['title'=>'Sign In'])

    {{--signin form begin--}}
    <section id="signup__form">
        <div class="container mt-2 mb-4 ">
            <div class="row">
                <div class="col-md-8 offset-2 mb-4 ">

                    {!! Form::open(['url' => '/signup','method'=>'post','class'=>'form border p-3','name'=>'reg-form']) !!}

                    {!!  Form::label('frm-reg-name', 'Username',['class'=>'form-label']);!!}
                    {!! Form::text('username','',['id'=>'frm-reg-name','placeholder'=>'john123','class'=>'form-control']); !!}
                    {!!  Form::label('frm-reg-password', 'Password',['class'=>'form-label']);!!}
                    {!! Form::password('password',['class'=>'form-control']); !!}

                    {!! Form::submit('Log In',['class'=>'btn btn-outline-dark']); !!}


                    {!! Form::close() !!}
                    <div class="col-12 mt-2">
                    <p>Not Registered? <a class="nav-link" href="/signup">Sign up</a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{--signin form end--}}






    {{--<!-- login form begin  -->--}}
    {{--<section id="login__form">--}}
        {{--<div class="container d-flex justify-content-center">--}}

            {{--<form class="col-md-6 mt-2" >--}}
                {{--<input type="hidden" name="id" value="">--}}
                {{--<div class="col-md-6">--}}
                    {{--<label  class="form-label">Username</label>--}}
                    {{--<input type="text" class="form-control" name="username">--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<label for="inputPassword4" class="form-label">Password</label>--}}
                    {{--<input type="password" class="form-control" id="inputPassword4" name="password">--}}
                {{--</div>--}}

                {{--<div class="col-12 mt-2">--}}
                    {{--<button type="submit" class="btn btn-dark" >Sign In</button>--}}
                {{--</div>--}}
                {{--<div class="col-12 mt-2">--}}
                    {{--<p>Not Registered? <a class="nav-link" href="/signup">Sign up</a></p>--}}
                {{--</div>--}}

            {{--</form>--}}
        {{--</div>--}}

    {{--</section>--}}
    {{--<!-- login form end  -->--}}

@endsection
