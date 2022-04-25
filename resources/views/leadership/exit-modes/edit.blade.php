@extends('layouts.backend')
@section('title','Update Exit Mode')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="Update Exit Mode">
                <!-- Start form -->
                {{ Form::model($exitMode, array('route' => array('exitModes.update',$exitMode), 'method' => 'PUT')) }}
                    @csrf
                    @include('leadership.exit-modes._form')
                {{Form::close()}}

            </x-card>
        </div>
    </div>

@endsection
