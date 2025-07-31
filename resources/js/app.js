// Enhanced JavaScript for Techtonauts Website
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all animations and interactions
    initScrollAnimations();
    initCounterAnimations();
    initSmoothScrolling();
    initParallaxEffects();
    initInteractiveElements();
});

// Intersection Observer for scroll animations
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const delay = entry.target.dataset.delay || 0;
                setTimeout(() => {
                    entry.target.classList.add('in-view');
                }, delay);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all elements with animate-on-scroll class
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });
}

// Counter animation for statistics
function initCounterAnimations() {
    const counters = document.querySelectorAll('.counter');
    
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
}

function animateCounter(element) {
    const target = parseInt(element.dataset.target);
    const duration = 2000;
    const step = target / (duration / 16);
    let current = 0;

    const timer = setInterval(() => {
        current += step;
        if (current >= target) {
            element.textContent = target + '+';
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current);
        }
    }, 16);
}

// Smooth scrolling for navigation links
function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Parallax effects for background elements
function initParallaxEffects() {
    let ticking = false;

    function updateParallax() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.floating-orb, .particle');
        
        parallaxElements.forEach((element, index) => {
            const speed = 0.5 + (index * 0.1);
            const yPos = -(scrolled * speed);
            element.style.transform = `translate3d(0, ${yPos}px, 0)`;
        });

        ticking = false;
    }

    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    }

    window.addEventListener('scroll', requestTick);
}

// Interactive elements and hover effects
function initInteractiveElements() {
    // Service card interactions
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Button hover effects
    const buttons = document.querySelectorAll('.btn-primary, .btn-secondary');
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            const glow = this.querySelector('.btn-glow');
            if (glow) {
                glow.style.opacity = '0.5';
            }
        });

        button.addEventListener('mouseleave', function() {
            const glow = this.querySelector('.btn-glow');
            if (glow) {
                glow.style.opacity = '0';
            }
        });
    });

    // Navigation scroll effect
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        if (window.scrollY > 100) {
            header.style.background = 'rgba(20, 20, 32, 0.95)';
            header.style.backdropFilter = 'blur(20px)';
        } else {
            header.style.background = 'rgba(20, 20, 32, 0.8)';
            header.style.backdropFilter = 'blur(12px)';
        }
    });

    // Typing animation restart on scroll
    const typingElement = document.querySelector('.typing-animation');
    if (typingElement) {
        const typingObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'none';
                    entry.target.offsetHeight; // Trigger reflow
                    entry.target.style.animation = 'typing 3s steps(40, end), blink-caret 0.75s step-end infinite';
                }
            });
        }, { threshold: 0.5 });

        typingObserver.observe(typingElement);
    }

    // Tech orb interactions
    const techOrbs = document.querySelectorAll('.tech-orb');
    techOrbs.forEach((orb, index) => {
        orb.addEventListener('mouseenter', function() {
            this.style.transform = `scale(1.2) rotate(${index * 45}deg)`;
            this.style.boxShadow = '0 0 30px rgba(79, 70, 229, 0.6)';
        });

        orb.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) rotate(0deg)';
            this.style.boxShadow = 'none';
        });
    });

    // Particle system enhancement
    createAdditionalParticles();

    // Research card glow effect
    const researchCards = document.querySelectorAll('.research-card');
    researchCards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            this.style.background = `radial-gradient(circle at ${x}px ${y}px, rgba(79, 70, 229, 0.2) 0%, rgba(255, 255, 255, 0.05) 50%)`;
        });

        card.addEventListener('mouseleave', function() {
            this.style.background = 'rgba(255, 255, 255, 0.05)';
        });
    });
}

// Create additional floating particles
function createAdditionalParticles() {
    const particleContainer = document.querySelector('.particles');
    if (!particleContainer) return;

    for (let i = 7; i <= 15; i++) {
        const particle = document.createElement('div');
        particle.className = `particle particle-${i}`;
        particle.style.top = Math.random() * 100 + '%';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.animationDuration = (5 + Math.random() * 10) + 's';
        particle.style.animationDelay = Math.random() * 5 + 's';
        
        const animationType = Math.floor(Math.random() * 3) + 1;
        particle.style.animation = `float-${animationType} ${5 + Math.random() * 5}s infinite ease-in-out ${Math.random() * 2}s`;
        
        particleContainer.appendChild(particle);
    }
}

