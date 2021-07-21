window.addEventListener('scroll', function () {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
          document.getElementById("nav").style.backgroundColor = "#181b1d";
      } else {
          document.getElementById("nav").style.background = "transparent";
      }
  })