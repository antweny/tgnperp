@extends('layouts.backend')
@section('title','Update Position Mode')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="Update Position Mode">
                <!-- Start form -->
                {{ Form::model($positionMode, array('route' => array('positionModes.update',$positionMode), 'method' => 'PUT')) }}
                    @csrf
                    @include('leadership.position-modes._form')
                {{Form::close()}}

            </x-card>
        </div>
    </div>

@endsection
