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
          slidesPerView: 5,
          spaceBetween: 50,
        },
      }
});

var swiper3 = new Swiper('.swiper-container3', {
  slidesPerView: 3.4,
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
        spaceBetween: 70,
        },
      }
});





// -----------------mobile js end-------------- 



// --------------go-to section js for desktop---------------




















// -----------------------------------my js---------------------------------


var firstButton = document.querySelector(".arrow2");
var secondButton = document.querySelector(".arrow1");
var c1 = document.querySelector(".child1");
var c2 = document.querySelector(".child2");
var c3 = document.querySelector(".child3");
var c4 = document.querySelector(".child4");
var c5 = document.querySelector(".child5");
var c6 = document.querySelector(".child6");
var c7 = document.querySelector(".child7");
var c8 = document.querySelector(".child8");
var c9 = document.querySelector(".child9");
var c10 = document.querySelector(".child10");



// ---------primary degree-----------
var prim1=0;
var prim2=36;
var prim3=72;
var prim4=108;
var prim5=144;
var prim6=180;
var prim7=216;
var prim8=252;
var prim9=288;
var prim10=324;

c1.style.transform= `rotate(${prim1}deg)`;
c2.style.transform= `rotate(${prim2}deg)`;
c3.style.transform= `rotate(${prim3}deg)`;
c4.style.transform= `rotate(${prim4}deg)`;
c5.style.transform= `rotate(${prim5}deg)`;
c6.style.transform= `rotate(${prim6}deg)`;
c7.style.transform= `rotate(${prim7}deg)`;
c8.style.transform= `rotate(${prim8}deg)`;
c9.style.transform= `rotate(${prim9}deg)`;
c10.style.transform= `rotate(${prim10}deg)`;



// ---------destination degress----------
var loc1 = 0;
var loc2 = 36;
var loc3 = 72;
var loc4 = 108;
var loc5 = 144;
var loc6 = 180;
var loc7 = 216;
var loc8 = 252;
var loc9 = 288;
var loc10 = 324;

var shopButton = document.querySelector(".shop");
var mult=36;
var mainDeg=30;

firstButton.addEventListener("click",function(){

 

  c1.style.transform= `rotate(${loc1+mult}deg)`;
  c2.style.transform= `rotate(${loc2+mult}deg)`;
  c3.style.transform= `rotate(${loc3+mult}deg)`;
  c4.style.transform= `rotate(${loc4+mult}deg)`;
  c5.style.transform= `rotate(${loc5+mult}deg)`;
  c6.style.transform= `rotate(${loc6+mult}deg)`;
  c7.style.transform= `rotate(${loc7+mult}deg)`;
  c8.style.transform= `rotate(${loc8+mult}deg)`;
  c9.style.transform= `rotate(${loc9+mult}deg)`;
  c10.style.transform= `rotate(${loc10+mult}deg)`;

  loc1=loc1+mult;
  loc2=loc2+mult;
  loc3=loc3+mult;
  loc4=loc4+mult;
  loc5=loc5+mult;
  loc6=loc6+mult;
  loc7=loc7+mult;
  loc8=loc8+mult;
  loc9=loc9+mult;
  loc10=loc10+mult;


  // -----------code for border to to 0 deg circle-----------------



    













  // --------------code for circle rotating itself----------------
    for(var i =0;i<10;i++)
    {
        var circleRotate = document.querySelectorAll(".cir")[i];
        circleRotate.style.transform = `rotate(${mainDeg}deg)`;
    }
    
    var backg2= document.querySelector(".main-circle");
    backg2.style.backgroundColor="#f88888";
    
    firstButton.style.backgroundColor="#f88888";
    secondButton.style.backgroundColor="#f88888";
    document.querySelector(".shop").style.backgroundColor="#f88888";
    document.querySelector(".dest").style.color ="#f88888";
    // document.querySelector(".shop").style.boxShadow ="0px 15px 20px #f88888";


    // ---------------javaScript for hover on orange button---------------


  shopButton.addEventListener('mouseleave', function(){
    shopButton.style.boxShadow = '0px 15px 20px  #fff';
    
  });

  shopButton.addEventListener('mouseenter', function(){
    shopButton.style.boxShadow ="0px 15px 20px #f88888";
    
   
  });
// -----------------------javaScript for hover on orange button------------------------


// -------js code for fixed sidecoupon  flat off ---------

document.querySelector(".openbtn").style.background="linear-gradient(90deg, rgba(248,136,136,1) 16%, rgba(255,255,255,0) 100%)";


// -------js code for fixed sidecoupon  flat off ---------



})
//------------------ destination function completed-------------------








// --------go back to primary-------------

