@extends('layouts.page', ['body_class' => 'subpage no-bottom'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.pageheader', [
    'title' => ($page->content_header) ?: $page->title,
    'header_file' => 'rooms.jpg',
    'items' => $page
    ])
@stop

@section('content')
    <div class="container mb-5 pb-5">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h1>DUBAI CORPORATE <br>TEAM BUILDING ACTIVITIES</h1>
                </div>
            </div>

            <div class="col-12 mt-5">
                <div class="text-inside">
                    <p class="center-justified">Royale is a premier provider of team building activities for corporate companies, offering unique and exciting experiences such as Camel Polo, VR Infinite Loop, Golf Tournaments, and Crazy Car Races. Organising team activities is an excellent way to build camaraderie and foster teamwork among corporate teams.</p>
                    <p>&nbsp;</p>
                    <p class="center-justified">These activities allow team members to bond outside of the office setting, engaging in fun and challenging activities together, team members can develop trust, improve communication, and strengthen their relationships, all of which are essential for building a successful team.</p>
                </div>
            </div>
        </div>
    </div>

    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-6 pe-5 d-flex align-items-center">
                    <div>
                        <h2>CAMEL POLO</h2>
                        <div class="team-sep"></div>
                        <p>Camel Polo is ideal for a corporate teambuilding activity.</p>
                        <p>&nbsp;</p>
                        <p>The Camel Polo experience includes a training session, in which clients are shown some basic skills, and then there is time to put those skills into action with a tournament.</p>
                        <p>&nbsp;</p>
                        <p>Each camel will have one participant (or a driver) sitting in front of the hump to steer, whilst their team - mate is perched behind the hump, hitting the ball.</p>
                        <p>&nbsp;</p>
                        <p>Each camel will be accompanied by a trainer on - foot, who will have the camel on a lead rein, but is only there for assistance and in no way allowed to interfere with the play.</p>
                        <p>&nbsp;</p>
                        <p><b>The duration of the event will be around 3 - 4 hours, depending on group size (from 8 to 60)</b></p>
                    </div>
                </div>
                <div class="col-6 ps-5 d-flex justify-content-end align-items-center">
                    <img src="{{ asset('/images/camel-polo.jpg') }}" width="640" height="640" alt="ALT Here">
                </div>
            </div>
        </div>
    </section>

    <section class="team team-grey">
        <div class="container">
            <div class="row">
                <div class="col-6 pe-5 d-flex justify-content-start align-items-center">
                    <img src="{{ asset('/images/vr.jpg') }}" width="640" height="640" alt="ALT Here">
                </div>
                <div class="col-6 ps-5 d-flex align-items-center">
                    <div>
                        <h2>VR INFINITE LOOP</h2>
                        <div class="team-sep"></div>
                        <p>This team building activity was invented by BizGroup.</p>
                        <p>&nbsp;</p>
                        <p>It is made with an innovative mind, using the latest VR technology to help teams learn how to adjust to new environments while working with each other.</p>
                        <p>&nbsp;</p>
                        <p>The Infinite Loop is a strong management business game, based on real - time collaboration and communication. How well the player in the virtual world describes the problem, dictates how quickly the teammates in the real world will know the solution.</p>
                        <p>&nbsp;</p>
                        <p>This activity is for companies who want to put their teams of staff to the test of strong learning curves and working under pressure. It delivers a powerful tool for a debriefing on issues affecting modern businesses, especially with remote workers and teams. 100 + participants</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-6 pe-5 d-flex align-items-center">
                    <div>
                        <h2>GOLF TOURNAMENTS</h2>
                        <div class="team-sep"></div>
                        <p>From charity events and team building sessions to appreciating your clients, we can arrange a fully branded golf tournament that will leave a lasting impression on your staff or guests.</p>
                        <p>&nbsp;</p>
                        <p>Building and maintaining a powerful, professional and strong brand im age is imperative for any successful, thriving business.</p>
                        <p>&nbsp;</p>
                        <p>Utilizing your marketing and networking opportunities for a corporate golf day within a corporate golf setting will advance your brand image and forge relationships that are core to your business growth.</p>
                    </div>
                </div>
                <div class="col-6 ps-5 d-flex justify-content-end align-items-center">
                    <img src="{{ asset('/images/golf-tournaments.jpg') }}" width="640" height="640" alt="ALT Here">
                </div>
            </div>
        </div>
    </section>

    <section class="team team-grey">
        <div class="container">
            <div class="row">
                <div class="col-6 pe-5 d-flex justify-content-start align-items-center">
                    <img src="{{ asset('/images/crazy-car-races.jpg') }}" width="640" height="640" alt="ALT Here">
                </div>
                <div class="col-6 ps-5 d-flex align-items-center">
                    <div>
                        <h2>CRAZY CAR RACES</h2>
                        <div class="team-sep"></div>
                        <p>Alongside our corporate team building events, culminating in the Abu Dhabi Grand Prix – this team building event hits the spot! Who wouldn’t want a racing game as a team - building activity?</p>
                        <p>&nbsp;</p>
                        <p>Each team will design plans to structure their race car and collect the materials to make it (recycling is a must!).</p>
                        <p>&nbsp;</p>
                        <p>The crazier the car – the more additional points are awarded for creativity; however, the team needs to ensure it can still be ridden in the race. 30 + participants</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
