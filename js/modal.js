const modal = document.getElementById("myModal");
const modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
const btn = document.querySelectorAll(".checkout-btn")[0];
const btn2 = document.querySelector(".login-btn");

// Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
if(modal !== null && btn !=null){
  btn.onclick = () => {
    modal.style.display = "block";
  }
}
if(modal2 !== null && btn2 !=null){
  btn2.onclick = () => {
    modal2.style.display = "block";
  }
}

// When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
if(modal !== null || modal2 !==null){
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
    if (event.target == modal2) {
      modal2.style.display = "none";
    }
  }
}