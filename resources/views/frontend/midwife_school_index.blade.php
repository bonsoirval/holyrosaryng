@extends('layouts.frontend.medlab_frontend')

@section('content')
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                        <img src="{{asset('images/slides/slider.png')}}" alt="slider-image">

                        <div class="tp-caption sft desc-slide center color-white color-full" data-x="770" data-y="479" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                            <div class="title main-color-1 font-2">Get Immersed Into Studying</div>
                            <div class="content">If you want to explore multiple subjects in greater depth than you ever did in high school, then you're on the right way. </div>
                        </div>

                    </li>

                    <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                        <img src="{{asset('images/slides/slideee.png')}}" alt="slider-image">

                        <div class="tp-caption sft desc-slide center color-white color-full" data-x="770" data-y="479" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                            <div class="title main-color-1 font-2">Take a Step Toward Your Future Career</div>
                            <div class="content">We offer the best infrastructure to give you the best opportunities and comfort during your study.</div>
                        </div>
                    </li>

                    <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                        <img src="{{asset('images/slides/slidingg.png')}}" alt="slider-image">

                        <div class="tp-caption sft desc-slide center color-white color-full" data-x="770" data-y="479" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                            <div class="title main-color-1 font-2">Inspiration, Innovation, and Discovery</div>
                            <div class="content">We offer the best infrastructure to give you the best opportunities and comfort during your study.</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div> <!-- /.tp-banner-container -->

        <div class="header-overlay-content header-overlay-scroller">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <section class="un-post-scroller un-post-scroller-2901 " data-delay="0">
                            <div class="section-inner-no-padding">
                                <div class="post-scroller-wrap">
                                    <div class="post-scroller-carousel" data-next=".post-scroller-down" data-prev=".post-scroller-up">
                                        <div class="post-scroller-carousel-inner">
                                            <div class="item post-scroller-item active">
                                                <div class="scroller-item-inner">
                                                    <div class="scroller-item-content post-item-mini">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 post-thumbnail-mini">
                                                                <div class="item-thumbnail">
                                                                    <a href="#">
                                                                        <img src="{{asset('images/about/index1/college.jpg')}}" alt="college image">
                                                                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                                        <div class="thumbnail-hoverlay-cross"></div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 col-xs-8 post-content-mini">
                                                                <h4><a class="post-title-mini main-color-1-hover" href="#history" title="Holy Rosary Establishment">Establishment</a></h4>
                                                                <div class="post-excerpt-mini text-justify pull-left">Holy Rosary Hospital, Emekuku was established in 1932 by the early Irish Roman catholic Missionary, <a href="#history" >...Read More</a></div>
                                                            </div>
                                                        </div>
                                                    </div><!--/post-item-mini-->
                                                </div>
                                            </div><!--/post-scroller-item-->

                                            <div class="item post-scroller-item">
                                                <div class="scroller-item-inner">
                                                    <div class="scroller-item-content post-item-mini">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 post-thumbnail-mini">
                                                                <div class="item-thumbnail">
                                                                    <a href="#">
                                                                        <img src="{{asset('images/about/index1/college2.jpg')}}" alt="college image 2">
                                                                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                                        <div class="thumbnail-hoverlay-cross"></div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 col-xs-8 post-content-mini">
                                                                <h4><a class="post-title-mini main-color-1-hover" href="#" title="How We Started">How We Started</a></h4>
                                                                <div class="post-excerpt-mini">Holy Rosary Hospital started as a 200 bedded hospital with only a male and female ward.</div>
                                                            </div>
                                                        </div>
                                                    </div><!--/post-item-mini-->
                                                </div>
                                            </div><!--/post-scroller-item-->

                                            <div class="item post-scroller-item">
                                                <div class="scroller-item-inner">
                                                    <div class="scroller-item-content post-item-mini">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 post-thumbnail-mini">
                                                                <div class="item-thumbnail">
                                                                    <a href="#">
                                                                        <img src="{{asset('images/about/index1/college3.jpg')}}" alt="college image 3">
                                                                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                                        <div class="thumbnail-hoverlay-cross"></div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 col-xs-8 post-content-mini">
                                                                <h4><a class="post-title-mini main-color-1-hover" href="#recognition" title="Recognition of Schools">Recognition of Schools</a></h4>
                                                                <div class="post-excerpt-mini">The schools of Nursing and Midwifery gained their recognition in 1954 and 1965 respectively.<a href="#recognition" >...Read More</a></div>
                                                            </div>
                                                        </div>
                                                    </div><!--/post-item-mini-->
                                                </div>
                                            </div><!--/post-scroller-item-->
                               </div>
                                    </div>
                            </div><!--/section-inner-->
                        </section><!--/u-post-carousel-->
                    </div>
                </div>
            </div>
        </div>

        <section class="flat-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-events">
                            <div class="grid-item color-full">
                                <div class="event-item">
                                    <div class="grid-item-content">
                                        <h1 class="title">Upcoming Exams</h1>
                                        <p>The following are the examination dates for the different schools.</p>
                                        <a class="flat-button" href="">ALL EVENTS<i class="fa fa-angle-right"></i></a>
                                        <br/>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="grid-item-inner">
                                    <div class="event-item">
                                        <div class="event-thumbnail">
                                            <a href="#"><img src="{{asset('images/about/index1/event/gril/grill.jpg')}}" alt="image">
                                            </a>
                                        </div><!-- /event-thumbnail -->

                                        <div class="date-block">
                                            <div class="month">Jun</div>
                                            <div class="day">22</div>
                                        </div><!-- /date-block -->

                                        <div class="event-overlay">
                                            <div class="cs-post-header">
                                                <div class="cs-category-links">
                                                    <a class="overlay-top" href="#">
                                                        <h4>Spark of Genius</h4>

                                                    </a>
                                              <div class="overlay-footer">
                                                        <div>At 8:00 am</div>
                                                        <div>Imo Campus, Owerri Onisha</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /event-overlay -->
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="grid-item-inner">
                                    <div class="event-item">
                                        <div class="event-thumbnail">
                                            <a href="#">
                                                <img  src="{{asset('images/about/index1/event/gril/grill2.jpg')}}" alt="image">
                                            </a>
                                        </div><!-- /event-thumbnail -->

                                        <div class="date-block">
                                            <div class="month">Jun</div>
                                            <div class="day">30</div>
                                        </div><!-- /date-block -->

                                        <div class="event-overlay">
                                            <div class="cs-post-header">
                                                <div class="cs-category-links">
                                                    <a class="overlay-top" href="#">
                                                        <h4>Cancer WorkShop</h4>

                                                    </a>

                                                    <div class="overlay-footer">
                                                        <div>At 7:00 am</div>
                                                        <div>School of Science</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /event-overlay -->
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="grid-item-inner">
                                    <div class="event-item">
                                        <div class="event-thumbnail">
                                            <a href="#">
                                                <img src="{{asset('images/about/index1/event/gril/3.jpg')}}" alt="image">
                                            </a>
                                        </div><!-- /event-thumbnail -->

                                        <div class="date-block">
                                            <div class="month">Jun</div>
                                            <div class="day">20</div>
                                        </div><!-- /date-block -->

                                        <div class="event-overlay">
                                            <div class="cs-post-header">
                                                <div class="cs-category-links">
                                                    <a class="overlay-top" href="#">
                                                        <h4>Student Exchange Program </h4>

                                                    </a>

                                                    <div class="overlay-footer">
                                                        <div>At 10:00 am</div>
                                                        <div>School Of Engineering</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /event-overlay -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="page-title parallax parallax2">
            <div class="container">
                <div class="flat-university">
                    <div class="post">
                        <h1 class="title">FOR THOSE WHO WANT TO STUDY NURSING, MIDWIFERY OR MEDICAL LABORATORY SCIENCE. DON’T SAY NEXT YEAR, SAY NOW!</h1>
                    </div><!--/post -->

                    <div class="button-university">
                        <a class="flat-button color-v2" href="#" data-delay="0">GET STARTED</a>
                    </div><!--/button-university -->
                </div><!--/flat-university -->
            </div><!--/container -->
        </div><!--/page-title -->

        <section class="flat-row padding-small">
            <div class="container">
                <div class="flat-choose-us">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="flat-accordion">
                                <div class="name-toggle">
                                    <h2 class="title"  id="history">Why Choose Us</h2>
                                </div>
                                <div class="flat-toggle">
                                    <div class="toggle-title active">Establishment</div>
                                    <div class="toggle-content text-justify">
                                        <p>Holy Rosary Hospital, Emekuku was established in 1932 by the early Irish Roman catholic Missionary, His Grace, Most Rev. Dr. Charles Heerey, C.S.S.P. the then Archbishop of Onitsha who founded the Congregation of the Sisters of the Immaculate Heart of Mary Mother of Christ, Nigeria in 1937.He invited the Irish Holy Rosary Sisters to run the Hospital. The Holy Rosary Sisters Congregation was founded by Bishop Shanahan in 1924.</p>
                                    </div>
                                </div><!-- /toggle -->
                                <div class="flat-toggle">
                                    <div class="toggle-title" id="starting">How We Started</div>
                                    <div class="toggle-content">
                                        <div class="info">
                                            <p class="desc-info">Holy Rosary Hospital started as a 200 bedded hospital with only a male and female ward..</p>
                                        </div>
                                    </div>
                                </div><!-- /.toggle -->
                                <div class="flat-toggle">
                                    <div class="toggle-title" id="recognition">Recognition of Schools</div>
                                    <div class="toggle-content">
                                        <div class="info">
                                            <p class="desc-info">The schools of Nursing and Midwifery gained their recognition in 1954 and 1965 respectively. In 1959, the Hospital was recognized for the per-registration training of Doctors in Medicine, Surgery, Obstetrics and Gyneacology.</p>
                                        </div>
                                    </div>
                                </div><!-- /.toggle -->

                            </div><!-- /.accordion -->
                        </div><!--/col-md-6 col-sm-6 -->

                        <div class="col-md-6 col-sm-6">
                            <div class="flat-blog">
                                <div class="section-header">
                                    <div class="name-blog">
                                        <h2 class="title">Blog</h2>
                                        <a class="flat-button button-right" href="#2">VISIT BLOG <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>

                                <div class="section-body">
                                    <div class="row">
                                        <div class="col-md-12 shortcode-blog-item">
                                            <div class="content-pad">
                                                <div class="post-item row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="content-pad">
                                                            <div class="item-thumbnail">
                                                                <a href="#">
                                                                    <img src="{{asset('images/about/index1/blog/career.jpg')}}" alt="image">
                                                                    <span class="thumbnail-overlay">Jan 3, 2017</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="content-pad">
                                                            <div class="item-content">
                                                                <h3 class="item-title">
                                                                    <a href="#" title="Your Career Starts Here" class="main-color-1-hover">Your Career Starts Here</a>
                                                                </h3>
                                                                <div class="shortcode-blog-excerpt">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized.</div>
                                                                <div class="item-meta">
                                                                <a class="flat-button" href="#" title="Your Career Starts Here">DETAILS <i class="fa fa-angle-right"></i></a>
                                                                <a href="#" class="main-color-1-hover" title="View comments">0 COMMENTS</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!--/post-item-->
                                            </div>
                                        </div><!--/shortcode-blog-item-->

                                        <div class="col-md-12 shortcode-blog-item">
                                            <div class="content-pad">
                                                <div class="post-item row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="content-pad">
                                                            <div class="item-thumbnail">
                                                                <a href="#">
																																		<img src="{{asset('images/about/index1/blog/career2.jpg')}}" alt="image">
                                                                    <span class="thumbnail-overlay">Jan 3, 2017</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="content-pad">
                                                            <div class="item-content">
                                                                <h3 class="item-title">
                                                                    <a href="#" title="Spark Of Genius" class="main-color-1-hover">Spark Of Genius</a>
                                                                </h3>
                                                                <div class="shortcode-blog-excerpt">To take a trivial example which of us ever undertakes laborious physical exercise except.</div>
                                                                <div class="item-meta">
                                                                    <a class="flat-button" href="#" title="Spark Of Genius">DETAILS <i class="fa fa-angle-right"></i></a>
                                                                    <a href="#" class="main-color-1-hover" title="View comments">0 COMMENTS</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!--/post-item-->
                                            </div>
                                        </div><!--/shortcode-blog-item-->
                                    </div><!--/row-->
                                </div>
                            </div>
                        </div><!--/col-md-6 col-sm-6 -->
                    </div>
                </div>
            </div>
        </section>
@endsection
