<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vishakarex - Best IT Service & Technology</title>
    <meta name="description" content="Read Vishakarex's privacy policy for in-plant training and IT courses. Learn how we collect, use, and protect your personal data during the enrolment process." />
    <link rel="canonical" href="{{ url()->current() }}">
    <!--=====FAB ICON=======-->
    <link
      rel="shortcut icon"
      href="assets/img/vishaka-fav.webp"
      type="image/x-icon"
    />
    <link rel="preload" href="assets/css/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/aos.css" />
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/plugins/mobile.css" />
    <link rel="stylesheet" href="assets/css/plugins/owlcarousel.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/sidebar.css" />
    <link rel="stylesheet" href="assets/css/plugins/slick-slider.css" />
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/vishaka.css" />
    <link rel="stylesheet" href="assets/css/service.css" />

    <!--=====  JS SCRIPT LINK =======-->
    <script src="assets/js/plugins/jquery-3-6-0.min.js" defer></script>
       <script type="text/javascript">

   (function(c,l,a,r,i,t,y){

        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};

        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;

        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);

    })(window, document, "clarity", "script", "vqdjeg5zvf");

</script>
  </head>
  <body>
    <!--===== PRELOADER STARTS =======-->
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
    <!--===== PRELOADER ENDS =======-->

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

    <!--=====HEADER START=======-->
