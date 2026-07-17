<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--   Google Search Console Verification-->
    <meta name="google-site-verification" content="9lFvxLBuKYg6lb7li6hXxnyEpmbLXn8i_MkaDvOg3EY" />
 <!--   Google Analytics Verification -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JKSFPBQ297"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
     
      gtag('config', 'G-JKSFPBQ297'); 
    </script>
  @verbatim
  <script type="application/ld+json">
    {"@context":"https://schema.org","@type":"EducationalOrganization","name":"Vishakarex In-Plant Training","url":"https://www.vishakarex.in/course","description":"Vishakarex offers in-plant IT training in Santhome, Chennai - PHP, Flutter, QA, web development, and mobile app development internships with real project experience.","telephone":"+916379880849","email":"info@vishakarex.in","address":{"@type":"PostalAddress","streetAddress":"4th Floor, Temple View Apartments, 4-A, 89, Santhome High Rd","addressLocality":"Chennai","addressRegion":"Tamil Nadu","postalCode":"600028","addressCountry":"IN"}}
  </script>
@endverbatim

    <title>Vishakarex - IT Courses in Chennai for Future Software Engineers</title>
    <meta name="description" content="Vishakarex offers the best IT courses in Chennai. Learn from experts through software engineer classes, coding sessions, and hands-on development training." />

<meta name="keywords" content="IT courses in chennai , software engineer classes" />
<meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="assets/img/vishaka-fav.webp" type="image/x-icon"/>

    <link rel="preload" href="assets/css/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="./assets/css/course.css">
    <link rel="stylesheet" href="./assets/css/course2.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/aos.css" />
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/plugins/mobile.css" />
    <link rel="stylesheet" href="assets/css/plugins/owlcarousel.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/sidebar.css" />
    <link rel="stylesheet" href="assets/css/plugins/slick-slider.css" />
    <!-- <link rel="stylesheet" href="assets/css/plugins/nice-select.css" /> -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/vishaka.css" />
    <script src="assets/js/plugins/jquery-3-6-0.min.js" defer></script>

    <style>

      *{
        font-family: "Figtree", sans-serif;
      }
          /* -----------------------------
       Hero
       -----------------------------*/
    .hero{
      max-width: 100%;
      margin: 0;
      padding: 26px;
      border-radius: 0 0 20% 20%;
      overflow: hidden;
      color: #fff;
      position: relative;
      display: flex;
      gap: 20px;
      align-items: center;
      flex-wrap: wrap;
      padding-right: 50px;
    }

    .hero .left{flex:1;min-width:300px;padding:12px 40px; line-height: 30px;}
    .hero .right{padding-right:12px; width:550px;max-width:46%;display:flex;justify-content:start}

    .chip{display:inline-flex;align-items:center;background:linear-gradient(90deg, rgba(126,87,216,0.12), rgba(230,184,74,0.08));padding:8px 14px;border-radius:999px;gap:10px;font-weight:700;color:#fff;font-size: 2rem !important;}
    .chip i{opacity:0.95}

    .hero h1{font-family:'Figtree',serif;font-size:3rem;line-height:1.05;margin-top:12px}
    .hero p.lead{opacity:0.9;color:rgba(255,255,255,0.9);margin-top:12px}

    .hero .meta-cards{display:flex;gap:12px;margin-top:18px;flex-wrap:wrap}
    .meta-card{background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));padding:12px 14px;border-radius:12px;display:flex;align-items:center;gap:12px;box-shadow:var(--card-shadow)}

    .hero-visual{width:420px;border-radius:14px;
      /* box-shadow:0 22px 68px rgba(0,0,0,0.45); */
      transform:rotate(-2deg)}
    .overlay-hero{
      width: 22%;
      height: 50%;
      position: absolute;
      background: #ffffff33;
      border-radius: 50%;
      left: -6%;
      animation: heroImageFloat 2s ease-in-out infinite;
      top: -10%;
    }
    /* Chat Widget */
.chat-widget {
  position: fixed;
  bottom: 2rem;
  right: 2rem;
  z-index: 1000;
}

.chat-toggle {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: var(--primary-gradient);
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  cursor: pointer;
  box-shadow: var(--shadow-lg);
  transition: all var(--animation-speed-normal) ease;
  position: relative;
}

.chat-toggle:hover {
  transform: scale(1.1);
}

.chat-notification {
  position: absolute;
  top: -5px;
  right: -5px;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background: #ff4757;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.8rem;
  font-weight: bold;
  animation: notificationPulse 2s ease-in-out infinite;
}

.chat-window {
  position: absolute;
  bottom: 80px;
  right: 0;
  width: 350px;
  height: 500px;
  background: #fff;
  border-radius: 20px;
  box-shadow: var(--shadow-lg);
  border: 1px solid var(--color-border);
  display: none;
  flex-direction: column;
  overflow: hidden;
}

.chat-window.active {
  display: flex;
}

.chat-header {
  padding: 1rem;
  background: var(--primary-gradient);
  color: white;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.chat-title {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-weight: 600;
}

.chat-close {
  background: none;
  border: none;
  color: white;
  cursor: pointer;
  font-size: 1.2rem;
  padding: 0.25rem;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background var(--animation-speed-normal) ease;
}

.chat-close:hover {
  background: rgba(255, 255, 255, 0.2);
}

.chat-messages {
  flex: 1;
  padding: 1rem;
  overflow-y: auto;
}

.chat-message {
  margin-bottom: 1rem;
  display: flex;
  gap: 0.75rem;
  align-items: flex-start;
}

.message-avatar {
  width: 35px;
  height: 35px;
  border-radius: 50%;
  background: var(--color-primary);
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 0.9rem;
  flex-shrink: 0;
}

.message-content {
  background: #fff;
  padding: 0.75rem;
  border-radius: 15px;
  box-shadow: 0 1px 6px #e2e2e2;
  max-width: 80%;
  font-size: 0.9rem;
  line-height: 1.4;
}

.chat-input-container {
  padding: 1rem;
  border-top: 1px solid var(--color-border);
  display: flex;
  gap: 0.5rem;
}

.chat-input {
  flex: 1;
  padding: 0.75rem;
  border: 1px solid #ddd;
  border-radius: 25px;
  background: #fff;
  font-size: 0.9rem;
}

.chat-send {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: var(--color-primary);
  border: none;
  color: white;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all var(--animation-speed-normal) ease;
}

.chat-send:hover {
  transform: scale(1.1);
}


    #loading-screen{}

    .course-image img {
      object-fit: cover;
      width: 100%;
      height: 100%;
    }
    .meta-card img{
      width: 50px;
    }

    

@media (max-width: 1200px){
     .chip{
margin-top: 100px;
      }
    }
    @media (max-width: 768px) {
      header .card-lux.ms-5, header .left.ms-5{
        margin-left: 0 !important;
      }
      .hero{
        flex-direction: column-reverse !important;
        padding: 0 !important;
        border-radius: 0 0 20px 20px !important;
      }
      .hero .right{
        width: 100% !important;
        display: none !important;
      }

      
     
      .overlay-hero{
        display: none;
      }
      .hero .left {
        flex: 1;
        min-width: 300px;
        padding: 100px 10px 20px 10px;
      }
      
      .year-number {
        width: 50px;
        height: 50px;
      }
      .timeline-marker {
          width: 25px;
      }
      .timeline-content {
          padding: 10px;
          margin-left: 0 !important;
      }
      .facility-card{
        width: 83%;
      }
      #existing-system .tab-content.active{
        padding: 0 5px !important;
      }
      .curriculum-features .d-flex{
        flex-wrap: wrap;
      }
      section{
        padding: 0 !important;
      }
    }
    .invalid {
      border: 1px solid #d9534f !important;
      box-shadow: 0 0 4px rgba(217, 83, 79, 0.4);
    }

    button.btn.btn-primary:hover{
      background: linear-gradient(268deg, #1e6fe967 0.24%, #8f20c279 98.24%) !important;
    }
/* Specific styling for department dropdown */
.custom-department-dropdown {
    width: 100% !important;
    padding: 0.75rem !important;
    border: 2px solid #e2e8f0 !important;
    border-radius: 8px !important;
    background: #ffffff !important;
    color: #1a202c !important;
    font-size: 1rem !important;
    font-family: inherit !important;
    transition: all 0.3s ease !important;
    appearance: none !important;
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3E%3Cpath fill='%23333333' d='M8 11L3 6h10z'/%3E%3C/svg%3E") !important;
    background-repeat: no-repeat !important;
    background-position: right 0.75rem center !important;
    background-size: 16px !important;
    padding-right: 2.5rem !important;
    cursor: pointer !important;
}

.custom-department-dropdown:focus {
    outline: none !important;
    border-color: #2c5282 !important;
    box-shadow: 0 0 0 3px rgba(44, 82, 130, 0.1) !important;
}

.custom-department-dropdown:hover {
    border-color: #cbd5e0 !important;
}

.custom-department-dropdown option {
    padding: 0.5rem !important;
    background: #ffffff !important;
    color: #1a202c !important;
}


    </style>
    <style>
.form-group {
  position: relative;
  margin-bottom: 20px;
}

.warning-icon {
  position: absolute;
  right: 10px;
  top: 38px;
  color: #d9534f;
  display: none;
  pointer-events: none;
  font-size: 14px;
}

/* Show only when the input/select/textarea is invalid */
input.invalid + .warning-icon,
select.invalid + .warning-icon,
textarea.invalid + .warning-icon {
  display: inline;
}


/* Red border for invalid fields */
.invalid {
  border: 1px solid #d9534f !important;
}

/* Show warning icon when invalid */
.invalid ~ .warning-icon {
  display: inline;
}
</style>

   <script type="text/javascript">

   (function(c,l,a,r,i,t,y){

        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};

        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;

        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);

    })(window, document, "clarity", "script", "vqdjeg5zvf");

