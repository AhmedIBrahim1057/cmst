@extends('frontend.frontendTemplate')

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-sm parallax overlay overlay-color-dark overlay-show overlay-op-1 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{asset('frontendFiles/img/slides/slide-2.jpg')}}">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-12 align-self-center text-center">
                    <h1 class="text-9 text-color-light custom-secondary-font font-weight-bold mb-1">Who We Are</h1>
                    <p class="text-color-light custom-secondary-font text-uppercase mb-0">About Us</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-tertiary section-no-border m-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <h2 class="font-weight-bold custom-text-color-1 m-0">
                        Welcome to the website for our project 
                    </h2>
                    <h2 class="font-weight-bold custom-text-color-1 m-0">
                        <span class="font-weight-normal custom-secondary-font custom-font-italic">‘Condition Monitoring for Sustainable Technologies and Climate Change Mitigation’</span>
                    </h2>
                    <p class="mt-3">
                        In the year 2022, climate change needs no introduction. It’s in our public discourse, it’s on our news feeds, and it’s on our doorsteps. However, the solutions to the situation in which we find ourselves are diverse, ranging from the extravagant to the mundane, from global paradigm shifts to behavioural changes at the individual level. This internationally collaborative project revolves round three strands of the solution; condition monitoring for sustainable technologies, E-Learning as a non-polluting educational means, and waste reduction through repair; and ties them all together through the central themes of education, dissemination, and sharing of ideas. 
                        
                        
                        This website will both introduce you to the various strands of the project, and act as an interactive resource, allowing you to join us on this journey. Please click on whichever of the project tabs grabs your attention in the navigation bar at the top of the screen to get started.
                        “Condition Monitoring for Sustainable Technologies and Climate Change Mitigation” Project is supported by a UK – Egypt HE partnerships for Climate Change  grant from the British Council’s Going Global Partnerships programme. The programme builds stronger, more inclusive, internationally connected higher education and TVET systems.
                        For more information, please visit <a href="https://www.britishcouncil.org/going-global-partnerships" target="_blank">www.britishcouncil.org/going-global-partnerships</a>.
                        
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-no-border bg-color-light m-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-7">
                    <h2 class="font-weight-bold">Condition Monitoring For Sustainable Technologies</h2>
                    <p>The project is multifaceted and will play a role in tackling climate change on several levels; directly and immediately, through the reduction of waste, and  the instillation of small-scale renewable energy generation capacity; and indirectly, through educating the next generation of engineers, and creating a renewable energy generation guide to help community groups power their operations sustainably.</p>
                    <p class="text-2">The research work is collaborative between Ain Shams University and Cardiff University and will create sustainability-focused E-Learning resources for university students, to encourage the next generation of engineers to understand their role in mitigating climate change. It will also create a guide for affordable renewable energy generation for community projects, and establish a repair cafe event in Ain Shams University.</p>
                </div>
                <div class="col-lg-5 col-sm-5 d-none d-sm-block">
                    <div class="custom-box-squares">
                        <img class="custom-cloud left-pos-2" alt src="{{asset('frontendFiles/img/demos/church/others/left-cloud.png')}}" />
                        <div class="custom-big-square left-pos-2 custom-box-shadow" style="background: url('img/demos/church/others/big-left-square-img.jpg'); background-size: cover;"></div>
                        <div class="custom-small-square left-pos-2 custom-box-shadow" style="background: url('img/demos/church/others/small-left-square-img.jpg'); background-size: cover;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection