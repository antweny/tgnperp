@extends('layouts.backend')
@section('title','Organizations')
@section('content')

        <x-card cardTitle="Organizations">

            <x-slot name="cardButtons">
                @permissionTo('organization_create')
                    <x-nav-link href="{{route('organizations.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/>
                @endpermissionTo
            </x-slot>

            <x-table>

                <!-- table headers -->
                <x-slot name="thead" class="table-{color}">
                    <th class="col-first">#</th>
                    <th>Name</th>
                    <th>Tier</th>
                    <th>Branch</th>
                    <th>Type</th>
                    <th>Group</th>
                    <th>Location</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th class="col-last"><i class="fa-solid fa-gears"></i></th>
                </x-slot>

                @foreach ($organizations as $organization)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-start">{{ $organization->name }}</td>
                        <td class="text-center">{{ $organization->tier}}</td>
                        <td class="text-center">{{ $organization->branch->name}}</td>
                        <td class="text-center">{{ $organization->type->name}}</td>
                        <td class="text-center">{{ $organization->group->name}}</td>
                        <td class="text-center">{{ $organization->location->name}}</td>
                        <td class="text-end">{{ $organization->mobile }}</td>
                        <td class="text-center">{{ $organization->email }}</td>
                        <td class="text-center">
                            @permissionTo('organization_update')
                                <x-nav-link label="edit" href="{{route('organizations.edit',$organization)}}" class="btn btn-sm btn-outline-primary"  />
                            @endpermissionTo

                            @permissionTo('organization_delete')
                                <x-delete action="{{route('organizations.destroy',$organization)}}" class="btn-outline-danger"/>
                            @endpermissionTo
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
