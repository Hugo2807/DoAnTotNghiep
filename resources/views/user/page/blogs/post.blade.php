@extends('user.usershop')
@section('usermain')

<div class="hero-wrap hero-bread" style="background-image: url('userdashboard/images/bg_1.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            {{-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p> --}}
          <h1 class="mb-0 bread">Blog</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-12 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch d-md-flex">
                            <a href="{{ route('blog.slug', $post->slug->nameSlug)}}" class="block-20" style="background-image: url({{$post->imagePath}});"></a>
                            <div class="text d-block pl-md-4">
                                
                                <div class="meta mb-3">
                                    <div>{{date('l, F d, Y',strtotime($post['created_at']))}}</div>
                                    <div>{{$post->posterName}}</div>
                                </div>
                                <h3 class="heading"><a href="{{ route('blog.slug', $post->slug->nameSlug)}}">{{$post->title}}</a></h3>
                                <p>{!! \Illuminate\Support\Str::limit($post->content, 10, '...') !!}</p>
                                <p><a href="{{ route('blog.slug', $post->slug->nameSlug)}}" class="btn btn-primary py-2 px-3">Đọc tiếp <i class="nav-icon fas fa-arrow-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div>
                    {{$posts->appends(request()->all())->links()}}
                </div>
            </div>
        </div> <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar ftco-animate">
          {{-- <div class="sidebar-box">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon ion-ios-search"></span>
                <input type="text" class="form-control" placeholder="Search...">
              </div>
            </form>
          </div>
          <div class="sidebar-box ftco-animate">
              <h3 class="heading">Categories</h3>
            <ul class="categories">
              <li><a href="#">Vegetables <span>(12)</span></a></li>
              <li><a href="#">Fruits <span>(22)</span></a></li>
              <li><a href="#">Juice <span>(37)</span></a></li>
              <li><a href="#">Dries <span>(42)</span></a></li>
            </ul>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="heading">Bài viết gần đây</h3>
              @foreach($threeposts as $threepost)
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url({{$post->imagePath}});"></a>
                  <div class="text">
                    <h3 class="heading-1"><a href="{{ route('blog.slug', $threepost->slug->nameSlug)}}">{{$threepost->title}}</a></h3>
                    <div class="meta">
                      <div><span class="icon-calendar"></span> {{date('F d, Y',strtotime($post['created_at']))}}</div>
                      <div><span class="icon-person"></span> {{$post->posterName}}</div>
                    </div>
                  </div>
                </div>
              @endforeach
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="heading">Tag Cloud</h3>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">fruits</a>
              <a href="#" class="tag-cloud-link">tomatoe</a>
              <a href="#" class="tag-cloud-link">mango</a>
              <a href="#" class="tag-cloud-link">apple</a>
              <a href="#" class="tag-cloud-link">carrots</a>
              <a href="#" class="tag-cloud-link">orange</a>
              <a href="#" class="tag-cloud-link">pepper</a>
              <a href="#" class="tag-cloud-link">eggplant</a>
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="heading">Paragraph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div> --}}
          @include('user.partials.subnavRight')
        </div>
      </div>
    </div>
  </section> 
<!-- .section -->
@endsection