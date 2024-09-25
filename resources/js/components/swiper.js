import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

(function() {

  const selectors = {
    swiper: {
      container: '.js-swiper',
      btns: {
        prev: '.js-swiper-prev',
        next: '.js-swiper-next',
      },
    },
  };

  let swiper = null;

  const init = () => {
    
    swiper = new Swiper(selectors.swiper.container, {
      modules: [Navigation],
      direction: 'horizontal',
      slidesPerView: "1.5",
      centeredSlides: false,
      spaceBetween: "20",
      breakpoints: {
        768: {
          slidesPerView: "2.5",
        },
        1024: {
          slidesPerView: "3.5",
        },
        1680: {
          slidesPerView: "4.5",
        },
      },
      navigation: {
        nextEl: selectors.swiper.btns.next,
        prevEl: selectors.swiper.btns.prev,
      },
    }); 
    
    const prevBtn = document.querySelector(selectors.swiper.btns.prev);
    const nextBtn = document.querySelector(selectors.swiper.btns.next);
    
    if (prevBtn) {
      prevBtn.addEventListener('click', (e) => {
        e.preventDefault();
        navigate('prev');
      });
    }
    
    if (nextBtn) {
      nextBtn.addEventListener('click', (e) => {
        e.preventDefault();
        navigate('next');
      });
    }
  };

  const navigate = (direction) => {
    const currentTranslate = swiper.translate;
    const slideWidth = swiper.slides[0].offsetWidth;
    const spaceBetween = swiper.params.spaceBetween;
    const moveAmount = slideWidth + spaceBetween;

    let targetTranslate;
    if (direction === 'prev') {
      targetTranslate = currentTranslate + moveAmount;
    } else {
      targetTranslate = currentTranslate;
    }
  
    swiper.translateTo(targetTranslate, 300);
  };
  
  document.addEventListener('DOMContentLoaded', init);

})();


