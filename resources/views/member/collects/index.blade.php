@extends('member.layouts.master')

@section('page-title', '後臺管理')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">文章管理</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">文章一覽表</li>
    </ol>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col" style="text-align: left">標題</th>
            <th scope="col" style="text-align: left">作者</th>
            <th scope="col">功能</th>
        </tr>
        </thead>
        <tbody>
        @foreach($collects as $collect)
            <tr>
                <th scope="row" style="width: 50px">{{ $collect->id }}</th>
                <td>{{ $collect->title }}</td>
                <td>{{ $collect->collectser}}</td>
                <td style="width: 150px">
                    <form action="{{ route('member.collects.destroy', $collect->title) }}" method="post" style="display: inline-block">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">移除收藏列</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
