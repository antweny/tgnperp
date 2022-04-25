@extends('layouts.backend')
@section('title','New User')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <x-card cardTitle="New User">

                <!-- Start form -->
                <x-form action="{{route('users.store')}}">
                    @include('auth.users._form')
                </x-form>
            </x-card>
        </div>
    </div>

@endsection
