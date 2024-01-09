@extends('layouts.master')

@section('page-title', 'Blog Post')

@section('page-style')
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/posts-styles.css') }}" rel="stylesheet"/>
@endsection

@section('page-content')
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->

                <form action="{{ route('member.collects.store', $post->id) }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">文章標題</label>
                        <input id="title" name="title" type="text" class="form-control" readonly="readonly" value="{{ $post->title }}" placeholder="請輸入文章標題">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput" class="form-label">文章內容</label>
                        <label for="content"></label><textarea id="content" name="content" class="form-control" rows="10" readonly="readonly" placeholder="{{ $post->content  }}">{{ $post->content  }}</textarea>
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">創建者</label>
                        <input id="poster" name="poster" type="text" class="form-control" readonly="readonly" value="{{$post->poster}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">收藏者</label>
                        <input id="collected" name="collected" type="text" class="form-control" readonly="readonly" value="{{Auth::User()->name}}">
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary btn-sm" type="submit">收藏</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