@include('layouts.header')
    <!--=====HEADER END =======-->

    <!--===== MOBILE HEADER STARTS =======-->
    <div class="mobile-header mobile-haeder11 d-block d-lg-none">
      <div class="container-fluid">
        <div class="col-12">
          <div class="mobile-header-elements">
            <div class="mobile-logo">
              <a href="{{url('/')}}">
                 <img src="assets/img/vishaka.webp" fetchpriority="high" class="img-fluid" alt="Quality Assurance Services in Chennai" title="Vishakarex Services  / IT Company in chennai"/> 
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
           <img src="assets/img/vishaka.webp" fetchpriority="high" class="img-fluid" alt="Quality Assurance Services in Chennai" title="Vishakarex Services  / IT Company in chennai" /> 
         </div>
        <div class="menu-close">
          <i class="fa-solid fa-xmark"></i>
        </div>
      </div>
      <div class="mobile-nav mobile-nav1">
        <ul class="mobile-nav-list nav-list1">
        <li><a href="{{ url('/') }}">Home</a></li>
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
                  <a href="tel:+916379880849" class="hash-nav">+91 63798 80849</a>
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
                      Santhome High Rd, Santhome, Chennai, Tamil Nadu 600028.</a >
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
    <!--===== MOBILE HEADER STARTS =======-->

    
    <!--===== HERO AREA STARTS =======-->
    <style>
      @media (max-width: 768px) {
        .about-header-area{
          background-image: url(assets/img/bg/privacy-policy-mob.jpg) !important;
          justify-self: auto;
          padding: 40% !important;

        }
      }

    </style>
    <div
      class="about-header-area"
      style="
        background-image: url(assets/img/bg/Privacy-policy.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
      "
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-8 m-auto">
            <div class="about-inner-header heading9 text-center">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    
<style>
  .container.py-5{
    line-height: 30px;
  }
  .container.py-5 ul{
    line-height: 40px;
    padding-left: 30px;
  }
  
  .container.py-5 p{
    line-height: 40px;
  }

  ul.custom-bullets {
    list-style: none;
    padding-left: 0;
  }

  ul.custom-bullets li {
    position: relative;
    padding-left: 1.8em;
    margin-bottom: 8px;
  }

  ul.custom-bullets li::before {
    content: "•";
    color: #000000;
    position: absolute;
    left: 0;
    font-size: 1.2em;
    top: 0;
  }
</style>

    



    <section class="container py-5">
            <div class="container mt-1">
                <h1 class="my-4">Courses - Privacy Policy</h1>
                <strong>Effective Date:</strong> October 15, 2025</p>

                <h2>1. Introduction:</h2>
                <p>1.1 Vishakarex Services (“Company”, “we”, “our”, or “us”) respects the privacy of individuals who participate in our offline and online academic programs, workshops, or in-plant training sessions (“Course”).</p>
                <p>1.2 This Privacy Policy (“Policy”) explains how we collect, use, disclose, and safeguard the personal data of our participants, applicants, visitors, and stakeholders in compliance with the Digital Personal Data Protection Act, 2023 (“DPDP Act”), the Information Technology Act, 2000, and other applicable Indian privacy regulations.</p>
                <p>1.3 This Policy applies to:</p>
                <ul class="custom-bullets">
                <li>Participants enrolling in Vishakarex courses</li>
                <li>Individuals interacting with our website or representatives;</li>
                <li>Partners, trainers, vendors, or associates who provide support services.</li>
                </ul>
                <p>1.4 By applying to, enrolling in, or participating in a Vishakarex Course, you consent to the collection and processing of your personal data as outlined in this Policy.</p>

                <h3>2. Definitions:</h3>
                <p>2.1 Personal Data: Any information relating to an identified or identifiable individual, including but not limited to name, contact information, email, identification documents, and educational or employment details.</p>
                <p>2.2 Processing: Any operation performed on personal data, including collection, recording, storage, disclosure, transmission, or erasure.</p>
                <p>2.3 Data Principal: The individual to whom the personal data relates (i.e., the participant).</p>
                <p>2.4 Data Fiduciary: Vishakarex Services, responsible for determining the purpose and means of processing personal data.</p>
                <p>2.5 Data Processor: Any third-party entity engaged by Vishakarex to process personal data on its behalf.</p>
                <p>2.6 Sensitive Personal Data: Includes financial details, identification numbers, health data, or biometric information.</p>

                <h3>3. Categories of Data We Collect:</h3>
                <p>3.1 Personal Identification Information:</p>
                <ul class="custom-bullets">
                <li>Full name, date of birth, gender, and nationality;</li>
                <li>Aadhaar card, PAN card, or government-issued ID copies (where required).</li>
                </ul>
                <p>3.2 Contact Information:</p>
                <ul class="custom-bullets">
                <li>Email address, mobile number, residential address, emergency contact details.</li>
                </ul>
                <p>3.3 Educational and Employment Details:</p>
                <ul class="custom-bullets">
                <li>Academic qualifications, institution details, training records, or employment status.</li>
                </ul>
                <p>3.4 Financial Information:</p>
                <ul class="custom-bullets">
                <li>Payment mode, transaction history, and billing records related to the course.</li>
                </ul>
                <p>3.5 Photographs and Media:</p>
                <ul class="custom-bullets">
                <li>Images captured during training sessions, group activities, or official events for documentation or promotional purposes (only with consent).</li>
                </ul>
                <p>3.6 System and Device Data:</p>
                <ul class="custom-bullets">
                <li>Browser type, device identifiers, IP address, and interaction data if you use our website or portals.</li>
                </ul>
                <p>3.7 Course Interaction Data:</p>
                <ul class="custom-bullets">
                <li>Attendance logs, evaluation results, mentor feedback, and certification records.</li>
                </ul>

                <h3>4. Purpose of Data Collection:</h3>
                <p>We collect personal data for the following legitimate academic and administrative purposes:</p>
                <ul class="custom-bullets">
                <li>To verify identity and eligibility for course enrollment.</li>
                <li>To manage course administration, attendance, and performance.</li>
                <li>To issue certificates (digital and physical).</li>
                <li>To process payments and maintain financial compliance.</li>
                <li>To communicate updates, schedules, and academic instructions.</li>
                <li>To provide placement and internship assistance (if applicable).</li>
                <li>To comply with legal obligations and government regulations.</li>
                <li>To maintain institutional records and quality assurance audits.</li>
                </ul>

                <h3>5. Lawful Basis for Processing:</h3>
                <p>5.1 We process personal data based on one or more of the following legal grounds:</p>
                <ul class="custom-bullets">
                <li>Consent: You have voluntarily provided personal data for specific purposes.</li>
                <li>Contractual necessity: Data required to fulfill course obligations.</li>
                <li>Legal obligation: Data needed for tax, compliance, or audit purposes.</li>
                <li>Legitimate interest: To enhance the quality and safety of training operations.</li>
                </ul>
                <p>5.2 You may withdraw consent at any time by written request to info@vishakarex.in, provided such withdrawal does not affect prior lawful processing.</p>

                <h3>6. Methods of Data Collection:</h3>
                <p>6.1 Data is collected directly through:</p>
                <ul class="custom-bullets">
                <li>Enrollment forms (physical or digital);</li>
                <li>Course registration or payment forms;</li>
                <li>Communications with the Vishakarex team;</li>
                <li>Attendance or evaluation systems.</li>
                </ul>
                <p>6.2 Indirectly collected data may include:</p>
                <ul class="custom-bullets">
                <li>References from affiliated institutions;</li>
                <li>Feedback or evaluations submitted by trainers or mentors;</li>
                <li>Information gathered during industry visits or collaborations.</li>
                </ul>

                <h3>7. Data Storage and Security:</h3>
                <p>7.1 All personal data is stored securely in physical and digital formats, protected by encryption, firewalls, and access control mechanisms.</p>
                <p>7.2 Paper-based records are maintained in locked administrative offices with restricted access.</p>
                <p>7.3 The Company employs ISO-compliant data security frameworks and implements reasonable organizational, technical, and administrative measures to prevent unauthorized access, alteration, or destruction.</p>
                <p>7.4 In case of any personal data breach, Vishakarex shall notify the affected individual(s) and relevant authorities as required under applicable law.</p>

                <h3>8. Data Sharing and Disclosure:</h3>
                <p>8.1 Personal data may be shared only under lawful and contractual necessity, including with:</p>
                <ul class="custom-bullets">
                <li>Trainers and mentors for academic evaluation;</li>
                <li>Payment gateways or financial institutions for transaction processing;</li>
                <li>Government agencies or accreditation bodies for verification;</li>
                <li>Third-party service providers offering certificate delivery or digital platforms.</li>
                </ul>
                <p>8.2 All third parties engaged by Vishakarex are required to follow confidentiality and data protection standards equivalent to this Policy.</p>
                <p>8.3 Vishakarex does not sell, rent, or trade participant data for marketing purposes.</p>

                <h3>9. International Data Transfers:</h3>
                <p>9.1 Currently, all personal data is stored and processed within India.</p>
                <p>9.2 If data transfer outside India becomes necessary, such transfer shall comply with Section 16 of the DPDP Act 2023 and occur only to jurisdictions that ensure equivalent data protection standards.</p>

                <h3>10. Data Retention Policy:</h3>
                <p>10.1 Vishakarex retains participant data for the duration of the course and for a minimum of five (5) years thereafter for administrative, legal, or certification purposes.</p>
                <p>10.2 Upon expiry of retention period, data may be securely deleted, anonymized, or archived.</p>
                <p>10.3 Participants may request early deletion of their personal data by submitting a written request, subject to legal and contractual limitations.</p>

                <h3>11. Rights of Participants (Data Principals):</h3>
                <p>Under the DPDP Act, participants have the following rights:</p>
                <p>11.1 Right to Access: To obtain confirmation of whether your personal data is being processed.</p>
                <p>11.2 Right to Correction: To rectify any inaccurate or incomplete data.</p>
                <p>11.3 Right to Erasure: To request deletion of personal data after course completion.</p>
                <p>11.4 Right to Data Portability: To request copies of your data in a structured format.</p>
                <p>11.5 Right to Withdraw Consent: To revoke previously granted consent.</p>
                <p>11.6 Right to Nominate: To authorize another person to exercise your rights in case of incapacity or death.</p>
                <p>Requests may be made to info@vishakarex.in, and shall be acknowledged within 10 working days and processed within 30 working days.</p>

                <h3>12. Use of Photographs and Media:</h3>
                <p>12.1 Vishakarex may capture photographs or video footage during sessions for documentation, internal review, or promotional purposes.</p>
                <p>12.2 Participants’ images shall not be published without prior consent obtained via consent forms.</p>
                <p>12.3 You may withdraw consent for the use of your image at any time by contacting the Company.</p>

                <h3>13. Cookies and Tracking Technologies:</h3>
                <p>13.1 While Vishakarex primarily conducts offline training, our website and online platforms may use cookies, web beacons, and similar tracking technologies to enhance the user experience.</p>
                <p>13.2 Cookies help us understand site traffic patterns, preferences, and improve overall website usability.</p>
                <p>13.3 Types of cookies used may include:</p>
                <ul class="custom-bullets">
                <li>Essential Cookies: Necessary for website operation (login, navigation, forms).</li>
                <li>Performance Cookies: Collect anonymous usage data for analytics.</li>
                <li>Functional Cookies: Store preferences such as language or display settings.</li>
                <li>Advertising Cookies: (if applicable) track engagement with promotional content.</li>
                </ul>
                </li>
                <li>Users may choose to disable cookies through their browser settings, but certain features may not function as intended.</li>
                <li>All cookie data is handled in compliance with Indian privacy standards and used solely for legitimate educational and administrative purposes.</li>
                <h3>14. Third-Party Links and Websites:</h3>
                <ul class="custom-bullets">
                <li>The Vishakarex website or communications may contain links to external websites, including government portals, educational institutions, or partner organizations.</li>
                <li>These third-party websites are not operated or controlled by Vishakarex. Therefore, the Company shall not be held responsible for their privacy practices, content, or data handling procedures.</li>
                <li>Users are encouraged to review the privacy policies of such third-party sites before engaging or submitting personal information.</li>
                </ul>

                <h3>15. Children and Minor Participants:</h3>
                <ul class="custom-bullets">
                <li>Vishakarex Services does not knowingly collect or process personal data from individuals below the age of 18 years without the consent of a parent or legal guardian.</li>
                <li>If a minor is enrolled in any authorized training program, consent forms signed by their parent/guardian must accompany the application.</li>
                <li>In case personal data of a child is collected without valid consent, it will be deleted immediately upon discovery.</li>
                <li>Vishakarex abides by the child data protection provisions under the Digital Personal Data Protection Act 2023 and relevant Ministry of Electronics and IT (MeitY) guidelines.</li>
                </ul>

                <h3>16. Data Accuracy and Participant Responsibilities:</h3>
                <ul class="custom-bullets">
                <li>Participants are responsible for ensuring that all personal data provided during enrollment is accurate, complete, and current.</li>
                <li>Inaccurate or falsified data may lead to termination of enrollment or withdrawal of certification.</li>
                <li>The Company shall not be liable for any issues arising from inaccurate or outdated information supplied by the participant.</li>
                <li>Participants are required to promptly update any changes in address, contact number, or other personal details via official channels.</li>
                </ul>

                <h3>17. Data Security Measures:</h3>
                <ul class="custom-bullets">
                <li>Vishakarex employs a combination of physical, electronic, and procedural safeguards to secure data, including:
                  <ul class="custom-bullets">
                    <li>Restricted access to administrative systems;</li>
                    <li>Multi-factor authentication for internal databases;</li>
                    <li>Encryption of sensitive personal data;</li>
                    <li>Regular security audits and penetration testing;</li>
                    <li>Confidentiality agreements for all staff and vendors.</li>
                  </ul>
                </li>
                <li>Despite reasonable safeguards, no system is entirely immune to security breaches. Vishakarex shall not be held responsible for unauthorized access resulting from circumstances beyond its control, including cyberattacks or third-party system failures.</li>
                <li>Participants will be notified of any significant data breach within a reasonable period as per DPDP Act obligations.</li>
                </ul>

                <h3>18. Data Breach Management Procedure:</h3>
                <ul class="custom-bullets">
                <li>In the event of a personal data breach, Vishakarex shall:
                  <ul class="custom-bullets">
                    <li>Immediately assess the impact and identify affected records;</li>
                    <li>Contain the breach and prevent further unauthorized access;</li>
                    <li>Notify the Data Protection Board of India (if mandated);</li>
                    <li>Inform affected participants via email or official communication;</li>
                    <li>Implement corrective measures to prevent recurrence.</li>
                  </ul>
                </li>
                <li>All breach notifications shall include the nature of the breach, affected data categories, and available remedial options.</li>
                </ul>

                <h3>19. Use of Data for Marketing and Communication:</h3>
                <ul class="custom-bullets">
                <li>Vishakarex may use participant contact information for legitimate communication, such as:
                  <ul class="custom-bullets">
                    <li>Program updates, new course announcements, or related opportunities;</li>
                    <li>Alumni networking or internship information;</li>
                    <li>Feedback and research surveys.</li>
                  </ul>
                </li>
                <li>Marketing communications will only be sent with the participant’s explicit consent.</li>
                <li>You may opt out of promotional emails at any time by clicking the unsubscribe link or contacting info@vishakarex.in.</li>
                <li>Vishakarex does not sell or rent participant information to third-party advertisers.</li>
                </ul>

                <h3>20. Grievance Redressal and Data Protection Officer (DPO):</h3>
                <ul class="custom-bullets">
                <li>Vishakarex Services has appointed a Grievance Officer to address data protection concerns and privacy-related complaints.</li>
                </ul>
                <p>Grievance Officer (Data Protection Contact):<br>
                Name: Data Protection Officer – Vishakarex Services<br>
                Email: info@vishakarex.in<br>
                Address: 4th Floor, Temple View Apartments, 4-A, 89 Santhome High Road, Santhome, Chennai, Tamil Nadu – 600028, India</p>
                <ul class="custom-bullets">
                <li>Complaints will be acknowledged within 10 working days and resolved within 30 working days of receipt, wherever practicable.</li>
                <li>If you are not satisfied with the resolution, you may escalate the matter to the Data Protection Board of India under the DPDP Act 2023.</li>
                </ul>

                <h3>21. Policy Updates and Version Control:</h3>
                <ul class="custom-bullets">
                <li>This Privacy Policy may be revised periodically to reflect legislative changes, technology updates, or operational improvements.</li>
                <li>The updated version will be published on the official Vishakarex website with a new effective date.</li>
                <li>Continued participation in courses or engagement with Vishakarex services after such changes shall constitute acceptance of the revised Policy.</li>
                </ul>

                <h3>22. Cross-Border Data Processing (if applicable):</h3>
                <ul class="custom-bullets">
                <li>Although all operations are primarily India-based, if participant data needs to be processed in another jurisdiction (e.g., for certificate authentication or cloud storage), such transfer shall comply with Section 17 of the DPDP Act 2023.</li>
                <li>Data transfers will occur only with appropriate safeguards and contractual obligations ensuring equivalent protection standards.</li>
                </ul>

                <h3>23. Compliance with Indian Laws:</h3>
                <ul class="custom-bullets">
                <li>This Policy is governed by and construed in accordance with the laws of India, specifically:
                  <ul class="custom-bullets">
                    <li>The Digital Personal Data Protection Act, 2023;</li>
                    <li>The Information Technology Act, 2000;</li>
                    <li>Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Data or Information) Rules, 2011; and</li>
                    <li>Relevant State-level regulations and Ministry of Education guidelines.</li>
                  </ul>
                </li>
                <li>Any conflict between this Policy and applicable law shall be interpreted in favor of the mandatory provisions of Indian law.</li>
                </ul>

                <h3>24. Legal Jurisdiction and Dispute Resolution:</h3>
                <ul class="custom-bullets">
                <li>Any dispute arising out of this Privacy Policy shall be subject to the exclusive jurisdiction of courts in Chennai, Tamil Nadu, India.</li>
                <li>The Company and participant agree to attempt amicable settlement before resorting to formal legal proceedings.</li>
                </ul>

                <h3>25. Acknowledgement and Consent:</h3>
                <ul class="custom-bullets">
                <li>By enrolling in a Vishakarex program, interacting with the website, or submitting personal data, you acknowledge that you have read and understood this Privacy Policy.</li>
                <li>You expressly consent to the collection, processing, storage, and disclosure of your personal data as outlined herein.</li>
                <li>If you do not agree with any part of this Policy, you should refrain from submitting personal data or participating in Vishakarex programs.</li>
                </ul>

                <p><strong>Declaration</strong><br></p>
                This Privacy Policy represents the official data handling framework of Vishakarex Services, Chennai. It is binding on all staff, participants, and associated entities. The Company reserves the right to enforce compliance, audit data practices, and update policy terms as required by Indian law.<br>
                <p><strong>Company:</strong> Vishakarex Services Pvt. Ltd.<br>
                <strong>Address:</strong> 4th Floor, Temple View Apartments, 4-A, 89 Santhome High Road, Santhome, Chennai, Tamil Nadu – 600028<br>
                <strong>Email:</strong> info@vishakarex.in<br>
                <strong>Effective Date:</strong> October 15, 2025</p>

            </div>
        </section>






    

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




    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" defer></script>
  

