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




  /*date = getElementsByClassName('.eventButton').value;
  nums = [];
  currentNumber = "";
  for(let i = 0; i < date.length; i ++){
    if(i == "-"){
      for(let x = 0; x < date.length; i++){
        if("1234567890".includes(i)){
          currentNumber += i
        }else if(i = "-"){
          nums.push(currentNumber);
        }
      }
    }else{
      i = "";
    }
  }

*/