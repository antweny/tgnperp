@extends('layouts.backend')
@section('title',' Departments')
@section('content')

        <x-card cardTitle=" Departments">

            <x-slot name="cardButtons">
                @permissionTo('department_create')
                    <x-nav-link href="{{route('departments.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/>
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

                @foreach ($departments as $department)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-left">{{ $department->name }}</td>
                        <td  class="text-left">{{ $department->descriptions }}</td>
                        <td class="text-center">
                            <x-dropleft type="button" class="btn btn-link btn-sm text-dark">
                                @permissionTo('department_update')
                                <x-nav-link label="edit" href="{{route('departments.edit',$department)}}" class="dropdown-item"  />
                                <div class="dropdown-divider"></div>
                                @endpermissionTo
                                @permissionTo('department_delete')
                                <x-delete action="{{route('departments.destroy',$department)}}" class="dropdown-item"/>
                                @endpermissionTo
                            </x-dropleft>
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
