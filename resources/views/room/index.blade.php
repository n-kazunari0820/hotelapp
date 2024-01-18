@extends('layouts.hotel')

@section('body')
    <table>
        <th>部屋種</th><th>部屋番号</th>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->room_type->room_name}}</td>
            <td>{{$item->room_number}}</td>
            
        </tr>
        @endforeach
    </table>
@endsection