</script>

  </head>
<body>
  <!--===== PROGRESS STARTS=======-->
    <div class="paginacontainer">
      <div class="progress-wrap">
        <svg
          class="progress-circle svg-content"
          width="100%"
          height="100%"
          viewBox="-1 -1 102 102"
        >
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
      </div>
    </div>
    <!--===== PROGRESS ENDS=======-->
    <!-- Loading Screen -->
    <div class="preloader preloader1">
      <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon">
          <img
            src="assets/img/preloader.webp"
            class="img-fluid"
            alt="preloader"
          />
        </div>
      </div>
    </div>
    <!-- Scroll Progress -->
    <div id="scroll-progress"></div>

    <!-- Header -->
     <!--=====HEADER START=======-->
@include('layouts.header')
    <!--=====HEADER END =======-->
    <!--===== MOBILE HEADER STARTS =======-->
    <div class="mobile-header mobile-haeder11 d-block d-lg-none">
      <div class="container-fluid">
        <div class="col-12">
          <div class="mobile-header-elements">
            <div class="mobile-logo">
              <a href="{{url('home')}}">
                 <img src="assets/img/vishaka.webp" fetchpriority="high" class="img-fluid"  alt="Quality Assurance Services in Chennai" title="Vishakarex Services  / IT Company in chennai"/>
                </a>
            </div>
			  <a href="https://www.vishakarex.in/competition/" class="header-btn18 hash-nav">
				Competition <span><i class="fa-solid fa-arrow-right"></i></span>
			  </a>
            <div class="mobile-nav-icon dots-menu">
              <i class="fa-solid fa-bars"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mobile-sidebar mobile-sidebar11">
      <div class="logosicon-area">
        <div class="logos">
           <img src="assets/img/vishaka.webp" fetchpriority="high" class="img-fluid"  alt="Quality Assurance Services in Chennai" title="Vishakarex Services  / IT Company in chennai" /> 
         </div>
        <div class="menu-close">
          <i class="fa-solid fa-xmark"></i>
        </div>
      </div>
      <div class="mobile-nav mobile-nav1">
        <ul class="mobile-nav-list nav-list1">
<li><a href="{{ url('home') }}">Home</a></li>
<li><a href="{{ url('about') }}">About</a></li>
<li><a href="{{ route('service') }}">Services</a></li>

<li><a href="{{ url('projects') }}">Projects</a></li>
<li><a href="{{ url('course') }}">Courses</a></li>
          <li><a href="{{url('careers')}}">Careers</a></li>
