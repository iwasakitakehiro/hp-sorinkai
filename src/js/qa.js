import gsap from "gsap";
export default function question() {
  const questions = document.querySelectorAll(".question");
  questions.forEach((question) => {
    let isOpen = false;
    question.addEventListener("click", (e) => {
      if (!isOpen) {
        gsap.to(question.nextElementSibling, {
          position: "relative",
          autoAlpha: 1,
          duration: 0.8,
        });
        isOpen = true;
      } else {
        gsap.to(question.nextElementSibling, {
          position: "absolute",
          autoAlpha: 0,
          y: 0,
          duration: 0.8,
        });
        isOpen = false;
      }
    });
  });
}
