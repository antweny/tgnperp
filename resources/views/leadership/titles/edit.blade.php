@extends('layouts.backend')
@section('title','Update Title')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="Update Title">
                <!-- Start form -->
                {{ Form::model($title, array('route' => array('titles.update',$title), 'method' => 'PUT')) }}
                    @csrf
                    @include('leadership.titles._form')
                {{Form::close()}}

            </x-card>
        </div>
    </div>

@endsection
