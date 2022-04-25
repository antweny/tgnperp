@extends('layouts.backend')
@section('title','Government Terms')
@section('content')

        <x-card cardTitle="Government Terms">

            <x-slot name="cardButtons">
                @permissionTo('term_create')
                    <x-nav-link href="{{route('terms.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/>
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

                @foreach ($terms as $term)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-left">{{ $term->name }}</td>
                        <td  class="text-left">{{ $term->descriptions }}</td>
                        <td class="text-center">
                            @permissionTo('term_update')
                                <x-nav-link label="edit" href="{{route('terms.edit',$term)}}" class="btn btn-sm btn-outline-primary"  />
                            @endpermissionTo
                            @permissionTo('term_delete')
                                <x-delete action="{{route('terms.destroy',$term)}}" class="btn-outline-danger"/>
                            @endpermissionTo
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
