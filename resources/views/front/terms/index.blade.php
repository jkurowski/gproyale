@extends('layouts.page', ['body_class' => 'subpage privacy-policy'])

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

            <div class="col-12 mt-5">
                {!! $page->content !!}
            </div>
        </div>
    </div>
@endsection
