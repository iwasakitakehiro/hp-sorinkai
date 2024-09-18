import About from "./about";
import question from "./qa";
import hmb from "./humburgermenu";
import topAbout from "./top-about";
import { slick, slickBlog } from "./slick";

window.addEventListener("load", init());

function init() {
  hmb();
  topAbout();
  question();
  slick();
  slickBlog();
}

if (document.querySelector(".about__page")) {
  const about = new About();
  about.init();
}