// Mobile menu functionality
function initMobileMenu() {
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('open');
            this.classList.toggle('active');
        });

        // Close menu when clicking on links
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.remove('open');
                mobileMenuButton.classList.remove('active');
            });
        });
    }
}

// Initialize mobile menu
initMobileMenu();

// Performance optimization: Debounce scroll events
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

// Enhanced scroll effects with debouncing
const debouncedScrollHandler = debounce(function() {
    const scrolled = window.pageYOffset;
    const windowHeight = window.innerHeight;
    
    // Update navigation active states
    const sections = document.querySelectorAll('section[id]');
    sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;
        const sectionId = section.getAttribute('id');
        const navLink = document.querySelector(`nav a[href="#${sectionId}"]`);
        
        if (navLink) {
            if (sectionTop <= 100 && sectionTop > -section.offsetHeight + 100) {
                navLink.classList.add('active');
            } else {
                navLink.classList.remove('active');
            }
        }
    });

    // Background color transitions
    const heroSection = document.querySelector('#home');
    if (heroSection) {
        const heroBottom = heroSection.getBoundingClientRect().bottom;
        const opacity = Math.max(0, Math.min(1, heroBottom / windowHeight));
        document.body.style.background = `linear-gradient(to bottom, 
            rgba(10, 10, 15, ${1 - opacity * 0.3}) 0%, 
            rgba(10, 10, 15, 1) 100%)`;
    }
}, 10);

window.addEventListener('scroll', debouncedScrollHandler);

// Preloader animation
function initPreloader() {
    const preloader = document.createElement('div');
    preloader.className = 'preloader';
    preloader.innerHTML = `
        <div class="preloader-content">
            <div class="preloader-logo">
                <span class="text-gradient-primary">Tech</span><span class="text-gradient-secondary">tonauts</span>
            </div>
            <div class="preloader-spinner">
                <div class="spinner-ring"></div>
                <div class="spinner-ring"></div>
                <div class="spinner-ring"></div>
            </div>
        </div>
    `;
    
    // Add preloader styles
    const style = document.createElement('style');
    style.textContent = `
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--color-dark-bg);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.5s ease;
        }
        
        .preloader-content {
            text-align: center;
        }
        
        .preloader-logo {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 2rem;
            font-family: var(--font-family-heading);
        }
        
        .preloader-spinner {
            position: relative;
            width: 60px;
            height: 60px;
            margin: 0 auto;
        }
        
        .spinner-ring {
            position: absolute;
            width: 100%;
            height: 100%;
            border: 3px solid transparent;
            border-top: 3px solid var(--color-accent-blue);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        .spinner-ring:nth-child(2) {
            animation-delay: 0.3s;
            border-top-color: var(--color-accent-purple);
        }
        
        .spinner-ring:nth-child(3) {
            animation-delay: 0.6s;
            border-top-color: var(--color-accent-green);
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    `;
    
    document.head.appendChild(style);
    document.body.appendChild(preloader);
    
    // Remove preloader after page load
    window.addEventListener('load', function() {
        setTimeout(() => {
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.remove();
                style.remove();
            }, 500);
        }, 1000);
    });
}

// Initialize preloader
initPreloader();

// Easter egg: Konami code
let konamiCode = [];
const konamiSequence = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];

document.addEventListener('keydown', function(e) {
    konamiCode.push(e.keyCode);
    if (konamiCode.length > konamiSequence.length) {
        konamiCode.shift();
    }
    
    if (konamiCode.join(',') === konamiSequence.join(',')) {
        activateEasterEgg();
        konamiCode = [];
    }
});

