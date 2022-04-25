@extends('layouts.backend')
@section('title','Update User ')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="Update User Role">
                <!-- Start form -->
                {{ Form::model($user, array('route' => array('users.update',$user), 'method' => 'PUT')) }}
                    @csrf
                    @include('auth.users._form',['buttonText'=>'update'])
                {{Form::close()}}

            </x-card>
        </div>
    </div>

@endsection