<!-- ===== 3D Tilt Script ===== -->

    <!--===== SERVICE AREA ENDS =======-->


    <!--===== FOOTER AREA STARTS =======-->
@include('layouts.footer')


    <!--===== JS SCRIPT LINK =======-->
    <script src="assets/js/plugins/bootstrap.min.js" defer></script>
    <script src="assets/js/plugins/fontawesome.js" defer></script>
    <script src="assets/js/plugins/aos.js" defer></script>
    <script src="assets/js/plugins/counter.js" defer></script>
    <script src="assets/js/plugins/gsap.min.js" defer></script>
    <script src="assets/js/plugins/ScrollTrigger.min.js" defer></script>
    <script src="assets/js/plugins/Splitetext.js" defer></script>
    <script src="assets/js/plugins/sidebar.js" defer></script>
    <script src="assets/js/plugins/magnific-popup.js" defer></script>
    <script src="assets/js/plugins/mobilemenu.js" defer></script>
    <script src="assets/js/plugins/owlcarousel.min.js" defer></script>
    <script src="assets/js/plugins/gsap-animation.js" defer></script>
    <script src="assets/js/plugins/nice-select.js" defer></script>
    <script src="assets/js/plugins/waypoints.js" defer></script>
    <script src="assets/js/plugins/slick-slider.js" defer></script>
    <script src="assets/js/plugins/circle-progress.js" defer></script>
    <script src="assets/js/main.js" defer></script>
    <script src="assets/js/custom.js" defer></script>
    <script>
        const buttons = document.querySelectorAll('.accordion-button');

        buttons.forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const isActive = button.classList.contains('active');

            // Close all accordions
            buttons.forEach(btn => {
            if (btn !== button) {
                btn.classList.remove('active');
                const c = btn.nextElementSibling;
                c.style.maxHeight = c.scrollHeight + 'px'; // reset to current height
                requestAnimationFrame(() => {
                c.style.maxHeight = '0'; // animate to 0
                });
            }
            });

            if (!isActive) {
            // Open clicked accordion
            button.classList.add('active');
            content.style.maxHeight = content.scrollHeight + 'px';
            } else {
            // Close clicked accordion
            button.classList.remove('active');
            content.style.maxHeight = content.scrollHeight + 'px'; // reset to current
            requestAnimationFrame(() => {
                content.style.maxHeight = '0'; // animate to 0
            });
            }
        });
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
