@extends('layouts.backend')
@section('title','Government Phases')
@section('content')

        <x-card cardTitle="Government Phases">

            <x-slot name="cardButtons">
                @permissionTo('phase_create')
                    <x-nav-link href="{{route('phases.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/>
                @endpermissionTo
            </x-slot>

            <x-table>

                <!-- table headers -->
                <x-slot name="thead" class="table-{color}">
                    <th class="col-first">#</th>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Description</th>
                    <th class="col-last"><i class="fa-solid fa-gears"></i></th>
                </x-slot>

                @foreach ($phases as $phase)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-left">{{ $phase->name }}</td>
                        <td  class="text-center">{{ $phase->start }}</td>
                        <td  class="text-center">{{ $phase->end }}</td>
                        <td  class="text-left">{{ $phase->descriptions }}</td>
                        <td class="text-center">
                            @permissionTo('phase_update')
                                <x-nav-link label="edit" href="{{route('phases.edit',$phase)}}" class="btn btn-sm btn-outline-primary"  />
                            @endpermissionTo
                            @permissionTo('phase_delete')
                                <x-delete action="{{route('phases.destroy',$phase)}}" class="btn-outline-danger"/>
                            @endpermissionTo
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
