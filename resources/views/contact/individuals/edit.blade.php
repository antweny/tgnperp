@extends('layouts.backend')
@section('title','Update Individual')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="Update Individual">
                <!-- Start form -->
                {{ Form::model($individual, array('route' => array('individuals.update',$individual), 'method' => 'PUT')) }}
                    @csrf
                    @include('contact.individuals._form',['buttonText' => 'update'])
                {{Form::close()}}

            </x-card>
        </div>
    </div>

@endsection
