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

                <div class="text-inside mt-5">
                    <p class="center-justified">For pricing, availability, bespoke event planning, our B2B concierge services or general enquiries about our 2023 Abu Dhabi F1 Grand Prix luxury superyacht hospitality and accommodation packages please contact us at:</p>
                </div>

                <div class="separator pb-5">
                    <img src="{{ asset("/images/separator.png") }}" alt="Section separator" width="1081" height="71">
                </div>

                <div class="text-inside text-center">
                    <p>GP Royale Limited</p>
                    <p>43 Berkeley Square</p>
                    <p>Mayfair London</p>
                    <p>W1J 5AP</p>
                </div>
            </div>
        </div>
    </div>
@endsection
