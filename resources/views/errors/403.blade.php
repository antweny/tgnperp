
@auth('admin')

@extends('layouts.admin')
@section('title','403 Forbidden')
@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-6 text-center">
            <x-card>
                @if(auth()->guard('admin')->check())
                    yes
                @else
                    no
                @endif

                <h1>Forbidden</h1>
                <img src="{{asset('images/403.png')}}" height="250" width="100%"/>
                <h4>We are sorry, but you do not have access to this page or resource for some reason.</h4>
                <a class="btn btn-primary btn-lg" href="{{url()->previous()}}">GO BACK</a>
            </x-card>
        </div>
    </div>
@endsection

@else

@extends('layouts.app')
@section('title','403 Forbidden')
@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-6 text-center">
            <x-card>
                @if(auth()->guard('admin')->check())
                    yes
                @else
                    no
                @endif

                <h1>Forbidden</h1>
                <img src="{{asset('images/403.png')}}" height="250" width="100%"/>
                <h4>We are sorry, but you do not have access to this page or resource for some reason.</h4>
                <a class="btn btn-primary btn-lg" href="{{url()->previous()}}">GO BACK</a>
            </x-card>
        </div>
    </div>
@endsection

@endauth






