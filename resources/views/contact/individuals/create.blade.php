@extends('layouts.backend')
@section('title','New Individual')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="New Individual">

                <!-- Start form -->
                <x-form action="{{route('individuals.store')}}">
                    @include('contact.individuals._form')
                </x-form>
            </x-card>
        </div>
    </div>

@endsection
