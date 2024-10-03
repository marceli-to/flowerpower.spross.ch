import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

(function() {
  const selectors = {
    body: 'body',
    container: '[data-hero-container]',
    image: '[data-hero-image]',
    title: '[data-hero-title]',
    claim: '[data-hero-claim]',
    badge: '[data-hero-badge]'
  }

  const hero = document.querySelector(selectors.container);
  const heroImage = document.querySelector(selectors.image);
  const heroTitle = document.querySelector(selectors.title);
  const heroClaim = document.querySelector(selectors.claim);
  const heroBadge = document.querySelector(selectors.badge);

  const getAnimationValues = () => {
    const width = window.innerWidth;
    if (width < 640) { // Mobile
      return {
        imageScale: 1.5,
        titleY: '-120vh',
        claimY: '-75vh',
        badgeOpacityStart: 0.5
      };
    } else if (width <= 768) { // Tablet
      return {
        imageScale: 1.8,
        titleY: '-120vh',
        claimY: '-75vh',
        badgeOpacityStart: 0.6
      };
    } else if (width < 1024) { // Tablet
      return {
        imageScale: 1.8,
        titleY: '-120vh',
        claimY: '-80vh',
        badgeOpacityStart: 0.6
      };
    } else { // Desktop
      return {
        imageScale: 2.2,
        titleY: '-135vh',
        claimY: '-95vh',
        badgeOpacityStart: 0.7
      };
    }
  };

  const run = () => {
    const values = getAnimationValues();
    
    gsap.set(heroImage, { scale: 1 });

    const timeline = gsap.timeline({
      scrollTrigger: {
        trigger: hero,
        start: "top top",
        end: "bottom top",
        scrub: true,
        pin: true,
        anticipatePin: 1
      }
    });

    timeline
      .to(heroImage, { scale: values.imageScale, duration: 1 })
      .to(heroTitle, { y: values.titleY, duration: 1 }, 0)
      .to(heroClaim, { y: values.claimY, duration: 1 }, 0.2)
      .to(heroBadge, { opacity: 0, duration: .1 }, values.badgeOpacityStart);
  }

  const handleResize = () => {
    ScrollTrigger.getAll().forEach(st => st.kill());
    run();
  };

  document.addEventListener('DOMContentLoaded', run);
  window.addEventListener('resize', handleResize);
})();