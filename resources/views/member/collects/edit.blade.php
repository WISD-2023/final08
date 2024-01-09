@extends('member.layouts.master')

@section('page-title', 'Edit article')

@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">文章管理</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">編輯文章</li>
        </ol>
        @include('member.layouts.shared.errors')
        <section class="mb-5">
            @foreach($collects as $collect)
                @if($collect->title = Auth::User()->title)
                    <tr>
                    <th scope="row" style="width: 50px">{{ $collect->id }}</th>
                    <td>{{ $collect->title }}</td>
                    <td>{{ $collect->poster}}</td>
                    <td style="width: 150px">

                    </td>
                    </tr>
                @endif

            @endforeach
        </section>
    </div>
@endsection
