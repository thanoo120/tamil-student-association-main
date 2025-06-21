<header class="header rs-nav header-transparent">
    <div class="sticky-header navbar-expand-lg">
        <div class="menu-bar clearfix">
            <div class="container clearfix">
                <div class="menu-logo">
                    <a href="/blog"><img src="{{asset('assets/images/dlogo.webp')}}" alt="desktop logo"></a>
                </div>
                <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="menu-links navbar-collapse float-md-right collapse justify-content-start" id="menuDropdown">
                    <div class="menu-logo">
                        <a href="/blog"><img src="{{asset('assets/images/mlogo.png')}}" alt="mobile logo"></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="{{($active == 'home' || $active == '') ? 'active' : ''}}"><a href="{{URL::to('/blog?active=home')}}#home">முகப்பு</a></li>
                        <li class="{{$active == 'about' ? 'active' : ''}}"><a href="{{URL::to('/blog?active=about')}}#about">விபரங்கள்</a></li>
                        <li class="{{$active == 'events' ? 'active' : ''}}"><a href="{{URL::to('/blog?active=events')}}#events">நிகழ்வுகள்</a></li>
                        <li class="{{$active == 'competitions' ? 'active' : ''}}"><a href="{{URL::to('/blog?active=competitions')}}#competitions">போட்டிகள்</a></li>
                        <li class="{{$active == 'notice' ? 'active' : ''}}"><a href="{{URL::to('/blog?active=notice')}}#notice">அறிவித்தல்கள்</a></li>
                        <li class="{{$active == 'achievement' ? 'active' : ''}}"><a href="{{URL::to('/blog?active=achievement')}}#achievement">சாதனைகள்</a></li>
                        <li class="{{$active == 'contact' ? 'active' : ''}}"><a href="{{URL::to('/blog?active=contact')}}#contact">தொடர்புகள்</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>