@extends('layouts.backend')
@section('title','Update Position')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-9">
            <x-card cardTitle="Update Position">
                <!-- Start form -->
                {{ Form::model($position, array('route' => array('positions.update',$position), 'method' => 'PUT')) }}
                    @csrf
                    @include('leadership.positions._form')
                {{Form::close()}}

            </x-card>
        </div>
    </div>

@endsection
