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
                        <li class="{{ ($active == 'home' || $active == '') ? 'active' : '' }}"><a href="#home">முகப்பு</a></li>
                        <li class="{{ $active == 'about' ? 'active' : '' }}"><a href="#about">விபரங்கள்</a></li>
                        <li class="{{ $active == 'events' ? 'active' : '' }}"><a href="#events">நிகழ்வுகள்</a></li>
                        <li class="{{ $active == 'competitions' ? 'active' : '' }}"><a href="#competitions">போட்டிகள்</a></li>
                        <li class="{{ $active == 'notice' ? 'active' : '' }}"><a href="#notice">அறிவித்தல்கள்</a></li>
                        <li class="{{ $active == 'achievement' ? 'active' : '' }}"><a href="#achievement">சாதனைகள்</a></li>
                        <li class="{{ $active == 'contact' ? 'active' : '' }}"><a href="#contact">தொடர்புகள்</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Smooth scroll script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                window.scrollTo({
                    top: target.offsetTop - 70, // adjust for fixed header
                    behavior: 'smooth'
                });
            }
        });
    });
});
</script>