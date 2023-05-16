@extends('layouts.page', ['body_class' => 'subpage conference-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.pageheader', [
    'title' => ($page->content_header) ?: $page->title,
    'header_file' => '',
    'items' => $page
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

            <div class="col-12">
                <p class="h2">GP Royale is a leading live event and conference production company.</p>
                <p>&nbsp;</p>
                <p>With a wealth of experience organising conferences and events, it is our attention to detail that ensures everything runs to plan. You have the option to consult our creative media specialists regarding marketing, branding and communication, with continued support prior, during and post event.</p>
                <p>&nbsp;</p>
                <p>We collaborate closely with our clients to achieve their vision, co-curating programming and working with our in-house creative teams. We have a skilled and dedicated event production team that ensures the event is extraordinary in every way. From technical and digital production including AV sound and film production, and lighting design, to set build, and on-line streaming / digital platforms.</p>
                <p>&nbsp;</p>
                <p>Our list of international motivational speakers, music artistes and entertainment is second to none.</p>
            </div>

            <div class="col-12">
                <div class="section-title">
                    <h2>PAST EVENTS</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-8 col-xl-6 p-0">
                <a class="swipebox" data-type="video" rel="vimeo" href="http://vimeo.com/819495436">
                    <img src="{{ asset('/images/video-past-events.jpg') }}" alt="VIDEO WITH PAST EVENTS" width="1200" height="849" class="m-auto">
                </a>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Corporate events are crucial for any business looking to impress their clients or to network with others in their industry. Working with us is a great opportunity to bring people together and create a platform that delivers learning, motivation and teamwork, coupled with business efficiency and improved morale, that ultimately improves our client’s bottom line.</p>
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
            <blockquote class="freight text-center blockquote-nofooter mb-0">26thNovember 2023 <br>ABU DHABI <i>GRAND PRIX</i></blockquote>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>GP Royale are able to provide both packaged and bespoke corporate conferences and events in Dubai, culminating in an F1 grand finale with access to a superyacht experience at the final race of the 2023 season at the Yas Marina circuit in Abu Dhabi on Sunday 26th November.</p>
                    <p>&nbsp;</p>
                    <p>Your delegates will enjoy a full day on board a luxury superyacht backing on to the racetrack, for an unforgettable party experience.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('/images/past-events.jpg') }}" width="1200" height="810" alt="ALT Here" class="m-auto">
            </div>
        </div>
    </div>
@endsection
