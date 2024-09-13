import gsap from "gsap";
import { ScrollTrigger } from "gsap/all";
gsap.registerPlugin(ScrollTrigger);

export default function tracking() {
  // gsap.to(".tracking__girl", {
  //   position: "sticky",
  //   bottom: 0,
  //   scrollTrigger: {
  //     trigger: ".tracking-area",
  //     start: "bottom bottom",
  //     end: "bottom bottom",
  //     markers: true,
  //     toggleActions: "play none none reverse",
  //   },
  // });
}
