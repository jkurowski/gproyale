@extends('layouts.page', ['body_class' => 'subpage gallery-page'])

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
                    <h1>{{ $page->title }}</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p>Please take a moment to view the images our photographer took of our VIP guests, thoroughly enjoying themselves, at our past superyacht events at Abu Dhabi and Monaco</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>VIDEOS</h2>
                </div>
            </div>
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

    <section id="bespokeGalery" class="pb-0">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-12 col-sm-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/gallery-1.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
                <div class="col-6 col-sm-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/gallery-2.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
                <div class="col-6 col-sm-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/gallery-3.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/gallery-11.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
                <div class="col-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/gallery-12.jpg') }}" loading="lazy" class="w-100 bespoke-img" alt="">
                    <img src="{{ asset('/images/gallery/gallery-13.jpg') }}" loading="lazy" class="w-100 bespoke-img" alt="">
                </div>
                <div class="col-4 bespoke-img">
                    <img src="{{ asset('/images/gallery/gallery-14.jpg') }}" loading="lazy" class="w-100 h-100" alt="">
                </div>
            </div>
        </div>
    </section>

@endsection
