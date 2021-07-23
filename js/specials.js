let specialIcons = document.querySelectorAll(".special-icons");
let sliders = document.querySelectorAll(".slider");
for(let i = 0; i< sliders.length; i++){
    sliders[i].addEventListener('click', () => {
        if(specialIcons[i].style.display === "none"){
            specialIcons[i].style.display = "block";
        }
        else{
            specialIcons[i].style.display = "none";
        }
    });
}
