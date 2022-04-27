@extends('layouts.backend')
@section('title',' Employment Contracts')
@section('content')

        <x-card cardTitle=" Employment Contracts">

            <x-slot name="cardButtons">
                @permissionTo('employmentContract_create')
                    <x-nav-link href="{{route('employmentContracts.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/>
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

                @foreach ($employmentContracts as $employmentContract)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-left">{{ $employmentContract->name }}</td>
                        <td  class="text-left">{{ $employmentContract->descriptions }}</td>
                        <td class="text-center">
                            <x-dropleft type="button" class="btn btn-link btn-sm text-dark">

                                @permissionTo('employmentContract_update')
                                    <x-nav-link label="edit" href="{{route('employmentContracts.edit',$employmentContract)}}" class="dropdown-item"  />
                                    <div class="dropdown-divider"></div>
                                @endpermissionTo

                                @permissionTo('employmentContract_delete')
                                    <x-delete action="{{route('employmentContracts.destroy',$employmentContract)}}" class="dropdown-item"/>
                                @endpermissionTo
                            </x-dropleft>

                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
