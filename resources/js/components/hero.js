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
  const run = () => {
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
      .to(heroImage, { scale: 2.2, duration: 1 })
      .to(heroTitle, { y: '-135vh', duration: 1 }, 0)
      .to(heroClaim, { y: '-100vh', duration: 1 }, 0.2)
      .to(heroBadge, { opacity: 0, duration: .25 }, 0.7);
  }

  document.addEventListener('DOMContentLoaded', run);
})();
