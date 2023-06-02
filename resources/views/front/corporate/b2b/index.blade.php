@extends('layouts.page', ['body_class' => 'subpage b2b-page no-bottom'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.pageheader', [
    'title' => ($page->content_header) ?: $page->title,
    'header_file' => 'bbc.png',
    'items' => $page
    ])
@stop

@section('content')
    <div class="container pt-0 pt-sm-3 pt-xxl-5">
        <div class="row">
            <div class="col-12 p-0">
                <img src="{{ asset("/images/b2b-concierge-tagline.jpg") }}" alt="B2B CONCIERGE" width="904" height="509" class="m-auto">
            </div>
        </div>
    </div>

    <section class="rwd-margin">
        <picture>
            <source srcset="{{ asset("/images/b2b-concierge.webp") }}" type="image/webp">
            <source srcset="{{ asset("/images/b2b-concierge.jpg") }}" type="image/jpeg">
            <img src="{{ asset("/images/b2b-concierge.jpg") }}" alt="B2B CONCIERGE" loading="lazy" width="1920" height="900" class="w-100">
        </picture>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="gold-sep">B2B CONCIERGE</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-9">
                <ul class="mb-0 list-unstyled crown-list">
                    <li>Company formation option (Mainland or Free Zone)</li>
                    <li>Formation strategy consultation for new UAE regulatory & compliance</li>
                    <li>Business introductions with influential UAE sponsors</li>
                    <li>Nominee Director and Shareholder Services</li>
                    <li>UAE Distribution planning and resources</li>
                    <li>Office Premises or Shared Office space</li>
                    <li>Banking Set Up</li>
                    <li>Legal Advice</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="rwd-margin">
        <picture>
            <source srcset="{{ asset("/images/b2b-concierge-2.webp") }}" type="image/webp">
            <source srcset="{{ asset("/images/b2b-concierge-2.jpg") }}" type="image/jpeg">
            <img src="{{ asset("/images/b2b-concierge-2.jpg") }}" alt="B2B CONCIERGE" loading="lazy" width="1920" height="900" class="w-100">
        </picture>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="gold-sep">B2C CONCIERGE</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-9 col-md-8 col-lg-6">
                <ul class="mb-0 list-unstyled crown-list">
                    <li>Fast-track UAE residency</li>
                    <li>Personal Accommodation Services</li>
                    <li>Banking Set Up</li>
                    <li>Legal Advice</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="pb-0 rwd-margin">
        <picture>
            <source srcset="{{ asset("/images/b2b-concierge-3.webp") }}" type="image/webp">
            <source srcset="{{ asset("/images/b2b-concierge-3.jpg") }}" type="image/jpeg">
            <img src="{{ asset("/images/b2b-concierge-3.jpg") }}" alt="B2B CONCIERGE" loading="lazy" width="1920" height="900" class="w-100">
        </picture>
    </section>

@endsection
