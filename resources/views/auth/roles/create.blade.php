@extends('layouts.backend')
@section('title','New User Roles')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="New User Role">

                <!-- Start form -->
                <x-form action="{{route('roles.store')}}">
                    <div class="mb-3">
                        <x-label for="name" star="true"/>
                        <x-input name="name" required />
                        <x-error field="name" />
                    </div>
                    <div class="mb-3">
                        <x-label for="description" />
                        <x-textarea name="descriptions" class="form-control" />
                        <x-error field="descriptions" />
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-12 mb-3">
                            <x-label for="assign_permissions" />
                        </div>
                        <x-auth.permission />
                        <x-error field="permissions" />
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <x-nav-link href="{{route('roles.index')}}" label="Back" class="btn btn-danger"/>
                        </div>
                        <div class="col-md-6 text-end">
                            <x-button class="btn btn-primary" />
                        </div>
                    </div>
                </x-form>
            </x-card>
        </div>
    </div>

@endsection
