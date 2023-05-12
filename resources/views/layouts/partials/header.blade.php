<div class="header-holder">
    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div id="logo">
                        <a href="/">
                            <img src="{{ asset("/images/logo.svg") }}" width="210" height="128" alt="ALT Here">
                        </a>
                    </div>
                </div>
                <div class="col-9">
                    <nav role="navigation">
                        <ul class="mb-0 list-unstyled mainmenu">
                            <li class="active"><a href="/">HOME</a></li>
                            <li>
                                <a href="{{ route('events') }}">CORPORATE CONFERENCE & EVENTS</a>
                                <ul class="mb-0 list-unstyled submenu">
                                    <li><a href="{{ route('team') }}">DUBAI CORPORATE TEAM BUILDING ACTIVITIES</a></li>
                                    <li><a href="{{ route('b2b') }}">B2B CONCIERGE</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="">ABU DHABI GRAND PRIX</a>
                                <ul class="mb-0 list-unstyled submenu">
                                    <li><a href="{{ route('activities') }}">DUBAI ACTIVITIES</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('gallery') }}">GALLERY</a></li>
                            <li><a href="{{ route('contact') }}">CONTACT</a></li>
                            <li class="top-contact"><a href="tel:+442031502000"><img src="{{ asset("/images/phone-icon.svg") }}" alt="E-mail icon"></a></li>
                            <li class="top-contact"><a href="mailto:info@gproyale.com"><img src="{{ asset("/images/envelope-icon.svg") }}" alt="Phone icon"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>
