@extends('layouts.backend')
@section('title','Titles')
@section('content')

        <x-card cardTitle="Titles">

            <x-slot name="cardButtons">
                @permissionTo('title_create')
                    <x-nav-link href="{{route('titles.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/>
                @endpermissionTo
            </x-slot>

            <x-table>

                <!-- table headers -->
                <x-slot name="thead" class="table-{color}">
                    <th class="col-first">#</th>
                    <th>Name</th>
                    <th>Acronym</th>
                    <th>Descriptions</th>
                    <th class="col-last"><i class="fa-solid fa-gears"></i></th>
                </x-slot>

                @foreach ($titles as $title)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-start">{{ $title->name }}</td>
                        <td class="text-center">{{ $title->acronym}}</td>
                        <td class="text-center">{{ $title->descriptions }}</td>
                        <td class="text-center">
                            @permissionTo('title_update')
                                <x-nav-link label="edit" href="{{route('titles.edit',$title)}}" class="btn btn-sm btn-outline-primary"  />
                            @endpermissionTo
                            @permissionTo('title_delete')
                                <x-delete action="{{route('titles.destroy',$title)}}" class="btn-outline-danger"/>
                            @endpermissionTo
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
