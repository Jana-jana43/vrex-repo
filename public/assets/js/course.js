// Global Variables
let currentTestimonial = 0;
let testimonialInterval;
let isLoading = true;
let scrollProgress = 0;
let currentTheme = 'light';

// DOM Elements
const navbar = document.getElementById('navbar');
const scrollProgressBar = document.getElementById('scroll-progress');
const themeToggle = document.getElementById('theme-toggle');
const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');
const admissionModal = document.getElementById('admission-modal');

// Utility Functions
function $(selector) {
    return document.querySelector(selector);
}

function $$(selector) {
    return document.querySelectorAll(selector);
}

function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

function throttle(func, delay) {
    let timeoutId;
    let lastExecTime = 0;
    return function (...args) {
        const currentTime = Date.now();
        if (currentTime - lastExecTime > delay) {
            func.apply(this, args);
            lastExecTime = currentTime;
        } else {
            clearTimeout(timeoutId);
            timeoutId = setTimeout(() => {
                func.apply(this, args);
                lastExecTime = Date.now();
            }, delay - (currentTime - lastExecTime));
        }
    };
}


// Scroll Progress Bar
function updateScrollProgress() {
    const windowHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrolled = window.scrollY;
    const progress = (scrolled / windowHeight) * 100;
    scrollProgressBar.style.width = progress + '%';
    scrollProgress = progress;
}

// Navbar Scroll Effect
function handleNavbarScroll() {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }

    // Update active navigation link
    const sections = $$('section');
    const navLinks = $$('.nav-link');

    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.offsetHeight;
        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
}

// Mobile Menu Toggle
function initMobileMenu() {
    navToggle.addEventListener('click', () => {
        navToggle.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    // Close mobile menu when clicking on a link
    $$('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navToggle.classList.remove('active');
            navMenu.classList.remove('active');
        });
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
            navToggle.classList.remove('active');
            navMenu.classList.remove('active');
        }
    });
}

// Theme Toggle
function initThemeToggle() {
    // Check for saved theme or default to light
    const savedTheme = localStorage.getItem('theme') || 'light';
    setTheme(savedTheme);

    themeToggle.addEventListener('click', () => {
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        setTheme(newTheme);
    });
}

function setTheme(theme) {
    currentTheme = theme;
    document.documentElement.setAttribute('data-theme', theme);
    localStorage.setItem('theme', theme);

    // Update theme toggle icon
    const icon = themeToggle.querySelector('i');
    if (theme === 'dark') {
        icon.className = 'fas fa-moon';
    } else {
        icon.className = 'fas fa-sun';
    }
}

// Smooth Scrolling
function initSmoothScrolling() {
    $$('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = $(this.getAttribute('href'));
            if (target) {
                const offsetTop = target.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Scroll to Section Function
function scrollToSection(sectionId) {
    const target = $('#' + sectionId);
    if (target) {
        const offsetTop = target.offsetTop - 80;
        window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
        });
    }
}

// Counter Animation
function animateCounters() {
    $$('[data-count]').forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        const increment = target / 200;
        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.ceil(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };

        // Start animation when element is in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    updateCounter();
                    observer.unobserve(entry.target);
                }
            });
        });

        observer.observe(counter);
    });
}

// Course Filtering
function initCourseFiltering() {
    const filterBtns = $$('.filter-btn');
    const courseCards = $$('.course-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            courseCards.forEach(card => {
                if (filter === 'all') {
                    card.style.display = 'block';
                    card.style.animation = 'fadeInUp 0.6s ease';
                } else if (card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeInUp 0.6s ease';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
}

// Student Life Tabs
function initStudentLifeTabs() {
    const tabBtns = $$('.tab-btn');
    const tabContents = $$('.tab-content');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const tabId = btn.getAttribute('data-tab');

            // Remove active class from all buttons and contents
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));

            // Add active class to clicked button and corresponding content
            btn.classList.add('active');
            $('#' + tabId).classList.add('active');
        });
    });
}

// Testimonials Slider
function initTestimonialsSlider() {
    const testimonialCards = $$('.testimonial-card');
    const totalTestimonials = testimonialCards.length;

    if (totalTestimonials === 0) return;

    // Start auto-rotation
    startTestimonialRotation();

    // Pause on hover
    const slider = $('.testimonials-slider');
    if (slider) {
        slider.addEventListener('mouseenter', pauseTestimonialRotation);
        slider.addEventListener('mouseleave', startTestimonialRotation);
    }
}

