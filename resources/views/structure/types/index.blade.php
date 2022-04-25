@extends('layouts.backend')
@section('title',' Types')
@section('content')

        <x-card cardTitle=" Types">

            <x-slot name="cardButtons">
                @permissionTo('type_create')
                    <x-nav-link href="{{route('types.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/>
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

                @foreach ($types as $type)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-left">{{ $type->name }}</td>
                        <td  class="text-left">{{ $type->descriptions }}</td>
                        <td class="text-center">
                            @permissionTo('type_update')
                                <x-nav-link label="edit" href="{{route('types.edit',$type)}}" class="btn btn-sm btn-outline-primary"  />
                            @endpermissionTo
                            @permissionTo('type_delete')
                                <x-delete action="{{route('types.destroy',$type)}}" class="btn-outline-danger"/>
                            @endpermissionTo
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
