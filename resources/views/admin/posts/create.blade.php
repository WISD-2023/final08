@extends('admin.layouts.master')

@section('page-title', 'Create article')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">文章管理</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">新增文章</li>
    </ol>
    @include('admin.layouts.shared.errors')

    <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">文章標題</label>
            <input id="title" name="title" type="text" class="form-control" placeholder="請輸入文章標題">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">文章內容</label>
            <textarea  id="content" name="content" class="form-control" rows="10" placeholder="請輸入文章內容"></textarea>
        </div>
        <div class="mb-3">
            <label for="is_feature" class="form-label">精選？</label>
            <select id="is_feature" name="is_feature" class="form-control">
                <option value="0">否</option>
                <option value="1">是</option>
            </select>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary btn-sm" type="submit">儲存</button>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">創建者</label>
            <input id="poster" name="poster" type="text" class="form-control" placeholder="請輸入文章標題">
        </div>

    </form>
</div>
@endsection
