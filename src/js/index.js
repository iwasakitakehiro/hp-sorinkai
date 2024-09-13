import About from "./about";
import question from "./qa";
import hmb from "./humburgermenu";
import tracking from "./tracking";
import { slick, slickBlog } from "./slick";

window.addEventListener("load", init());

function init() {
  hmb();
  tracking();
  question();
  slick();
  slickBlog();
}

if (document.querySelector(".about__page")) {
  const about = new About();
  about.init();
}
