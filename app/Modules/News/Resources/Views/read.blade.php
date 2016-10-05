@extends('kreston::post')
@section('breadcrumbs', Breadcrumbs::render('news_read'))
@section('content')
    <div class="row">
      <div class="content blog blog-post col-sm-9 col-md-9">
		<article class="post">
		  <h4 class="title">{!! $post->title !!}</h4>	
		  <div class="entry-content">
		  {!! $post->content !!}
		  </div>
		  <!--<footer class="entry-meta">
			<span class="autor-name">Mike Example</span>,
			<span class="time">03.11.2012</span>
			<span class="separator">|</span>
			<span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
			<span class="comments-link pull-right">
			  <a href="#"><i class="fa fa-comment"></i> 3 comment(s)</a>
			</span>
		  </footer>-->
		</article><!-- .post -->	
      </div><!-- .content -->
	  
      <div id="sidebar" class="sidebar col-sm-3 col-md-3">
		<aside class="widget list">
		  
		
		<aside class="widget list">
		  <header>
			<h3 class="title">Archives</h3>
		  </header>
		  <ul>
			<li><a href="#">August 2012</a></li>
			<li><a href="#">September 2012</a></li>
			<li><a href="#">October 2012</a></li>
			<li><a href="#">November 2012</a></li>
			<li><a href="#">December 2012</a></li>
		  </ul>
		</aside><!-- .list -->
		

	  </div><!-- .sidebar -->
    </div
@endsection


