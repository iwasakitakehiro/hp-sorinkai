import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

export default function topAbout() {
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".about-area",
      markers: false,
      start: "bottom-=20% bottom",
      toggleActions: "play none none reverse",
    },
  });
  tl.to(".about-contents .bg", {
    autoAlpha: 1,
    duration: 0.3,
  })
    .to(
      ".about-contents svg rect",
      {
        stroke: "#fff",
        duration: 0.3,
      },
      "<"
    )
    .to(
      ".about-contents svg path",
      {
        fill: "#fff",
        duration: 0.3,
      },
      "<"
    )
    .to(
      ".about-contents .text",
      {
        color: "#fff",
        duration: 0.3,
      },
      "<"
    );
}
