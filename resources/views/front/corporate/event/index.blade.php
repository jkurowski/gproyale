@extends('layouts.page', ['body_class' => 'subpage conference-page'])

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
                <p>We have produced corporate events across the world, in Warsaw, London O2, Tokyo, Rio de Janeiro, Barcelona, Hanoi and Dubai, to name just a few.</p>
                <p>&nbsp;</p>
                <p>With a wealth of experience organi sing conferences and events , it is our attention to detail that ensures everything runs to plan. You have the option to consult our creative media specialists regarding marketing, branding and communication, with continued support prior, during and post event.</p>
                <p>&nbsp;</p>
                <p>We collaborate closely with our clients to achieve their vision, co - curating programming and working with our in - house creative teams. We have a skilled and dedicated event production team that ensures the event is extraordinary in every way. From technical and digital production including lighting des ign, AV, sound and film production - to set build and on - line streaming / digital platforms.</p>
                <p>&nbsp;</p>
                <p>Our list of international motivational speakers, music artistes and entertainment is second to none.</p>
            </div>

            <div class="col-12">
                <div class="section-title">
                    <h2>PAST EVENTS</h2>
                </div>
            </div>

            <div class="col-12">
                <img src="{{ asset('/images/video-past-events.jpg') }}" alt="VIDEO WITH PAST EVENTS" width="1200" height="849" class="m-auto">
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
            <div class="col-12 text-center">
                <p>[[ Placeholder for gallery ]]</p>
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
