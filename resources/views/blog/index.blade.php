@extends('layouts.app')

<?php
	
	$lang = Lang::locale();

?>

@section('content')


				@foreach($posts as $post)
				<div class="post-container">
					<div class="post-img">
						<a href="{{ route('single-post',['id'=>$post->id,'language'=>$lang]) }}"><img src="<?php echo ($post->header_img != null ? $post->header_img:'') ?>" alt=""></a>
						<div class="hover-icon"></div>
					</div>
					<div class="post-content">
						<a href="{{ route('single-post',['id'=>$post->id,'language'=>$lang]) }}"><h3>{{ $post->post_title}}</h3></a>
						<div class="meta-tags">
							<span><?php echo ($post->created_at != null ? $post->dateWithFormat('F j,  Y'):"") ?></span>
							<span><a href="">{{$post->comments->count() }} Comments</a></span>
						</div>
						<p>{!! html_entity_decode(trim($post->shortBlog())) !!}</p>
						<a class="button" href="{{ route('single-post',['id'=>$post->id,'language'=>$lang]) }}">Read More</a>
					</div>

				</div>
				@endforeach
				<!-- Post -->
				
				

				<!-- Pagination -->
				{{ $posts->links('pagination.default') }}
				

			


@endsection