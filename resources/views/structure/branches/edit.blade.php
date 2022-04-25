@extends('layouts.backend')
@section('title','Update Branch')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="Update Branch">
                <!-- Start form -->
                {{ Form::model($branch, array('route' => array('branches.update',$branch), 'method' => 'PUT')) }}
                    @csrf
                    <div class="mb-3 row">
                        <div class="col-md-8">
                            <x-label for="name" star="true"/>
                            <x-input name="name" required :value="$branch->name"/>
                            <x-error field="name" />
                        </div>
                        <div class="col-md-4">
                            <x-label for="entity" star="true" />
                            <select id="entity" name="entity" class="form-control" required>
                                <option value="">--Select--</option>
                                <option value="Government" {{old('entity',$branch->entity) == 'Government' ? 'selected' : ''}}>Government</option>
                                <option value="Private" {{old('entity',$branch->entity) == 'Private' ? 'selected' : ''}}>Private</option>
                            </select>
                            <x-error field="entity" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <x-label for="description" />
                        <x-textarea name="descriptions" class="form-control" >{{$branch->descriptions}}</x-textarea>
                        <x-error field="descriptions" />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <x-nav-link href="{{route('branches.index')}}" label="Back" class="btn btn-danger"/>
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
