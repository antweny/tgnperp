@extends('layouts.backend')
@section('title',' Groups')
@section('content')

        <x-card cardTitle=" Groups">

            <x-slot name="cardButtons">
                @permissionTo('group_create')
                    <x-nav-link href="{{route('groups.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/>
                @endpermissionTo
            </x-slot>

            <x-table>

                <!-- table headers -->
                <x-slot name="thead" class="table-{color}">
                    <th class="col-first">#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th class="col-last"><i class="fa-solid fa-gears"></i></th>
                </x-slot>

                @foreach ($groups as $group)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-left">{{ $group->name }}</td>
                        <td  class="text-left">{{ $group->descriptions }}</td>
                        <td class="text-center">
                            @permissionTo('group_update')
                                <x-nav-link label="edit" href="{{route('groups.edit',$group)}}" class="btn btn-sm btn-outline-primary"  />
                            @endpermissionTo
                            @permissionTo('group_delete')
                                <x-delete action="{{route('groups.destroy',$group)}}" class="btn-outline-danger"/>
                            @endpermissionTo
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
