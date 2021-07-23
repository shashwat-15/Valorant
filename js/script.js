const agentCheckIcons = document.querySelectorAll(".agent-check");
const agentContainers = document.querySelectorAll(".agent-container");
const agentNames = document.querySelectorAll(".agent-name");
const selectedAgents = [];
for(let i =0; i< agentContainers.length; i++){
    agentContainers[i].addEventListener('click', function() {
        this.classList.toggle("agent-container-active");
        if(this.querySelector(".agent-check").style.display === "none"){
            this.querySelector(".agent-check").style.display = "inline";
            selectedAgents.push(this.querySelector(".agent-name").innerText.trim());
        }
        else{
            this.querySelector(".agent-check").style.display = "none";
            selectedAgents.splice(selectedAgents.indexOf(this.querySelector(".agent-name").innerText.trim()), 1);
        }
    });
} 

let $styledSelectValues = [];
$('select').each(function(){
   
    var $this = $(this), numberOfOptions = $(this).children('option').length;
    
    $this.addClass('select-hidden'); 
    $this.wrap('<div class="select" style="width: 11vw;"></div>');
    $this.after('<div class="select-styled"></div>');
   
    var $styledSelect = $this.next('div.select-styled');
    
    $styledSelect.click(function(){
        $(".select").css("border-color", "rgb(208, 208, 208)");
        $this.parent().css("border-color", "inherit");
    });
    
    $styledSelect.text($this.children('option').eq(0).text());

    $styledSelectValues.push($styledSelect.text());
    
    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);
  
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }

    // $list.css("height", "100px");
    // $list.css("overflow-y", "scroll");
  
    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
        $list.children('li').click(function(e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            const currentTier = document.getElementById("current-tier");
            const currentDivision = document.getElementById("current-division");
            let img = document.querySelector("#rank-img-container > img");
            if(currentTier!== null){    
                if(currentTier.value === "iron" && currentDivision.value === "one"){
                    img.src = "images/iron1.png";
                }
                else if(currentTier.value === "iron" && currentDivision.value === "two"){
                    img.src = "images/iron2.png";
                }
                else if(currentTier.value === "iron" && currentDivision.value === "three"){
                    img.src = "images/iron3.png";
                }
                else if(currentTier.value === "bronze" && currentDivision.value === "one"){
                    img.src = "images/bronze1.png";
                }
                else if(currentTier.value === "bronze" && currentDivision.value === "two"){
                    img.src = "images/bronze2.png";
                }
                else if(currentTier.value === "bronze" && currentDivision.value === "three"){
                    img.src = "images/bronze3.png";
                }
                else if(currentTier.value === "silver" && currentDivision.value === "one"){
                    img.src = "images/silver1.png";
                }
                else if(currentTier.value === "silver" && currentDivision.value === "two"){
                    img.src = "images/silver2.png";
                }
                else if(currentTier.value === "silver" && currentDivision.value === "three"){
                    img.src = "images/silver3.png";
                }
                else if(currentTier.value === "gold" && currentDivision.value === "one"){
                    img.src = "images/gold1.png";
                }
                else if(currentTier.value === "gold" && currentDivision.value === "two"){
                    img.src = "images/gold2.png";
                }
                else if(currentTier.value === "gold" && currentDivision.value === "three"){
                    img.src = "images/gold3.png";
                }
                else if(currentTier.value === "platinum" && currentDivision.value === "one"){
                    img.src = "images/platinum1.png";
                }
                else if(currentTier.value === "platinum" && currentDivision.value === "two"){
                    img.src = "images/platinum2.png";
                }
                else if(currentTier.value === "platinum" && currentDivision.value === "three"){
                    img.src = "images/platinum3.png";
                }
                else if(currentTier.value === "diamond" && currentDivision.value === "one"){
                    img.src = "images/diamond1.png";
                }
                else if(currentTier.value === "diamond" && currentDivision.value === "two"){
                    img.src = "images/diamond2.png";
                }
                else if(currentTier.value === "diamond" && currentDivision.value === "three"){
                    img.src = "images/diamond3.png";
                }
            }
            const desiredTier = document.getElementById("desired-tier");
            const desiredDivision = document.getElementById("desired-division");
            let img2 = document.querySelector("#desired-rank-img-container > img");
            if(desiredTier !== null){
                if(desiredTier.value === "iron" && desiredDivision.value === "one"){
                    img2.src = "images/iron1.png";
                }
                else if(desiredTier.value === "iron" && desiredDivision.value === "two"){
                    img2.src = "images/iron2.png";
                }
                else if(desiredTier.value === "iron" && desiredDivision.value === "three"){
                    img2.src = "images/iron3.png";
                }
                else if(desiredTier.value === "bronze" && desiredDivision.value === "one"){
                    img2.src = "images/bronze1.png";
                }
                else if(desiredTier.value === "bronze" && desiredDivision.value === "two"){
                    img2.src = "images/bronze2.png";
                }
                else if(desiredTier.value === "bronze" && desiredDivision.value === "three"){
                    img2.src = "images/bronze3.png";
                }
                else if(desiredTier.value === "silver" && desiredDivision.value === "one"){
                    img2.src = "images/silver1.png";
                }
                else if(desiredTier.value === "silver" && desiredDivision.value === "two"){
                    img2.src = "images/silver2.png";
                }
                else if(desiredTier.value === "silver" && desiredDivision.value === "three"){
                    img2.src = "images/silver3.png";
                }
                else if(desiredTier.value === "gold" && desiredDivision.value === "one"){
                    img2.src = "images/gold1.png";
                }
                else if(desiredTier.value === "gold" && desiredDivision.value === "two"){
                    img2.src = "images/gold2.png";
                }
                else if(desiredTier.value === "gold" && desiredDivision.value === "three"){
                    img2.src = "images/gold3.png";
                }
                else if(desiredTier.value === "platinum" && desiredDivision.value === "one"){
                    img2.src = "images/platinum1.png";
                }
                else if(desiredTier.value === "platinum" && desiredDivision.value === "two"){
                    img2.src = "images/platinum2.png";
                }
                else if(desiredTier.value === "platinum" && desiredDivision.value === "three"){
                    img2.src = "images/platinum3.png";
                }
                else if(desiredTier.value === "diamond" && desiredDivision.value === "one"){
                    img2.src = "images/diamond1.png";
                }
                else if(desiredTier.value === "diamond" && desiredDivision.value === "two"){
                    img2.src = "images/diamond2.png";
                }
                else if(desiredTier.value === "diamond" && desiredDivision.value === "three"){
                    img2.src = "images/diamond3.png";
                }
            }
            const lastRank = document.getElementById("rank");
            let img3 = document.querySelector("#last-rank-img-container > img");
            if(lastRank !== null){
                if(lastRank.value === "iron"){
                    img3.src = "images/iron1.png";
                }
                else if(lastRank.value === "bronze"){
                    img3.src = "images/bronze1.png";
                }
                else if(lastRank.value === "silver"){
                    img3.src = "images/silver1.png";
                }
                else if(lastRank.value === "gold"){
                    img3.src = "images/gold1.png";
                }
                else if(lastRank.value === "platinum"){
                    img3.src = "images/platinum1.png";
                }
                else if(lastRank.value === "diamond"){
                    img3.src = "images/diamond1.png";
                }
                else if(lastRank.value === "immortal"){
                    img3.src = "images/immortal1.png";
                }
                else if(lastRank.value === "radiant"){
                    img3.src = "images/radiant1.png";
                }
            }
            const currentSoloTier = document.getElementById("current-tier-solo");
            const currentSoloDivision = document.getElementById("current-division-solo");
            let img4 = document.querySelector("#current-rank-img-container > img");
            if(currentSoloTier!== null){    
                if(currentSoloTier.value === "iron" && currentSoloDivision.value === "one"){
                    img4.src = "images/iron1.png";
                }
                else if(currentSoloTier.value === "iron" && currentSoloDivision.value === "two"){
                    img4.src = "images/iron2.png";
                }
                else if(currentSoloTier.value === "iron" && currentSoloDivision.value === "three"){
                    img4.src = "images/iron3.png";
                }
                else if(currentSoloTier.value === "bronze" && currentSoloDivision.value === "one"){
                    img4.src = "images/bronze1.png";
                }
                else if(currentSoloTier.value === "bronze" && currentSoloDivision.value === "two"){
                    img4.src = "images/bronze2.png";
                }
                else if(currentSoloTier.value === "bronze" && currentSoloDivision.value === "three"){
                    img4.src = "images/bronze3.png";
                }
                else if(currentSoloTier.value === "silver" && currentSoloDivision.value === "one"){
                    img4.src = "images/silver1.png";
                }
                else if(currentSoloTier.value === "silver" && currentSoloDivision.value === "two"){
                    img4.src = "images/silver2.png";
                }
                else if(currentSoloTier.value === "silver" && currentSoloDivision.value === "three"){
                    img4.src = "images/silver3.png";
                }
                else if(currentSoloTier.value === "gold" && currentSoloDivision.value === "one"){
                    img4.src = "images/gold1.png";
                }
                else if(currentSoloTier.value === "gold" && currentSoloDivision.value === "two"){
                    img4.src = "images/gold2.png";
                }
                else if(currentSoloTier.value === "gold" && currentSoloDivision.value === "three"){
                    img4.src = "images/gold3.png";
                }
                else if(currentSoloTier.value === "platinum" && currentSoloDivision.value === "one"){
                    img4.src = "images/platinum1.png";
                }
                else if(currentSoloTier.value === "platinum" && currentSoloDivision.value === "two"){
                    img4.src = "images/platinum2.png";
                }
                else if(currentSoloTier.value === "platinum" && currentSoloDivision.value === "three"){
                    img4.src = "images/platinum3.png";
                }
                else if(currentSoloTier.value === "diamond" && currentSoloDivision.value === "one"){
                    img4.src = "images/diamond1.png";
                }
                else if(currentSoloTier.value === "diamond" && currentSoloDivision.value === "two"){
                    img4.src = "images/diamond2.png";
                }
                else if(currentSoloTier.value === "diamond" && currentDivision.value === "three"){
                    img4.src = "images/diamond3.png";
                }
            }
            $this.val();
            //console.log($this.val());
            $list.hide();
            $this.parent().css("border-color", "rgb(208, 208, 208)");
        });
    });


    $list.children('li').click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        $this.parent().css("border-color", "rgb(208, 208, 208)");
    });
  
  
    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
        $(".select").css("border-color", "rgb(208, 208, 208)");
    });
});

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('login-container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

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

window.addEventListener('scroll', function () {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
          document.getElementById("nav").style.backgroundColor = "#181b1d";
      } else {
          document.getElementById("nav").style.background = "transparent";
      }
  });

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

