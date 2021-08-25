@extends('layouts/app')

@section('content')

    <CarouselHome-component></CarouselHome-component>
    <section id="page-content" class="sidebar-right" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <!-- post content -->
                <div class="content col-lg-9">
                    <!-- Page title -->
                    <div class="page-title">
                        <h1>ข่าวประชาสัมพันธ์ (ล่าสุด)</h1>
                        <div class="breadcrumb float-left">
                            <ul>
                                <li><a href="#">Home</a>
                                </li>
                                <li><a href="#">Blog</a>
                                </li>
                                <li class="active"><a href="#">Sidebar Right</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end: Page title -->
                    <!-- Blog -->
                    <div id="blog" class="post-thumbnails">
                        <!-- Post item-->
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="images/blog/12.jpg">
                                    </a>
                                    <span class="post-meta-category"><a href="">Lifestyle</a></span>
                                </div>
                                <div class="post-item-description">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                    <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                            Comments</a></span>
                                    <h2><a href="#">Standard post with a single image
                                        </a></h2>
                                    <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo
                                        dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                    <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end: Post item-->
                        <!-- Post item-->
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-slider">
                                    <div class="carousel dots-inside arrows-visible arrows-only flickity-enabled is-draggable carousel-loaded"
                                        data-items="1" data-loop="true" data-autoplay="true" data-lightbox="gallery">


                                        <div class="flickity-viewport" style="height: 250.469px; touch-action: pan-y;">
                                            <div class="flickity-slider" style="left: 0px; transform: translateX(-100%);">
                                                <div class="polo-carousel-item"
                                                    style="width: 100%; position: absolute; left: 200%;" aria-hidden="true">
                                                    <a href="images/blog/11.jpg" data-lightbox="gallery-image">
                                                        <img alt="" src="images/blog/16.jpg">
                                                    </a></div>
                                                <div class="polo-carousel-item is-selected"
                                                    style="width: 100%; position: absolute; left: 100%;"><a
                                                        href="images/blog/16.jpg" data-lightbox="gallery-image">
                                                        <img alt="" src="images/blog/11.jpg">
                                                    </a></div>
                                            </div>
                                        </div><button class="flickity-button flickity-prev-next-button previous"
                                            type="button" aria-label="Previous"><svg class="flickity-button-icon"
                                                viewBox="0 0 100 100">
                                                <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow">
                                                </path>
                                            </svg></button><button class="flickity-button flickity-prev-next-button next"
                                            type="button" aria-label="Next"><svg class="flickity-button-icon"
                                                viewBox="0 0 100 100">
                                                <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"
                                                    transform="translate(100, 100) rotate(180) "></path>
                                            </svg></button>
                                        <ol class="flickity-page-dots">
                                            <li class="dot" aria-label="Page dot 1"></li>
                                            <li class="dot is-selected" aria-label="Page dot 2" aria-current="step"></li>
                                        </ol>
                                    </div>
                                    <span class="post-meta-category"><a href="">Technology</a></span>
                                </div>
                                <div class="post-item-description">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                    <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                            Comments</a></span>
                                    <span class="post-meta-category">Lifestyle</span>
                                    <h2><a href="#">Simplicity, a post with slider gallery</a></h2>
                                    <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo
                                        dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                    <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end: Post item-->
                        <!-- Post item Vimeo-->
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-video">
                                    <div class="ratio ratio-16x9">
                                        <iframe
                                            src="https://player.vimeo.com/video/198559065?title=0&amp;byline=0&amp;portrait=0"
                                            width="640" height="360" frameborder="0" webkitallowfullscreen=""
                                            mozallowfullscreen="" allowfullscreen=""></iframe>
                                    </div>
                                    <span class="post-meta-category"><a href="">Video</a></span>
                                </div>
                                <div class="post-item-description">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                    <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                            Comments</a></span>
                                    <span class="post-meta-category"><a href=""><i
                                                class="fa fa-tag"></i>Lifestyle</a></span>
                                    <h2><a href="#">Vimeo Video, this is a example post with Vimeo video</a></h2>
                                    <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo
                                        dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                    <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end: Post item Vimeo-->
                        <!-- Post item YouTube-->
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-video">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dA8Smj5tZOQ"
                                        frameborder="0" allowfullscreen=""></iframe>
                                    <span class="post-meta-category"><a href="">Video</a></span>
                                </div>
                                <div class="post-item-description">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                    <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                            Comments</a></span>
                                    <span class="post-meta-category"><a href=""><i
                                                class="fa fa-tag"></i>Lifestyle</a></span>
                                    <h2><a href="#">YouTube Video, this is a example post with YouTube</a></h2>
                                    <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo
                                        dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                    <a href="#" class="item-link">Read More </a>
                                </div>
                            </div>
                        </div>
                        <!-- end: Post item YouTube-->
                        
                    </div>
                    <!-- end: Blog -->
                    <!-- Pagination -->
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                    <!-- end: Pagination -->
                </div>
                <!-- end: post content -->
                <!-- Sidebar-->
                <div class="sidebar sticky-sidebar col-lg-3"
                    style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1004px;">
                    <!--Tabs with Posts-->

                    <!--End: Tabs with Posts-->
                    <!-- Twitter widget -->

                    <!-- end: Twitter widget-->
                    <!--widget tags -->

                    <!--end: widget tags -->
                    <!--widget newsletter-->

                    <!--end: widget newsletter-->
                    <div class="theiaStickySidebar"
                        style="padding-top: 0px; padding-bottom: 1px; position: fixed; transform: translateY(120px); width: 246.25px; left: 1300.25px; top: 0px;">
                        <div class="widget ">
                            <h4 class="widget-title">เข้าชมมากที่สุด</h4>
                            <div class="post-thumbnail-list">
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="images/blog/thumbnail/5.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">A true story, that never been told!</a>
                                        <span class="post-date"><i class="icon-clock"></i> 6m ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    </div>
                                </div>
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="images/blog/thumbnail/6.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">Beautiful nature, and rare feathers!</a>
                                        <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                    </div>
                                </div>
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="images/blog/thumbnail/7.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">Lorem ipsum dolor sit amet</a>
                                        <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="widget  widget-tags">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tags">
                                <a href="#">Design</a>
                                <a href="#">Portfolio</a>
                                <a href="#">Digital</a>
                                <a href="#">Branding</a>
                                <a href="#">HTML</a>
                                <a href="#">Clean</a>
                                <a href="#">Peace</a>
                                <a href="#">Love</a>
                                <a href="#">CSS3</a>
                                <a href="#">jQuery</a>
                            </div>
                        </div>
                        <div class="widget  widget-newsletter">
                            <form class="widget-subscribe-form" novalidate="" action="include/subscribe-form.php"
                                role="form" method="post">
                                <h4 class="widget-title">Newsletter</h4>
                                <small>Stay informed on our latest news!</small>
                                <div class="input-group">
                                    <input type="email" required="" name="widget-subscribe-form-email"
                                        class="form-control required email" placeholder="Enter your Email">
                                    <span class="input-group-btn">
                                        <button type="submit" id="widget-subscribe-submit-button" class="btn btn-primary"><i
                                                class="fa fa-paper-plane"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end: Sidebar-->
            </div>
        </div>
    </section>


@endsection
