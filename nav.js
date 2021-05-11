


// // -----------------------------------my js---------------------------------


// var firstButton = document.querySelector(".arrow2");
// var secondButton = document.querySelector(".arrow1");
// var c1 = document.querySelector(".child1");
// var c2 = document.querySelector(".child2");
// var c3 = document.querySelector(".child3");
// var c4 = document.querySelector(".child4");
// var c5 = document.querySelector(".child5");
// var c6 = document.querySelector(".child6");




// // ---------primary degree-----------
// var prim1=0;
// var prim2=30;
// var prim3=60;
// var prim4=-30;
// var prim5=-60;
// var prim6=-90;

// c1.style.transform= `rotate(${prim1}deg)`;
// c2.style.transform= `rotate(${prim2}deg)`;
// c3.style.transform= `rotate(${prim3}deg)`;
// c4.style.transform= `rotate(${prim4}deg)`;
// c5.style.transform= `rotate(${prim5}deg)`;
// c6.style.transform= `rotate(${prim6}deg)`;



// // ---------destination degress----------
// var deg=30;
// var loc1=30;
// var loc2=60;
// var loc3=90;
// var loc4=-0;
// var loc5=-30;
// var loc6=-60;
// var shopButton = document.querySelector(".shop");
// var mainDeg=30;

// firstButton.addEventListener("click",function(){

//     c1.style.transform= `rotate(${loc1}deg)`;
//     c2.style.transform= `rotate(${loc2}deg)`;
//     c3.style.transform= `rotate(${loc3}deg)`;
//     c4.style.transform= `rotate(${loc4}deg)`;
//     c5.style.transform= `rotate(${loc5}deg)`;
//     c6.style.transform= `rotate(${loc6}deg)`;
//     for(var i =0;i<6;i++)
//     {
//         var circleRotate = document.querySelectorAll(".cir")[i];
//         circleRotate.style.transform = `rotate(${mainDeg}deg)`;
//     }
    
//     var backg2= document.querySelector(".main-circle");
//     backg2.style.backgroundColor="#f88888";
    
//     firstButton.style.backgroundColor="#f88888";
//     secondButton.style.backgroundColor="#f88888";
//     document.querySelector(".shop").style.backgroundColor="#f88888";
//     document.querySelector(".dest").style.color ="#f88888";
//     // document.querySelector(".shop").style.boxShadow ="0px 15px 20px #f88888";


//     // ---------------javaScript for hover on orange button---------------


//   shopButton.addEventListener('mouseleave', function(){
//     shopButton.style.boxShadow = '0px 15px 20px  #fff';
    
//   });

//   shopButton.addEventListener('mouseenter', function(){
//     shopButton.style.boxShadow ="0px 15px 20px #f88888";
    
   
//   });


// // -----------------------javaScript for hover on orange button------------------------


// })





// // --------go back to primary-------------

// var origin =0;
// secondButton.addEventListener("click",function(){

//     c1.style.transform= `rotate(${prim1}deg)`;
//     c2.style.transform= `rotate(${prim2}deg)`;
//     c3.style.transform= `rotate(${prim3}deg)`;
//     c4.style.transform= `rotate(${prim4}deg)`;
//     c5.style.transform= `rotate(${prim5}deg)`;
//     c6.style.transform= `rotate(${prim6}deg)`;
//     var backg1= document.querySelector(".main-circle");
//     backg1.style.backgroundColor="#ddd2fc";
   

//     for(var i =0;i<6;i++)
//     {
//         var circleRotate = document.querySelectorAll(".cir")[i];
//         circleRotate.style.transform = `rotate(${0}deg)`;
//     }

//     firstButton.style.backgroundColor="#ddd2fc";
//     secondButton.style.backgroundColor="#ddd2fc";
//     document.querySelector(".shop").style.backgroundColor="#ddd2fc";
//     document.querySelector(".dest").style.color ="#b69dfa";
  




//     // -----------javaScript code for purple shadow-------------
//     var shopButton = document.querySelector(".shop");
//     shopButton.addEventListener('mouseleave', function(){
//         shopButton.style.boxShadow = '0px 15px 20px #fff';
        
//       });

//     shopButton.addEventListener('mouseenter', function(){
//         shopButton.style.boxShadow ="0px 15px 20px #7d53f0";
//       });

//       // -----------javaScript code for purple shadow-------------



      
// })


 // Get the modal
 var modal = document.getElementById("navmyModal1");
 var modal2=document.getElementById("navmyModal2");
 var modal3=document.getElementById("navmyModal3");
 // Get the button that opens the modal
 var btn = document.getElementById("navmyBtn1");
 var btn2=document.getElementsByClassName("navmyBtn2")[0];
 var btn3=document.getElementById("navmyBtn3");

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
      modal3.style.display = "block";
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
    $('#navModal8').modal('hide')

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

 






//  ----------------extra--------------
// var modal3Real = document.querySelector(".modal3");
// var search = document.querySelector(".fa-search");
// search.addEventListener("click",function(){
//     modal3Real.style.display="block";





// -------------------count change in modal8 start-----------------

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


// -------------------count change in modal8 end-----------------