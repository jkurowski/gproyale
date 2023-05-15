@extends('layouts.page', ['body_class' => 'subpage bespoke-page'])

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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('/images/gp-royale-logo.svg') }}" alt="GP Royale logo" width="464" height="58" class="m-auto">

                    <div class="section-title">
                        <h1 class="bg-none pb-0">BESPOKE EVENT CONCIERGE</h1>
                    </div>

                    <div class="separator">
                        <img src="{{ asset("/images/separator.png") }}" alt="Section separator" width="1081" height="71">
                    </div>

                    <div class="text-inside">
                        <p class="center-justified">GP Royale, in collaboration with our close partnerships in the UAE – are able to offer a unique and bespoke concierge service in addition to our luxury Superyacht Abu Dhabi Grand Prix events: Exclusive Superyacht Event Weekend hire with full corporate branding on your own Superyacht, for large corporate groups. (100 - 300 guests) We can also offer Exclusive Branded Yacht hire to smaller groups (40-80 guests) and branded VIP areas on board Superyachts, for smaller groups (20+ guests)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('/images/bespoke/bespoke-1.jpg') }}" width="1580" height="889" alt="ALT Here">
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-inside">
                        <p class="center-justified">Private Jet Hire (from London or major European airports) and Airline Corporate Travel Service Abu Dhabi Grand Prix Hosting Services (airport meet and greet, transportation co-ordinators)</p>
                    </div>
                    <div class="separator pb-0">
                        <img src="{{ asset("/images/separator.png") }}" alt="Section separator" width="1081" height="71">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('/images/bespoke/bespoke-2.jpg') }}" width="1580" height="889" alt="ALT Here">
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-inside">
                        <p class="center-justified">Hotel reservations and room block management – we have a generous selection of 5 Star hotels able to accommodate your group reservations and room block management. Ground Transportation Services (Dubai/Abu Dhabi airports to hotel and racetrack)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('/images/bespoke/bespoke-3.jpg') }}" width="1580" height="889" alt="ALT Here">
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-inside">
                        <p class="center-justified">On-Site selection: Restaurant and Venue booking, Exclusive Event Planning (Catering, Entertainment, Décor and Lighting, Production &amp; Corporate Branding) Personalised Corporate Gift Packages.</p>
                    </div>
                    <div class="separator pb-0">
                        <img src="{{ asset("/images/separator.png") }}" alt="Section separator" width="1081" height="71">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{ asset('/images/bespoke/bespoke-thumb-1.jpg') }}" width="780" height="440" alt="ALT Here">
            </div>
            <div class="col-6">
                <img src="{{ asset('/images/bespoke/bespoke-thumb-2.jpg') }}" width="780" height="440" alt="ALT Here">
            </div>
            <div class="col-6 mt-4">
                <img src="{{ asset('/images/bespoke/bespoke-thumb-3.jpg') }}" width="780" height="440" alt="ALT Here">
            </div>
            <div class="col-6 mt-4">
                <img src="{{ asset('/images/bespoke/bespoke-thumb-4.jpg') }}" width="780" height="440" alt="ALT Here">
            </div>
        </div>
    </div>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="separator">
                        <img src="{{ asset("/images/separator.png") }}" alt="Section separator" width="1081" height="71">
                    </div>
                    <div class="text-inside">
                        <p class="center-justified">Exclusive entertainment, F1 Party, VIP Hospitality – Tours and Activities (custom designed excursions) Our Concierge can arrange any type of Corporate Event from Exclusive Golf Tournaments, Camel Polo, Helicopter Tours, Hot Air Balloons, Sky Diving, Dubai Speedboat Tours, Desert 4x4 Dune Bashing, Ski Dubai, Burj Khalifa Tower and so much more!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-6 col-sm-3"><img src="{{ asset("/images/bespoke/bespoke-square-1.jpg") }}" class="w-100" alt=""></div>
                <div class="col-6 col-sm-3"><img src="{{ asset("/images/bespoke/bespoke-square-2.jpg") }}" class="w-100" alt=""></div>
                <div class="col-6 col-sm-3"><img src="{{ asset("/images/bespoke/bespoke-square-3.jpg") }}" class="w-100" alt=""></div>
                <div class="col-6 col-sm-3"><img src="{{ asset("/images/bespoke/bespoke-square-4.jpg") }}" class="w-100" alt=""></div>
                <div class="col-6 col-sm-3"><img src="{{ asset("/images/bespoke/bespoke-square-5.jpg") }}" class="w-100" alt=""></div>
                <div class="col-6 col-sm-3"><img src="{{ asset("/images/bespoke/bespoke-square-6.jpg") }}" class="w-100" alt=""></div>
                <div class="col-6 col-sm-3"><img src="{{ asset("/images/bespoke/bespoke-square-7.jpg") }}" class="w-100" alt=""></div>
                <div class="col-6 col-sm-3"><img src="{{ asset("/images/bespoke/bespoke-square-8.jpg") }}" class="w-100" alt=""></div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-inside">
                        <p class="center-justified">Corporate Media Coverage – Magazines, Superyacht Branding, Local Television, Billboard, Corporate Branded Golf Tournaments and more…</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('/images/bespoke/bespoke-4.jpg') }}" width="1580" height="889" alt="ALT Here">
                </div>
            </div>
        </div>
    </section>

@endsection
