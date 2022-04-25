@extends('layouts.backend')
@section('title','Welcome')
@section('content')


    <x-card cardTitle="Women Representation">
        <div class="row">
            <div class="col-md-3">
                <x-minister />
            </div>

            <div class="col-md-3">
                <x-deputy-minister />
            </div>
        </div>
    </x-card>


@endsection