<li><a href="{{ url('contact') }}">Contact Us</a></li>
        </ul>

        <div class="allmobilesection">
          <a href="{{url('contact')}}" class="header-btn18"
            >Get Quote  <span><i class="fa-solid fa-arrow-right"></i></span
          ></a>
          <div class="single-footer">
            <h3>Contact Info</h3>
            <div class="footer1-contact-info">
              <div class="contact-info-single">
                <div class="contact-info-icon">
                  <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div class="contact-info-text">
                  <a href="tel:+916379880849" class="hash-nav"
                    >+91 63798 80849</a
                  >
                </div>
              </div>

              <div class="contact-info-single">
                <div class="contact-info-icon">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="contact-info-text">
                  <a href="mailto:info@vishakarex.in">info@vishakarex.in</a>
                </div>
              </div>

              <div class="single-footer">
                <h3>Our Location</h3>

                <div class="contact-info-single">
                  <div class="contact-info-icon">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <div class="contact-info-text">
                    <a class="hash-nav"
                      ><strong>Vishakarex Services Pvt. Ltd.</strong><br> 4th Floor, Temple View Apartments, 4-A, situated in, 89,
                      Santhome High Rd, Santhome, Chennai, Tamil Nadu 600028.</a
                    >
                  </div>
                </div>
              </div>
              <div class="single-footer">
                <h3>Social Links</h3>

                
                <div class="social-links-mobile-menu">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/vishakarex.services.pvt.ltd" target="_blank"
                        ><i class="fa-brands fa-facebook-f"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/vishakarex/" target="_blank"
                        ><i class="fa-brands fa-instagram"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/company/vishakarex-services-pvt-ltd/" target="_blank"
                        ><i class="fa-brands fa-linkedin-in"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://www.youtube.com/@VishakaRex" target="_blank"
                        ><i class="fa-brands fa-youtube"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--===== MOBILE HEADER STARpTS =======-->


  <!-- HERO -->
  <header class="hero container fade-in pt-5" id="top">
    <div class="left ms-5">
      <h1 class="chip mt-3"><img style="width: 50px;" src="./assets/img/icons/In-plant-Training.png" alt="Our career-focused training creates a bright future for students, provided by the best IT services in Chennai." title="Vishakarex Services / IT courses in chennai ">&nbsp;In-Plant Training . IT Course Excellence</h1>
      <p class="mt-3 ms-3">Transform Knowledge into Experience - Projects, Practice & Proof</p>

      <div class="meta-cards">
        <div class="meta-card">
          <img style="width: 50px;" src="./assets/img/icons/Practical-Learning.png" alt="Real-time learning that enhances understanding is provided by the best IT services in Chennai." title="Vishakarex Services / IT courses in chennai ">
          <div>
            <div style="font-weight:700; font-size: 20px;">Practical Learning</div>
            <small style="color:var(--muted)">Work on real-world projects</small>
          </div>
        </div>
        <div class="meta-card">
          <img style="width: 50px;" src="./assets/img/icons/Career-Centric.png" alt="Skill development and IT experience provided by the best IT services in Chennai." title="Vishakarex Services / IT courses in chennai ">
          <div>
            <div style="font-weight:700; font-size: 20px;">Career-Centric Path</div>
            <small style="color:var(--muted)">Skill development aligned with the industry</small>
          </div>
        </div>
      </div>

      <div class="overlay-hero"></div>

      <div style="margin:25px 0 0 0;display:flex;gap:34px;flex-wrap:wrap;align-items:center">
        <div class="card-lux ms-3" style="display:flex;gap:10px;align-items:center">
          <img style="width: 50px;" src="./assets/img/icons/Certification.png" alt="Valuable course completed; certificate provided by the best IT services in Chennai." title="Vishakarex Services / IT courses in chennai">
          <div>
            <div style="font-weight:700; font-size: 20px;">Certification</div>
            <small style="color:var(--muted)">Gain valuable recognition</small>
          </div>
        </div>

        <div class="card-lux ms-3" style="display:flex;gap:10px;align-items:center">
          <img style="width: 50px;" src="./assets/img/icons/Budget-Smart.png" alt="Smart training is provided at an affordable cost in the best IT services in Chennai." title="Vishakarex Services / IT courses in chennai ">
          <div>
            <div style="font-weight:700; font-size: 20px;">Budget-Smart Training</div>
            <small style="color:var(--muted)">Affordable learning for all students</small>
          </div>
        </div>
      </div>
      <div style="margin:64px 0 0 3%;display:flex;gap:12px;flex-wrap:wrap">
        <a class="header-btn18" href="#contact">Enroll Now</a>
        <!-- <a class="btn btn-outline-light" href="#" onclick="downloadCourse(event)"><i class="fa-solid fa-file-arrow-down me-2"></i>Download Courses</a> -->
        <a class="btn btn-light text-center align-content-center" href="mailto:info@vishakarex.in"><i class="fa-solid fa-envelope me-2"></i>Contact</a>
      </div>
    </div>

    <div class="right">
      <!-- click opens gallery modal -->
      <div class="hero-visual animate-slide-left" data-delay="1500">
        <div class="hero-image-container">
          <div class="hero-image-wrapper">
            <div class="hero-image-placeholder">
              <i class="fas fa-laptop-code"></i>
            </div>
          </div>
          <div class="floating-elements">
            <!-- Web & Frontend -->
            <div class="floating-element" data-speed="1.2" style="font-size: 2rem;">
              <i class="fab fa-html5"></i>
            </div>
            <div class="floating-element" data-speed="1.6" style="font-size: 3rem;">
              <i class="fab fa-css3-alt"></i>
            </div>
            <div class="floating-element" data-speed="1.8" style="font-size: 2.5rem;">
              <i class="fab fa-js-square"></i>
            </div>

            <!-- Backend -->
            <div class="floating-element" data-speed="1.7" style="font-size: 2.8rem;">
              <i class="fab fa-php"></i>
            </div>
            <div class="floating-element" data-speed="1.4" style="font-size: 2.3rem;">
              <i class="fas fa-database"></i>
            </div>

            <!-- Tools -->
            <!-- <div class="floating-element" data-speed="2.2" style="font-size: 1.5rem;">
              <i class="fab fa-git-alt"></i>
            </div> -->
            <div class="floating-element" data-speed="1.9" style="font-size: 2.5rem;">
              <i class="fab fa-github"></i>
            </div>

            <!-- Design -->
            <div class="floating-element" data-speed="1.6" style="font-size: 4rem;">
              <i class="fab fa-figma"></i>
            </div>

            <!-- Mobile -->
            <div class="floating-element" data-speed="1.3" style="font-size: 3.5rem;">
              <i class="fab fa-android"></i>
            </div>

            <!-- SEO -->
            <div class="floating-element" data-speed="1.1" style="font-size: 1.8rem;">
              <i class="fas fa-chart-line"></i>
            </div>
          </div>

        </div>
      </div>
    </div>
  </header>

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">About In-plant Training</h2>
                <p class="section-subtitle">Students undergo real-time industry exposure, live projects, and multi-domain skill development in in-plant training through our best IT courses in Chennai, where they develop their careers.</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <div class="about-item">
                        <div class="about-icon">
                          <img class="img-fluid" src="assets/img/course/icons/Real-Learning-Experience.png" width="40" alt="Practical real-time learning that ensures the best IT course in Chennai." title="Vishakarex Services / IT courses in chennai" />
                        </div>
                        <div class="about-info">
                            <h3>Real Learning Experience</h3>
                            <p>The In-Plant Training program at Vishakarex Services Pvt. Ltd. engages students in real-time industry projects. Trainees acquire hands-on experience in corporate processes and technological expertise. This IT course in Chennai develops a bridge from academics to industry standards while also enhancing professional self-assurance.</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="about-icon">
                          <img class="img-fluid" src="assets/img/course/icons/Multi-Domain- Industry-Exposure.png" width="40" alt="Multi-domain practical learning provided by the best IT course in Chennai." title="Vishakarex Services / IT courses in chennai " />
                        </div>
                        <div class="about-info">
                            <h3>Multi-Domain Industry Exposure</h3>
                            <p>Trainees will be exposed to multiple domains, including Web Development, Mobile App Development, Design, Flutter, PHP, and Testing. This cross-functional exposure and software engineer classes will build adaptability skills and expand career opportunities.</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="about-icon">
                          <img class="img-fluid" src="assets/img/course/icons/Career-Oriented-Certifications.png" width="40" alt="Course completion certificates and recognition are provided by the best IT course in Chennai." title="Vishakarex Services / IT courses in chennai " />
                        </div>
                        <div class="about-info">
                            <h3>Career-Oriented Certifications</h3>
                            <p>Participants will receive recognized training certificates, as well as documents supporting their placement. The industry-focused credentials will facilitate employability and advancement in careers.</p>
                        </div>
                    </div>
                </div>
                <div class="about-stats">
                    <div class="stat-card">
                        <div class="stat-number" data-count="6">6</div>
                        <div class="stat-label">Active Departments</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number" data-count="100">100</div>
                        <div class="stat-label">Success Rate (%)</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number" data-count="1">3</div>
                        <div class="stat-label">Duration (Month)</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number" data-count="4">4 +</div>
                        <div class="stat-label">Certificates Provided</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Objectives Section -->
    <section id="objectives" class="pt-0 courses section">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">In-Plant Training-Work  Modules</h3>
                <p class="section-subtitle">Get industry-relevant learning in real-time through our IT courses in Chennai, department-specific training to develop applied skills, and career readiness.</p>
            </div>

            <div class="courses-grid">
                <div class="course-card">
                    <div class="course-image">
                        <img src="assets/img/course/Web-Development-team.webp" loading="lazy" alt="We deliver responsive websites using current web technologies by the best IT services in Chennai." title="Vishakarex Services / IT courses in chennai">
                        <div class="course-overlay">
                            <a href="{{url('course/web-development-training-chennai')}}"><button class="btn btn-primary btn-sm">
                                <div class="btn-overlay1"></div>
                                <div class="btn-overlay2"></div>
                                Learn More</button></a>
                        </div>
                    </div>
                    <div class="course-content">
                        <div class="course-meta">
                            <span class="course-level">DEPARTMENT </span>
                            <span class="course-duration">Development</span>
                        </div>
                        <h3 class="course-title">Web Development Team</h3>
                        <p class="course-description">Gain experience with building responsive websites using current web technologies.</p>
                        <div class="course-features">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>Javascript</span>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-image">
                        <!-- <i class="fas fa-briefcase"></i> -->
                        <img src="assets/img/course/Designing-Team.webp" loading="lazy" alt="Creative designs by the design team that added business value provided by the best IT services in Chennai." title="Vishakarex Services / IT courses in chennai">
                        <div class="course-overlay">
                            <a href="{{url('course/graphic-design-internship')}}"><button class="btn btn-primary btn-sm">
                                <div class="btn-overlay1"></div>
                                <div class="btn-overlay2"></div>
                                Learn More</button></a>
                        </div>
                    </div>
                    <div class="course-content">
                        <div class="course-meta">
                            <span class="course-level">DEPARTMENT</span>
                            <span class="course-duration">Design & Creativity</span>
                        </div>
                        <h3 class="course-title">Designing Team</h3>
                        <p class="course-description">Gain practical experience in UI/UX, branding, and 3D visual design using Blender to create modern, industry-ready graphics.</p>
                        <div class="course-features">
                           <span>UI/UX</span>
                            <span>Branding</span>
                            <span>Graphics</span>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-image">
                        <img src="assets/img/course/Mobile-App-Development-Team.webp" loading="lazy" alt="Mobile app development that ensures quality output in iOS and Android by the best IT services in Chennai." title="Vishakarex Services / IT courses in chennai ">
                        <div class="course-overlay">
                                <a href="{{url('course/mobile-app-development-internship')}}"><button class="btn btn-primary btn-sm">
                                <div class="btn-overlay1"></div>
                                <div class="btn-overlay2"></div>
                                Learn More</button></a>
                        </div>
                    </div>
                    <div class="course-content">
                        <div class="course-meta">
                            <span class="course-level">DEPARTMENT</span>
                            <span class="course-duration">App Development</span>
                        </div>
                        <h3 class="course-title">Mobile App Development Team</h3>
                        <p class="course-description">Gain experience with Android and iOS apps while developing coding, design, and API experience.</p>
                        <div class="course-features">
                           <span>Android</span>
                            <span>iOS</span>
                            <span>API</span>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-image">
                        <img src="assets/img/course/Flutter-Developer-team.webp" loading="lazy" alt="Deliver valuable mobile apps using fuller development provided by the best IT service in Chennai." title="Vishakarex Services / IT courses in chennai">
                        <div class="course-overlay">
                                <a href="{{url('course/flutter-developer-internship')}}"><button class="btn btn-primary btn-sm">
                                <div class="btn-overlay1"></div>
                                <div class="btn-overlay2"></div>
                                Learn More</button></a>
                        </div>
                    </div>
                    <div class="course-content">
                        <div class="course-meta">
                            <span class="course-level">DEPARTMENT</span>
                            <span class="course-duration">Multiplatform</span>
                        </div>
                        <h3 class="course-title">Flutter Development Team</h3>
                        <p class="course-description">Experience with cross-platform mobile apps using Flutter and Dart for their efficient performance.</p>
                        <div class="course-features">
                            <span>Flutter</span>
                            <span>Dart</span>
                            <span>Firebase</span>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-image">
                        <img src="assets/img/course/PHP-Development-Team.webp" loading="lazy" alt="Hands-on backend development training using PHP, Laravel, and MySQL as part of IT courses in Chennai" title="Vishakarex Services / IT courses in chennai ">
                        <div class="course-overlay">
                                <a href="{{url('course/php-training-in-chennai')}}"><button class="btn btn-primary btn-sm">
                                <div class="btn-overlay1"></div>
                                <div class="btn-overlay2"></div>
                                Learn More</button></a>
                        </div>
                    </div>
                    <div class="course-content">
                        <div class="course-meta">
                            <span class="course-level">DEPARTMENT</span>
                            <span class="course-duration">Backend Systems</span>
                        </div>
                        <h3 class="course-title">PHP Development Team</h3>
                        <p class="course-description">Gain experience in the development of secure backend systems using PHP, Laravel and MySQL with real project experiences.</p>
                        <div class="course-features">
                            <span>PHP</span>
                            <span>Laravel</span>
                            <span>MySQL</span>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-image">
                        <img src="assets/img/course/Testing-&-QA-Team.webp" loading="lazy" alt="Real-time QA and software testing practice for live projects offered through IT courses in Chennai." title="Vishakarex Services / IT courses in chennai ">
                        <div class="course-overlay">
                                <a href="{{url('course/software-testing-training-in-chennai')}}"><button class="btn btn-primary btn-sm">
                                <div class="btn-overlay1"></div>
                                <div class="btn-overlay2"></div>
                                Learn More</button></a>
                        </div>
                    </div>
                    <div class="course-content">
                        <div class="course-meta">
                            <span class="course-level">DEPARTMENT</span>
                            <span class="course-duration">Quality Control</span>
                        </div>
                        <h3 class="course-title">Testing & QA Team</h3>
                        <p class="course-description">To gain valuable testing experience for live projects for quality, performance, stability and reliability, and effective QA processes.</p>
                        <div class="course-features">
                            <span>Testing</span>
                            <span>Automation</span>
                            <span>Bug</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Scope Section -->
    <section id="scope" class="curriculum section">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">Scope of the IT Courses</h3>
                <p class="section-subtitle">Experience real-time learning opportunities across multiple industries and corporate applications for specific functions through our IT courses in Chennai.</p>
            </div>

            <div class="curriculum-timeline">
                <div class="timeline-item" data-year="1">
                    <div class="timeline-marker">
                        <span class="year-number">                          
                          <img class="img-fluid mb-2" src="assets/img/course/icons/Live-Industry-Projects-&-Mentorship.png" width="40" alt="Collaborative real-team exposure across development, apps, and design departments provided by IT courses in Chennai." title="Vishakarex Services / IT courses in chennai " />
                        </span>
                    </div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Live Industry Projects & Mentorship</h3>
                        <p class="timeline-description">Participate in live industry projects with guidance from seasoned mentors who provide insight into actual workflows, execution, and the entire process.</p>
                        <div class="curriculum-subjects">
                            <div class="subject-group">
                                <h4>Key Activities</h4>
                                <ul>
                                    <li><i class="fas fa-hand-point-right"></i> Work on real corporate projects</li>
                                    <li><i class="fas fa-hand-point-right"></i> Receive ongoing guidance from a mentor</li>
                                    <li><i class="fas fa-hand-point-right"></i> Participate in traditional project reviews</li>
                                    <li><i class="fas fa-hand-point-right"></i> Use coding standards typical in the profession</li>
                                </ul>
                            </div>
                            <div class="subject-group">
                                <h4>Competencies Developed</h4>
                                <div class="skills-tags">
                                    <span class="skill-tag">real-world projects</span>
                                    <span class="skill-tag">Industry partnership</span>
                                    <span class="skill-tag">Technical troubleshooting skills</span>
                                    <span class="skill-tag">Corporate Readiness</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-year="2">
                    <div class="timeline-marker">
                        <span class="year-number">                          
                          <img class="img-fluid mb-2" src="assets/img/course/icons/Department-Integration-&-Coordination.png" width="40" alt="Department Integration & Coordination" title="Department Integration & Coordination" />
                        </span>
                    </div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Department Integration & Coordination</h3>
                        <p class="timeline-description">Work and collaborate with assorted departments , which may include Web Development, Mobile Apps, and Design, to experience real teams and corporate communication flow.</p>
                        <div class="curriculum-subjects">
                            <div class="subject-group">
                                <h4>Key Activities</h4>
                                <ul>
                                    <li><i class="fas fa-hand-point-right"></i> Work across departments</li>
                                    <li><i class="fas fa-hand-point-right"></i> Participate in workflow mapping</li>
                                    <li><i class="fas fa-hand-point-right"></i> Handle client communication</li>
                                    <li><i class="fas fa-hand-point-right"></i> Coordinate and report on task alignment</li>
                                </ul>
                            </div>
                            <div class="subject-group">
                                <h4>Technical Areas</h4>
                                <div class="skills-tags">
                                    <span class="skill-tag">Teamwork</span>
                                    <span class="skill-tag">Corporate awareness</span>
                                    <span class="skill-tag">Communications plan</span>
                                    <span class="skill-tag">Process improvement</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-year="3">
                    <div class="timeline-marker">
                        <span class="year-number">                          
                          <img class="img-fluid mb-2" src="assets/img/course/icons/Implementation-of-Practical-Technology.png" width="40" alt="Hands-on problem-solving using modern tools and technologies in a corporate environment as part of IT courses in Chennai." title="Vishakarex Services / IT courses in chennai " />
                        </span>
                    </div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Implementation of Practical Technology</h3>
                        <p class="timeline-description">Utilize your technical expertise on current development problems using the latest technologies and development tools in a corporate project environment.</p>
                        <div class="curriculum-subjects">
                            <div class="subject-group">
                                <h4>Key Actions</h4>
                                <ul>
                                    <li><i class="fas fa-hand-point-right"></i> Complete project tasks</li>
                                    <li><i class="fas fa-hand-point-right"></i> Perform live debugging and testing</li>
                                    <li><i class="fas fa-hand-point-right"></i> Utilize the project's live data</li>
                                    <li><i class="fas fa-hand-point-right"></i> Contribute to enhancing UI/UX</li>
                                </ul>
                            </div>
                            <div class="subject-group">
                                <h4>Skills Obtained</h4>
                                <div class="skills-tags">
                                    <span class="skill-tag">High-level technical abilities</span>
                                    <span class="skill-tag">Data-driven decision-making</span>
                                    <span class="skill-tag">Creativity and the ability to adapt</span>
                                    <span class="skill-tag">Quality deliverables</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-year="4">
                    <div class="timeline-marker">
                        <span class="year-number">                          
                          <img class="img-fluid mb-2" src="assets/img/course/icons/Professional-Evaluation-&-Career-Development.png" width="40" alt="Professional Evaluation & Career Development" title="Professional Evaluation & Career Development" />
                        </span>
                    </div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Professional Evaluation & Career Development</h3>
                        <p class="timeline-description">Continuous assessment, mentorship feedback, and training help you gain confidence, develop professional communication skills, and become career-ready.</p>
                        <div class="curriculum-subjects">
                            <div class="subject-group">
                                <h4>Key Actions</h4>
                                <ul>
                                    <li><i class="fas fa-hand-point-right"></i> Performance review based on a mentor</li>
                                    <li><i class="fas fa-hand-point-right"></i> Project documentation and reports</li>
                                    <li><i class="fas fa-hand-point-right"></i> Building your resume and portfolio</li>
                                    <li><i class="fas fa-hand-point-right"></i> Mock interviews and career sessions</li>
                                </ul>
                            </div>
                            <div class="subject-group">
                                <h4>Skills Obtained</h4>
                                <div class="skills-tags">
                                    <span class="skill-tag">Career development</span>
                                    <span class="skill-tag">Professional communication</span>
                                    <span class="skill-tag">Preparation for possible leadership</span>
                                    <span class="skill-tag">Continuous development</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="curriculum-features d-flex row">
                <div class="section-header my-4">
                    <h3 class="section-title">IT Training Flow</h3>
                    <p class="section-subtitle">A methodical training experience in an industrial workplace-a fixed schedule consisting of sequential steps that offers progressive exposure to actual industry practice along with corporate skills development.</p>
                </div>
                <div class="col-ms-12 gap-4 d-flex">
                    <div class="feature-card">
                          <img class="img-fluid mb-2" src="assets/img/course/icons/Orientation-&-Introduction.png" alt="Corporate culture, project objectives, and departmental workflow orientation included in IT courses in Chennai." title="Vishakarex Services / IT courses in chennai " />
                        <h3>Orientation & Introduction</h3>
                        <p>The trainees receive an overview of corporate culture, the project's purpose and objectives, and the workflow of the department.</p>
                    </div>
                    <div class="feature-card">
                          <img class="img-fluid mb-2" src="assets/img/course/icons/Department-Assignment.png" alt="“Skill-based departmental placement for targeted learning offered through IT courses in Chennai." title="Vishakarex Services / IT courses in chennai " />
                        <h3>Department Assignment</h3>
                        <p>Trainees will be appointed to the appropriate departments that correlate with their skills and interests for a targeted learning experience.</p>
                    </div>
                    <div class="feature-card">
                          <img class="img-fluid mb-2" src="assets/img/course/icons/Project-Work.png" alt="Practical live project work supervised by professionals as part of IT courses in Chennai." title="Vishakarex Services / IT courses in chennai" />
                        <h3>Project Work</h3>
                        <p>Trainees will have the opportunity to work on live projects to engage in the practical application of theoretical learning while being supervised by professional staff.</p>
                    </div>
                    <div class="feature-card">
                          <img class="img-fluid mb-2" src="assets/img/course/icons/Assessment-&-Certification.png" alt="Trainee performance evaluation with professional practice certification provided by IT courses in Chennai." title="Vishakarex Services / IT courses in chennai" />
                        <h3>Assessment & Certification</h3>
                        <p>The trainees experiences will be assessed, and successful candidates will receive professional practice certification.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificates Section -->
    <section id="certificates" class="facilities section">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">Certificates and Documentation</h3>
                <p class="section-subtitle">Participants receive official documentation and certificates to validate their skills, professional development training, and practical exposure experiences through our best IT courses in Chennai.</p>
            </div>

            <div class="facilities-grid">
                <div class="facility-card">
                    <div class="facility-icon">
                        <img class="img-fluid" src="assets/img/course/icons/In-Plant-Training-(IPT)Certificate.png" alt="In-Plant Training (IPT)Certificate" title="In-Plant Training (IPT)Certificate" />
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title">In-Plant Training (IPT)Certificate</h3>
                        <p class="facility-description">This demonstrates hands-on corporate-level training, which involves experiences with actual industry projects and exposure to the workflows and practices of the workplace.</p>
                        <ul class="facility-features">
                            <li><i class="fas fa-check"></i> Verified Industry Experience</li>
                            <li><i class="fas fa-check"></i> Professional Skills Verification</li>
                            <li><i class="fas fa-check"></i> Career Advancement Recognition</li>
                            <li><i class="fas fa-check"></i> Corporate Training Certification</li>
                        </ul>
                    </div>
                </div>

                <div class="facility-card">
                    <div class="facility-icon">
                        <img class="img-fluid" src="assets/img/course/icons/Free-Workshop-Certificate.png" alt="Hands-on corporate-level training with real industry project exposure offered through IT courses in Chennai" title="Vishakarex Services / IT courses in chennai " />
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title">Free Workshop Certificate</h3>
                        <p class="facility-description">This certificate validates participation in workshops led by professionals to enhance practical skills and knowledge.</p>
                        <ul class="facility-features">
                            <li><i class="fas fa-check"></i> Gained Knowledge from Professionals</li>
                            <li><i class="fas fa-check"></i> Practical Learning Action Session</li>
                            <li><i class="fas fa-check"></i> Career Advancement Involvement</li>
                            <li><i class="fas fa-check"></i> Industry Experience and Knowledge Access</li>
                        </ul>
                    </div>
                </div>

                <div class="facility-card">
                    <div class="facility-icon">
                        <img class="img-fluid" src="assets/img/course/icons/Corporate-Training-Test-Certificate.png" alt="Technical learning validated through structured assessments included in IT courses in Chennai" title="Vishakarex Services / IT courses in chennai " />
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title">Corporate Training Test Certificate</h3>
                        <p class="facility-description">This certificate verifies technical learning demonstrated through organized assessments that measure application and learning experience.</p>
                        <ul class="facility-features">
                            <li><i class="fas fa-check"></i> Technical Skills Performance</li>
                            <li><i class="fas fa-check"></i> Professional Knowledge Verification</li>
                            <li><i class="fas fa-check"></i> Validated Learning Opportunity</li>
                            <li><i class="fas fa-check"></i> Career Enhancement Support</li>
                        </ul>
                    </div>
                </div>

                <div class="facility-card">
                    <div class="facility-icon">
                        <img class="img-fluid" src="assets/img/course/icons/Training-Documentation-&-Reports.png" alt="Comprehensive training documentation and professional reports provided within IT courses in Chennai." title="Vishakarex Services / IT courses in chennai " />
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title">Training Documentation & Reports</h3>
                        <p class="facility-description">Includes comprehensive documentation, professional reports, and other training documents that encompass behavior and task study activities, identifiable tasks, outcomes, and project work with customer assignments.</p>
                        <ul class="facility-features">
                            <li><i class="fas fa-check"></i> Comprehensive Project Documentation File</li>
                            <li><i class="fas fa-check"></i> Professional Report File</li>
                            <li><i class="fas fa-check"></i> Additional References for Studies</li>
                            <li><i class="fas fa-check"></i> Career Search Documentation</li>
                        </ul>
                    </div>
                </div>

                <div class="facility-card">
                    <div class="facility-icon">
                        <img class="img-fluid" src="assets/img/course/icons/Example-Resumes-&-Tools-Access.png" alt="Resume templates and professional tools supporting placement readiness offered through IT courses in Chennai." title="Vishakarex Services / IT courses in chennai " />
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title">Example Resumes & Tools Access</h3>
                        <p class="facility-description">This provides sample resume templates and access to professional tools to aid in placement readiness and career development.</p>
                        <ul class="facility-features">
                            <li><i class="fas fa-check"></i> Sample Resume Draft Templates</li>
                            <li><i class="fas fa-check"></i> Access to Professional Tools</li>
                            <li><i class="fas fa-check"></i> Aid for Career Preparation</li>
                            <li><i class="fas fa-check"></i> Support for Placement Readiness</li>
                        </ul>
                    </div>
                </div>

                <div class="facility-card">
                    <div class="facility-icon">
                        <img class="img-fluid" src="assets/img/course/icons/Internship-Completion-Certificate.png" alt="Internship certification that reflects real project involvement and teamwork experience as part of IT courses in Chennai." title="Vishakarex Services / IT courses in chennai" />
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title">Internship Completion Certificate</h3>
                        <p class="facility-description">This certificate validates having successfully completed internships that include a participant's engagement in live projects and teamwork experience.</p>
                        <ul class="facility-features">
                            <li><i class="fas fa-check"></i> Live Project Exposure</li>
                            <li><i class="fas fa-check"></i> Team Collaboration</li>
                            <li><i class="fas fa-check"></i> Practical Knowledge Acquisition</li>
                            <li><i class="fas fa-check"></i> Career Verification Motivation</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Existing System Section -->
    <section id="existing-system" class="student-life section">
        <div class="container-fluid">
            <div class="section-header">
                <h3 class="section-title">Existing System Analysis</h3>
                <p class="section-subtitle">The current IT courses in Chennai and training framework do not provide real industry experience, practical skill-building, or respect from certificates, resulting in a chasm between academic knowledge and career readiness.</p>
            </div>

            <div class="tab-content active" style="padding: 0 35px;" id="limitations">
                <div class="student-activity-grid">
                    <div class="activity-card">
                        <div class="activity-icon">
                          <img class="img-fluid" src="assets/img/course/icons/Limited-Practical-Experience.png" width="50" alt="Students often lack live project exposure, a gap addressed by practical-focused IT courses in Chennai" title="Vishakarex Services / IT courses in chennai " />
                        </div>
                        <h3>Limited Practical Experience</h3>
                        <p>Students have very limited opportunities to work on live projects, stifling their ability to apply theoretical academic concepts intelligently in practice.</p>
                        <div class="activity-stats">
                            <span><img class="img-fluid" src="assets/img/course/icons/Minimal-Experience.png" width="30" alt="Minimal Experience" title="Minimal Experience" /> Minimal Experience</span>
                            <span><img class="img-fluid" src="assets/img/course/icons/Skill-Gap.png" width="30" alt="Skill Gap" title="Skill Gap" /> Skill Gap</span>
                        </div>
                    </div>

                    <div class="activity-card">
                        <div class="activity-icon">
                          <img class="img-fluid" src="assets/img/course/icons/Theory-Based-Learning.png" width="50" alt="Theory-heavy training with minimal real workflow practice highlights the need for applied IT courses in Chennai" title="Vishakarex Services / IT courses in chennai " />
                        </div>
                        <h3>Theory-Based <br> Learning</h3>
                        <p>Most of the training focused on theory, and there was very little emphasis on actual application in real corporate workflows.</p>
                        <div class="activity-stats">
                            <span><img class="img-fluid" src="assets/img/course/icons/Limited-Application.png" width="30" alt="Skill Gap" title="Skill Gap" /> Limited Application</span>
                            <span><img class="img-fluid" src="assets/img/course/icons/Knowledge-Block.png" width="30" alt="Skill Gap" title="Skill Gap" /> Knowledge Block</span>
                        </div>
                    </div>

                    <div class="activity-card">
                        <div class="activity-icon">
                          <img class="img-fluid" src="assets/img/course/icons/Poor-Department-Collaboration.png" width="50" alt="Limited cross-department collaboration experience underscores the importance of integrated IT courses in Chennai" title="Vishakarex Services / IT courses in chennai " />
                        </div>
                        <h3>Poor Department Collaboration</h3>
                        <p>There was little emphasis on learning or collaborating across departments, leaving the trainees unaware of projects that rely on integration across departments.</p>
                        <div class="activity-stats">
                            <span><img class="img-fluid" src="assets/img/course/icons/Weak-Teamwork.png" width="30" alt="Skill Gap" title="Skill Gap" /> Weak Teamwork</span>
                            <span><img class="img-fluid" src="assets/img/course/icons/Low-Interaction.png" width="30" alt="Skill Gap" title="Skill Gap" /> Low Interaction</span>
                        </div>
                    </div>

                    <div class="activity-card">
                        <div class="activity-icon">
                          <img class="img-fluid" src="assets/img/course/icons/Lack of-Documentation-&-Certification.png" width="50" alt="The absence of formal documentation or recognized certifications shows the value offered by structured IT courses in Chennai" title="Vishakarex Services / IT courses in chennai" />
                        </div>
                        <h3>Lack of Documentation & Certification</h3>
                        <p>Students did not receive formal documentation, structured reports , or certificates from recognized credentials and organizations as proof of learning.</p>
                        <div class="activity-stats">
                            <span><img class="img-fluid" src="assets/img/course/icons/No-Proof.png" width="30" alt="Skill Gap" title="Skill Gap" /> No Proof</span>
                            <span><img class="img-fluid" src="assets/img/course/icons/Low-Value.png" width="30" alt="Skill Gap" title="Skill Gap" /> Low Value</span>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </section>

    <!-- Legal Registration Section -->
    <!-- <section id="legal" class="admissions section">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">Legal Registrations</h3>
                <p class="section-subtitle">Understanding the regulatory framework for in-plant training programs</p>
            </div>

            <div class="admissions-process">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Basic Requirements</h3>
                        <p>Technically, you can start giving in-plant training with your company registration and GST, and issue your own certificate.</p>
                        <ul class="step-requirements">
                            <li>Valid company registration</li>
                            <li>GST registration and compliance</li>
                            <li>Authority to issue certificates</li>
                        </ul>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Enhanced Credibility</h3>
                        <p>Getting ISO or NSDC recognition will add credibility to your institute and make your certificates more valuable for students.</p>
                        <ul class="step-requirements">
                            <li>ISO certification process</li>
                            <li>NSDC recognition benefits</li>
                            <li>Enhanced market value</li>
                        </ul>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Student Value Addition</h3>
                        <p>Industry-recognized certifications provide students with competitive advantages in job markets and career advancement.</p>
                        <ul class="step-requirements">
                            <li>Market recognition</li>
                            <li>Career advancement support</li>
                            <li>Industry acceptance</li>
                        </ul>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Future Expansion</h3>
                        <p>Proper legal framework enables scaling training programs and establishing partnerships with educational institutions.</p>
                        <ul class="step-requirements">
                            <li>Scalability options</li>
                            <li>Partnership opportunities</li>
                            <li>Program expansion potential</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="admissions-info">
                <div class="info-card">
                    <h3><i class="fas fa-building"></i> Company Registration</h3>
                    <div class="dates-list">
                        <div class="date-item">
                            <span class="date-label">Required:</span>
                            <span class="date-value">Valid company registration</span>
                        </div>
                        <div class="date-item">
                            <span class="date-label">GST Status:</span>
                            <span class="date-value">Active GST registration</span>
                        </div>
                        <div class="date-item">
                            <span class="date-label">Authorization:</span>
                            <span class="date-value">Certificate issuing authority</span>
                        </div>
                    </div>
                </div>

                <div class="info-card">
                    <h3><i class="fas fa-award"></i> Recognition Benefits</h3>
                    <div class="eligibility-list">
                        <div class="eligibility-item">
                            <h4>ISO Certification</h4>
                            <ul>
                                <li>International quality standards</li>
                                <li>Enhanced institutional credibility</li>
                                <li>Global recognition and acceptance</li>
                            </ul>
                        </div>
                        <div class="eligibility-item">
                            <h4>NSDC Recognition</h4>
                            <ul>
                                <li>National skill development alignment</li>
                                <li>Government backing and support</li>
                                <li>Industry-standard certification</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="info-card">
                    <h3><i class="fas fa-star"></i> Value Addition</h3>
                    <div class="fee-table">
                        <div class="fee-row">
                            <span class="fee-category">Basic Certificate Value</span>
                            <span class="fee-amount">Standard Recognition</span>
                        </div>
                        <div class="fee-row">
                            <span class="fee-category">ISO Certified Program</span>
                            <span class="fee-amount">Enhanced Market Value</span>
                        </div>
                        <div class="fee-row">
                            <span class="fee-category">NSDC Recognition</span>
                            <span class="fee-amount">Government Backing</span>
                        </div>
                        <div class="fee-row">
                            <span class="fee-category">Combined Benefits</span>
                            <span class="fee-amount">Maximum Credibility</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="admission-cta">
                <button class="btn btn-primary btn-lg" onclick="openAdmissionForm()">
                    <i class="fas fa-file-contract"></i>
                    Learn More About Legal Framework
                </button>
                <p class="cta-note">Understanding legal requirements helps establish credible training programs!</p>
            </div>
        </div>
    </section> -->


    <!-- Conclusion Section -->
    <section class="faq section">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">Conclusion</h3>
                <p class="section-subtitle">Addressing all concerns and emphasizing the benefits of our in-plant training program with our best IT courses in Chennai.</p>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>In what way does the in-plant training facilitate a realistic experience?</h3>
                        <i class="fas fa-plus faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>The program situates you in a real corporate environment where you undertake actual projects with industry mentors and authentic activities, providing you with true exposure to work settings.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Is this training designed for beginners or experienced students only?</h3>
                        <i class="fas fa-plus faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>It is for all learners, whether you are a beginner or experienced, as it covers a structured learning path that builds confidence, strengthens fundamentals, and encourages professional behavior.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Will I be working on live projects or simulations?</h3>
                        <i class="fas fa-plus faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, you will be working on live projects, which are supervised by a mentor that emulates what a real client might require, and you will experience timelines, teamwork, and accountability.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>How is this different from a standard internship?</h3>
                        <i class="fas fa-plus faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our in-plant training does not resemble a routine internship, as it requires learning through multiple departments, executing real-life projects, and utilizing developed skills certified by an industry expert.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Will I receive certificates that add value to my career?</h3>
                        <i class="fas fa-plus faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Definitely! You will receive officially recognized certificates that provide validation of technical knowledge, project experience, and employability readiness by completing our IT course in Chennai.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">Join Our Training</h3>
                <p class="section-subtitle">Gain real-time industry exposure and boost your professional skills with expert guidance and software engineer classes.</p>
            </div>

            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Visit Our Office</h3>
                            <p>Vishakarex Services Pvt. Ltd.<br>Training & Development Center.<br></p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Email Us</h3>
                            <p>
                              <a href="mailto:info@vishakarex.in">info@vishakarex.in</a><br>
                            </p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Training Departments</h3>
                            <p>HR • Web Development<br>Mobile App Development • Designing<br>Flutter • PHP • Testing and more</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                        <div class="contact-details">
                            <p><a href="{{url('course-terms')}}">Terms & Use<i class="fa-solid fa-arrow-up-right-from-square ms-2" style="font-size: 10px;"></i></a><br>
                              <a href="{{url('course-privacy')}}">Privacy Policy<i class="fa-solid fa-arrow-up-right-from-square ms-2" style="font-size: 10px;"></i></a><br>
                        </div>
                    </div>

                </div>

               <div class="contact-form">

               @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<form id="contact-form" action="{{ route('contact.course') }}" method="POST" novalidate>
    @csrf
    <div class="form-group">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name">
      <i class="fas fa-exclamation-circle warning-icon" style="display: none;"></i>
    </div>

    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email">
      <i class="fas fa-exclamation-circle warning-icon" style="display: none;"></i>
    </div>

    <div class="form-group">
      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" name="phone">
      <i class="fas fa-exclamation-circle warning-icon" style="display: none;"></i>
    </div>

    <div class="form-group">
      <label for="department">Department of Interest</label>
      <select id="department" name="department" class="custom-department-dropdown">
        <option value="">Select a department</option>
        <option value="hr-team">HR Team</option>
        <option value="web-development">Web Development</option>
        <option value="mobile-development">Mobile App Development</option>
        <option value="designing">Designing</option>
        <option value="flutter">Flutter Development</option>
        <option value="php">PHP Development</option>
        <option value="testing">Testing Team</option>
        <option value="multiple">Multiple Departments</option>
      </select>
      <i class="fas fa-exclamation-circle warning-icon" style="display: none;"></i>
    </div>

    <div class="form-group">
      <label for="message">Message</label>
      <textarea id="message" name="message" rows="5" placeholder="Tell us about your interests and career goals..."></textarea>
      <i class="fas fa-exclamation-circle warning-icon" style="display: none;"></i>
    </div>
