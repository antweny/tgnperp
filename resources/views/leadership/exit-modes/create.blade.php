@extends('layouts.backend')
@section('title','New Exit Mode')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="New Exit Mode">

                <!-- Start form -->
                <x-form action="{{route('exitModes.store')}}">
                   @include('leadership.exit-modes._form')
                </x-form>
            </x-card>
        </div>
    </div>

@endsection
