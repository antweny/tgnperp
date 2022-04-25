@extends('layouts.auth')
@section('title','Password Reset')
@section('content')
    <div class="container">
        <div class="row justify-content-center  auth-section">
            <div class="col-md-4">
                <x-card>
                    <div class="login-wrapper">
                        <x-form action="{{ route('password.email') }}">
                            <div class="mb-3">
                                <x-label for="email_address" star="true"/>
                                <x-email name="email" required />
                                <x-error field="email"/>
                            </div>
                            <div class="form-group text-center mb-3">
                                <x-button class="btn btn-primary col-12" label="Send Password Rest Link"/>
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
