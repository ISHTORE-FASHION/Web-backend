// -----------------mobile js start-------------- 



var swiper1 = new Swiper('.swiper-container1', {
  slidesPerView: 4.3, 
  spaceBetween: 10,
  slidesPerGroup: 3,
  loop: false,
  loopFillGroupWithBlank: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next1',
    prevEl: '.swiper-button-prev1',
  },
  breakpoints: {
        640: {
          slidesPerView:5,
          
        },
        768: {
          slidesPerView: 5,
          spaceBetween: 40,
          
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 50,
          
        },
      }
});


var swiper2 = new Swiper('.swiper-container2', {
  slidesPerView: 1,
  spaceBetween: 10,
  slidesPerGroup:1,
  loop: false,
  loopFillGroupWithBlank: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next2',
    prevEl: '.swiper-button-prev2',
  },
  breakpoints: {
        640: {
          slidesPerView:1,
          
        },
        767: {
          slidesPerView: 1,
          spaceBetween: 40,
          
        },
        1024: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
      }
});

var swiper3 = new Swiper('.swiper-container3', {
  slidesPerView: 2.8,
  spaceBetween: 00,
  slidesPerGroup: 3,
  loop: false,
  loopFillGroupWithBlank: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next1',
    prevEl: '.swiper-button-prev1',
  },
  breakpoints: {

        640: {
          slidesPerView:5,
          
          
        },
        768: {
          slidesPerView: 5,
          spaceBetween: 20,
          
        },
    
        1024: {
          slidesPerView: 5,
        spaceBetween: 20,
        },
      }
});





// -----------------mobile js end-------------- 



// --------------go-to section js for desktop---------------




















// -----------------------------------my js---------------------------------



























//---------js primary function completed-----------------





 // Get the modal
 var modal = document.getElementById("myModal1");
 var modal2=document.getElementById("myModal2");
 var modal3=document.getElementById("myModal3");
 // Get the button that opens the modal
 var btn = document.getElementById("myBtn1");
 var btn2=document.getElementsByClassName("myBtn2")[0];
 var btn3=document.getElementById("myBtn3");

 // Get the <span> element that closes the modal
 var span = document.getElementsByClassName("close1")[0];

 // When the user clicks the button, open the modal 

  btn.onclick = function () {
    modal.style.display = "block";
  }
 
  var speed= 10;

  function typeWriter() {
   if ($(window).width()>768) {
    btn3.onclick = function () {
      // modal3.style.display = "block";
      alert("hello");
    }
     
     setTimeout(typeWriter, speed);
   }
   else
   {
     setTimeout(typeWriter, speed);
   }
 }


 setInterval(() => {
   typeWriter();
}, 10);

 if($(window).width() <=768)
 {
  btn2.onclick = function () {
    modal2.style.display = "block";
  }
 }
 
 // When the user clicks on <span> (x), close the modal
 span.onclick = function () {
   modal.style.display = "none";
 }

 

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function (event) {
   if (event.target == modal) {
     modal.style.display = "none";
   }
   else if(event.target==modal2)
   modal2.style.display="none";
   else if(event.target==modal3)
   modal3.style.display="none";
 }










// -------------------------js code for navbar color change------------

var realNav = document.getElementById("top-nav");

var speed= 10;

   function typeWriter() {
    if (document.body.scrollTop>40) {
      realNav.style.background="#fff";
      
      setTimeout(typeWriter, speed);
    }
    else
    {
      realNav.style.background="transparent";
      setTimeout(typeWriter, speed);
    }
  }


  setInterval(() => {
    typeWriter();
}, 10);

// -------------------------js code for navbar color change------------








// ----------------dropwdown js----------------




var word = document.querySelector(".test-h5");


var rightArr1 = document.querySelector(".right-icon1");
function myFunction1(){
  if(rightArr1.classList.contains("fa-angle-right"))
      {
        rightArr1.classList.remove("fa-angle-right");
        rightArr1.classList.add("fa-angle-down");
        console.log("second statement");
      }
      else if(rightArr1.classList.contains("fa-angle-down"))
      {
        rightArr1.classList.remove("fa-angle-down");
        rightArr1.classList.add("fa-angle-right");
        console.log("first stement ");
      }
}


var rightArr2 = document.querySelector(".right-icon2");
function myFunction2(){
  if(rightArr2.classList.contains("fa-angle-right"))
      {
        rightArr2.classList.remove("fa-angle-right");
        rightArr2.classList.add("fa-angle-down");
        console.log("second statement");
      }
      else if(rightArr2.classList.contains("fa-angle-down"))
      {
        rightArr2.classList.remove("fa-angle-down");
        rightArr2.classList.add("fa-angle-right");
        console.log("first stement ");
      }
}

var rightArr3 = document.querySelector(".right-icon3");
function myFunction3(){
  if(rightArr3.classList.contains("fa-angle-right"))
      {
        rightArr3.classList.remove("fa-angle-right");
        rightArr3.classList.add("fa-angle-down");
        console.log("second statement");
      }
      else if(rightArr3.classList.contains("fa-angle-down"))
      {
        rightArr3.classList.remove("fa-angle-down");
        rightArr3.classList.add("fa-angle-right");
        console.log("first stement ");
      }
}

var rightArr4 = document.querySelector(".right-icon4");
function myFunction4(){
  if(rightArr4.classList.contains("fa-angle-right"))
      {
        rightArr4.classList.remove("fa-angle-right");
        rightArr4.classList.add("fa-angle-down");
        console.log("second statement");
      }
      else if(rightArr4.classList.contains("fa-angle-down"))
      {
        rightArr4.classList.remove("fa-angle-down");
        rightArr4.classList.add("fa-angle-right");
        console.log("first stement ");
      }
}

var rightArr5 = document.querySelector(".right-icon5");
function myFunction5(){
  if(rightArr5.classList.contains("fa-angle-right"))
      {
        rightArr5.classList.remove("fa-angle-right");
        rightArr5.classList.add("fa-angle-down");
        console.log("second statement");
      }
      else if(rightArr5.classList.contains("fa-angle-down"))
      {
        rightArr5.classList.remove("fa-angle-down");
        rightArr5.classList.add("fa-angle-right");
        console.log("first stement ");
      }
}

var rightArr6 = document.querySelector(".right-icon6");
function myFunction6(){
  if(rightArr6.classList.contains("fa-angle-right"))
      {
        rightArr6.classList.remove("fa-angle-right");
        rightArr6.classList.add("fa-angle-down");
        console.log("second statement");
      }
      else if(rightArr6.classList.contains("fa-angle-down"))
      {
        rightArr6.classList.remove("fa-angle-down");
        rightArr6.classList.add("fa-angle-right");
        console.log("first stement ");
      }
}

var rightArr7= document.querySelector(".right-icon7");
function myFunction7(){
  if(rightArr7.classList.contains("fa-angle-right"))
      {
        rightArr7.classList.remove("fa-angle-right");
        rightArr7.classList.add("fa-angle-down");
        console.log("second statement");
      }
      else if(rightArr7.classList.contains("fa-angle-down"))
      {
        rightArr7.classList.remove("fa-angle-down");
        rightArr7.classList.add("fa-angle-right");
        console.log("first stement ");
      }
}



// ----------------dropwdown js end----------------












var modal3Real = document.querySelector(".modal3");
var search = document.querySelector(".fa-search");
search.addEventListener("click",function(){
    modal3Real.style.display="block";
    
})