function showTestimonial(index) {
    const testimonialCards = $$('.testimonial-card');
    testimonialCards.forEach((card, i) => {
        card.style.display = i === index ? 'block' : 'none';
    });
}

function nextTestimonial() {
    const testimonialCards = $$('.testimonial-card');
    currentTestimonial = (currentTestimonial + 1) % testimonialCards.length;
    showTestimonial(currentTestimonial);
}

function prevTestimonial() {
    const testimonialCards = $$('.testimonial-card');
    currentTestimonial = currentTestimonial === 0 ? testimonialCards.length - 1 : currentTestimonial - 1;
    showTestimonial(currentTestimonial);
}

function startTestimonialRotation() {
    testimonialInterval = setInterval(nextTestimonial, 5000);
}

function pauseTestimonialRotation() {
    clearInterval(testimonialInterval);
}

// // FAQ Functionality
// function initFAQ() {
//     $$('.faq-question').forEach(question => {
//         question.addEventListener('click', () => {
//             const faqItem = question.parentElement;
//             const isActive = faqItem.classList.contains('active');

//             // Close all FAQ items
//             $$('.faq-item').forEach(item => {
//                 item.classList.remove('active');
//             });

//             // Toggle current item
//             if (!isActive) {
//                 faqItem.classList.add('active');
//             }
//         });
//     });
// }
 
// function toggleFAQ(element) {
//     const faqItem = element.parentElement;
//     faqItem.classList.toggle('active');
// }

document.addEventListener("DOMContentLoaded", () => {
  const faqQuestions = document.querySelectorAll(".faq-question");

  faqQuestions.forEach(question => {
    question.addEventListener("click", () => {
      const faqItem = question.parentElement;
      const isActive = faqItem.classList.contains("active");

      // Close all
      document.querySelectorAll(".faq-item").forEach(item => item.classList.remove("active"));

      // Open the clicked one if not already active
      if (!isActive) {
        faqItem.classList.add("active");
      }
    });
  });
});

// Forms Handling
function initForms() {
    // Contact Form
    const contactForm = $('#contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', handleContactForm);
    }

    // Admission Form
    const admissionForm = $('#admission-form');
    if (admissionForm) {
        admissionForm.addEventListener('submit', handleAdmissionForm);
    }

    // Newsletter Form
    const newsletterForm = $('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', handleNewsletterForm);
    }
}

function handleContactForm(e) {
    e.preventDefault();

    // Get form data
    const formData = new FormData(e.target);
    const data = Object.fromEntries(formData);

    // Show loading state
    const submitBtn = e.target.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    submitBtn.disabled = true;

    // Simulate API call
    setTimeout(() => {
        showNotification('Message sent successfully! We will get back to you soon.', 'success');
        e.target.reset();

        // Reset button state
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }, 2000);
}

function handleAdmissionForm(e) {
    e.preventDefault();

    // Get form data
    const formData = new FormData(e.target);
    const data = Object.fromEntries(formData);

    // Validate required fields
    if (!validateAdmissionForm(data)) {
        return;
    }

    // Show loading state
    const submitBtn = e.target.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
    submitBtn.disabled = true;

    // Simulate API call
    setTimeout(() => {
        showNotification('Application submitted successfully! You will receive a confirmation email shortly.', 'success');
        closeAdmissionForm();
        e.target.reset();

        // Reset button state
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }, 3000);
}

function validateAdmissionForm(data) {
    const requiredFields = ['firstName', 'lastName', 'email', 'phone', 'program', 'education', 'motivation'];
    const emptyFields = requiredFields.filter(field => !data[field] || data[field].trim() === '');

    if (emptyFields.length > 0) {
        showNotification('Please fill in all required fields.', 'error');
        return false;
    }

    // Validate email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(data.email)) {
        showNotification('Please enter a valid email address.', 'error');
        return false;
    }

    // Validate phone
    const phoneRegex = /^[0-9+\-\s()]{10,}$/;
    if (!phoneRegex.test(data.phone)) {
        showNotification('Please enter a valid phone number.', 'error');
        return false;
    }

    return true;
}

function handleNewsletterForm(e) {
    e.preventDefault();

    const emailInput = e.target.querySelector('input[type="email"]');
    const email = emailInput.value.trim();

    if (!email) {
        showNotification('Please enter your email address.', 'error');
        return;
    }

    // Validate email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        showNotification('Please enter a valid email address.', 'error');
        return;
    }

    // Show loading state
    const submitBtn = e.target.querySelector('button');
    const originalHTML = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
    submitBtn.disabled = true;

    // Simulate API call
    setTimeout(() => {
        showNotification('Thank you for subscribing to our newsletter!', 'success');
        emailInput.value = '';

        // Reset button state
        submitBtn.innerHTML = originalHTML;
        submitBtn.disabled = false;
    }, 1500);
}

