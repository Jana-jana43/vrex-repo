    <header class="homepage11-body">
      <div
        class="header-area homepage11 header header-sticky d-none d-lg-block"
        id="header"
      >
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="header-elements">
                <div class="site-logo">
                  

                  <a href="{{ url('/') }}">
   <img src="{{ asset('assets/img/vishaka.webp') }}" fetchpriority="high" class="img-fluid"  alt="Quality Assurance Services in Chennai" title="Vishakarex Services  / IT Company in chennai">
 
</a>
                </div>
                <div class="main-menu">
                 
                  <ul>
    <li class="{{ request()->is('/') || request()->is('home') ? 'active' : '' }}">
        <a href="{{ url('/') }}">Home</a>
    </li>

    <li class="{{ request()->is('about') ? 'active' : '' }}">
        <a href="{{ url('about') }}">About</a>
    </li>

    
    <li class="{{ request()->is('service*') ? 'active' : '' }}">
        <a href="{{ url('service') }}">Services</a>
    </li>

    <li class="{{ request()->is('projects') ? 'active' : '' }}">
        <a href="{{ url('projects') }}">Projects</a>
    </li>

    
    <li class="{{ request()->is('course*') ? 'active' : '' }}">
        <a href="{{ url('course') }}">Courses</a>
    </li>

    <li class="{{ request()->is('careers') ? 'active' : '' }}">
        <a href="{{ url('careers') }}">Careers</a>
    </li>

    <li class="{{ request()->is('contact') ? 'active' : '' }}">
        <a href="{{ url('contact') }}">Contact Us</a>
    </li>
</ul>
                </div>
                <div class="btn-area" style="display:none !important;">
                  <a href="{{url('contact')}}" class="header-btn18" id="openQuote">
                    Get Quote <span><i class="fa-solid fa-arrow-right"></i></span>
                  </a>
                </div> 
				<div class="btn-area">
                  <a href="https://www.vishakarex.in/competition/" class="header-btn18" id="openQuote">
                    Competition <span><i class="fa-solid fa-arrow-right"></i></span>
                  </a>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    