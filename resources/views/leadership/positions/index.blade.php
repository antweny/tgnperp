@extends('layouts.backend')
@section('title','Positions')
@section('content')

        <x-card cardTitle="Positions">

            <x-slot name="cardButtons">
                @permissionTo('position_create')
                    <x-nav-link href="{{route('positions.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/>
                @endpermissionTo
            </x-slot>

            <x-table>

                <!-- table headers -->
                <x-slot name="thead" class="table-{color}">
                    <th class="col-first">#</th>
                    <th>Individual</th>
                    <th>Sex</th>
                    <th>Title</th>
                    <th>Mode</th>
                    <th>Organization</th>
                    <th>Gov. Phase</th>
                    <th>Phase Term</th>
                    <th>Star</th>
                    <th>End</th>
                    <th>Active</th>
                    <th>Exit</th>
                    <th class="col-last"><i class="fa-solid fa-gears"></i></th>
                </x-slot>

                @foreach ($positions as $position)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-start">{{ $position->individual->name }}</td>
                        <td class="text-center">{{ $position->individual->sex }}</td>
                        <td class="text-start">{{ $position->title->full_name }}</td>
                        <td class="text-center">{{ $position->position_mode->name }}</td>
                        <td class="text-start">{{ $position->organization->full_name }}</td>
                        <td class="text-center">{{ $position->phase->name }}</td>
                        <td class="text-center">{{ $position->term->name }}</td>
                        <td class="text-center">{{ $position->start }}</td>
                        <td class="text-center">{{ $position->end }}</td>
                        <td class="text-center">{!! $position->active !!}</td>
                        <td class="text-center">{{ $position->exit_mode->name }}</td>
                        <td class="text-center">
                            <div class="btn-group dropleft">
                                <button type="button" class="btn btn-link btn-sm text-dark" style=".btn:hover{border:0;}" data-toggle="dropdown">
                                    <i class="fas fa-cog"></i>
                                </button>
                                <div class="dropdown-menu">
                                    @permissionTo('position_update')
                                        <a href="{{route('positions.edit',$position)}}" class="dropdown-item" data-toggle="tooltip" data-placement="left" title="Edit" >
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <div class="dropdown-divider"></div>
                                    @endpermissionTo
                                    @permissionTo('position_delete')
                                        <form method="POST" action="{{route('positions.destroy',$position)}}" class="form-horizontal" role="form" autocomplete="off">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-block btn-del" onclick="return confirm('Confirm to delete?')" data-toggle="tooltip" data-placement="left" title="Move Trash">
                                                <i class="fa fa-trash-alt"></i> Delete
                                            </button>
                                        </form>
                                    @endpermissionTo
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
