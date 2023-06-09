@extends('layouts.homepage')

@section('content')
<div id="slider">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 d-flex justify-content-center align-items-end align-items-xl-center h-100">
                <img src="{{ asset('/images/headers/15th.png') }}" alt="" width="700" height="380">
            </div>
        </div>
    </div>
</div>

<div class="content">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-inside">
                        <p class="h2 center-justified"><b>GP Royale</b> was born out of past experiences with large scale global conferences, providing bespoke live conference and event services to corporate companies. We have produced  events across the world, including Warsaw, London, Tokyo, Rio de Janeiro, Barcelona, Hanoi, Abu Dhabi, and Dubai, to name just a few.</p>
                    </div>

                    <div class="section-title">
                        <h2>VIDEO OF PAST EVENTS</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-12 col-lg-8 col-xl-6 p-0">
                    <a class="swipebox" data-type="video" rel="vimeo" href="http://vimeo.com/819495436">
                        <img src="{{ asset('/images/video-past-events.jpg') }}" alt="VIDEO WITH PAST EVENTS" width="1200" height="849" class="m-auto">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-inside">
                        <p class="center-justified">Our team is dedicated to delivering exceptional experiences that surpass our clients' expectations, and we take pride in being the go-to event management company for businesses in need of a professional and reliable partner.</p>
                        <p>&nbsp;</p>
                        <p class="center-justified">We create diverse, original live events, with emphasis on learning, team building, motivation and fun. With a wealth of experience organising conferences and events, it is our attention to detail that ensures everything runs to plan.</p>
                        <p>&nbsp;</p>
                        <p class="center-justified">You have the option to consult our creative media specialists regarding marketing, branding and communication, with continued support prior, during and post event. We specialize in organizing corporate conferences, seminars, and workshops that cater to the unique needs and goals of our clients.</p>
                        <p>&nbsp;</p>
                        <p class="center-justified">We offer a comprehensive range of conference services, including venue selection, catering, audio-video equipment, live streaming, registration and ticketing, and event logistics.</p>
                        <p>&nbsp;</p>
                        <p class="center-justified">We collaborate closely with our clients to achieve their vision, co-curating programming and working with our in-house creative teams.</p>
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
                        <a href="{{ asset('/uploads/gallery/images/main-gal-1.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/main-gal-1.jpg') }}" loading="lazy" width="700" height="400" class="w-100" alt=""></a>
                    </div>
                    <div class="col-6">
                        <a href="{{ asset('/uploads/gallery/images/main-gal-2.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/main-gal-2.jpg') }}" loading="lazy" width="700" height="400" class="w-100" alt=""></a>
                    </div>
                    <div class="col-6 mt-4">
                        <a href="{{ asset('/uploads/gallery/images/main-gal-3.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/main-gal-3.jpg') }}" loading="lazy" width="700" height="400" class="w-100" alt=""></a>
                    </div>
                    <div class="col-6 mt-4">
                        <a href="{{ asset('/uploads/gallery/images/main-gal-4.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/main-gal-4.jpg') }}" loading="lazy" width="700" height="400" class="w-100" alt=""></a>
                    </div>
                    <div class="col-6 mt-4">
                        <a href="{{ asset('/uploads/gallery/images/main-gal-5.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/main-gal-5.jpg') }}" loading="lazy" width="700" height="400" class="w-100" alt=""></a>
                    </div>
                    <div class="col-6 mt-4">
                        <a href="{{ asset('/uploads/gallery/images/main-gal-6.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/main-gal-6.jpg') }}" loading="lazy" width="700" height="400" class="w-100" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pb-0 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="text-inside">
                        <p class="h2 center-justified">From our past experiences, providing high quality Grand Prix events on luxury super yachts at the Abu Dhabi and Monaco circuits, we are, with our relationship partners in the UAE, able to offer not just a remarkable F1 experience, but so much more.</p>
                    </div>

                    <div class="section-title">
                        <h2>F1 GRAND PRIX VIDEOS</h2>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a class="swipebox" data-type="video" rel="vimeo-abu-dhabi" href="http://vimeo.com/804275495">
                                <img src="{{ asset('/images/video-abu-dhabi-grand-prix.jpg') }}" loading="lazy" width="780" height="550" alt="VIDEO ABU DHABI GRAND PRIX">
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="swipebox" data-type="video" rel="vimeo-monaco-grand-prix" href="http://vimeo.com/804279459">
                                <img src="{{ asset('/images/video-monaco-grand-prix.jpg') }}" loading="lazy" width="780" height="550" alt="VIDEO MONACO GRAND PRIX">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-inside">
                        <div class="separator">
                            <img src="{{ asset("/images/separator.png") }}" alt="Section separator" width="1081" height="71">
                        </div>

                        <p class="h2 center-justified">The 2023 F1 World Championship again concludes with the Abu Dhabi Grand Prix at the spectacular Yas Marina circuit. Since the track’s 2009 debut, it’s hosted four title-deciding races. With Ferrari and Mercedes keen to close the gap this year on reigning champions Red Bull, hopes are high for another great final round showdown!</p>
                        <p>&nbsp;</p>
                        <p class="h2 center-justified">Abu Dhabi also sees a winner crowned in F2, as the series also comes to a close here.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bespokeGalery">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-4 col-sm-2 bespoke-img">
                    <img src="{{ asset('/images/gallery/homepage-gallery-short-1.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
                <div class="col-8 col-sm-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/homepage-gallery-long-1.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
                <div class="col-4 col-sm-2 bespoke-img">
                    <img src="{{ asset('/images/gallery/homepage-gallery-short-2.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
                <div class="col-8 col-sm-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/homepage-gallery-long-2.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12 col-sm-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/homepage-gallery-long-5.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
                <div class="col-6 col-sm-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/homepage-gallery-long-6.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
                <div class="col-6 col-sm-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/homepage-gallery-long-7.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-8 col-sm-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/homepage-gallery-long-3.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
                <div class="col-4 col-sm-2 bespoke-img">
                    <img src="{{ asset('/images/gallery/homepage-gallery-short-3.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
                <div class="col-8 col-sm-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/homepage-gallery-long-4.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
                <div class="col-4 col-sm-2 bespoke-img">
                    <img src="{{ asset('/images/gallery/homepage-gallery-short-4.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12 col-sm-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/homepage-gallery-long-8.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
                <div class="col-6 col-sm-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/homepage-gallery-long-10.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
                <div class="col-6 col-sm-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/homepage-gallery-long-9.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-12">
                    <blockquote class="freight text-center mb-0"><i>Rev up your</i> BUSINESS <i>with</i> GP ROYALE: <br><i>COME and JOIN us for an</i> ELECTRIFYING F1 <br><i>experience at ABU DHABI GRAND PRIX.</i></blockquote>
                </div>
            </div>
        </div>
    </section>

    <picture>
        <source srcset="{{ asset("/images/formula-1-grand-prix-etihad.webp") }}" type="image/webp">
        <source srcset="{{ asset("/images/formula-1-grand-prix-etihad.jpg") }}" type="image/jpeg">
        <img src="{{ asset("/images/formula-1-grand-prix-etihad.jpg") }}" alt="ALT here" loading="lazy" width="1920" height="1177" class="w-100">
    </picture>

</div>

@endsection