@extends('layouts.helloapp')

@section('title', 'Edit')

@section('menubar')
    @parent
    更新ページ
@endsection

@section('content')
    <form action="/hello/edit" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <table>
            <tr><th>Name:</th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
            <tr><th>Mail:</th><td><input type="text" name="mail" value="{{$form->mail}}"></td></tr>
            <tr><th>Age:</th><td><input type="text" name="age" value="{{$form->age}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
copyright 2023 kobata.
@endsection
