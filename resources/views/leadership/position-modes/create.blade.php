@extends('layouts.backend')
@section('title','New Position Mode')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="New Position Mode">

                <!-- Start form -->
                <x-form action="{{route('positionModes.store')}}">
                   @include('leadership.position-modes._form')
                </x-form>
            </x-card>
        </div>
    </div>

@endsection
