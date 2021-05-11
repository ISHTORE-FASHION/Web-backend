$( function() {
  $( "#slider-range" ).slider({
    range: true,
    min: 1000,
    max: 4000,
    values: [ 1000, 4000 ],
    slide: function( event, ui ) {
      $( "#r1" ).val( ui.values[ 0 ]);
      $("#r2").val(ui.values[1]);
    }
  });
  $( "#r1" ).val( $( "#slider-range" ).slider( "values", 0 ));
  $( "#r2" ).val( $( "#slider-range" ).slider( "values", 1 ));
} );

var filter=document.getElementsByClassName('filters')[0];
var btn=document.getElementsByClassName('mobileview')[0];

btn.addEventListener('click',function(){
  if(filter.style.display=="none")
  filter.style.display="block";
  else
  filter.style.display="none";
})


var modal3=document.getElementById("myModal3");
// Get the button that opens the modal
var btn3=document.getElementById("myBtn3");
var mdb=document.getElementsByClassName("mobiledropdownbtn")[0];

// Get the <span> element that closes the modal
// When the user clicks the button, open the modal 

 btn3.onclick = function () {
   modal3.style.display = "block";
 }

 mdb.addEventListener("click",function(){
   if(filter.style.display=="block")
   filter.style.display="none";
 })
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



// When the user clicks on <span> (x), close the modal

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal3) 
    modal3.style.display = "none";
}

