@extends('layouts.backend')
@section('title','New Title')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="New Title">

                <!-- Start form -->
                <x-form action="{{route('titles.store')}}">
                   @include('leadership.titles._form')
                </x-form>
            </x-card>
        </div>
    </div>

@endsection
