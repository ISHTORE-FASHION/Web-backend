



    $(document).ready(function(){
      $("#hideLogin").click(function(){
        $(".login").hide();
        $(".gethelp").show();
      });
      $("#hideGetHelp").click(function(){
        $(".gethelp").hide();
        $(".login").show();
      });
    });


    


    


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