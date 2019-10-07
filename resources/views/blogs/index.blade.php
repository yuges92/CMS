@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="blogs-page">

    <header class="masthead">
        <div class="overlay"></div>
        <div class="content">
            <h1 class="title">Blogs </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, excepturi.
            </p>
        </div>
    </header>


    <div class="blogs">
        <h2>Latest Blogs</h2>
        @for ($i = 1; $i <=10; $i++) <div class="blog">
            <div class="blog-header">
                <a href="#">
                    <img class="" src="{{asset('images/diary-blog.jpg')}}" alt="">
                </a>
            </div>
            <div class="blog-body">
                <a class="" href="/blogs/1">
                    <h3>Lorem ipsum dolor sit amet Blog {{$i}}</h3>
                </a>
                <small class="date-container">
                    <span class="text">Date Published: </span> <span class="date">01/10/2019</span>
                </small>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem
                    expedita laborum at voluptate.</p>
            </div>
            <div class="blog-footer">

                <div class="tags">
                    <i class="fas fa-tags"></i>
                    <ul>
                        <li><a href="">Category 1</a></li>
                        <li><a href="">Category 2</a></li>
                    </ul>

                </div>
                <div class="comment">
                    <i class="fas fa-comments"></i>
                    <a href="">2 Comments</a>
                </div>
            </div>
    </div>
    @endfor

</div>

<!-- Pagination -->
<ul class="pagination ">
    <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
            <i class="fas fa-chevron-left"></i>
            <span class="sr-only">Previous</span>
        </a>
    </li>
    <li class="page-item active">
        <span>1</span>
        {{-- <a class="page-link" href="#"></a> --}}
    </li>
    <li class="page-item">
        <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
        <span>...</span>
    </li>
    <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
            <i class="fas fa-chevron-right"></i>
            <span class="sr-only">Next</span>
        </a>
    </li>
</ul>

</div>
<!-- /.container -->
@endsection