function activateEasterEgg() {
    const colors = ['#4F46E5', '#7C3AED', '#10B981', '#F59E0B', '#EF4444'];
    
    document.querySelectorAll('.floating-orb').forEach((orb, index) => {
        orb.style.background = colors[index % colors.length];
        orb.style.animation = `float-slow 2s ease-in-out infinite, rainbow-glow 3s ease-in-out infinite`;
        orb.style.filter = 'blur(10px)';
        orb.style.opacity = '0.8';
    });
    
    // Add rainbow glow animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes rainbow-glow {
            0% { box-shadow: 0 0 20px #4F46E5; }
            20% { box-shadow: 0 0 20px #7C3AED; }
            40% { box-shadow: 0 0 20px #10B981; }
            60% { box-shadow: 0 0 20px #F59E0B; }
            80% { box-shadow: 0 0 20px #EF4444; }
            100% { box-shadow: 0 0 20px #4F46E5; }
        }
    `;
    document.head.appendChild(style);
    
    // Show congratulations message
    const message = document.createElement('div');
    message.innerHTML = `
        <div style="
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: linear-gradient(135deg, var(--color-accent-blue), var(--color-accent-purple));
            color: white;
            padding: 2rem;
            border-radius: 1rem;
            text-align: center;
            z-index: 10000;
            font-family: var(--font-family-heading);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 0.5s ease-out;
        ">
            <h3 style="margin: 0 0 1rem 0; font-size: 1.5rem;">🎉 Easter Egg Activated!</h3>
            <p style="margin: 0; opacity: 0.9;">You found the secret Konami code! Enjoy the rainbow mode.</p>
        </div>
    `;
    
    document.body.appendChild(message);
    
    // Remove message after 3 seconds
    setTimeout(() => {
        message.style.opacity = '0';
        setTimeout(() => message.remove(), 500);
    }, 3000);
    
    // Reset after 10 seconds
    setTimeout(() => {
        document.querySelectorAll('.floating-orb').forEach(orb => {
            orb.style.animation = '';
            orb.style.filter = '';
            orb.style.opacity = '';
            orb.style.background = '';
        });
        style.remove();
    }, 10000);
}

// Advanced cursor effects
function initCursorEffects() {
    const cursor = document.createElement('div');
    cursor.className = 'custom-cursor';
    document.body.appendChild(cursor);
    
    const cursorDot = document.createElement('div');
    cursorDot.className = 'cursor-dot';
    document.body.appendChild(cursorDot);
    
    // Add cursor styles
    const cursorStyle = document.createElement('style');
    cursorStyle.textContent = `
        .custom-cursor {
            position: fixed;
            width: 20px;
            height: 20px;
            background: linear-gradient(135deg, var(--color-accent-blue), var(--color-accent-purple));
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: all 0.1s ease;
            opacity: 0;
        }
        
        .cursor-dot {
            position: fixed;
            width: 4px;
            height: 4px;
            background: var(--color-accent-blue);
            border-radius: 50%;
            pointer-events: none;
            z-index: 10000;
            transform: translate(-50%, -50%);
            transition: all 0.05s ease;
        }
        
        .custom-cursor.hover {
            transform: translate(-50%, -50%) scale(1.5);
            opacity: 0.8;
        }
        
        @media (max-width: 768px) {
            .custom-cursor, .cursor-dot {
                display: none;
            }
        }
    `;
    document.head.appendChild(cursorStyle);
    
    let mouseX = 0, mouseY = 0;
    let cursorX = 0, cursorY = 0;
    
    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        cursorDot.style.left = mouseX + 'px';
        cursorDot.style.top = mouseY + 'px';
    });
    
    function updateCursor() {
        cursorX += (mouseX - cursorX) * 0.1;
        cursorY += (mouseY - cursorY) * 0.1;
        
        cursor.style.left = cursorX + 'px';
        cursor.style.top = cursorY + 'px';
        cursor.style.opacity = '0.6';
        
        requestAnimationFrame(updateCursor);
    }
    
    updateCursor();
    
    // Hover effects for interactive elements
    const interactiveElements = document.querySelectorAll('button, a, .service-card, .stat-card');
    interactiveElements.forEach(el => {
        el.addEventListener('mouseenter', () => {
            cursor.classList.add('hover');
        });
        
        el.addEventListener('mouseleave', () => {
            cursor.classList.remove('hover');
        });
    });
}

// Initialize cursor effects for desktop only
if (window.innerWidth > 768) {
    initCursorEffects();
}

// Text reveal animation on scroll
function initTextRevealAnimations() {
    const textElements = document.querySelectorAll('h1, h2, h3, p');
    
    textElements.forEach(element => {
        if (element.classList.contains('animate-on-scroll')) {
            const text = element.textContent;
            element.innerHTML = '';
            
            const words = text.split(' ');
            words.forEach((word, index) => {
                const span = document.createElement('span');
                span.textContent = word + ' ';
                span.style.opacity = '0';
                span.style.transform = 'translateY(20px)';
                span.style.display = 'inline-block';
                span.style.transition = `all 0.6s ease ${index * 0.1}s`;
                element.appendChild(span);
            });
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const spans = entry.target.querySelectorAll('span');
                        spans.forEach(span => {
                            span.style.opacity = '1';
                            span.style.transform = 'translateY(0)';
                        });
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            
            observer.observe(element);
        }
    });
}

// Initialize text reveal animations
// initTextRevealAnimations(); // Commented out to avoid conflicts with existing animations

// Advanced particle system with mouse interaction
function initAdvancedParticles() {
    const canvas = document.createElement('canvas');
    canvas.id = 'particle-canvas';
    canvas.style.position = 'fixed';
    canvas.style.top = '0';
    canvas.style.left = '0';
    canvas.style.width = '100%';
    canvas.style.height = '100%';
    canvas.style.pointerEvents = 'none';
    canvas.style.zIndex = '1';
    canvas.style.opacity = '0.6';
    
    document.body.appendChild(canvas);
    
    const ctx = canvas.getContext('2d');
    let particles = [];
    let mouse = { x: 0, y: 0 };
    
    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    
    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);
    
    document.addEventListener('mousemove', (e) => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;
    });
    
    class Particle {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.vx = (Math.random() - 0.5) * 0.5;
            this.vy = (Math.random() - 0.5) * 0.5;
            this.radius = Math.random() * 2 + 1;
            this.opacity = Math.random() * 0.5 + 0.2;
            this.color = `hsl(${220 + Math.random() * 60}, 70%, 60%)`;
        }
        
        update() {
            this.x += this.vx;
            this.y += this.vy;
            
            // Mouse interaction
            const dx = mouse.x - this.x;
            const dy = mouse.y - this.y;
            const distance = Math.sqrt(dx * dx + dy * dy);
            
            if (distance < 100) {
                const force = (100 - distance) / 100;
                this.vx += (dx / distance) * force * 0.01;
                this.vy += (dy / distance) * force * 0.01;
            }
            
            // Boundary check
            if (this.x < 0 || this.x > canvas.width) this.vx *= -1;
            if (this.y < 0 || this.y > canvas.height) this.vy *= -1;
            
            // Damping
            this.vx *= 0.99;
            this.vy *= 0.99;
        }
        
        draw() {
            ctx.save();
            ctx.globalAlpha = this.opacity;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
            ctx.fillStyle = this.color;
            ctx.fill();
            ctx.restore();
        }
    }
    
    // Create particles
    for (let i = 0; i < 50; i++) {
        particles.push(new Particle());
    }
    
    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        
        particles.forEach(particle => {
            particle.update();
            particle.draw();
        });
        
        // Draw connections
        particles.forEach((particle, i) => {
            particles.slice(i + 1).forEach(otherParticle => {
                const dx = particle.x - otherParticle.x;
                const dy = particle.y - otherParticle.y;
                const distance = Math.sqrt(dx * dx + dy * dy);
                
                if (distance < 100) {
                    ctx.save();
                    ctx.globalAlpha = (100 - distance) / 100 * 0.2;
                    ctx.beginPath();
                    ctx.moveTo(particle.x, particle.y);
                    ctx.lineTo(otherParticle.x, otherParticle.y);
                    ctx.strokeStyle = '#4F46E5';
                    ctx.lineWidth = 1;
                    ctx.stroke();
                    ctx.restore();
                }
            });
        });
        
        requestAnimationFrame(animate);
    }
    
    animate();
}

// Initialize advanced particles for desktop only
if (window.innerWidth > 1024) {
    initAdvancedParticles();
}

// Loading progress indicator
function initLoadingProgress() {
    const progressBar = document.createElement('div');
    progressBar.id = 'loading-progress';
    progressBar.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 0%;
        height: 3px;
        background: linear-gradient(90deg, var(--color-accent-blue), var(--color-accent-purple));
        z-index: 10000;
        transition: width 0.3s ease;
    `;
    
    document.body.appendChild(progressBar);
    
    let progress = 0;
    const interval = setInterval(() => {
        progress += Math.random() * 30;
        if (progress > 100) progress = 100;
        
        progressBar.style.width = progress + '%';
        
        if (progress >= 100) {
            clearInterval(interval);
            setTimeout(() => {
                progressBar.style.opacity = '0';
                setTimeout(() => progressBar.remove(), 300);
            }, 500);
        }
    }, 200);
    
    window.addEventListener('load', () => {
        progress = 100;
        progressBar.style.width = '100%';
    });
}

// Initialize loading progress
initLoadingProgress();

// Enhanced Portfolio Animations
function initPortfolioAnimations() {
    const portfolioCards = document.querySelectorAll('.portfolio-card');
    
    portfolioCards.forEach((card, index) => {
        // Add staggered animation delay
        card.style.animationDelay = `${index * 0.1}s`;
        
        // Enhanced hover effects
        card.addEventListener('mouseenter', function() {
            const overlay = this.querySelector('.portfolio-overlay');
            const icon = this.querySelector('.portfolio-icon');
            const gradient = this.querySelector('.portfolio-gradient');
            
            if (overlay) overlay.style.opacity = '1';
            if (icon) icon.style.transform = 'scale(1.1) rotate(10deg)';
            if (gradient) gradient.style.animationDuration = '2s';
        });
        
        card.addEventListener('mouseleave', function() {
            const overlay = this.querySelector('.portfolio-overlay');
            const icon = this.querySelector('.portfolio-icon');
            const gradient = this.querySelector('.portfolio-gradient');
            
            if (overlay) overlay.style.opacity = '0';
            if (icon) icon.style.transform = 'scale(1) rotate(0deg)';
            if (gradient) gradient.style.animationDuration = '6s';
        });
    });
}

// Enhanced Team Animations
function initTeamAnimations() {
    const teamCards = document.querySelectorAll('.team-card');
    
    teamCards.forEach((card, index) => {
        // Add floating animation
        card.style.animation = `float-enhanced 6s ease-in-out infinite ${index * 0.5}s`;
        
        // Enhanced image effects
        const teamImage = card.querySelector('.team-image');
        const teamGlow = card.querySelector('.team-glow');
        
        card.addEventListener('mouseenter', function() {
            if (teamImage) {
                teamImage.style.transform = 'scale(1.05) rotate(2deg)';
                teamImage.style.filter = 'brightness(1.1) contrast(1.1)';
            }
            if (teamGlow) {
                teamGlow.style.opacity = '0.4';
                teamGlow.style.animation = 'glow-enhanced 2s ease-in-out infinite';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            if (teamImage) {
                teamImage.style.transform = 'scale(1) rotate(0deg)';
                teamImage.style.filter = 'brightness(1) contrast(1)';
            }
            if (teamGlow) {
                teamGlow.style.opacity = '0';
                teamGlow.style.animation = 'none';
            }
        });
    });
}

// AI-Powered Particle System
function initAIParticleSystem() {
    const canvas = document.createElement('canvas');
    canvas.id = 'ai-particle-canvas';
    canvas.style.position = 'fixed';
    canvas.style.top = '0';
    canvas.style.left = '0';
    canvas.style.width = '100%';
    canvas.style.height = '100%';
    canvas.style.pointerEvents = 'none';
    canvas.style.zIndex = '1';
    canvas.style.opacity = '0.4';
    
    document.body.appendChild(canvas);
    
    const ctx = canvas.getContext('2d');
    let aiParticles = [];
    let mouse = { x: 0, y: 0 };
    
    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    
    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);
    
    document.addEventListener('mousemove', (e) => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;
    });
    
    class AIParticle {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.vx = (Math.random() - 0.5) * 0.3;
            this.vy = (Math.random() - 0.5) * 0.3;
            this.radius = Math.random() * 3 + 1;
            this.opacity = Math.random() * 0.6 + 0.2;
            this.hue = Math.random() * 60 + 220; // Blue to purple range
            this.life = Math.random() * 100 + 50;
            this.maxLife = this.life;
        }
        
        update() {
            // AI-like behavior: particles are attracted to mouse but with some randomness
            const dx = mouse.x - this.x;
            const dy = mouse.y - this.y;
            const distance = Math.sqrt(dx * dx + dy * dy);
            
            if (distance < 150) {
                const force = (150 - distance) / 150;
                this.vx += (dx / distance) * force * 0.005;
                this.vy += (dy / distance) * force * 0.005;
            }
            
            // Add some AI randomness
            this.vx += (Math.random() - 0.5) * 0.01;
            this.vy += (Math.random() - 0.5) * 0.01;
            
            this.x += this.vx;
            this.y += this.vy;
            
            // Boundary wrapping
            if (this.x < 0) this.x = canvas.width;
            if (this.x > canvas.width) this.x = 0;
            if (this.y < 0) this.y = canvas.height;
            if (this.y > canvas.height) this.y = 0;
            
            // Life cycle
            this.life--;
            this.opacity = (this.life / this.maxLife) * 0.6;
            
            // Damping
            this.vx *= 0.99;
            this.vy *= 0.99;
        }
        
        draw() {
            ctx.save();
            ctx.globalAlpha = this.opacity;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
            
            // Create gradient for AI effect
            const gradient = ctx.createRadialGradient(this.x, this.y, 0, this.x, this.y, this.radius);
            gradient.addColorStop(0, `hsla(${this.hue}, 70%, 60%, 1)`);
            gradient.addColorStop(1, `hsla(${this.hue}, 70%, 60%, 0)`);
            
            ctx.fillStyle = gradient;
            ctx.fill();
            ctx.restore();
        }
        
        isDead() {
            return this.life <= 0;
        }
    }
    
    // Create initial particles
    for (let i = 0; i < 30; i++) {
        aiParticles.push(new AIParticle());
    }
    
    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        
        // Update and draw particles
        aiParticles = aiParticles.filter(particle => {
            particle.update();
            particle.draw();
            return !particle.isDead();
        });
        
        // Add new particles occasionally
        if (Math.random() < 0.02 && aiParticles.length < 50) {
            aiParticles.push(new AIParticle());
        }
        
        // Draw neural network connections
        aiParticles.forEach((particle, i) => {
            aiParticles.slice(i + 1).forEach(otherParticle => {
                const dx = particle.x - otherParticle.x;
                const dy = particle.y - otherParticle.y;
                const distance = Math.sqrt(dx * dx + dy * dy);
                
                if (distance < 80) {
                    ctx.save();
                    ctx.globalAlpha = (80 - distance) / 80 * 0.3;
                    ctx.beginPath();
                    ctx.moveTo(particle.x, particle.y);
                    ctx.lineTo(otherParticle.x, otherParticle.y);
                    ctx.strokeStyle = '#4F46E5';
                    ctx.lineWidth = 1;
                    ctx.stroke();
                    ctx.restore();
                }
            });
        });
        
        requestAnimationFrame(animate);
    }
    
    animate();
}

// Futuristic Text Effects
function initFuturisticTextEffects() {
    const headings = document.querySelectorAll('h1, h2, h3');
    
    headings.forEach(heading => {
        heading.addEventListener('mouseenter', function() {
            this.style.textShadow = `
                0 0 10px var(--color-accent-blue),
                0 0 20px var(--color-accent-blue),
                0 0 30px var(--color-accent-blue)
            `;
            this.style.transform = 'scale(1.02)';
        });
        
        heading.addEventListener('mouseleave', function() {
            this.style.textShadow = 'none';
            this.style.transform = 'scale(1)';
        });
    });
}

// Enhanced Social Media Interactions
function initSocialMediaAnimations() {
    const socialLinks = document.querySelectorAll('.social-media-link');
    
    socialLinks.forEach((link, index) => {
        // Staggered entrance animation
        link.style.animationDelay = `${index * 0.1}s`;
        link.classList.add('animate-fade-in-up');
        
        // Enhanced hover effects
        link.addEventListener('mouseenter', function() {
            const icon = this.querySelector('.social-icon');
            const label = this.querySelector('.social-label');
            
            if (icon) {
                icon.style.transform = 'scale(1.15) rotate(5deg)';
                icon.style.filter = 'brightness(1.2)';
            }
            if (label) {
                label.style.transform = 'translateY(-2px)';
                label.style.fontWeight = '700';
            }
        });
        
        link.addEventListener('mouseleave', function() {
            const icon = this.querySelector('.social-icon');
            const label = this.querySelector('.social-label');
            
            if (icon) {
                icon.style.transform = 'scale(1) rotate(0deg)';
                icon.style.filter = 'brightness(1)';
            }
            if (label) {
                label.style.transform = 'translateY(0)';
                label.style.fontWeight = '600';
            }
        });
    });
}

// Initialize all new animations
document.addEventListener('DOMContentLoaded', function() {
    // Wait for existing initialization to complete
    setTimeout(() => {
        initPortfolioAnimations();
        initTeamAnimations();
        initFuturisticTextEffects();
        initSocialMediaAnimations();
        
        // Initialize AI particle system for desktop only
        if (window.innerWidth > 1024) {
            initAIParticleSystem();
        }
    }, 500);
});

// Enhanced responsive behavior
window.addEventListener('resize', debounce(function() {
    const width = window.innerWidth;
    
    // Adjust animations based on screen size
    if (width <= 768) {
        // Reduce animation intensity on mobile
        document.querySelectorAll('.portfolio-card, .team-card').forEach(card => {
            card.style.animation = 'none';
        });
    } else {
        // Re-enable animations on larger screens
        initPortfolioAnimations();
        initTeamAnimations();
    }
}, 250));