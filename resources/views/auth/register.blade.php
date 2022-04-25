@extends('layouts.auth')
@section('title','Please Login!')
@section('content')
    <div class="container">
        <div class="row justify-content-center auth-section">
            <div class="col-md-4">
                <x-card cardTitle="Create Account">
                    <div class="login-wrapper">
                        <x-form action="{{ route('register') }}">
                            <div class="mb-3">
                                <x-label for="name" star="true"/>
                                <x-input name="name" required />
                                <x-error field="name"/>
                            </div>
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
                            <div class="mb-3">
                                <x-label for="confirm_password" star="true"/>
                                <x-password name="password_confirmation" required />
                                <x-error field="password"/>
                            </div>
                            <div class="form-group text-center mb-3">
                                <x-button class="btn btn-primary col-12" label="create account"/>
                            </div>
                        </x-form>
                        <div class="row  pb-3">
                            <div class="col-md-6 text-start">
                                <x-nav-link href="{{ route('default') }}" label="<i class='fa-solid fa-house'></i> Homepage" class="text-dark"/>
                            </div>
                            <div class="col-md-6 text-end">
                                <x-nav-link href="{{ route('login') }}" label="Login" class="text-dark"/>
                            </div>
                        </div>
                    </div>
                </x-card>
            </div>
        </div>
    </div>
@endsection
