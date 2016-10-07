@extends('kreston::page')
@section('breadcrumbs', Breadcrumbs::render('page',$page->slug))
@section('content')
    <div class="row">
        <article class="content col-sm-12 col-md-9">
            {!! isset($page) ? $page->content : null !!}
        </article><!-- .content -->

        <div id="sidebar" class="sidebar col-sm-12 col-md-3">
			@if($link_related_page)
            <aside class="widget menu">
                <header>
                    <h3 class="title">{!! $page->name !!}</h3>
                </header>
                <nav>
                    <ul>
						@foreach($link_related_page as $key => $page)
							<li class="{!! Request::segment(2) == $page->slug ? 'active' : '' !!}"><a href="{!! url($page->url) !!}">{!! $page->name !!}</a></li>
						@endforeach
             
                    </ul>
                </nav>
            </aside><!-- .menu-->
			@endif
			
			@if($link_related_navigation)
            <aside class="widget menu">
                <header>
                    <h3 class="title">{!! $page->name !!}</h3>
                </header>
                <nav>
                    <ul>
						@foreach($link_related_navigation as $key => $nav)
							<li class="{!! Request::segment(2) == $page->slug ? 'active' : '' !!}"><a href="{!! url($nav->url) !!}">{!! $nav->name !!}</a></li>
						@endforeach
             
                    </ul>
                </nav>
            </aside><!-- .menu-->
			@endif
			
			
        </div><!-- .sidebar -->
    </div>
@endsection