// Notification System
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;

    const icon = type === 'success' ? 'fa-check-circle' : 
                 type === 'error' ? 'fa-exclamation-circle' : 
                 type === 'warning' ? 'fa-exclamation-triangle' : 'fa-info-circle';

    notification.innerHTML = `
        <i class="fas ${icon}"></i>
        <span>${message}</span>
        <button class="notification-close" onclick="closeNotification(this)">
            <i class="fas fa-times"></i>
        </button>
    `;

    // Add to page
    document.body.appendChild(notification);

    // Show notification
    setTimeout(() => {
        notification.classList.add('show');
    }, 100);

    // Auto hide after 5 seconds
    setTimeout(() => {
        closeNotification(notification.querySelector('.notification-close'));
    }, 5000);
}

function closeNotification(button) {
    const notification = button.parentElement;
    notification.classList.remove('show');
    setTimeout(() => {
        if (notification.parentElement) {
            notification.parentElement.removeChild(notification);
        }
    }, 300);
}

// Modal Functions
function openAdmissionForm() {
    if (admissionModal) {
        admissionModal.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }
}

function closeAdmissionForm() {
    if (admissionModal) {
        admissionModal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
}

// Download Functions
function downloadCourse() {
    showNotification('Course download will start shortly...', 'info');

    // Simulate download
    setTimeout(() => {
        const link = document.createElement('a');
        link.href = '#'; // Replace with actual Course URL
        link.download = 'EduTech-Institute-Course.pdf';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);

        showNotification('Course downloaded successfully!', 'success');
    }, 1000);
}

// Course Catalog Download
document.addEventListener('DOMContentLoaded', function() {
    const downloadBtn = $('#download-catalog');
    if (downloadBtn) {
        downloadBtn.addEventListener('click', function() {
            showNotification('Course catalog download initiated...', 'info');

            // Simulate download
            setTimeout(() => {
                showNotification('Course catalog downloaded successfully!', 'success');
            }, 2000);
        });
    }
});

// Scroll Animations
function initScrollAnimations() {
    const animatedElements = $$('.animate-on-scroll');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    animatedElements.forEach(element => {
        observer.observe(element);
    });
}

// Lazy Loading for Images
function initLazyLoading() {
    const images = $$('img[data-src]');

    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));
}

// Hero Animation
function initHeroAnimation() {
    const heroStats = $$('.stat-number');

    const animateStats = () => {
        heroStats.forEach(stat => {
            const target = parseInt(stat.getAttribute('data-target'));
            const increment = target / 100;
            let current = 0;

            const updateStat = () => {
                current += increment;
                if (current < target) {
                    stat.textContent = Math.floor(current);
                    requestAnimationFrame(updateStat);
                } else {
                    stat.textContent = target;
                }
            };

            updateStat();
        });
    };

    // Start animation after loading screen
    setTimeout(animateStats, 2000);
}

// Search Functionality (if needed)
function initSearch() {
    const searchInput = $('#search-input');
    const searchResults = $('#search-results');

    if (searchInput) {
        searchInput.addEventListener('input', debounce((e) => {
            const query = e.target.value.trim();
            if (query.length > 2) {
                performSearch(query);
            } else {
                clearSearchResults();
            }
        }, 300));
    }
}

function performSearch(query) {
    // Simulate search functionality
    const searchableContent = [
        { title: 'Computer Science Engineering', type: 'course', url: '#courses' },
        { title: 'Artificial Intelligence', type: 'course', url: '#courses' },
        { title: 'Faculty Information', type: 'section', url: '#faculty' },
        { title: 'Admission Process', type: 'section', url: '#admissions' },
        { title: 'Campus Facilities', type: 'section', url: '#facilities' }
    ];

    const results = searchableContent.filter(item => 
        item.title.toLowerCase().includes(query.toLowerCase())
    );

    displaySearchResults(results);
}

function displaySearchResults(results) {
    const searchResults = $('#search-results');
    if (!searchResults) return;

    if (results.length === 0) {
        searchResults.innerHTML = '<p>No results found.</p>';
    } else {
        searchResults.innerHTML = results.map(result => `
            <div class="search-result" onclick="scrollToSection('${result.url.substring(1)}')">
                <h4>${result.title}</h4>
                <span class="result-type">${result.type}</span>
            </div>
        `).join('');
    }

    searchResults.style.display = 'block';
}