var origin =0;
var mult2=36;
secondButton.addEventListener("click",function(){



  loc1=loc1-mult2;
  loc2=loc2-mult2;
  loc3=loc3-mult2;
  loc4=loc4-mult2;
  loc5=loc5-mult2;
  loc6=loc6-mult2;
  loc7=loc7-mult2;
  loc8=loc8-mult2;
  loc9=loc9-mult2;
  loc10=loc10-mult2;

  c1.style.transform= `rotate(${loc1}deg)`;
  c2.style.transform= `rotate(${loc2}deg)`;
  c3.style.transform= `rotate(${loc3}deg)`;
  c4.style.transform= `rotate(${loc4}deg)`;
  c5.style.transform= `rotate(${loc5}deg)`;
  c6.style.transform= `rotate(${loc6}deg)`;
  c7.style.transform= `rotate(${loc7}deg)`;
  c8.style.transform= `rotate(${loc8}deg)`;
  c9.style.transform= `rotate(${loc9}deg)`;
  c10.style.transform= `rotate(${loc10}deg)`;



    var backg1= document.querySelector(".main-circle");
    backg1.style.backgroundColor="#ddd2fc";



    
    for(var i =0;i<10;i++)
    {
        var circleRotate = document.querySelectorAll(".cir")[i];
        circleRotate.style.transform = `rotate(${0}deg)`;
    }

    firstButton.style.backgroundColor="#ddd2fc";
    secondButton.style.backgroundColor="#ddd2fc";
    document.querySelector(".shop").style.backgroundColor="#ddd2fc";
    document.querySelector(".dest").style.color ="#b69dfa";
  




    // -----------javaScript code for purple shadow-------------
    var shopButton = document.querySelector(".shop");
    shopButton.addEventListener('mouseleave', function(){
        shopButton.style.boxShadow = '0px 15px 20px #fff';
        
      });

    shopButton.addEventListener('mouseenter', function(){
        shopButton.style.boxShadow ="0px 15px 20px #7d53f0";
      });

      // -----------javaScript code for purple shadow-------------


      // -------js code for fixed sidecoupon  flat off ---------

document.querySelector(".openbtn").style.background="linear-gradient(90deg, rgba(109,66,231,1) 16%, rgba(221,210,252,1) 100%)";




// -------js code for fixed sidecoupon  flat off ---------



      
})


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













// ---------------side flat off coupon js----------

function openNav() {

  document.querySelector(".fa-caret-up").style.color="#acacac"
  document.querySelector(".fa-times").style.color="#000"

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





// -------------------flat off coupon open close js start----------------------
function openNav() {
    if( document.getElementById("mySidepanel").classList.contains("flat-active"))
    {
      document.getElementById("mySidepanel").classList.remove("flat-active");
      // document.querySelector("#universal").style.backgroundColor="transparent";
      document.body.style.backgroundColor="#fff";
       
     
    }
    else
    {
      document.getElementById("mySidepanel").classList.add("flat-active");
      document.body.style.backgroundColor="grey";
      // document.querySelector("#universal").style.backgroundColor="grey";

    }
  
}


// -------------------flat off coupon open close js end----------------------





// ------------- >768px footer part js start--------------------

function openFooter(){
    if(document.getElementById("footer").classList.contains("footer-active"))
    {
      document.getElementById("footer").classList.remove("footer-active");
      document.querySelector(".know-more").innerHTML="Know More About Ishtore";
    }
    else
    {
      document.getElementById("footer").classList.add("footer-active");
     
      document.querySelector(".know-more").innerHTML="Show Less";

    }
}





// ------------- >768px footer part js end--------------------





var modal3Real = document.querySelector(".modal3");
var search = document.querySelector(".fa-search");
search.addEventListener("click",function(){
    modal3Real.style.display="block";
    
})






// -------------------count change in modal8-----------------

var plus0 = document.querySelectorAll(".plus-btn")[0];
var plus1 = document.querySelectorAll(".plus-btn")[1];
var plus2 = document.querySelectorAll(".plus-btn")[2];
var minus0 = document.querySelectorAll(".minus-btn")[0];
var minus1 = document.querySelectorAll(".minus-btn")[1];
var minus2 = document.querySelectorAll(".minus-btn")[2];
var count0 = document.querySelectorAll(".count-increase")[0];
var count1 = document.querySelectorAll(".count-increase")[1];
var count2 = document.querySelectorAll(".count-increase")[2];

function countChange1(){
  count0.value="1";


  plus0.addEventListener("click",function(){
    if(count0.value>0)
    {
      count0.value++;
    }

 
  })
  
  minus0.addEventListener("click",function(){
       if(count0.value>1)
    {
      count0.value--;
    }
    
  })
  
}

function countChange2(){
 
  count1.value="1";
  

  plus1.addEventListener("click",function(){
    if(count1.value>0)
    {
      count1.value++;
    }

 
  })
  
  minus1.addEventListener("click",function(){
       if(count1.value>1)
    {
      count1.value--;
    }
    
  })
  
}

function countChange3(){
  
  count2.value="1";

  plus2.addEventListener("click",function(){
    if(count2.value>0)
    {
      count2.value++;
    }

 
  })
  
  minus2.addEventListener("click",function(){
       if(count2.value>1)
    {
      count2.value--;
    }
    
  })
  
}

countChange1();
countChange2();
countChange3();