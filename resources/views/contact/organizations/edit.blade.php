@extends('layouts.backend')
@section('title','Update Organization')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-9">
            <x-card cardTitle="Update Organization">
                <!-- Start form -->
                {{ Form::model($organization, array('route' => array('organizations.update',$organization), 'method' => 'PUT')) }}
                    @csrf
                    @include('contact.organizations._form')
                {{Form::close()}}

            </x-card>
        </div>
    </div>

@endsection