function clearSearchResults() {
    const searchResults = $('#search-results');
    if (searchResults) {
        searchResults.style.display = 'none';
        searchResults.innerHTML = '';
    }
}

// Performance Optimization
function optimizePerformance() {
    // Lazy load non-critical CSS
    const loadCSS = (href) => {
        const link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = href;
        document.head.appendChild(link);
    };

    // Preload important resources
    const preloadResource = (href, as) => {
        const link = document.createElement('link');
        link.rel = 'preload';
        link.href = href;
        link.as = as;
        document.head.appendChild(link);
    };

    // Optimize images
    const optimizeImages = () => {
        $$('img').forEach(img => {
            img.loading = 'lazy';
        });
    };

    optimizeImages();
}

// Initialize All Animations
function initAnimations() {
    animateCounters();
    initScrollAnimations();
    initHeroAnimation();

    // Add staggered animation to cards
    $$('.course-card, .faculty-card, .activity-card, .facility-card').forEach((card, index) => {
        card.style.animationDelay = (index * 0.1) + 's';
    });
}

// Main Initialization
function init() {
    // Basic setup
    initMobileMenu();
    initThemeToggle();
    initSmoothScrolling();

    // Content functionality
    initCourseFiltering();
    initStudentLifeTabs();
    initTestimonialsSlider();
    initFAQ();
    initForms();
    initSearch();
    initLazyLoading();

    // Performance
    optimizePerformance();

    // Show initial testimonial
    showTestimonial(0);
}

// Event Listeners
document.addEventListener('DOMContentLoaded', function() {
    init();
});

window.addEventListener('scroll', throttle(() => {
    updateScrollProgress();
    handleNavbarScroll();
}, 10));

window.addEventListener('resize', debounce(() => {
    // Handle resize events
    if (window.innerWidth > 768) {
        navMenu.classList.remove('active');
        navToggle.classList.remove('active');
    }
}, 250));

// Close modal when clicking outside
window.addEventListener('click', (e) => {
    if (e.target === admissionModal) {
        closeAdmissionForm();
    }
});

// Handle escape key for modals
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closeAdmissionForm();
        clearSearchResults();
    }
});

// Add notification styles dynamically
const notificationStyles = `
    .notification {
        position: fixed;
        top: 20px;
        right: 20px;
        background: var(--surface-color);
        color: var(--text-primary);
        padding: 1rem 1.5rem;
        border-radius: 8px;
        border-left: 4px solid var(--info-color);
        box-shadow: 0 4px 20px var(--shadow-color);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        max-width: 400px;
        z-index: 10001;
        transform: translateX(450px);
        transition: transform 0.3s ease;
    }

    .notification.show {
        transform: translateX(0);
    }

    .notification-success {
        border-left-color: var(--success-color);
    }

    .notification-error {
        border-left-color: var(--error-color);
    }

    .notification-warning {
        border-left-color: var(--warning-color);
    }

    .notification i {
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .notification-success i {
        color: var(--success-color);
    }

    .notification-error i {
        color: var(--error-color);
    }

    .notification-warning i {
        color: var(--warning-color);
    }

    .notification-info i {
        color: var(--info-color);
    }

    .notification-close {
        background: none;
        border: none;
        color: var(--text-secondary);
        cursor: pointer;
        font-size: 1rem;
        padding: 0.25rem;
        margin-left: auto;
        border-radius: 4px;
        transition: background 0.3s ease;
    }

    .notification-close:hover {
        background: var(--background-color);
    }

    @media (max-width: 768px) {
        .notification {
            left: 20px;
            right: 20px;
            max-width: none;
            transform: translateY(-100px);
        }

        .notification.show {
            transform: translateY(0);
        }
    }
`;

// Add styles to head
const styleSheet = document.createElement('style');
styleSheet.textContent = notificationStyles;
document.head.appendChild(styleSheet);

// Expose global functions
window.scrollToSection = scrollToSection;
window.openAdmissionForm = openAdmissionForm;
window.closeAdmissionForm = closeAdmissionForm;
window.downloadCourse = downloadCourse;
window.toggleFAQ = toggleFAQ;
window.nextTestimonial = nextTestimonial;
window.prevTestimonial = prevTestimonial;
window.closeNotification = closeNotification;

// Console welcome message
console.log('%c🎓 EduTech Institute', 'color: #2c5282; font-size: 24px; font-weight: bold;');
console.log('%cWebsite loaded successfully!', 'color: #38a169; font-size: 16px;');
console.log('%cBuilt with modern web technologies', 'color: #4a5568; font-size: 12px;');


