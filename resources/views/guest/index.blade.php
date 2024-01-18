@extends('layouts.hotel')

@section('body')
    <table>
        <th>お客様ID</th><th>お名前</th><th>ご住所</th><th>電話番号</th>
        @foreach ($guests as $guest)
            <tr>
                <td>{{$guest->id}}</td>
                <td>{{$guest->name}}</td>
                <td>{{$guest->address}}</td>
                <td>{{$guest->tel}}</td>
            </tr>
        @endforeach
    </table>
@endsection
<style>
    table{
        width: 80%;
        border-collapse: collapse;
        border-spacing: 0;
    }
    table th, table td{
        padding: 10px 0;
        text-align: center;
    }
    table tr:nth-child(odd){
        background-color: #eee;
    }
</style>