<!-- 
    <button type="submit" class="btn btn-primary">
      <i class="fas fa-paper-plane"></i> Apply Now
    </button> -->

       <button type="submit" class="btn btn-primary">
      <i class="fas fa-paper-plane"></i> Apply Now
    </button>

  </form>

</div>
            </div>
        </div>
    </section>

 

<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contact-form");

    const namePattern = /^[A-Za-z\s]+$/;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phonePattern = /^[0-9]{10}$/;

    function showError(input, message) {
        let error = input.parentElement.querySelector(".error-message");
        const icon = input.parentElement.querySelector(".warning-icon");

        if (!error) {
            error = document.createElement("small");
            error.classList.add("error-message");
            error.style.color = "#d9534f";
            error.style.display = "block";
            error.style.marginTop = "5px";
            input.parentElement.appendChild(error);
        }

        error.textContent = message;
        input.classList.add("invalid");
        if (icon) icon.style.display = "inline";
    }

    function clearError(input) {
        const error = input.parentElement.querySelector(".error-message");
        const icon = input.parentElement.querySelector(".warning-icon");
        if (error) error.remove();
        input.classList.remove("invalid");
        if (icon) icon.style.display = "none";
    }

    function validateField(input) {
        const value = input.value.trim();
        const name = input.name;
        clearError(input);

        if (name === "name") {
            if (!value) return showError(input, "Please enter your full name.");
            if (!namePattern.test(value)) return showError(input, "Name should contain letters and spaces only.");
        }

        if (name === "email") {
            if (!value) return showError(input, "Please enter your email.");
            if (!emailPattern.test(value)) return showError(input, "Please enter a valid email address.");
        }

        if (name === "phone") {
            if (!value) return showError(input, "Please enter your phone number.");
            if (!phonePattern.test(value)) return showError(input, "Please enter a valid 10-digit phone number.");
        }

        if (name === "department") {
            if (!value) return showError(input, "Please select a department of interest.");
        }

        if (name === "message") {
            if (!value) return showError(input, "Please enter a message.");
            if (value.length < 10) return showError(input, "Message must be at least 10 characters long.");
        }

        return true;
    }

    // Validate on blur and hide error on input
    form.querySelectorAll("input, select, textarea").forEach(input => {
        input.addEventListener("blur", () => {
            validateField(input);
        });

        input.addEventListener("input", () => {
            if (input.classList.contains("invalid")) {
                validateField(input);
            }
        });
    });

    // Form submit
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        let isValid = true;

        form.querySelectorAll("input, select, textarea").forEach(input => {
            const valid = validateField(input);
            if (valid !== true) isValid = false;
        });

        if (!isValid) return;

        // Optionally submit via AJAX or normal form submission
        form.submit();
    });
});
</script>


    <!-- Admission Form Modal -->
    <div id="admission-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>In-plant Training Application</h3>
                <span class="close" onclick="closeAdmissionForm()">&times;</span>
            </div>
            <form id="admission-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="admissionEmail">Email</label>
                        <input type="email" id="admissionEmail" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="admissionPhone">Phone</label>
                        <input type="tel" id="admissionPhone" name="phone" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="program">Department Preference</label>
                    <select id="program" name="program" required>
                        <option value="">Select Department</option>
                        <option value="hr-team">HR Team</option>
                        <option value="web-development">Web Development</option>
                        <option value="mobile-development">Mobile App Development</option>
                        <option value="designing">Designing</option>
                        <option value="flutter">Flutter Development</option>
                        <option value="php">PHP Development</option>
                        <option value="testing">Testing Team</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="education">Current Education Status</label>
                    <input type="text" id="education" name="education" placeholder="e.g., Final Year Engineering, Recent Graduate" required>
                </div>

                <div class="form-group">
                    <label for="experience">Technical Skills (if any)</label>
                    <textarea id="experience" name="experience" rows="3" placeholder="Brief description of technical skills and experience"></textarea>
                </div>

                <div class="form-group">
                    <label for="motivation">Why do you want to join our In-plant Training?</label>
                    <textarea id="motivation" name="motivation" rows="4" placeholder="Tell us about your motivation and career goals" required></textarea>
                </div>

                <div class="form-group">
                    <label class="checkbox-label">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                        I agree to the training terms and conditions and commit to completing the full program duration.
                    </label>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-secondary" onclick="closeAdmissionForm()">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </div>
            </form>
        </div>
    </div>
        <!--===== CTA AREA STARTS =======-->
    <div class="cta11-section-area sp4" id="contact">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="cta-header">
              <h3 class="text-anime-style-3">Get Connected to Us</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="cta-box">
              <div class="icon">
                <img src="assets/img/icons/phone4.svg" alt="" />
              </div>
              <div class="text">
                <p>Call Us @</p>
                <div class="space14"></div>
                <a href="tel:+916379880849">+91 63798 80849</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="space30 d-md-none d-block"></div>
            <div class="cta-box">
              <div class="icon">
                <img src="assets/img/icons/email4.svg" alt="" />
              </div>
              <div class="text">
                <p>Mail Us Anytime</p>
                <div class="space14"></div>
                <a href="mailto:info@vishakarex.in">info@vishakarex.in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--===== CTA AREA ENDS =======-->


    <!--===== FOOTER AREA STARTS =======-->
    @include('layouts.footer')

  <!-- Chat Widget -->
  <!-- <div class="chat-widget" id="chat-widget">
    <div class="chat-toggle" id="chat-toggle">
      <i class="fas fa-comments"></i>
      <span class="chat-notification">1</span>
    </div>
    
    <div class="chat-window" id="chat-window">
      <div class="chat-header">
        <div class="chat-title">
          <i class="fas fa-robot"></i>
          <span>Support</span>
        </div>
        <button class="chat-close" id="chat-close">
          <i class="fas fa-times"></i>
        </button>
      </div>
      
      <div class="chat-messages" id="chat-messages">
        <div class="chat-message bot-message">
          <div class="message-avatar">
            <i class="fas fa-robot"></i>
          </div>
          <div class="message-content">
            <p>Hi! I'm here to help you with any questions about our training programs. How can I assist you today?</p>
          </div>
        </div>
      </div>
      
      <div class="chat-input-container">
        <input type="text" class="chat-input" id="chat-input" placeholder="Type your message...">
        <button class="chat-send" id="chat-send">
          <i class="fas fa-paper-plane"></i>
        </button>
      </div>
    </div>
  </div> -->

    <script src="assets/js/plugins/bootstrap.min.js"defer></script>
    <script src="assets/js/plugins/fontawesome.js"defer></script>
    <script src="assets/js/plugins/aos.js"defer></script>
    <script src="assets/js/plugins/counter.js"defer></script>
    <script src="assets/js/plugins/gsap.min.js"defer></script>
    <script src="assets/js/plugins/ScrollTrigger.min.js"defer></script>
    <script src="assets/js/plugins/Splitetext.js"defer></script>
    <script src="assets/js/plugins/sidebar.js"defer></script>
    <script src="assets/js/plugins/magnific-popup.js"defer></script>
    <script src="assets/js/plugins/mobilemenu.js"defer></script>
    <script src="assets/js/plugins/owlcarousel.min.js"defer></script>
    <script src="assets/js/plugins/gsap-animation.js"defer></script>
    <!-- <script src="assets/js/plugins/nice-select.js"></script> -->
    <script src="assets/js/plugins/waypoints.js"defer></script>
    <script src="assets/js/plugins/slick-slider.js"defer></script>
    <script src="assets/js/plugins/circle-progress.js"defer></script>
    <script src="assets/js/main.js"defer></script>

    <script src="./assets/js/course.js"defer></script>

    <script>
