@extends('layouts.master')

@section('page-title', 'Blog文章')

@section('page-style')
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/posts-styles.css') }}" rel="stylesheet"/>
@endsection

@section('page-content')

    @include('posts.shared.header')

    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->

                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    @foreach($posts->chunk(2) as $chunks)
                    <div class="col-lg-6">
                        @foreach($chunks as $post)
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="{{ route('posts.show', $post->id) }}">
                            </a>
                            <div class="card-body">
                                <div class="small text-muted">{{ $post->updated_at->diffForHumans() }}</div>
                                <h2 class="card-title h4">{{ Str::limit($post->title, 10) }}</h2>

                                <a class="btn btn-primary" href="{{ route('posts.show', $post->id) }}">Read more →</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach

            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..."
                                   aria-label="Enter search term..." aria-describedby="button-search"/>
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
