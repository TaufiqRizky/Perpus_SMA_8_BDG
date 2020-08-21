    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });

var rating1 = 0;
rateStyle(rating1, 'parent1');
// javascript
function rateStyle(num, divID) {
	var ratingRounded = Math.floor(num);
	var starArray = document.getElementById(divID).querySelectorAll(".star-over");
  for (var i = 0; i < ratingRounded; i++) {
  	starArray[i].classList.add("star-visible");
  }
  var finalStar = Math.round((num-ratingRounded)*100);
  if (finalStar != 0) {
  starArray[ratingRounded].classList.add("star-visible");
  starArray[ratingRounded].style.width=finalStar+"%";
}
}