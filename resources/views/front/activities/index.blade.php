@extends('layouts.page', ['body_class' => 'subpage activities-page'])

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
    <div class="container mb-0 mb-sm-5 pb-5">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h1>DUBAI ACTIVITIES</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="team pt-0">
        <div class="container">
            <div class="row">
                <div class="order-2 order-md-1 col-12 col-md-6 pe-3 pe-md-5 d-flex align-items-center">
                    <div>
                        <h2>Tandem Skydive Experience</h2>
                        <div class="team-sep"></div>
                        <p>See Dubai from a completely new perspective whilst falling at up to 120mph. You fly up to 13,000ft before free falling for nearly 60 seconds , harnessed to the front of a fully qualified tandem skydiving instructor.</p>
                        <p>&nbsp;</p>
                        <p>A camera flyer will also accompany you throughout the experience and produce a professionally edited video to capture every sensational moment until the smooth landing.</p>
                        <p>&nbsp;</p>
                        <p>You will be greeted by the friendly team guiding you through your experience. A full process and safety briefing will be given by your instructor before your flight and tandem jump.</p>
                        <p>&nbsp;</p>
                        <p><b>The full experience takes between 3 and 4 hours</b></p>
                    </div>
                </div>
                <div class="order-1 order-md-2 col-12 col-md-6 mb-4 mb-md-0 d-flex justify-content-end align-items-center">
                    <div class="ps-0 ps-md-5">
                        <img src="{{ asset('/images/tandem-skydive-experience.jpg') }}" width="640" height="640" alt="ALT Here">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 pe-3 pe-md-5 mb-4 mb-md-0 d-flex justify-content-start align-items-center">
                    <img src="{{ asset('/images/helicopter-sightseeing-tour.jpg') }}" width="640" height="640" alt="ALT Here">
                </div>
                <div class="col-12 col-md-6 ps-3 ps-md-5 d-flex align-items-center">
                    <div>
                        <h2>Helicopter Sightseeing Tour</h2>
                        <div class="team-sep"></div>
                        <p>Enjoy birds-eye views of the exciting city of Dubai on board a luxury helicopter. Departing from a helipad at Atlantis the Palm, you will fly for 25 - minutes, flying past Burj Khalifa, flying over Burj Al Arab and the Dubai Coastline, with the World Islands viewed from the South Pole, Port Rashid , and Palm Jumeirah.</p>
                        <p>&nbsp;</p>
                        <p>See it all, from Atlantis The Palm to the old Dubai Creek. In addition to the above, you'll see Ski Dubai, the Jebel Ali horse track, Media and Internet City, Dubai Marina, Jumeirah Lakes Towers, Emirates Livings, and more. Admire Dubai’s iconic buildings and magnificent skyline from a unique perspective.</p>
                        <p>&nbsp;</p>
                        <p><b>Each luxury helicopter has 6 seats, including 3 window seats for maximum views.</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="row">
                <div class="order-2 order-md-1 col-12 col-md-6 pe-3 pe-md-5 d-flex align-items-center">
                    <div>
                        <h2>Sunrise Hot Air Balloon Flight Over the Desert</h2>
                        <div class="team-sep"></div>
                        <p>Watch the sunrise over the vast sand dunes and mountains of the Dubai desert on this hot air balloon flight. Float across the sky and look for wildlife roaming below you like Camels, Arabian Oryx and Sand Gazelles, as you soar at an altitude of 4000 - feet.</p>
                        <p>&nbsp;</p>
                        <p>Be picked up from your accommodation in Dubai and sit back and relax on the scenic drive to the lift-off base camp. Hop aboard and experience the excitement of lifting off in a hot air balloon.</p>
                        <p>&nbsp;</p>
                        <p><b>This experience takes up to 4 hours.</b></p>
                    </div>
                </div>
                <div class="order-1 order-md-2 col-12 col-md-6 mb-4 mb-md-0 d-flex justify-content-end align-items-center">
                    <div class="ps-0 ps-md-5">
                        <img src="{{ asset('/images/sunrise-hot-air-balloon.jpg') }}" width="640" height="640" alt="ALT Here">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 pe-3 pe-md-5 mb-4 mb-md-0 d-flex justify-content-start align-items-center">
                    <img src="{{ asset('/images/golf-tournaments.jpg') }}" width="640" height="640" alt="ALT Here">
                </div>
                <div class="col-12 col-md-6 ps-3 ps-md-5 d-flex align-items-center">
                    <div>
                        <h2>Golf Tournaments</h2>
                        <div class="team-sep"></div>
                        <p>From charity events and team building sessions to appreciating your clients, we can arrange a fully branded golf tournament that will leave a lasting impression on your staff or guests.</p>
                        <p>&nbsp;</p>
                        <p>Building and maintaining a powerful, professional and strong brand image is imperative for any successful, thriving business. Utilizing your marketing and networking opportunities for a corporate golf day within a corporate golf setting will advance your brand image and forge relationships that are core to your business growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="row">
                <div class="order-2 order-md-1 col-12 col-md-6 pe-3 pe-md-5 d-flex align-items-center">
                    <div>
                        <h2>Camel Polo</h2>
                        <div class="team-sep"></div>
                        <p>Camel Polo is ideal for a corporate teambuilding activity
                        <p>&nbsp;</p>
                        <p>The Camel Polo experience includes a training session, in which clients are shown some basic skills, and then there is time to put those skills into action with a tournament.
                        <p>&nbsp;</p>
                        <p>Each camel will have one participant (or a driver) sitting in front of the hump to steer, whilst their team-mate is perched behind the hump, hitting the ball.
                        <p>&nbsp;</p>
                        <p>Each camel will be accompanied by a trainer on-foot, who will have the camel on a lead rein, but is only there for assistance and in no way allowed to interfere with the play.
                        <p>&nbsp;</p>
                        <p><b>The duration of the event will be around 3 - 4 hours, depending on group size (from 8 to 60)</b></p>
                    </div>
                </div>
                <div class="order-1 order-md-2 col-12 col-md-6 mb-4 mb-md-0 d-flex justify-content-end align-items-center">
                    <div class="ps-0 ps-md-5">
                        <img src="{{ asset('/images/camel-polo-2.jpg') }}" width="640" height="640" alt="ALT Here">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 pe-3 pe-md-5 mb-4 mb-md-0 d-flex justify-content-start align-items-center">
                    <img src="{{ asset('/images/burj-khalifa.jpg') }}" width="640" height="640" alt="ALT Here">
                </div>
                <div class="col-12 col-md-6 ps-3 ps-md-5 d-flex align-items-center">
                    <div>
                        <h2>Burj Khalifa</h2>
                        <div class="team-sep"></div>
                        <p>Holding the title as the world's tallest building, the Burj Khalifa towers over Downtown Dubai at a staggering 2,723ft.</p>
                        <p>&nbsp;</p>
                        <p>Take the world’s fastest elevator as you ascend Dubai’s iconic Burj Khalifa skyscraper. Ride up to the 125th floor and check out the view from the observation deck balcony and enjoy the aerial view of the surrounding emirate with 360 - degree panoramas.</p>
                        <p>&nbsp;</p>
                        <p>Learn about the architecture and technology behind this Middle Eastern icon while seeing views of the city through one of the deck's telescopes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="row">
                <div class="order-2 order-md-1 col-12 col-md-6 pe-3 pe-md-5 d-flex align-items-center">
                    <div>
                        <h2>700HP Speedboat Tours</h2>
                        <div class="team-sep"></div>
                        <p>Get a VIP introduction to Dubai’s iconic coastline during this attraction-packed, small-group speedboat tour.</p>
                        <p>&nbsp;</p>
                        <p>Enjoy an adventure-filled outing on the open water, cruising comfortably in a spacious, high-performance boat with captain and guide.</p>
                        <p>&nbsp;</p>
                        <p>Highlights covered include the sky-high Burj Al Arab, Ain Dubai, Atlantis The Palm, pristine Jumeirah Beach, and bustling Dubai Marina. Bottled water and soft drinks are provided.</p>
                        <p>&nbsp;</p>
                        <p><b>Duration: 1 hour 40 minutes <br>Maximum of 12 per group</b></p>
                    </div>
                </div>
                <div class="order-1 order-md-2 col-12 col-md-6 mb-4 mb-md-0 d-flex justify-content-end align-items-center">
                    <div class="ps-0 ps-md-5">
                        <img src="{{ asset('/images/speedboat.jpg') }}" width="640" height="640" alt="ALT Here">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 pe-3 pe-md-5 mb-4 mb-md-0 d-flex justify-content-start align-items-center">
                    <img src="{{ asset('/images/safari.jpg') }}" width="640" height="640" alt="ALT Here">
                </div>
                <div class="col-12 col-md-6 ps-3 ps-md-5 d-flex align-items-center">
                    <div>
                        <h2>Dubai Desert Red Dune Half Day Safari</h2>
                        <div class="team-sep"></div>
                        <p>Going off-road into the desert is a quintessential Dubai experience, but difficult - and unsafe - alone. This trip makes it easy, and adds a large dose of desert sports and cultural activities for extra measure and fun.</p>
                        <p>&nbsp;</p>
                        <p>Travel into the red-dune Lahbab region, hurtle over the dunes by 4WD, and enjoy a camel ride, sand boarding, falcon photo opportunities, and a barbecue dinner and live cultural shows; all in our desert adventure.</p>
                        <p>&nbsp;</p>
                        <p><b>Duration: 6 hours <br>Maximum of 100 per group</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