document.addEventListener("DOMContentLoaded", function() {
  const chatToggle = document.getElementById("chat-toggle");
  const chatWindow = document.getElementById("chat-window");
  const chatClose = document.getElementById("chat-close");
  const chatSend = document.getElementById("chat-send");
  const chatInput = document.getElementById("chat-input");
  const chatMessages = document.getElementById("chat-messages");

  // Open chat window
  chatToggle.addEventListener("click", () => {
    chatWindow.classList.toggle("active");
    chatToggle.querySelector(".chat-notification").style.display = "none"; // remove notification
  });

  // Close chat window
  chatClose.addEventListener("click", () => {
    chatWindow.classList.remove("active");
  });

  // Send message
  chatSend.addEventListener("click", () => {
    const messageText = chatInput.value.trim();
    if (!messageText) return;

    // Add user message
    const userMessage = document.createElement("div");
    userMessage.classList.add("chat-message", "user-message");
    userMessage.innerHTML = `
      <div class="message-avatar"><i class="fas fa-user"></i></div>
      <div class="message-content"><p>${messageText}</p></div>
    `;
    chatMessages.appendChild(userMessage);

    // Scroll to bottom
    chatMessages.scrollTop = chatMessages.scrollHeight;

    // Clear input
    chatInput.value = "";

    // Simulate bot response
    setTimeout(() => {
      const botMessage = document.createElement("div");
      botMessage.classList.add("chat-message", "bot-message");
      botMessage.innerHTML = `
        <div class="message-avatar"><i class="fas fa-robot"></i></div>
        <div class="message-content"><p>Thanks for your message! We will get back to you shortly.</p></div>
      `;
      chatMessages.appendChild(botMessage);
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }, 800);
  });

  // Optional: Send on Enter key
  chatInput.addEventListener("keydown", (e) => {
    if (e.key === "Enter") chatSend.click();
  });
});
</script>
<script>
        const currentPage = window.location.pathname.split("/").pop();
        const navLinks = document.querySelectorAll(".header-elements li a");

        navLinks.forEach(link => {
            const href = link.getAttribute("href").split("/").pop();

            if (currentPage === href || (currentPage === "" && href === "index.html")) {
                link.parentElement.classList.add("active");
            } else {
                link.parentElement.classList.remove("active");
            }
        });
    </script>
