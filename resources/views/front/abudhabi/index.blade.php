@extends('layouts.page', ['body_class' => 'subpage abudhabi-page no-bottom'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.pageheader', [
    'title' => ($page->content_header) ?: $page->title,
    'header_file' => '15th.png',
    'items' => $page
    ])
@stop

@section('content')

    <section class="pt-0 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <blockquote class="freight text-center mb-0"><i>Be a part of our</i> <br>LUXURY YACHT PARTY <br> <i>CELEBRATING the</i> F1 SEASON FINALE <br><i>in</i> ABU DHABI</blockquote>
                </div>
            </div>
        </div>
    </section>


    <div class="container pb-5">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h1>ABU DHABI GRAND PRIX</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-inside">
                        <p class="h1 center-justified"><b>Abu Dhabi Yas Marina F1 Season Finale</b></p>
                        <p class="h1 center-justified h1-slim">Friday 24<sup>th</sup> - Sunday 26<sup>th</sup> November 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <picture>
                        <source srcset="{{ asset("/images/grandprix/formula-f1.webp") }}" type="image/webp">
                        <source srcset="{{ asset("/images/grandprix/formula-f1.jpg") }}" type="image/jpeg">
                        <img src="{{ asset("/images/grandprix/formula-f1.jpg") }}" alt="ALT here" loading="lazy" width="1560" height="878" class="w-100">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="h2"><b>GP Royale was born out of past experiences on luxury super yachts at the Abu Dhabi circuit and at the Monaco F1. With our relationship partners in the UAE, we are able to offer not just a remarkable F1 experience, but so much more.</b></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-inside">
                        <div class="separator">
                            <img src="{{ asset("/images/separator.png") }}" alt="Section separator" width="1081" height="71">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-inside center-justified">
                        <p>Whether you are a passionate F1 fan, who wants to see all the weekends racing, or if you want to combine other events, such as dune - bashing or an unforgettable visit to the Burj Khalifa tower, our expert concierge can arrange any activity that you may desire.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <blockquote class="freight text-center mb-0 blockquote-nofooter mt-4">COME <i>with us to</i> <br class="d-inline-flex d-sm-none"><b class="gold">ABU DHABI</b> <i>for the 2023</i> <br><i><b class="gold">SEASON FINALE</b> at the</i> YAS MARINA <i>CIRCUIT</i>.</blockquote>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>VIDEOS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                    <a class="swipebox" data-type="video" rel="vimeo-abu-dhabi" href="http://vimeo.com/804275495">
                        <img src="{{ asset('/images/video-abu-dhabi-grand-prix.jpg') }}" width="780" height="550" alt="VIDEO ABU DHABI GRAND PRIX">
                    </a>
                </div>
                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                    <a class="swipebox" data-type="video" rel="vimeo-monaco-grand-prix" href="http://vimeo.com/804279459">
                        <img src="{{ asset('/images/video-monaco-grand-prix.jpg') }}" width="780" height="550" alt="VIDEO MONACO GRAND PRIX">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-inside">
                        <div class="separator">
                            <img src="{{ asset("/images/separator.png") }}" alt="Section separator" width="1081" height="71">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-inside center-justified">
                        <p>The 2023 Formula 1 World Championship will again conclude with the Abu Dhabi Grand Prix at the spectacular Yas Marina circuit. Since the track’s debut in 2009, it has hosted four title - deciding races and with Ferrari and Mercedes keen to close the gap on reigning champions Red Bull, hopes are high for another great final round showdown. Abu Dhabi also sees a winner crowned in F2, as the support series comes to a close here.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="{{ asset('/images/grandprix/grandprix-gallery-thumb-1.jpg') }}" width="700" height="700" class="w-100" alt="">
                </div>
                <div class="col-6">
                    <img src="{{ asset('/images/grandprix/grandprix-gallery-thumb-2.jpg') }}" width="700" height="700" class="w-100" alt="">
                </div>
                <div class="col-6 mt-4">
                    <img src="{{ asset('/images/grandprix/grandprix-gallery-thumb-3.jpg') }}" width="700" height="700" class="w-100" alt="">
                </div>
                <div class="col-6 mt-4">
                    <img src="{{ asset('/images/grandprix/grandprix-gallery-thumb-4.jpg') }}" width="700" height="700" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-inside center-justified">
                        <p>This lavish super yacht is perfectly situated within Yas Marina. The harbour is right in the centre of the track and offers superb track - side views in the heart of the action.</p>
                        <p>&nbsp;</p>
                        <p>Our guests will enjoy a luxurious weekend with impeccable service and personal touches that will certainly leave a lasting impression. The fantastic party atmosphere on board the yacht is second to none and only gets better as the sun sets and the race draws to a close , with the best fireworks display of any of the year’s F1 races!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bespokeGalery" class="p-0">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-6 col-md-4 bespoke-img">
                    <img src="{{ asset('/images/grandprix/grandprix-gallery-thumb-5.jpg') }}" loading="lazy" class="w-100 " alt="">
                </div>
                <div class="col-6 col-md-4 bespoke-img">
                    <img src="{{ asset('/images/grandprix/grandprix-gallery-thumb-6.jpg') }}" loading="lazy" class="w-100 " alt="">
                </div>
                <div class="col-12 col-md-4 bespoke-img">
                    <img src="{{ asset('/images/grandprix/grandprix-gallery-thumb-7.jpg') }}" loading="lazy" class="w-100 " alt="">
                </div>
                <div class="col-6 col-md-4 bespoke-img">
                    <img src="{{ asset('/images/grandprix/grandprix-gallery-thumb-8.jpg') }}" loading="lazy" class="w-100 " alt="">
                </div>
                <div class="col-6 col-md-4 bespoke-img">
                    <img src="{{ asset('/images/grandprix/grandprix-gallery-thumb-9.jpg') }}" loading="lazy" class="w-100 " alt="">
                </div>
                <div class="col-12 col-md-4 bespoke-img">
                    <img src="{{ asset('/images/grandprix/grandprix-gallery-thumb-10.jpg') }}" loading="lazy" class="w-100 " alt="">
                </div>
                <div class="col-6 col-md-4 bespoke-img">
                    <img src="{{ asset('/images/grandprix/grandprix-gallery-thumb-11.jpg') }}" loading="lazy" class="w-100 " alt="">
                </div>
                <div class="col-6 col-md-4 bespoke-img">
                    <img src="{{ asset('/images/grandprix/grandprix-gallery-thumb-12.jpg') }}" loading="lazy" class="w-100 " alt="">
                </div>
                <div class="col-12 col-md-4 bespoke-img">
                    <img src="{{ asset('/images/grandprix/grandprix-gallery-thumb-13.jpg') }}" loading="lazy" class="w-100 " alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-red pt-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>EVENT DETAILS</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-0 pb-3 pb-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="h3 h3-m"><b>PLATINUM 3 DAY LUXURY SUPERYACHT RACE EVENT <br>FRIDAY to SUNDAY 24<sup>th</sup>-26<sup>th</sup> NOVEMBER 2023</b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-0 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="h3 h3-m lighter">WHAT’S INCLUDED</p>
                    </div>
                </div>
            </div>
            <div class="container mt-3 mt-sm-5">
                <div class="row">
                    <div class="col-12">
                        <div class="red-included"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex justify-content-start justify-content-lg-center">
                        <ul>
                            <li>3 Day Race Attendance</li>
                            <li>Magnificent trackside views</li>
                            <li>VIP experience</li>
                            <li>Champagne reception</li>
                            <li>All day open bar, including bubbles, <br>fine wines, spirits and soft drinks</li>
                            <li>Souvenir lanyards & programmes</li>
                            <li>Gourmet buffet catering,</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-start justify-content-lg-center">
                        <ul>
                            <li>On-board live entertainment</li>
                            <li>Q&A session with a leading F1 personality</li>
                            <li>GP Royale personnel on-board all day</li>
                            <li>Access to Evening Concerts each day</li>
                            <li>Multi-screen TV’s on-board</li>
                            <li>Hospitality staff on-board all day</li>
                            <li>On-board photographer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="section pt-3 pt-lg-5 pb-3 pb-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="h3"><b>FINAL RACE DAY LUXURY SUPERYACHT EVENT <br>SUNDAY 26<sup>th</sup> NOVEMBER 2023</b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-0 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="h3 lighter">WHAT’S INCLUDED</p>
                    </div>
                </div>
            </div>
            <div class="container mt-3 mt-sm-5">
                <div class="row">
                    <div class="col-12">
                        <div class="red-included"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section pt-4 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex justify-content-start justify-content-lg-center">
                        <ul>
                            <li>Final Race Day Attendance</li>
                            <li>Magnificent trackside views</li>
                            <li>VIP experience</li>
                            <li>Champagne reception</li>
                            <li>All day open bar, including bubbles, <br>fine wines, spirits and soft drinks</li>
                            <li>Souvenir lanyards & programme</li>
                            <li>Gourmet buffet catering,</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-start justify-content-lg-center">
                        <ul>
                            <li>On-board live entertainment</li>
                            <li>Q&A session with a leading F1 personality</li>
                            <li>GP Royale personnel on-board all day</li>
                            <li>Access to Evening Concerts</li>
                            <li>Multi-screen TV’s on-board</li>
                            <li>Hospitality staff on-board all day</li>
                            <li>On-board photographer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-inside center-justified">
                        <p>After the day’s racing, you also have passes to attend the evening concerts, with world class headlining artists each night. We can also arrange for VIP access to the “Golden Circle” concert enclosure right in front of the stage.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-inside">
                        <div class="separator">
                            <img src="{{ asset("/images/separator.png") }}" alt="Section separator" width="1081" height="71">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <picture>
                        <source srcset="{{ asset("/images/grandprix/concert.webp") }}" type="image/webp">
                        <source srcset="{{ asset("/images/grandprix/concert.jpg") }}" type="image/jpeg">
                        <img src="{{ asset("/images/grandprix/concert.jpg") }}" alt="ALT here" loading="lazy" width="1560" height="878" class="w-100">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-inside center-justified">
                        <p>The Yas Marina Circuit is situated on the man - made Yas Island which boasts incredible amenities including luxurious hotels and restaurants, Warner Brothers World, Yas Waterworld and Ferrari World, home of the Formula Rossa ride: the world’s fastest rollercoaster. The island is just 30 minutes from the United Arab Emirates’ capital Abu Dhabi and one - hour from Dubai.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-0 rwd-margin">
        <img src="{{ asset('/images/grandprix/photo_2.jpg') }}" alt="" class="w-100 d-none d-sm-block">
        <img src="{{ asset('/images/grandprix/photo_1_mobile.jpg') }}" alt="" class="w-100 d-block d-sm-none">
    </section>
    
    <section class="pt-0 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <blockquote class="freight text-center mb-0">GP ROYALE <br>LUXURY <i>experience</i> <br> <i>personalised</i> SERVICE</blockquote>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3 pb-0 p-sm-0 rwd-margin">
        <img src="{{ asset('/images/grandprix/photo_1.jpg') }}" alt="" class="w-100 d-none d-sm-block">
        <img src="{{ asset('/images/grandprix/photo_2_mobile.jpg') }}" alt="" class="w-100 d-block d-sm-none">
    </section>
@endsection
