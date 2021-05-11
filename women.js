    
const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    slidesPerView:4,
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    breakpoints: {
      1024: {
        slidesPerView: 5
      },
      768:{
        slidesPerView:4
      }

    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

  //FLAT 100% COUPON JS

  document.querySelector(".openbtn").style.background="linear-gradient(90deg, rgba(109,66,231,1) 16%, rgba(221,210,252,1) 100%)";
  
  function openNav() {
    document.getElementById("mySidepanel").style.width = "500px";
    document.querySelector(".fa-caret-up").style.color="#7c5fcf"
    document.querySelector(".fa-times").style.color="#000"
    // document.querySelector(".fa-caret-up").style.color="red"
  }
  
  function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
    document.querySelector(".fa-caret-up").style.color="#000"
  }