@extends('layouts.backend')
@section('title','Branches')
@section('content')

        <x-card cardTitle="Branches">

            <x-slot name="cardButtons">
                @permissionTo('branch_create')
                    <x-nav-link href="{{route('branches.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/>
                @endpermissionTo

            </x-slot>



            <x-table>

                <!-- table headers -->
                <x-slot name="thead" class="table-{color}">
                    <th class="col-first">#</th>
                    <th>Name</th>
                    <th>Entity</th>
                    <th>Description</th>
                    <th class="col-last"><i class="fa-solid fa-gears"></i></th>
                </x-slot>

                @foreach ($branches as $branch)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-left">{{ $branch->name }}</td>
                        <td class="text-center">{{ $branch->entity }}</td>
                        <td  class="text-left">{{ $branch->descriptions }}</td>
                        <td class="text-center">
                            @permissionTo('branch_update')
                                <x-nav-link label="edit" href="{{route('branches.edit',$branch)}}" class="btn btn-sm btn-outline-primary"  />
                            @endpermissionTo

                            @permissionTo('branch_delete')
                                <x-delete action="{{route('branches.destroy',$branch)}}" class="btn-outline-danger"/>
                            @endpermissionTo
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
