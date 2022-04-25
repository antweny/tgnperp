@extends('layouts.backend')
@section('title','New Government Phases')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="New Government Phase">

                <!-- Start form -->
                <x-form action="{{route('phases.store')}}">
                    @include('government.phases._form')
                </x-form>
            </x-card>
        </div>
    </div>

@endsection
