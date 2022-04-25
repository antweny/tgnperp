@extends('layouts.backend')
@section('title','New Organization')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-9">
            <x-card cardTitle="New Organization">

                <!-- Start form -->
                <x-form action="{{route('organizations.store')}}">
                   @include('contact.organizations._form')
                </x-form>
            </x-card>
        </div>
    </div>

@endsection
