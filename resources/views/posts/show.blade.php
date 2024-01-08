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
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">建立於 {{ $post->updated_at->toDateTimeString() }} </div>
                        <!-- Post categories-->
                    </header>

                    <!-- Post content-->
                    <section class="mb-5">
                        {!! $post->content !!}
                    </section>
                </article>
                <!-- Comments section-->
                <section class="mb-5">
                    <div class="card bg-light">
                        創建者{{ $post->poster }}
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-success btn-sm" href="{{ route('member.collects.store',$post) }}">收藏</a>
                    </div>
                </section>
            </div>

        </div>
    </div>
@endsection
