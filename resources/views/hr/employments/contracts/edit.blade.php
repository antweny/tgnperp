@extends('layouts.backend')
@section('title','Update  Employment Contracts')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="Update  Designation">
                <!-- Start form -->
                {{ Form::model($employmentContract, array('route' => array('employmentContracts.update',$employmentContract), 'method' => 'PUT')) }}
                    @csrf

                    <div class="mb-3">
                        <x-label for="name" star="true"/>
                        <x-input name="name" required :value="$employmentContract->name" />
                        <x-error field="name" />
                    </div>

                    <div class="mb-3">
                        <x-label for="description" />
                        <x-textarea name="descriptions" class="form-control" >{{$employmentContract->descriptions}}</x-textarea>
                        <x-error field="descriptions" />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <x-nav-link href="{{route('employmentContracts.index')}}" label="Back" class="btn btn-danger"/>
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
