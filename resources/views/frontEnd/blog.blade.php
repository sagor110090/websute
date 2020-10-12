@extends('frontEnd.layouts.app',['pageTitle' => __('Blog')])
@section('content')

 <!--Page Title-->
 <section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="title">Welcome to Omega Micro Alliance Sevices Company Limited</div>
                <h2>Latest News</h2>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="{{url('/')}}">home</a></li>
                    <li>News</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-classic">

                    <!-- News Block -->
                    @foreach ($blogs as $item)
                    <div class="news-block style-three">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{url('/blog_single',['slug'=>$item->slug])}}"><img src="{{asset(Storage::url($item->thumbnail))}}" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-calendar-1"></span>{{date('F d, Y', strtotime($item->created_at))}}</li>
                                    <li><span class="icon flaticon-user-3"></span>By Admin</li>
                                </ul>
                                <h4><a href="{{url('/blog_single',['slug'=>$item->slug])}}">{{$item->header}}</a></h4>
                                <div class="text">{{Helpers::limit_text($item->shortDescription, 20)}}</div>
                                <div class="lower-box clearfix">
                                    <div class="pull-left">
                                        <a href="{{url('/blog_single',['slug'=>$item->slug])}}" class="read-more">Read More</a>
                                    </div>
                                    {{-- <div class="pull-right">
                                        <a href="news-detail.html" class="comments">3 Comments</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- News Block -->
                    {{-- <div class="news-block style-three">
                        <div class="inner-box">
                            <div class="image">
                                <a href="news-detail.html"><img src="{{ asset('frontEnd') }}/images/resource/news-11.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-calendar-1"></span>June 30, 2020</li>
                                    <li><span class="icon flaticon-user-3"></span>By Admin</li>
                                </ul>
                                <h4><a href="news-detail.html">Suisse CEO Focuses on Wealth Managment</a></h4>
                                <div class="text">know how to pursue pleasure rationally seds encounter consequences. Nemo enim ipsam voluptatem quia voluptas sit aspernatur encounter consequences.</div>
                                <div class="lower-box clearfix">
                                    <div class="pull-left">
                                        <a href="news-detail.html" class="read-more">Read More</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="news-detail.html" class="comments">3 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Post Share Options -->
                    <div class="styled-pagination text-center">
                        <ul class="clearfix">
                            <li class="prev"><a href="#"><span class="fa fa-angle-double-left"></span> Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next"><a href="#">Next <span class="fa fa-angle-double-right"></span></a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">
                    <div class="sidebar-inner">

                        <!-- Search -->
                        <div class="sidebar-widget-two search-box">
                            <div class="widget-content">
                                <!-- Sidebar Title -->
                                <div class="sidebar-title-two">
                                    <h4>Search</h4>
                                </div>
                                <form method="post" action="#">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Type Keywrod" required>
                                        <button type="submit"><span class="icon fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Category Post -->
                        <div class="sidebar-widget-two category-post">
                            <div class="widget-content">
                                <!-- Sidebar Title -->
                                <div class="sidebar-title-two">
                                    <h4>Categories</h4>
                                </div>
                                <ul class="blog-cat-two">
                                    {{-- @dd(Helpers::findAll('blog_categories')) --}}
                                    @foreach (Helpers::findAll('blog_categories') as $item)
                                    <li><a href="{{url('/blog/'.$item->slug)}}">{{$item->name}} <span>( {{Helpers::countTblData('blogs', 'blog_category_id', $item->id)}} )</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Popular Posts -->
                        <div class="sidebar-widget-two popular-posts">
                            <div class="widget-content">
                                <!-- Sidebar Title -->
                                <div class="sidebar-title-two">
                                    <h4>Popular Posts</h4>
                                </div>
                                <div class="post-outer">
                                    @foreach (Helpers::findRandom('blogs')->slice(0, 3) as $item)
                                    <article class="post">
                                        <figure class="post-thumb"><img src="{{asset(Storage::url($item->thumbnail))}}" alt=""><a href="{{url('/blog_single',['slug'=>$item->slug])}}" class="overlay-box"></a></figure>
                                        <div class="text"><a href="{{url('/blog_single',['slug'=>$item->slug])}}">{{$item->header}}</a></div>
                                        <div class="post-info">{{date('F d, Y', strtotime($item->created_at))}}</div>
                                    </article>
                                    @endforeach

                                    {{-- <article class="post">
                                        <figure class="post-thumb"><img src="{{ asset('frontEnd') }}/images/resource/post-thumb-4.jpg" alt=""><a href="news-detail.html" class="overlay-box"></a></figure>
                                        <div class="text"><a href="news-detail.html">Pricing strategies for your digital product.</a></div>
                                        <div class="post-info">June 21, 2019</div>
                                    </article> --}}

                                </div>
                            </div>
                        </div>

                        <!-- Tags -->
                        {{-- <div class="sidebar-widget-two tags">
                            <div class="widget-content">
                                <!-- Sidebar Title -->
                                <div class="sidebar-title-two">
                                    <h4>Cold Tags</h4>
                                </div>
                                <a href="#">Design</a>
                                <a href="#">Finince</a>
                                <a href="#">Money</a>
                                <a href="#">Entertanment</a>
                                <a href="#">Logo</a>
                                <a href="#">Business</a>
                                <a href="#">Development</a>
                                <a href="#">Investment</a>
                            </div>
                        </div> --}}

                    </div>
                </aside>
            </div>

        </div>
    </div>
</div>

@endsection
