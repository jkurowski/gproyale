@extends('layouts.homepage')

@section('content')
<div id="slider">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 d-flex justify-content-center align-items-center h-100">
                <img src="{{ asset('/images/headers/15th.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-inside">
                    <p class="h2 center-justified"><b>GP Royale</b> was born out of past experiences with large scale global conferences, that provides bespoke live conference and event services to corporate companies. We have produced corporate events across the world, in Warsaw, London O2, Tokyo, Rio de Janeiro, Barcelona, Hanoi and Dubai, to name just a few.</p>
                </div>

                <div class="section-title">
                    <h2>VIDEO OF PAST EVENTS</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-8 col-xxl-12">
                <a class="swipebox" data-type="video" rel="vimeo" href="http://vimeo.com/819495436">
                    <img src="{{ asset('/images/video-past-events.jpg') }}" alt="VIDEO WITH PAST EVENTS" width="1200" height="849" class="m-auto">
                </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-inside">
                    <p class="center-justified">Our team is dedicated to delivering exceptional experiences that surpass our clients' expectations, and we take pride in being the go - to event management company for businesses in need of a professional and reliable partner.</p>
                    <p>&nbsp;</p>
                    <p class="center-justified">We create diverse, original live events, with emphasis on learning, team building, motivation and fun. With a wealth of experience organising conferences and events, it is our attention to detail that ensures everything runs to plan.</p>
                    <p>&nbsp;</p>
                    <p class="center-justified">You have the option to consult our creative media specialists regarding marketing, branding and communication, with continued support prior, during and post event. We specialize in organizing corporate conferences, seminars, and workshops that cater to the unique needs and goals of our clients.</p>
                    <p>&nbsp;</p>
                    <p class="center-justified">We offer a comprehensive range of conference services, including venue selection, catering, audio - visual equipment, live streaming, registration and ticketing, and event logistics.</p>
                    <p>&nbsp;</p>
                    <p class="center-justified">We collaborate closely with our clients to achieve their vision, co - curating programming and working with our in - house creative teams</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">

        <div class="col-12 text-center section">
            <div class="row">
                <div class="col-6">
                    <a href="{{ asset('/uploads/gallery/images/main-gal-1.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/main-gal-1.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
                </div>
                <div class="col-6">
                    <a href="{{ asset('/uploads/gallery/images/main-gal-2.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/main-gal-2.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
                </div>
                <div class="col-6 mt-4">
                    <a href="{{ asset('/uploads/gallery/images/main-gal-3.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/main-gal-3.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
                </div>
                <div class="col-6 mt-4">
                    <a href="{{ asset('/uploads/gallery/images/main-gal-4.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/main-gal-4.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
                </div>
                <div class="col-6 mt-4">
                    <a href="{{ asset('/uploads/gallery/images/main-gal-5.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/main-gal-5.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
                </div>
                <div class="col-6 mt-4">
                    <a href="{{ asset('/uploads/gallery/images/main-gal-6.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/main-gal-6.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
                </div>
            </div>
        </div>

    </div>
</div>

<section class="pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="text-inside">
                    <p class="h2 center-justified">From our past experiences, providing high quality Grand Prix events on luxury super yachts at the Abu Dhabi circuit and at the Monaco F1, we are, with our relationship partners in the UAE, able to offer not just a remarkable F1 experience, but so much more</p>
                </div>

                <div class="section-title">
                    <h2>F1 GRAND PRIX VIDEOS</h2>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a class="swipebox" data-type="video" rel="vimeo-abu-dhabi" href="http://vimeo.com/804275495">
                            <img src="{{ asset('/images/video-abu-dhabi-grand-prix.jpg') }}" width="780" height="550" alt="VIDEO ABU DHABI GRAND PRIX">
                        </a>
                    </div>
                    <div class="col-6">
                        <a class="swipebox" data-type="video" rel="vimeo-monaco-grand-prix" href="http://vimeo.com/804279459">
                            <img src="{{ asset('/images/video-monaco-grand-prix.jpg') }}" width="780" height="550" alt="VIDEO MONACO GRAND PRIX">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-inside">
                    <div class="separator">
                        <img src="{{ asset("/images/separator.png") }}" alt="Section separator" width="1081" height="71">
                    </div>

                    <p class="h2 center-justified">The 2023 Formula 1 World Championship will again conclude with the Abu Dhabi Grand Prix at the spectacular Yas Marina circuit. Since the track’s debut in 2009, it has hosted four title -deciding races and with Ferrari and Mercedes keen to close the gap this year, on reigning champions Red Bull, hopes are high for another great final round showdown!</p>
                    <p>&nbsp;</p>
                    <p class="h2 center-justified">Abu Dhabi also sees a winner crowned in F2, as the series also comes to a close here</p>
                </div>
            </div>

            <div class="col-12 text-center section">
                <p>[[ Placeholder for gallery ]]</p>
            </div>

            <div class="col-12">
                <blockquote class="freight text-center"><i>Rev up your</i> BUSINESS <i>with</i> GP ROYALE <br><i>COME and JOIN us for an</i> ELECTRIFYING F1 <br><i>experience at ABU DHABI GRAND PRIX</i></blockquote>
            </div>
        </div>
    </div>
</section>

<picture>
    <source srcset="{{ asset("/images/formula-1-grand-prix-etihad.webp") }}" type="image/webp">
    <source srcset="{{ asset("/images/formula-1-grand-prix-etihad.jpg") }}" type="image/jpeg">
    <img src="{{ asset("/images/formula-1-grand-prix-etihad.jpg") }}" alt="ALT here" loading="lazy" width="1920" height="1177" class="w-100">
</picture>

@endsection