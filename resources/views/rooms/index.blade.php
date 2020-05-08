@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Room Num</th>
                <th>Type</th>
                <th>Type Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
                <tr>
                    <td>{{ $room->number }}</td>
                    <td>{{ $room->room_type_id }}</td>
                    <td>{{ $room->roomType->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection