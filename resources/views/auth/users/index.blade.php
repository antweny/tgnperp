@extends('layouts.backend')
@section('title','Users')
@section('content')

        <x-card cardTitle="Users">

            <x-slot name="cardButtons">
                <x-nav-link href="{{route('users.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/><br/>
            </x-slot>



            <x-table>

                <!-- table headers -->
                <x-slot name="thead">
                    <th class="col-first">#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Verified</th>
                    <th>Active</th>
                    <th>Roles</th>
                    <th class="col-last"><i class="fa-solid fa-gears"></i></th>
                </x-slot>

                @foreach ($users as $user)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-start">{{ $user->name }}</td>
                        <td class="text-center">{{ $user->email }}</td>
                        <td  class="text-center">{{ $user->verified }}</td>
                        <td  class="text-center">{!! $user->active !!}</td>
                        <td class="text-center">
                            <ul class="list list-inline">
                                @foreach($user->role as $role)
                                    <li class="list-inline-item">{{$role->name.' , '}} </li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="text-center">
                            <x-nav-link label="edit" href="{{route('users.edit',$user)}}" class="btn btn-sm btn-outline-primary"  />
                            <x-delete action="{{route('users.destroy',$user)}}" class="btn-outline-danger"/>
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
