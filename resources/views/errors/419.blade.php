@extends('layouts.auth')
@section('title','419')
@section('content')

    @guest
        <h1 class="text-blue"> Welcome Back! </h1>

        <div class="frm">
            <x-form.create action="login" class="" >
                <div class="form-group">
                    <x-form.label name="Email: <span class='star'>*</span>" />
                    <x-form.input type="email" name="email" id="email" attribute="required" placeholder="Email address"/>
                </div>
                <div class="form-group">
                    <x-form.label name="Password: <span class='star'>*</span>" />
                    <x-form.input type="password" name="password" id="password" attribute="required" placeholder="Password"/>
                </div>
                <div class="form-group">
                    <a href="#">Forgot password?</a>
                </div>
                <div class="form-group text-center">
                    <x-button.submit label="Login" class="btn-block" />
                </div>
            </x-form.create>
        </div>

    @endguest


@endsection
