@extends('layouts.hotel')

@section('body')
    <table>
        <th>予約ID</th><th>利用者ID</th><th>お名前</th><th>ご住所</th><th>電話番号</th><th>人数</th><th>チェックイン日</th><th>チェックアウト日</th><th>料金</th>
        @foreach ($reserves as $reserve)
        <tr>
            <td>{{$reserve->id}}</td>
            <td>{{$reserve->guest_id}}</td>
            <td>{{$reserve->guest->name}}</td>
            <td>{{$reserve->guest->address}}</td>
            <td>{{$reserve->guest->tel}}</td>
            <td>{{$reserve->number_of_people}}名</td>
            <td>{{$reserve->check_in}}</td>
            <td>{{$reserve->check_out}}</td>
            <td>{{$reserve->room->first()->pivot->price}}</td>
        </tr>
        @endforeach
        
    </table>
@endsection