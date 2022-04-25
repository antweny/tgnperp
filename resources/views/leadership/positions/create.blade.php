@extends('layouts.backend')
@section('title','New Position')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-9">
            <x-card cardTitle="New Position">

                <!-- Start form -->
                <x-form action="{{route('positions.store')}}">
                   @include('leadership.positions._form')
                </x-form>
            </x-card>
        </div>
    </div>

@endsection
