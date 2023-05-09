@extends('layouts.page', ['body_class' => 'subpage'])

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
                <img src="{{ asset('/images/video-abu-dhabi-grand-prix.jpg') }}" width="780" height="550" alt="VIDEO ABU DHABI GRAND PRIX">
            </div>
            <div class="col-6">
                <img src="{{ asset('/images/video-monaco-grand-prix.jpg') }}" width="780" height="550" alt="VIDEO MONACO GRAND PRIX">
            </div>
        </div>
    </div>
@endsection
