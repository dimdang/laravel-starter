
@extends('user/app')

@section('bg-img', asset('user/img/home-bg.jpg'))

@section('title', 'Welcome To G.B')
@section('sub-title', 'G.B bring your business to modernize')

@section('main-content')

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="{{route('post')}}">
                        <h2 class="post-title">
                            Our vision and future plan
                        </h2>
                        <h3 class="post-subtitle">
                            Our vision is aim to be a most popular technology in cambodia which develop by Red Coat, Ricky and Mr. Bucky
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on September 24, 2018</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="{{route('post')}}">
                        <h2 class="post-title">
                            G.B Strategy and Solution with business
                        </h2>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on September 18, 2018</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="{{route('post')}}">
                        <h2 class="post-title">
                            Science has not yet mastered prophecy
                        </h2>
                        <h3 class="post-subtitle">
                            We predict too much for the next year and yet far too little for the next ten.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on August 24, 2018</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="{{route('post')}}">
                        <h2 class="post-title">
                            Failure is not an option
                        </h2>
                        <h3 class="post-subtitle">
                            Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on July 8, 2018</p>
                </div>
                <hr>
                <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <hr>
@endsection
