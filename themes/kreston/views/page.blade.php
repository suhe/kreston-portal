@include('kreston::header')
<div class="breadcrumb-box">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a> </li>
            <li class="active">About Us</li>
        </ul>
    </div>
</div>

<section id="main">
    <div class="container">
        @yield('content')
    </div>

</section><!-- #main -->

</div><!-- .page-box-content -->
</div><!-- .page-box -->

@include('kreston::footer')