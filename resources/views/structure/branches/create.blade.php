@extends('layouts.backend')
@section('title','New Branch')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="New Branch">

                <!-- Start form -->
                <x-form action="{{route('branches.store')}}">
                    <div class="mb-3 row">
                        <div class="col-md-8">
                            <x-label for="name" star="true"/>
                            <x-input name="name" required />
                            <x-error field="name" />
                        </div>
                        <div class="col-md-4">
                            <x-label for="entity" star="true" />
                            <select id="entity" name="entity" class="form-control" required>
                                <option value="">--Select--</option>
                                <option value="Government">Government</option>
                                <option value="Private">Private</option>
                            </select>
                            <x-error field="entity" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <x-label for="description" />
                        <x-textarea name="descriptions" class="form-control" />
                        <x-error field="descriptions" />
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <x-nav-link href="{{route('branches.index')}}" label="Back" class="btn btn-danger"/>
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
