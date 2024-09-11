import gsap from "gsap";
import { ScrollTrigger } from "gsap/all";
gsap.registerPlugin(ScrollTrigger);
class About {
  constructor() {
    this.timeline = gsap.timeline();
    this.current = 0;
  }

  init() {
    this.timeline
      .to(".about__top-bg", {
        opacity: 1,
        duration: 0.5,
        delay: 0.8,
      })
      .to(
        ".logo path",
        {
          fill: "#ffffff",
          duration: 0.5,
        },
        "<"
      )
      .to(
        ".logo rect",
        {
          stroke: "#ffffff",
          duration: 0.5,
        },
        "<"
      );

    this._section();
  }

  _section() {
    const sections = document.querySelectorAll("section");
    sections.forEach((section, index) => {
      this.timeline.to(section, {
        filter: "blur(10px)",
        scrollTrigger: {
          trigger: section,
          start: "center top",
          scrub: true,
          onUpdate: (e) => {
            console.log(e.progress);
          },
        },
      });
    });
  }
}

export default About;
