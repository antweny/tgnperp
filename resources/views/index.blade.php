@extends('layouts.public')
@section('title','Women Representation In Leadership (WRL)')
@section('content')

<div class="container-fluid pt-4">
    <h1 class="text-center mb-5 text-white"><b>Current Women Representation in a Different Areas</b></h1>

        <x-card class="card-report" cardTitle="<span>State Pillars</span>">
            <div class="row">
                <div class="col-md-3">
                    <x-executive />
                </div>
                <div class="col-md-3">
                    <x-judiciary />
                </div>
                <div class="col-md-3">
                    <x-legislative />
                </div>
            </div>
        </x-card>

        <x-card class="card-report" cardTitle="<span>Leadership Positions</span>">
            <div class="row">
                <div class="col-md-3">
                    <x-minister />
                </div>
                <div class="col-md-3">
                    <x-deputy-minister />
                </div>
                <div class="col-md-3">
                    <x-permanent-secretary />
                </div>
                <div class="col-md-3">
                    <x-deputy-permanent-secretary  />
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <x-regional-commissioner />
                </div>
                <div class="col-md-3">
                    <x-regional-administrative-secretary />
                </div>
                <div class="col-md-3">
                    <x-district-commissioner />
                </div>
                <div class="col-md-3">
                    <x-district-administrative-secretary />
                </div>
            </div>
        </x-card>

</div>

@endsection

