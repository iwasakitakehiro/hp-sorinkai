import About from "./about";
import { slick, slickBlog } from "./slick";

window.addEventListener("load", init());

function init() {
  slick();
  slickBlog();
}

if (document.querySelector(".about__page")) {
  const about = new About();
  about.init();
}
