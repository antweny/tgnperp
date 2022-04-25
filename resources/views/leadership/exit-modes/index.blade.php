@extends('layouts.backend')
@section('title','Exit Modes')
@section('content')

        <x-card cardTitle="Exit Modes">

            <x-slot name="cardButtons">
                @permissionTo('exit-mode_create')
                    <x-nav-link href="{{route('exitModes.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/>
                @endpermissionTo
            </x-slot>

            <x-table>

                <!-- table headers -->
                <x-slot name="thead" >
                    <th class="col-first">#</th>
                    <th>Name</th>
                    <th>Descriptions</th>
                    <th class="col-last"><i class="fa-solid fa-gears"></i></th>
                </x-slot>

                @foreach ($exitModes as $exitMode)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-start">{{ $exitMode->name }}</td>
                        <td class="text-center">{{ $exitMode->descriptions }}</td>
                        <td class="text-center">
                            @permissionTo('exit-mode_update')
                                <x-nav-link label="edit" href="{{route('exitModes.edit',$exitMode)}}" class="btn btn-sm btn-outline-primary"  />
                            @endpermissionTo
                            @permissionTo('exit-mode_delete')
                                <x-delete action="{{route('exitModes.destroy',$exitMode)}}" class="btn-outline-danger"/>
                            @endpermissionTo
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
