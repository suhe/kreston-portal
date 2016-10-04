@extends('kreston::page')
@section('content')
    <div class="row">
        <article class="content col-sm-12 col-md-9">
            <h1 class="title">{!! $page->name !!}</h1>
            {!! $page->content !!}
        </article><!-- .content -->

        <div id="sidebar" class="sidebar col-sm-12 col-md-3">
            <aside class="widget menu">
                <header>
                    <h3 class="title">Pages</h3>
                </header>
                <nav>
                    <ul>
                        <li class="active"><a href="#">About Us</a></li>
                        <li><a href="#">Vision & Mission</a></li>
                        <li><a href="#">History</a></li>
                    </ul>
                </nav>
            </aside><!-- .menu-->
        </div><!-- .sidebar -->
    </div>
@endsection


