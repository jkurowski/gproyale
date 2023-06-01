@extends('layouts.page', ['body_class' => 'subpage b2b-page'])

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
                    <h1>B2B CONCIERGE</h1>
                </div>

            </div>

            <div class="col-12 text-justify">
                <p>GP Royale, in collaboration with our close partnerships in the UAE – are able to offer a unique and bespoke B2B concierge service in addition to our Luxury Superyacht Abu Dhabi Grand Prix events:</p>
            </div>
            <div class="col-12 mt-5 text-justify">
                <p>Fast Track Dubai Residency programmes.</p>
                <p>&nbsp;</p>
                <p>Plus, company formation report containing jurisdictional options (Mainland or Free Zone) and company formation strategy consultation in light of new regulatory and compliance obligations in the UAE.</p>
                <p>&nbsp;</p>
                <p>Offshore and Domestic Company formation - including custom document creation with Nominee Director and/or Shareholder Service - including document creation.</p>
                <p>&nbsp;</p>
                <p>Dubai Banking Set Up and Legal Advice.</p>
            </div>
        </div>
    </div>

    <section>
        <picture>
            <source srcset="{{ asset("/images/b2b-concierge.webp") }}" type="image/webp">
            <source srcset="{{ asset("/images/b2b-concierge.jpg") }}" type="image/jpeg">
            <img src="{{ asset("/images/b2b-concierge.jpg") }}" alt="B2B CONCIERGE" loading="lazy" width="1920" height="900" class="w-100">
        </picture>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12 text-justify">
                <p>Office Premises or Shared Office Space, plus personal accommodation services, whether renting, leasing or purchasing.</p>
                <p>&nbsp;</p>
                <p>Local UAE Distribution planning and resources.</p>
                <p>&nbsp;</p>
                <p>Business introductions with influential local Sponsors in differing business sectors (Introduction to licensed sales facilitators).</p>
                <p>&nbsp;</p>
                <p>If you are looking to set up a business within the UAE, or move your distribution into the area, we can help you to plan and facilitate and advise you on the new regulatory and compliance obligations in the UAE.</p>
            </div>
        </div>
    </div>

    <section>
        <picture>
            <source srcset="{{ asset("/images/b2b-concierge-2.webp") }}" type="image/webp">
            <source srcset="{{ asset("/images/b2b-concierge-2.jpg") }}" type="image/jpeg">
            <img src="{{ asset("/images/b2b-concierge-2.jpg") }}" alt="B2B CONCIERGE" loading="lazy" width="1920" height="900" class="w-100">
        </picture>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <blockquote class="freight text-center mb-0">CONNECT, COLLABORATE <i>and</i> GROW <i>with</i> <br>GP ROYALE’S EXCLUSIVE BUSINESS <i>platform in</i> DUBAI</blockquote>
            </div>
        </div>
    </div>

@endsection
