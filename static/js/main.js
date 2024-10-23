function myFunction(event) {
    const buttonId = event.target.id;
    document.getElementById("form"+buttonId).classList.toggle("show");
  }
  

  window.onclick = function(event) {
    if (!event.target.matches('.eventButton')) {
      var dropdowns = document.getElementsByClassName("formDiv");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  } 



