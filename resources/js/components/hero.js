import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

const hero = document.querySelector('[data-hero-container]');
const heroImage = document.querySelector('[data-hero-image]');
const heroTitle = document.querySelector('[data-hero-title]');
const heroClaim = document.querySelector('[data-hero-claim]');

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

timeline.to(heroImage, { scale: 1.5, duration: 1 })
  .to(heroTitle, { y: '-120vh', duration: 1 }, 0)
  .to(heroClaim, { y: '-120vh', duration: 1 }, 0.1);