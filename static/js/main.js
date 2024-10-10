function myFunction(event) {
    const buttonId = event.target.id;
    document.getElementById("form"+buttonId).classList.toggle("show");
  }
  
