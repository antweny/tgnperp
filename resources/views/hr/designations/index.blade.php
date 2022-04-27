@extends('layouts.backend')
@section('title',' Designations')
@section('content')

        <x-card cardTitle=" Designations">

            <x-slot name="cardButtons">
                @permissionTo('designation_create')
                    <x-nav-link href="{{route('designations.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/>
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

                @foreach ($designations as $designation)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-left">{{ $designation->name }}</td>
                        <td  class="text-left">{{ $designation->descriptions }}</td>
                        <td class="text-center">
                            <x-dropleft type="button" class="btn btn-link btn-sm text-dark">

                                @permissionTo('designation_update')
                                    <x-nav-link label="edit" href="{{route('designations.edit',$designation)}}" class="dropdown-item"  />
                                    <div class="dropdown-divider"></div>
                                @endpermissionTo

                                @permissionTo('designation_delete')
                                    <x-delete action="{{route('designations.destroy',$designation)}}" class="dropdown-item"/>
                                @endpermissionTo
                            </x-dropleft>

                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
