@extends('layouts.public')
@section('title','Leadership')
@section('content')

    <div class="container-fluid pt-3">


        <div class="row">
            <div class="col-md-12">
                <x-card  class="leader-search text-white bg-dark" cardTitle="Filter By">
                    <x-form method="GET" action="{{route('leadership.search')}}">
                        <div class="row">
                            <div class="col">
                                <x-label for="office_name"/>
                                <x-organization />
                            </div>
                            <div class="col">
                                <x-label for="position_title"/>
                                <x-title />
                            </div>
                            <div class="col">
                                <x-label for="from"/>
                                <x-input name="start_date"  />
                            </div>
                            <div class="col">
                                <x-label for="to" />
                                <x-input name="end_date" />
                            </div>
                            <div class="col pt-3">
                                <x-button label="<h3 class='mb-0'>Search</h3>" class="btn btn-primary w-100 h-100"/>
                            </div>
                        </div>
                    </x-form>
                </x-card>
            </div>

            <div class="col-md-12">
                <x-card cardTitle="Leadership" class="leader-search text-white bg-dark">

                    <x-table class="table-dark">

                        <!-- table headers -->
                        <x-slot name="thead" class="table-{color}">
                            <th class="col-first">#</th>
                            <th>Individual</th>
                            <th>Sex</th>
                            <th>Title</th>
                            <th>Organization</th>
                            <th>Pillar</th>
                            <th>Phase</th>
                            <th>Term</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Active</th>
                        </x-slot>

                        @foreach ($positions as $position)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-start">{{ $position->individual->name }}</td>
                                <td class="text-center">{{ $position->individual->sex }}</td>
                                <td class="text-start">{{ $position->title->full_name }}</td>
                                <td class="text-start">{{ $position->organization->full_name }}</td>
                                <td class="text-start">{{ $position->organization->branch->name }}</td>
                                <td class="text-center">{{ $position->phase->name }}</td>
                                <td class="text-center">{{ $position->term->name }}</td>
                                <td class="text-center">{{ $position->start }}</td>
                                <td class="text-center">{{ $position->end }}</td>
                                <td class="text-center">{!! $position->active !!}</td>
                            </tr>
                        @endforeach

                    </x-table>



                </x-card>
            </div>
        </div>
    </div>

@endsection

