@extends('layouts.backend')
@section('title','Individuals')
@section('content')

        <x-card cardTitle="Individuals">

            <x-slot name="cardButtons">
                @permissionTo('individual_create')
                    <x-nav-link href="{{route('individuals.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/>
                @endpermissionTo
            </x-slot>

            <x-table>

                <!-- table headers -->
                <x-slot name="thead" class="table-{color}">
                    <th class="col-first">#</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Active</th>
                    <th>Address</th>
                    <th class="col-last"><i class="fa-solid fa-gears"></i></th>
                </x-slot>

                @foreach ($individuals as $individual)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-start">{{ $individual->name }}</td>
                        <td class="text-center">{{ $individual->sex }}</td>
                        <td class="text-end">{{ $individual->mobile }}</td>
                        <td class="text-center">{{ $individual->email }}</td>
                        <td class="text-center">{!! $individual->active !!}</td>
                        <td class="text-left">{{ $individual->address }}</td>
                        <td class="text-center">
                            @permissionTo('individual_update')
                                <x-nav-link label="edit" href="{{route('individuals.edit',$individual)}}" class="btn btn-sm btn-outline-primary"  />
                                @if($individual->isActive)
                                    <x-nav-link label="deactivate" href="{{route('individuals.activate',['deactivate',$individual])}}" class="btn btn-sm btn-outline-warning"  />
                                @else
                                    <x-nav-link label="activate" href="{{route('individuals.activate',['activate',$individual])}}" class="btn btn-sm btn-outline-success"  />
                                @endif
                            @endpermissionTo
                            @permissionTo('individual_delete')
                                <x-delete action="{{route('individuals.destroy',$individual)}}" class="btn-outline-danger"/>
                            @endpermissionTo
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
