import "slick-carousel";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
function slick() {
  $(".slider").slick({
    autoplay: true,
    fade: true,
    arrows: false,
    pauseOnFocus: false,
    speed: 2000,
    autoplaySpeed: 3000,
  });
}

function slickBlog() {
  if (window.innerWidth <= 768) {
    $(".slider-blog").slick({
      autoplay: false,
      arrows: false,
      infinite: false,

      slidesToShow: 1,
    });
  }
}

export { slick, slickBlog };
