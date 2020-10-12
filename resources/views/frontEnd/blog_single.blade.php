@extends('frontEnd.layouts.app',['pageTitle' => __('Blog Details')])
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
                	<div class="blog-detail">
						<div class="inner-box">
							<div class="image">
								<img src="{{asset(Storage::url($blog->image))}}" alt="Image" />
							</div>
							<div class="lower-content">
								<ul class="post-meta">
									<li><span class="icon flaticon-calendar-1"></span>{{date('F d, Y', strtotime($blog->created_at))}}</li>
									<li><span class="icon flaticon-user-3"></span>By Admin</li>
								</ul>
								<h4>{{$blog->header}}</h4>
								<div class="text">
									<p>{!!$blog->description!!}</p>

									<div class="two-column">
										<div class="row clearfix">
											<div class="column col-lg-6 col-md-6 col-sm-12">
												<div class="image">
													<img src="{{asset(Storage::url($blog->thumbnail))}}" alt="Thumbnail" />
												</div>
											</div>
											<div class="column col-lg-6 col-md-6 col-sm-12">
												<p>{!!$blog->shortDescription!!}</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Post Share Options-->
								<div class="post-share-options">
									<div class="post-share-inner clearfix">
										<div class="pull-left tags"><span>Tags: </span>{{$blog->tag}}</div>
										<ul class="social-box pull-right">
											<li class="facebook"><a href="#"><span class="fa fa-facebook-f"></span></a></li>
											<li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li class="linkedin"><a href="#"><span class="fa fa-google-plus"></span></a></li>
											<li class="vimeo"><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
											<li class="vimeo"><a href="#"><span class="fa fa-dribbble"></span></a></li>
										</ul>
									</div>
								</div>

							</div>

							<!-- New Posts -->
                            {{-- <div class="news-posts">
                            	<div class="clearfix">

                                    <div class="pull-left prev-post">
										<div class="image"><img src="{{ asset('frontEnd') }}/images/resource/news-15.jpg" alt="" /></div>
										<h4><a href="#">Friendly Horses Are <br> Born This Way</a></h4>
                                    	<a class="arrow" href="#"><span class="fa fa-angle-double-left"></span> prev article</a>
                                    </div>

                                    <div class="pull-right next-post">
										<div class="image"><img src="{{ asset('frontEnd') }}/images/resource/news-16.jpg" alt="" /></div>
										<h4><a href="#">How to Introduce <br> New Horses</a></h4>
                                    	<a class="arrow" href="#">next article <span class="fa fa-angle-double-right"></span></a>
                                    </div>

                                </div>
                            </div> --}}


						</div>


						<!-- Comments Area -->
						{{-- <div class="comments-area">
							<div class="group-title">
								<h4>People Comments </h4>
							</div>

							<div class="comment-box">
								<div class="comment">
									<div class="author-thumb"><img src="{{ asset('frontEnd') }}/images/resource/author-7.jpg" alt=""></div>
									<div class="comment-info clearfix"><strong>Paul Jones</strong><div class="comment-time">August 29, 2019</div></div>
									<div class="text">Cosmic ocean science Tunguska event the only home we’ve ever known Orion’s sword, concept of the one billions upon billions paroxysm of global death.</div>
									<a class="theme-btn reply-btn" href="#">Reply</a>
								</div>
							</div>

							<div class="comment-box reply-comment">
								<div class="comment">
									<div class="author-thumb"><img src="{{ asset('frontEnd') }}/images/resource/author-8.jpg" alt=""></div>
									<div class="comment-info clearfix"><strong>Catherine Brown </strong><div class="comment-time">August 29, 2019</div></div>
									<div class="text">Cosmic ocean science Tunguska event the only home we’ve ever, concept of the one billions upon billions paroxysm of global death.</div>
									<a class="theme-btn reply-btn" href="#">Reply</a>
								</div>
							</div>

						</div> --}}

						<!-- Comment Form -->
						{{-- <div class="comment-form">

							<div class="group-title"><h4>Leave A Comment</h4></div>

							<!--Comment Form-->
							<form method="post" action="#">
								<div class="row clearfix">

									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<input type="text" name="username" placeholder="Full Name" required>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="email" name="email" placeholder="Email" required>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="subject" placeholder="Subject" required>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea class="darma" name="message" placeholder="Message"></textarea>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Post Comments</span></button>
									</div>

								</div>
							</form>

						</div> --}}
						<!--End Comment Form -->

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
                                        @foreach (Helpers::findAll('blog_categories') as $item)
                                            <li><a href="{{url('/blog',['slug'=>$item->slug])}}">{{$item->name}} <span>( {{Helpers::countTblData('blogs', 'blog_category_id', $item->id)}} )</span></a></li>
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
