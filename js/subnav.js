let links = document.querySelectorAll(".sub-nav a");
for(let i =0; i<links.length; i++){
    if(!links[i].classList.contains("btn-primary")){
        links[i].addEventListener('mouseover', () => {
        // links[i].classList.add("btn");
            links[i].classList.add("btn-primary");
            //console.log("uo");
        });
        links[i].addEventListener('mouseout', () => {
        // links[i].classList.remove("btn");
            links[i].classList.remove("btn-primary");
            //console.log("uo");
        });
    }
}
