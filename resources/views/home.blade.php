@extends('layouts.app')

@section('content')

<div class="home">

    <header class="masthead">
        <div class="overlay"></div>
        <div class="content">
            <div class="heading">
                <h1 class="mb-5">Hi, Welcome. </h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Ea accusantium velit suscipit doloribus,
                    nam nisi numquam nesciunt ducimus maxime reprehenderit iure sunt itaque iste ab quas ipsam.
                    Soluta, aperiam incidunt?
                </p>
            </div>
            <form class="form" v-on:submit.prevent>
                <div class="inputs">
                    <input type="email" class="input" placeholder="Enter your email...">
                </div>
                <div class="btns">
                    <button type="submit" class="btn btn-submit">Sign up!</button>
                </div>
            </form>
        </div>
    </header>

    <section class="features">
        <a class="feature" href="/blogs">
            <div class="icon">
                <i class="fas fa-blog"></i>
            </div>
            <h3>Personal Blogs</h3>
            <p class="">My personal blogs. This is where I share my personal and things I love</p>
        </a>
        <a class="feature" href="/programming">
            <div class="icon">
                <i class="fas fa-code"></i>
            </div>
            <h3>Programming Blogs</h3>
            <p class="">If you love programming then this blogs are for you.</p>
        </a>
        <a class="feature" href="/projects">
            <div class="icon">
                <i class="fas fa-feather-alt"></i>
            </div>
            <h3>Recent Works</h3>
            <p class="lead mb-0">My recent works including personal and professional projects</p>
        </a>
    </section>

    <section class="latest-blogs">
        <h2>Latest Blogs</h2>

        <div class="blogs">
            @for ($i = 1; $i < 6; $i++) <div class="blog">
                <div class="blog-header">
                    <a href="#">
                        <img class=""
                            src="https://pixabay.com/get/55e3d3404d51b114b2d9867fc12c337b1c22dfe05451704a732d7ddc/home-office-336373.jpg"
                            alt="">
                    </a>
                </div>
                <div class="blog-body">
                    <a class="btn btn-primary" href="#">
                        <h3>Lorem ipsum dolor sit amet Blog {{$i}}</h3>
                    </a>
                    <small>
                        <span class="text">Date Published: </span> <span class="date">01/10/2019</span>
                    </small>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem
                        expedita laborum at voluptate.</p>
                </div>
                <div class="blog-footer">

                    <div>
                        <i class="fas fa-tags"></i>
                        <a href="">Category 1</a>
                        <a href="">Category 2</a>
                        <a href="">Category 3</a>
                    </div>
                    <div class="comment">
                        <i class="fas fa-comments"></i>
                        <a href="">2 Comments</a>
                    </div>
                </div>
        </div>
        @endfor

        <div>
           <a href=""> More Blogs</a>
        </div>
</div>

</section>

<section class="social-media-activities">
<h2>Latest Social Media Activities</h2>
<h3>Follow Me</h3>
</section>
</div>

@endsection
