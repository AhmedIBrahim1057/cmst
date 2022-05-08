@extends('frontend.frontendTemplate')

@section('content')
<div role="main" class="main">

    {{-- slider  --}}
    <div class="slider-container rev_slider_wrapper" style="height: 600px;">
        <div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
            <ul>
                <li data-transition="fade">
                    <img src="{{asset('frontendFiles/img/slides/slide-3.jpg')}}"  
                        alt="Proceed to the Next Steps"
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat"
                        class="rev-slidebg">

                    <div class="tp-caption text-color-light custom-secondary-font"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-90"
                        data-start="800"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="font-size: 22px;">The future is</div>

                    <h1 class="tp-caption text-color-light custom-secondary-font font-weight-bold"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-50"
                        data-start="1100"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="font-size: 34px;">Green energy, sustainability, renewable energy</h1>

                    <div class="tp-caption text-uppercase text-color-light custom-secondary-font"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="0"
                        data-start="1400"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="font-size: 22px;">CMST</div>

                    <a href="demo-church-about-us.html" class="tp-caption btn btn-primary custom-btn-style-1 text-uppercase"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="90"
                        data-start="1700"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;" 
                        data-fontsize="['16','16','16','24']">Learn More</a>
                </li>
                <li data-transition="fade" class="slide-overlay">
                    <img src="{{asset('frontendFiles/img/slides/slide-4.jpg')}}"  
                        alt="Proceed to the Next Steps"
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat"
                        class="rev-slidebg">

                    <div class="tp-caption text-color-light custom-secondary-font"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-90"
                        data-start="800"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="font-size: 22px;">E-Learning is </div>

                    <h1 class="tp-caption text-color-light custom-secondary-font font-weight-bold"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-50"
                        data-start="1100"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="font-size: 34px;">Advancing as a non-polluting means for education</h1>

                    <div class="tp-caption text-uppercase text-color-light custom-secondary-font"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="0"
                        data-start="1400"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="font-size: 22px;">CMST</div>

                    <a href="demo-church-about-us.html" class="tp-caption btn btn-primary custom-btn-style-1 text-uppercase"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="90"
                        data-start="1700"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;" 
                        data-fontsize="['16','16','16','24']">Learn More</a>
                </li>
                <li data-transition="fade" class="slide-overlay">
                    <img src="{{asset('frontendFiles/img/slides/slide-5.jpg')}}"  
                        alt="Proceed to the Next Steps"
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat"
                        class="rev-slidebg">

                    <div class="tp-caption text-color-light custom-secondary-font"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-90"
                        data-start="800"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="font-size: 22px;">Repairing is</div>

                    <h1 class="tp-caption text-color-light custom-secondary-font font-weight-bold"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-50"
                        data-start="1100"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="font-size: 34px;">A key solution for increasing lifetime of your product</h1>

                    <div class="tp-caption text-uppercase text-color-light custom-secondary-font"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="0"
                        data-start="1400"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="font-size: 22px;">CMST</div>

                    <a href="demo-church-about-us.html" class="tp-caption btn btn-primary custom-btn-style-1 text-uppercase"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="90"
                        data-start="1700"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;" 
                        data-fontsize="['16','16','16','24']">Learn More</a>
                </li>
                <li data-transition="fade" class="slide-overlay">
                    <img src="{{asset('frontendFiles/img/slides/slide-6.jpg')}}"  
                        alt="Proceed to the Next Steps"
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat"
                        class="rev-slidebg">

                    <div class="tp-caption text-color-light custom-secondary-font"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-90"
                        data-start="800"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="font-size: 22px;">Instead of “throwaway” culture</div>

                    <h1 class="tp-caption text-color-light custom-secondary-font font-weight-bold"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-50"
                        data-start="1100"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="font-size: 34px;">follow the 3Rs culture; Reuse, Recycle, and Repair</h1>

                    <div class="tp-caption text-uppercase text-color-light custom-secondary-font"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="0"
                        data-start="1400"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="font-size: 22px;">CMST</div>

                    <a href="demo-church-about-us.html" class="tp-caption btn btn-primary custom-btn-style-1 text-uppercase"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="90"
                        data-start="1700"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;" 
                        data-fontsize="['16','16','16','24']">Learn More</a>
                </li>
                <li data-transition="fade" class="slide-overlay">
                    <img src="{{asset('frontendFiles/img/slides/slide-8.jpg')}}"  
                        alt="Proceed to the Next Steps"
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat"
                        class="rev-slidebg">

                    <div class="tp-caption text-color-light custom-secondary-font"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-90"
                        data-start="800"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="font-size: 22px;">Condition Monitoring</div>

                    <h1 class="tp-caption text-color-light custom-secondary-font font-weight-bold"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-50"
                        data-start="1100"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="font-size: 34px;">Tells you about the structural performance before it is too late!</h1>

                    <div class="tp-caption text-uppercase text-color-light custom-secondary-font"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="0"
                        data-start="1400"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="font-size: 22px;">CMST</div>

                    <a href="demo-church-about-us.html" class="tp-caption btn btn-primary custom-btn-style-1 text-uppercase"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="90"
                        data-start="1700"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];opacity:0;s:500;"
                        data-transform_out="opacity:0;s:500;" 
                        data-fontsize="['16','16','16','24']">Learn More</a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Section below slider  --}}
    <section class="section section-tertiary section-no-border m-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    {{-- <span class="custom-secondary-font font-weight-bold custom-text-color-1 text-4">First time visitor</span> --}}
                    <h2 class="font-weight-bold custom-text-color-1 m-0">Welcome to the website for our project.
                        <span class="font-weight-normal custom-secondary-font custom-font-italic">CMST</span></h2>
                </div>
                <div class="col-lg-2 mt-4 mt-lg-0">
                    <a href="{{route('contact')}}" class="btn btn-primary custom-btn-style-1 text-uppercase">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Introduction --}}
    <section class="section section-no-border custom-position-relative custom-section-padding-1 bg-color-light m-0">
        <img class="custom-cloud left-pos d-none d-md-block appear-animation" data-appear-animation="customFadeInLeftNoRotate" data-appear-animation-delay="0" data-plugin-options="{'accY': -300}" src="{{asset('frontendFiles/img/demos/church/others/left-cloud.png')}}" alt />
        <div class="custom-big-square left-pos d-none d-md-block custom-box-shadow appear-animation" data-appear-animation="customFadeInLeft" data-appear-animation-delay="500" data-plugin-options="{'accY': -300}" style="background: url('img/demos/church/others/big-left-square-img.jpg'); background-size: cover;"></div>
        <div class="custom-small-square left-pos d-none d-md-block custom-box-shadow appear-animation" data-appear-animation="customFadeInLeft" data-appear-animation-delay="1000" data-plugin-options="{'accY': -300}" style="background: url('img/demos/church/others/small-left-square-img.jpg'); background-size: cover;"></div>
        <img class="custom-cloud right-pos d-none d-md-block appear-animation" data-appear-animation="customFadeInRightNoRotate" data-appear-animation-delay="0" data-plugin-options="{'accY': -300}" src="{{asset('frontendFiles/img/demos/church/others/right-cloud.png')}}" alt />
        <div class="custom-big-square right-pos d-none d-md-block custom-box-shadow appear-animation" data-appear-animation="customFadeInRight" data-appear-animation-delay="500" data-plugin-options="{'accY': -300}" style="background: url('img/demos/church/others/big-right-square-img.jpg'); background-size: cover;"></div>
        <div class="custom-small-square right-pos d-none d-md-block custom-box-shadow appear-animation" data-appear-animation="customFadeInRight" data-appear-animation-delay="1000" data-plugin-options="{'accY': -300}" style="background: url('img/demos/church/others/small-right-square-img.jpg'); background-size: cover;"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-xl-11">
                    <h2 class="font-weight-bold">Condition Monitoring for Sustainable Technologies and Climate Change Mitigation</h2>
                    <p>In the year 2022, climate change needs no introduction. It’s in our public discourse, it’s on our news feeds, and it’s on our doorsteps. However, the solutions to the situation in which we find ourselves are diverse, ranging from the extravagant to the mundane, from global paradigm shifts to behavioural changes at the individual level. This internationally collaborative project revolves round three strands of the solution; condition monitoring for sustainable technologies, E-Learning as a non-polluting educational means, and waste reduction through repair; and ties them all together through the central themes of education, dissemination, and sharing of ideas.</p>
                    <a href="{{route('about')}}" class="btn btn-primary custom-btn-style-1 text-uppercase mt-4">Read More</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="section section-background section-no-border m-0" style="background: url({{asset('frontendFiles/img/demos/church/testimonial/testimonial-bg-1.jpg')}})">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col">
                    <h2 class="font-weight-bold">Testimonials</h2>
                    <div class="owl-carousel owl-theme custom-arrows-style-1 custom-sm-nav-bottom" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true}">
                        <div class="row justify-content-center">
                            <div class="col-sm-10 col-lg-8">
                                <div class="testimonial testimonial-style-2 custom-testimonial-style text-center">
                                    <div class="testimonial-quote bg-color-light"><i class="fas fa-quote-left text-color-primary"></i></div>
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac auctor eros, id gravida libero. Proin elit tellus, sollicitudin et ultrices a, hendrerit efficitur enim. Etiam pulvinar et risus nec pulvinar. Morbi eget enim scelerisque, imperdiet ligula sit amet, porta enim. Ut eros quam, venenatis at placerat.</p>
                                    </blockquote>
                                    <hr class="divider dashed divider-xs mt-0 mb-3">
                                    <div class="testimonial-author">
                                        <p>
                                            <strong class="text-uppercase">Joe Albert Doe </strong>
                                            <span class="text-color-primary"> - The Reverend</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-10 col-lg-8">
                                <div class="testimonial testimonial-style-2 custom-testimonial-style text-center">
                                    <div class="testimonial-quote bg-color-light"><i class="fas fa-quote-left text-color-primary"></i></div>
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus feugiat diam, nec luctus orci molestie vel. Suspendisse potenti. Quisque id aliquet dolor, posuere posuere purus. Aenean mauris ipsum, pulvinar ut rutrum eget, maximus in libero. Praesent.</p>
                                    </blockquote>
                                    <hr class="divider dashed divider-xs mt-0 mb-3">
                                    <div class="testimonial-author">
                                        <p>
                                            <strong class="text-uppercase">Henry  Doe</strong>
                                            <span class="text-color-primary"> - Associate Minister</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Partners --}}
    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-12 col-sm-8">
                    <h2 class="font-weight-bold">Partners</h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-md-3 col-sm-6 p-5 d-flex justify-content-center align-items-center">
                    <a href="https://eng.asu.edu.eg/" target="_blank">
                        <img class="img-fluid" src="{{asset('frontendFiles/img/partners/1.png')}}" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-6 p-5 d-flex justify-content-center align-items-center">
                    <a href="https://www.britishcouncil.org/" target="_blank">
                        <img class="img-fluid" src="{{asset('frontendFiles/img/partners/2.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-6 p-5 d-flex justify-content-center align-items-center">
                    <a href="https://isc.cardiff.ac.uk/" target="_blank">
                        <img class="img-fluid" src="{{asset('frontendFiles/img/partners/3.png')}}" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-6 p-5 d-flex justify-content-center align-items-center">
                    <a href="https://repaircafewales.org/" target="_blank">
                        <img class="img-fluid" src="{{asset('frontendFiles/img/partners/4.png')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section section-secondary section-no-border m-0">
        <div class="container">
            <div class="row justify-content-center text-center custom-negative-margin-1">
                <div class="col">
                    <div class="countdown custom-newcomers-class custom-secondary-font custom-box-shadow font-weight-bold text-color-dark" data-plugin-countdown data-plugin-options="{'date': '2022/01/01 12:00:00', 'numberClass': 'font-weight-bold text-color-primary', 'wrapperClass': 'text-color-dark', 'insertHTMLbefore': 'Newcomers Class', 'textDay': 'Day', 'textHour': 'Hrs', 'textMin': 'Min', 'textSec': 'Sec', 'uppercase': false}"></div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-4 col-sm-8 mb-4 mb-lg-0">
                    <img src="{{asset('frontendFiles/img/demos/church/icons/custom-icon-1.png')}}" alt class="img-repsonsive" />
                    <h2 class="font-weight-bold text-color-light">Our Values</h2> 
                    <p class="custom-text-color-2">Lorem ipsum dolor sit amet, adipiscing elit.</br> Mauris accumsan tortor ut posuere consequat.</br> Fusce aliquet, dolor eget tempus ultricies, eros.</p>
                </div>
                <div class="col-lg-4 col-sm-8 mb-4 mb-lg-0">
                    <img src="{{asset('frontendFiles/img/demos/church/icons/custom-icon-2.png')}}" alt class="img-repsonsive" />
                    <h2 class="font-weight-bold text-color-light">Join with Us</h2>
                    <p class="custom-text-color-2"><strong class="text-color-light">Sundays at 8.00pm - 9.00pm</strong></br> at Porto Church, 123 porto</br> ave porto, PT 12345</p>
                </div>
                <div class="col-lg-4 col-sm-8">
                    <img src="{{asset('frontendFiles/img/demos/church/icons/custom-icon-3.png')}}" alt class="img-repsonsive" />
                    <h2 class="font-weight-bold text-color-light">Our Mission</h2>
                    <p class="custom-text-color-2">Lorem ipsum dolor sit amet, adipiscing elit.</br> Mauris accumsan tortor ut posuere consequat.</br> Fusce aliquet, dolor eget tempus ultricies, eros.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-no-border bg-color-light m-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="font-weight-bold">Next Event</h2>
                    <article class="thumb-info custom-thumb-info custom-box-shadow">
                        <span class="thumb-info-wrapper">
                            <a href="demo-church-events-detail.html">
                                <img src="{{asset('frontendFiles/img/demos/church/event/event-1.jpg')}}" alt class="img-fluid" />
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="custom-event-infos">
                                <ul>
                                    <li>
                                        <i class="far fa-clock"></i>
                                        5:00 PM
                                    </li>
                                    <li class="text-uppercase">
                                        <i class="fas fa-map-marker-alt"></i>
                                        New York
                                    </li>
                                </ul>
                            </span>
                            <span class="thumb-info-caption-text">
                                <h4 class="font-weight-bold mb-2">
                                    <a href="demo-church-events-detail.html" class="text-decoration-none custom-secondary-font text-color-dark">
                                        Mauris sagitis urna molestie
                                    </a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a lectus vitae arcu bibendum condimentum. In a porta nunc ...</p>
                            </span>
                        </span>
                    </article>
                </div>
                <div class="col-lg-6">
                    <h2 class="font-weight-bold">Upcoming Event</h2>
                    <article class="custom-post-event">
                        <div class="post-event-date bg-color-primary text-center">
                            <span class="month text-uppercase custom-secondary-font text-color-light">Nov</span>
                            <span class="day font-weight-bold text-color-light">10</span>
                            <span class="year text-color-light">2020</span>
                        </div>
                        <div class="post-event-content custom-margin-1">
                            <span class="custom-event-infos">
                                <ul>
                                    <li>
                                        <i class="far fa-clock"></i>
                                        5:00 PM
                                    </li>
                                    <li class="text-uppercase">
                                        <i class="fas fa-map-marker-alt"></i>
                                        New York
                                    </li>
                                </ul>
                            </span>
                            <h4 class="font-weight-bold">
                                <a href="demo-church-events-detail.html" class="text-decoration-none custom-secondary-font text-color-dark">Mauris ornare semeu lorem</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin commodo nisl a fermentum varius. Aenean interdum lectus at tortor ullamcorper, eu maximus...</p>
                        </div>
                    </article>
                    <hr class="solid">
                    <article class="custom-post-event">
                        <div class="post-event-date bg-color-primary text-center">
                            <span class="month text-uppercase custom-secondary-font text-color-light">Nov</span>
                            <span class="day font-weight-bold text-color-light">11</span>
                            <span class="year text-color-light">2020</span>
                        </div>
                        <div class="post-event-content custom-margin-1">
                            <span class="custom-event-infos">
                                <ul>
                                    <li>
                                        <i class="far fa-clock"></i>
                                        5:00 PM
                                    </li>
                                    <li class="text-uppercase">
                                        <i class="fas fa-map-marker-alt"></i>
                                        New York
                                    </li>
                                </ul>
                            </span>
                            <h4 class="font-weight-bold">
                                <a href="demo-church-events-detail.html" class="text-decoration-none custom-secondary-font text-color-dark">Curabitur vehicula massa</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue dui non libero tincidunt commodo. Proin eget venenatis mauris.</p>
                        </div>
                    </article>
                    <a href="demo-church-events.html" class="btn btn-primary custom-btn-style-1 text-uppercase custom-margin-1 mt-4">All Events</a>
                </div>
            </div>
        </div>
    </section> --}}
@endsection