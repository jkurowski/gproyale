<div id="pageheader">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 d-flex justify-content-center align-items-end">
                @if($header_file)
                <img src="{{ asset('/images/headers/'.$header_file) }}" alt="">
                @endif
            </div>
        </div>
    </div>
    @isset($slider)
        <ul class="mb-0 list-unstyled">
            @foreach($slider as $image)
                <li style="background-image: url('{{ $image }}')"></li>
            @endforeach
        </ul>
    @endif
</div>
@push('scripts')
    @if($slider)
        <script>
            $("#pageheader ul").slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                arrows: false,
                dots: true,
            });
        </script>
    @endif
@endpush
