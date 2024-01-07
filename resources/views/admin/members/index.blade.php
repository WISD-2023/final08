@extends('admin.layouts.master')

@section('page-title', '後臺管理')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">會員管理</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">會員一覽表</li>
    </ol>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-success btn-sm" href="{{ route('admin.members.create') }}">新增管理員</a>

    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col" style="text-align: left">id	</th>
            <th scope="col" style="text-align: left">姓名</th>


        </tr>
        </thead>
        <tbody>
        @foreach($admins as $admin)
            <tr>
                <th scope="row" style="width: 50px">{{ $admin->id }}</th>
                <td>{{ $admin->user_id }}</td>


                <td style="width: 150px">
                    <form action="{{ route('admin.members.destroy', $admin->user_id) }}" method="POST" style="display: inline-block">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">刪除</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
