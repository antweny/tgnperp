@extends('layouts.backend')
@section('title','Update Government Phases')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="Update Government Phase">
                <!-- Start form -->
                {{ Form::model($phase, array('route' => array('phases.update',$phase), 'method' => 'PUT')) }}
                    @csrf
                    @include('government.phases._form',['buttonText'=>'update'])

                {{Form::close()}}

            </x-card>
        </div>
    </div>

@endsection
