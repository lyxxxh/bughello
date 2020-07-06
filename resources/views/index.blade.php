@extends('layouts.app')

@section('content')

    @foreach($posts as $post)
    <div class="item">
        <a class="example-image-link" href="{{ $post->img }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
            <img class="example-image" src="{{ public_upload_url($post->min_img) }}" alt=""/></a>
        <div class="content-item">

            <h3 class="title-item"><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h3>
            <p class="info">{{  $post->descrption }}</p>
            <ul class="list-inline">
                <li><a href="#"><i class="fa fa-eye"></i>{{ $post->view }}</a></li>
                <li style="float: right"><a href="#"><i class="fa fa-calendar"></i> {{ $post->created_at }}</a></li>
            </ul>
        </div>
    </div>
    @endforeach


@section('paginate')
<div style="width: 100%;">
<ul class="pagination" style="display: table;text-align: center;margin: 0 auto">
    <li><a href="{{ $posts->previousPageUrl() }}">&laquo;</a></li>
    @for($i = 1; $i <= $posts->total() / $posts->perPage();$i++)
        <li class="{{ $i == $posts->currentPage() ? 'active': ''}}"><a href="?page={{ $i }}">{{ $i }}</a></li>
    @endfor
    <li><a href="{{ $posts->nextPageUrl() }}">&raquo;</a></li>
</ul>
</div>
@endsection

@endsection

