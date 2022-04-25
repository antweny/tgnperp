@extends('layouts.auth')
@section('title','Please Login!')
@section('content')
<div class="container">
    <div class="row justify-content-center auth-section">
        <div class="col-md-4">
            <x-card>
                <div class="login-wrapper">
                    <x-form action="{{ route('login') }}">
                        <div class="mb-3">
                            <x-label for="email_address" star="true"/>
                            <x-email name="email" required />
                            <x-error field="email"/>
                        </div>
                        <div class="mb-3">
                            <x-label for="password" star="true"/>
                            <x-password name="password" required />
                            <x-error field="password"/>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-6"></div>
                            <div class="col-md-6 text-end">
                                <x-nav-link href="{{ route('password.request') }}" label="Forgot password?" class="text-dark"/>
                            </div>
                        </div>
                        <div class="form-group text-center mb-3">
                            <x-button class="btn btn-primary col-12" label="Login"/>
                        </div>
                    </x-form>
                    <div class="row  pb-3">
                        <div class="col-md-12 text-center">
                            <x-nav-link href="{{ route('default') }}" label="<i class='fa-solid fa-house'></i> Homepage" class="text-dark"/>
                        </div>
                    </div>
                </div>
            </x-card>
        </div>
    </div>
</div>
@endsection
