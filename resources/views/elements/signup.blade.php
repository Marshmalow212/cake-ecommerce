<?php
$formData=[];
?>


@extends('components.master')
@section('content')

    @include('elements.breadcrumb',['title'=>'Sign Up'])

    {{--signup form begin--}}
    <section id="signup__form">
        <div class="container ">
            <div class="row">
                <div class="col-md-8 offset-2 ">

                    {!! Form::open(['url' => '/signup','method'=>'post','class'=>'form border p-3','name'=>'reg-form']) !!}

                    {!!  Form::label('frm-reg-name', 'Username',['class'=>'form-label']);!!}
                    {!! Form::text('username','',['id'=>'frm-reg-name','placeholder'=>'john123','class'=>'form-control']); !!}
                    {!!  Form::label('frm-reg-email', 'Email',['class'=>'form-label']);!!}
                    {!! Form::text('email','',['id'=>'frm-reg-email','placeholder'=>'john@localhost.com','class'=>'form-control']); !!}
                    {!!  Form::label('frm-reg-fullname', 'Full Name',['class'=>'form-label']);!!}
                    {!! Form::text('fullname','',['id'=>'frm-reg-fullname','placeholder'=>'john doe','class'=>'form-control']); !!}
                    {!!  Form::label('frm-reg-phone', 'Phone',['class'=>'form-label']);!!}
                    {!! Form::tel('phone','',['id'=>'frm-reg-phone','placeholder'=>'012454879','class'=>'form-control']); !!}
                    {!!  Form::label('frm-reg-password', 'Password',['class'=>'form-label']);!!}
                    {!! Form::password('password',['class'=>'form-control']); !!}

                    {!! Form::submit('Sign Up',['class'=>'btn btn-outline-dark']); !!}


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </section>
{{--signup form end--}}


    {{--<!-- sign up form begin  -->--}}
    {{--<section id="sign__up">--}}
        {{--<div class="container d-flex justify-content-center">--}}
            {{--<form class="col-md-6 mt-2"  >--}}
                {{--<input type="hidden" name="id" value="">--}}
                {{--<div class="col-md-6">--}}
                    {{--<label  class="form-label">Username</label>--}}
                    {{--<input type="text" class="form-control" name="username" value="<?=array_key_exists('username',$formData)?$formData['username']:''?>">--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<label for="inputPassword4" class="form-label">Password</label>--}}
                    {{--<input type="password" class="form-control" id="inputPassword4" name="password" value="<?=array_key_exists('password',$formData)?$formData['password']:''?>">--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<label for="inputPassword4" class="form-label">Full Name</label>--}}
                    {{--<input type="text" class="form-control" id="inputPassword4" name="fullname" value="<?=array_key_exists('fullname',$formData)?$formData['fullname']:''?>">--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<label for="inputPassword4" class="form-label">Email</label>--}}
                    {{--<input type="email" class="form-control" id="inputPassword4" name="email" value="<?=array_key_exists('email',$formData)?$formData['email']:''?>">--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<label for="inputPassword4" class="form-label">Phone Number</label>--}}
                    {{--<input type="tel" class="form-control" id="inputPassword4" name="phone" value="<?=array_key_exists('phone',$formData)?$formData['phone']:''?>">--}}
                {{--</div>--}}


                {{--<div class="col-12 mt-2">--}}
                    {{--<button type="submit" class="btn btn-dark">Sign Up</button>--}}
                {{--</div>--}}
                {{--<div class="col-12 mt-2">--}}
                    {{--<p>Already Registered? <a class="nav-link" href="/signin">Login</a></p>--}}
                {{--</div>--}}
            {{--</form>--}}

        {{--</div>--}}
    {{--</section>--}}
    {{--<!-- signup form end  -->--}}

@endsection
