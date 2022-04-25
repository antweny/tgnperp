@extends('layouts.backend')
@section('title','Update  Types')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="Update  Type">
                <!-- Start form -->
                {{ Form::model($type, array('route' => array('types.update',$type), 'method' => 'PUT')) }}
                    @csrf

                    <div class="mb-3">
                        <x-label for="name" star="true"/>
                        <x-input name="name" required :value="$type->name" />
                        <x-error field="name" />
                    </div>

                    <div class="mb-3">
                        <x-label for="description" />
                        <x-textarea name="descriptions" class="form-control" >{{$type->descriptions}}</x-textarea>
                        <x-error field="descriptions" />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <x-nav-link href="{{route('types.index')}}" label="Back" class="btn btn-danger"/>
                        </div>
                        <div class="col-md-6 text-end">
                            <x-button class="btn btn-primary" label="update" />
                        </div>
                    </div>
                {{Form::close()}}

            </x-card>
        </div>
    </div>

@endsection
