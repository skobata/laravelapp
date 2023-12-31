@extends('layouts.helloapp')
<style>
    .pagination {
        font-size: 10pt;
    }
    .pagination li {
        display: inline-block;
    }
    tr th a:link {
        color: white;
    }
    tr th a:visited {
        color: white;
    }
    tr th a:hover {
        color: white;
    }
    tr th a:active {
        color: white;
    }
</style>

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table style="margin-bottom: 15px">
        <tr>
            <th><a href="/hello?sort=name">Name</a></th>
            <th><a href="/hello?sort=mail">Mail</a></th>
            <th><a href="/hello?sort=age">Age</a></th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
    {{$items->appends(['sort' => $sort])->links('vendor.pagination.bootstrap-4')}}
@endsection

@section('footer')
copyright 2023 kobata.
@endsection
