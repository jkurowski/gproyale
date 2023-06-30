@extends('layouts.page', ['body_class' => 'subpage conference-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.pageheader', [
        'title' => ($page->content_header) ?: $page->title,
        'header_file' => 'colaborate.png',
        'items' => $page,
        'slider' =>
        [
            asset('images/headers/conference.jpg'),
            asset('images/headers/conference-2.jpg'),
            asset('images/headers/conference-3.jpg'),
        ]
    ])
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h1>CORPORATE CONFERENCE <br>& EVENTS</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-grey rwd-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <blockquote class="freight text-center mb-0 blockquote-nofooter mt-4"><b class="gold">GP ROYALE</b> <i>a leading</i> <b class="gold">LIVE EVENT</b> <i>&</i> <b class="gold">CONFERENCE</b> <br> <i>PRODUCTION COMPANY...</i></blockquote>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-3 mt-sm-5">
                    <ul class="mb-0 list-unstyled crown-list">
                        <li>A Wealth <i>of</i> <b>Experience</b>.</li>
                        <li><b>Attention</b> <i>to</i> Details.</li>
                        <li><b>Collaborative</b> <i>and</i> <b>Consultative</b>.</li>
                        <li><b>Bespoke</b> marketing <i>and</i> branding.</li>
                        <li>Motivational <b>Speaker, Music, Entertainment</b>.</li>
                        <li><b>Technical</b> AV production, set building and lighting.</li>
                        <li><b>Creative</b> media specialists.</li>
                        <li>Pre-and Post-event <b>Support</b>.</li>
                    </ul>
                </div>
                <div class="col-12">
                    <div class="separator separator-grey">
                        <img src="{{ asset("/images/separator-grey.png") }}" alt="Section separator" width="1200" height="55">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <blockquote class="freight text-center mb-0 blockquote-nofooter mt-0"><i>EX</i>TRAORDINARY <i>in EVERY WAY</i></blockquote>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8 p-0">
                    <a class="swipebox" data-type="video" rel="vimeo" href="http://vimeo.com/819495436">
                        <img src="{{ asset('/images/video-past-events.jpg') }}" alt="VIDEO WITH PAST EVENTS" width="1200" height="849" class="m-auto">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-0">
                    <blockquote class="freight text-center mb-0 blockquote-nofooter"><i>C</i>ORPORATE <i>E</i>VENTS <i>are</i> <i>C</i>RUCIAL. <br><i>G</i>P ROYALE <i>makes them</i> <i>E</i>XTRAORDINARY</blockquote>
                </div>
                <div class="col-12">
                    <div class="separator separator-grey">
                        <img src="{{ asset("/images/separator-grey.png") }}" alt="Section separator" width="1200" height="55">
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <ul class="mb-0 list-unstyled crown-list">
                        <li>Bring people <b>together</b>.</li>
                        <li><b>Create</b> a unique learning platform.</li>
                        <li>Motivate<b> your team</b>.</li>
                        <li><b>Improve</b> efficiency.</li>
                        <li><b>Strengthen</b> morale.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="{{ asset('/uploads/gallery/images/event-gal-1.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/event-gal-1.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
            </div>
            <div class="col-6">
                <a href="{{ asset('/uploads/gallery/images/event-gal-2.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/event-gal-2.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
            </div>
            <div class="col-6 mt-4">
                <a href="{{ asset('/uploads/gallery/images/event-gal-3.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/event-gal-3.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
            </div>
            <div class="col-6 mt-4">
                <a href="{{ asset('/uploads/gallery/images/event-gal-4.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/event-gal-4.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
            </div>
            <div class="col-6 mt-4">
                <a href="{{ asset('/uploads/gallery/images/event-gal-5.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/event-gal-5.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
            </div>
            <div class="col-6 mt-4">
                <a href="{{ asset('/uploads/gallery/images/event-gal-6.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/event-gal-6.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
            </div>
            <div class="col-6 mt-4">
                <a href="{{ asset('/uploads/gallery/images/event-gal-7.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/event-gal-7.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
            </div>
            <div class="col-6 mt-4">
                <a href="{{ asset('/uploads/gallery/images/event-gal-8.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/event-gal-8.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
            </div>
            <div class="col-6 mt-4">
                <a href="{{ asset('/uploads/gallery/images/event-gal-9.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/event-gal-9.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
            </div>
            <div class="col-6 mt-4">
                <a href="{{ asset('/uploads/gallery/images/event-gal-10.jpg') }}" class="swipebox" rel="maingal"><img src="{{ asset('/uploads/gallery/images/thumbs/event-gal-10.jpg') }}" width="700" height="400" class="w-100" alt=""></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-12">
            <blockquote class="freight text-center blockquote-nofooter mb-0">26<sup>th</sup> November 2023 <br>ABU DHABI <i>GRAND PRIX</i></blockquote>
        </div>
        <div class="col-12">
            <div class="separator separator-grey">
                <img src="{{ asset("/images/separator-grey.png") }}" alt="Section separator" width="1200" height="55">
            </div>
        </div>
    </div>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-inside">
                        <p class="center-justified">Crown your event by culminating in an F1 Grand Finale with acces to a GP Royale <br>superyacht experience at the final race 2023 season at Abu Dhabi’s Yas Marina circuit.</p>
                        <p>&nbsp;</p>
                        <p class="center-justified">Delegates enjoy a full day on board a luxury superyacht backing on the racetrack <br>for an unforgettable party experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12 pe-0 pe-sm-3 ps-0 ps-sm-3">
                <img src="{{ asset('/images/past-events.jpg') }}" width="1200" height="810" alt="ALT Here" class="m-auto">
            </div>
        </div>
    </div>
@endsection
