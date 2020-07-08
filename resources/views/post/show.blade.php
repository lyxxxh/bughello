@extends('layouts.app')

@section('content')
    <center><article>
            <a class="example-image-link" href="{{ $post->img }}" data-lightbox="example-set" data-title="{{ $post->title }}">
	     
	<img class="example-image" src="{{  public_upload_url($post->min_img) }}" alt=""/></a>
            <div class="content-item">

                <h3 class="title-item"><a href="#">{{ $post->title }}</a></h3>
                <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-eye"></i>{{ $post->view }}</a></li>
                    <li style="float: right"><a href="#"><i class="fa fa-calendar"></i> {{ $post->created_at }}</a></li>
                </ul>


                @if( $post->type == \App\Model\Post::TYPE_IMG)
                    @foreach(json_decode($post->content) as $img)
                <p class="info">
                    <a class="example-image-link" href="{{ public_upload_url($img) }}" data-lightbox="example-set" data-title="让我康康">
                    <img class="example-image" src="{{ public_upload_url($img) }}" alt=""/>
                    </a>
                </p>
                    @endforeach
                @endif
            </div>




            <div class="bottom-item">
              @if( $post->previou)
              <a href="/post/{{ $post->previou->id }}" class="btn btn-share share" title="{{ $post->previou->title }}" style="border-right: 0">
                  <i class="fa fa-angle-left"></i> 上一篇: {{ $post->previou->title }} </a>
              @endif
                 @if( $post->next)
                    <span class="user f-right">下一篇: <a href="/post/{{ $post->next->id }}" title="{{ $post->next->title }}">{{ $post->next->title }}
                        <i class="fa fa-angle-right"></i>
                        </a></span>
                @endif
            </div>

            <div class="bottom-item">
<!--
                <a href="#" class="btn btn-share share"><i class="fa fa-share-alt"></i> Share</a>
-->
                @if($post->source_url != '')
                <span class="user f-right">来源于: <a href="{{ $post->source_url }}">{{ $post->source_url }}</a></span>
                @endif
            </div>
        </article></center>

@endsection