<div id="whatsapp-widget-placeholder"></div>

<script>
  async function includeHTML(id, file) {
    const el = document.getElementById(id);
    try {
      const res = await fetch(file);
      const html = await res.text();
      el.innerHTML = html;

      // Re-execute any script tags inside the loaded file
      el.querySelectorAll("script").forEach(oldScript => {
        const newScript = document.createElement("script");
        if (oldScript.src) {
          newScript.src = oldScript.src;
        } else {
          newScript.textContent = oldScript.textContent;
        }
        document.body.appendChild(newScript);
      });
    } catch (err) {
      console.error("Failed to load component:", err);
    }
  }

   includeHTML("whatsapp-widget-placeholder", "{{ url('/support') }}");


</script>




<style>
    input, textarea {
        color: rgb(0, 0, 0);
    }

    input::placeholder,
    textarea::placeholder {
        color: rgb(165, 165, 165) !important; 
        opacity: 1 !important;
    }
</style>

<script>
</script>

<script src='https://winngoolivechat.com/script/Q6l5ZGGfRa' wsPort='6001' defer></script>
<script>
function injectChatStyles() {
    const widget = document.querySelector('.mainLiveChatDiv');
    if (!widget || !widget.shadowRoot) return;

    const shadow = widget.shadowRoot;

    // Prevent duplicate injection
    if (shadow.querySelector('#customChatStyle')) return;

    const style = document.createElement('style');
    style.id = "customChatStyle";
    style.textContent = `
        /* Hide "Livechat Users" text */
        .chat-icon-text {
            display: none !important;
        }

        #chat-popup.chat-popup-active {
          bottom: 200px;
    
        }

        /* Mobile Fullscreen */
        @media (max-width: 768px) {
            .chat-container {
                width: 100% !important;
                height: 100vh !important;
                right: 0 !important;
                bottom: 0 !important;
                border-radius: 0 !important;
            }

            .chat-header {
                font-size: 14px !important;
            }
        }
    `;

    shadow.appendChild(style);
}

// Wait until widget loads
const observer = new MutationObserver(() => {
    const widget = document.querySelector('.mainLiveChatDiv');
    if (widget && widget.shadowRoot) {
        injectChatStyles();
        observer.disconnect();
    }
});

observer.observe(document.body, { childList: true, subtree: true });
</script>
</body>
</html>