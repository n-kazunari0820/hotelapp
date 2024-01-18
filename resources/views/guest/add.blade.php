@extends('layouts.hotel')

@section('body')
    <form action="/guest/add" method="POST" class="form-group ">
    @csrf
    <label for="name">お名前</label>
    <input type="text" name="name" placeholder="お名前" class="form-control" required autofocus>
    <br>
    <label for="name">ご住所</label>
    <input type="text" name="address" placeholder="ご住所" class="form-control" required>
    <br>
    
    <label for="name">お電話番号</label>
    <input type="tel" name="tel" placeholder="お電話番号" class="form-control" required>
    <br>
    <input type="submit" value="登録" class="form-control-sm">
    </form>
@endsection