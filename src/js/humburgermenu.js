import gsap from "gsap";

export default function hmb() {
  const hmb = document.querySelector(".humburgermenu");
  let isOpen = false;

  window.addEventListener("resize", () => {});
  hmb.addEventListener("click", () => {
    if (!isOpen) {
      gsap.to(".sp-nav", {
        autoAlpha: 1,
        duration: 0.5,
      });
      const tl = gsap.timeline();
      tl.to(".border02", {
        opacity: 0,
        duration: 0.5,
      })
        .to(
          ".border01",
          {
            rotate: 45,

            y: 11,
            duration: 0.5,
          },
          "<"
        )
        .to(
          ".border03",
          {
            rotate: -45,
            y: -8,
            duration: 0.5,
          },
          "<"
        );
      isOpen = true;
    } else {
      gsap.to(".sp-nav", {
        autoAlpha: 0,
        duration: 0.5,
      });
      const tl = gsap.timeline();
      tl.to(".border02", {
        opacity: 1,
        duration: 0.5,
      })
        .to(
          ".border01",
          {
            rotate: 0,
            y: 0,
            duration: 0.5,
          },
          "<"
        )
        .to(
          ".border03",
          {
            rotate: 0,
            y: 0,
            duration: 0.5,
          },
          "<"
        );
      isOpen = false;
    }
  });
}
