import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';
import Lenis from 'lenis';

gsap.registerPlugin(ScrollTrigger);

const loadYoutubeBackground = (shell) => {
    if (!shell || shell.dataset.loaded === 'true') {
        return;
    }

    const videoId = shell.dataset.youtubeId;
    if (!videoId) {
        return;
    }

    const iframe = document.createElement('iframe');
    iframe.setAttribute('title', 'Red Sea Digital Pro background video');
    iframe.setAttribute('allow', 'autoplay; encrypted-media; picture-in-picture');
    iframe.setAttribute('allowfullscreen', '');
    iframe.setAttribute('loading', 'eager');
    iframe.setAttribute('referrerpolicy', 'strict-origin-when-cross-origin');
    iframe.src = `https://www.youtube-nocookie.com/embed/${videoId}?autoplay=1&mute=1&controls=0&loop=1&playlist=${videoId}&playsinline=1&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1`;

    shell.appendChild(iframe);
    shell.dataset.loaded = 'true';

    iframe.addEventListener('load', () => {
        shell.classList.add('is-ready');
    });
};

const setupTilt = (element) => {
    const depth = Number(element.dataset.depth || 14);
    const baseZ = Number(element.dataset.z || 0);
    const state = {
        active: false,
        rect: null,
    };

    const reset = () => {
        element.style.transform = 'translateY(0px) rotateX(0deg) rotateY(0deg) scale(1)';
        element.style.boxShadow = '';
    };

    element.addEventListener('pointerenter', () => {
        state.active = true;
        state.rect = element.getBoundingClientRect();
    });

    element.addEventListener('pointermove', (event) => {
        if (!state.active || !state.rect) {
            return;
        }

        const x = ((event.clientX - state.rect.left) / state.rect.width) - 0.5;
        const y = ((event.clientY - state.rect.top) / state.rect.height) - 0.5;
        const rotateY = x * depth * 1.6;
        const rotateX = y * depth * -1.2;
        const translateY = Math.abs(y) * -4;

        element.style.transform = `translate3d(0, ${translateY}px, ${baseZ}px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.015)`;
        element.style.boxShadow = `0 28px 80px rgba(0, 0, 0, 0.42), ${-x * 18}px ${-y * 18}px 40px rgba(0, 229, 255, 0.06)`;
    });

    element.addEventListener('pointerleave', () => {
        state.active = false;
        state.rect = null;
        reset();
    });
};

const startApp = () => {
    const body = document.body;
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const hasFinePointer = window.matchMedia('(pointer: fine)').matches;
    const cursor = document.querySelector('.cursor');
    const cursorSpot = document.querySelector('.cursor-spot');
    const menuButton = document.querySelector('.menu-button');
    const menuOverlay = document.querySelector('.menu-overlay');
    const menuClose = document.querySelector('.menu-close');
    const menuLinks = Array.from(document.querySelectorAll('.menu-links a'));
    const revealTargets = Array.from(document.querySelectorAll('[data-reveal]'));
    const heroShell = document.querySelector('[data-youtube-shell]');
    const tiltElements = Array.from(document.querySelectorAll('[data-tilt]'));
    const parallaxCards = Array.from(document.querySelectorAll('[data-parallax]'));

    const closeMenu = () => {
        if (!menuOverlay) {
            return;
        }

        menuOverlay.classList.remove('is-open');
        menuOverlay.setAttribute('aria-hidden', 'true');
        menuButton?.setAttribute('aria-expanded', 'false');
        body.classList.remove('no-scroll');
    };

    const openMenu = () => {
        if (!menuOverlay) {
            return;
        }

        menuOverlay.classList.add('is-open');
        menuOverlay.setAttribute('aria-hidden', 'false');
        menuButton?.setAttribute('aria-expanded', 'true');
        body.classList.add('no-scroll');
    };

    if (menuButton && menuOverlay) {
        menuButton.addEventListener('click', () => {
            if (menuOverlay.classList.contains('is-open')) {
                closeMenu();
            } else {
                openMenu();
            }
        });
    }

    menuClose?.addEventListener('click', closeMenu);

    menuOverlay?.addEventListener('click', (event) => {
        if (event.target === menuOverlay) {
            closeMenu();
        }
    });

    menuLinks.forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    window.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });

    if (hasFinePointer && cursor && cursorSpot) {
        body.classList.add('cursor-active');

        window.addEventListener('pointermove', (event) => {
            const { clientX: x, clientY: y } = event;
            cursor.style.transform = `translate(${x}px, ${y}px) translate(-50%, -50%)`;
            cursorSpot.style.transform = `translate(${x}px, ${y}px) translate(-50%, -50%)`;
        });

        document.querySelectorAll('a, button, input, select, textarea, [role="button"]').forEach((element) => {
            element.addEventListener('mouseenter', () => body.classList.add('cursor-hover'));
            element.addEventListener('mouseleave', () => body.classList.remove('cursor-hover'));
        });
    }

    if (heroShell) {
        const io = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        loadYoutubeBackground(heroShell);
                        io.disconnect();
                    }
                });
            },
            { rootMargin: '250px 0px' }
        );

        io.observe(heroShell);
    }

    const lenis = reduceMotion
        ? null
        : new Lenis({
            lerp: 0.08,
            smoothWheel: true,
            smoothTouch: false,
        });

    if (lenis) {
        const raf = (time) => {
            lenis.raf(time);
            requestAnimationFrame(raf);
        };

        requestAnimationFrame(raf);
    }

    const scrollToSection = (selector) => {
        const target = document.querySelector(selector);
        if (!target) {
            return;
        }

        if (lenis) {
            lenis.scrollTo(target, { offset: -18 });
            return;
        }

        target.scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth', block: 'start' });
    };

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', (event) => {
            const href = anchor.getAttribute('href');
            if (!href || href === '#') {
                return;
            }

            const target = document.querySelector(href);
            if (!target) {
                return;
            }

            event.preventDefault();
            closeMenu();
            scrollToSection(href);
        });
    });

    tiltElements.forEach(setupTilt);

    if (reduceMotion) {
        body.classList.add('reveal-ready');
        revealTargets.forEach((element) => {
            element.style.opacity = '1';
            element.style.transform = 'none';
        });
        return;
    }

    body.classList.add('reveal-ready');

    const heroElements = revealTargets.filter((element) => element.closest('.hero'));
    const restElements = revealTargets.filter((element) => !element.closest('.hero'));

    if (heroElements.length) {
        gsap.fromTo(
            heroElements,
            { opacity: 0, y: 28, rotateX: 8 },
            {
                opacity: 1,
                y: 0,
                rotateX: 0,
                duration: 1,
                ease: 'power3.out',
                stagger: 0.08,
                delay: 0.12,
            }
        );
    }

    restElements.forEach((element) => {
        gsap.fromTo(
            element,
            { opacity: 0, y: 34 },
            {
                opacity: 1,
                y: 0,
                duration: 0.9,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: element,
                    start: 'top 84%',
                },
            }
        );
    });

    parallaxCards.forEach((card) => {
        const track = card.querySelector('.case-track');
        if (!track) {
            return;
        }

        gsap.fromTo(
            track,
            { y: 20 },
            {
                y: -20,
                ease: 'none',
                scrollTrigger: {
                    trigger: card,
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: true,
                },
            }
        );
    });
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', startApp);
} else {
    startApp();
}
