@extends('layouts.hotel')

@section('body')
    <table>
        <th>ID</th> <th>部屋種類</th><th>利用可能人数</th>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->room_name}}</td>
            <td>{{$item->people_stay}}</td>
        </tr>
        
        @endforeach
       
    </table>
@endsection