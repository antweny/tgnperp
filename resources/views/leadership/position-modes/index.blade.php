@extends('layouts.backend')
@section('title','Position Modes')
@section('content')

        <x-card cardTitle="Position Modes">

            <x-slot name="cardButtons">
                @permissionTo('position-mode_create')
                    <x-nav-link href="{{route('positionModes.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/>
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

                @foreach ($positionModes as $positionMode)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-start">{{ $positionMode->name }}</td>
                        <td class="text-center">{{ $positionMode->descriptions }}</td>
                        <td class="text-center">
                            @permissionTo('position-mode_update')
                                <x-nav-link label="edit" href="{{route('positionModes.edit',$positionMode)}}" class="btn btn-sm btn-outline-primary"  />
                            @endpermissionTo
                            @permissionTo('position-mode_delete')
                                <x-delete action="{{route('positionModes.destroy',$positionMode)}}" class="btn-outline-danger"/>
                            @endpermissionTo
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
