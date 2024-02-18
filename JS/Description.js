// author: Web-Dev-#9 Vinit Somaiya
// 041060910

// Searching
function myFunction() {
  var list, filter, container, li, h3, i, pValue;
  list = document.getElementById("searchContent");
  filter = list.value.toUpperCase();
  container = document.getElementById("myFlexContainer");
  li = container.getElementsByTagName("li");

  for (i = 0; i < li.length; i++) {
    h3 = li[i].getElementsByTagName("h3")[0];
    if (h3) {
      pValue = h3.textContent || h3.innerText;
      if (pValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }
  }
}

// Filtering
function sort() {
  var list, i, switching, b, shouldSwitch, direction, switchcount = 0;
  list = document.getElementById("myFlexContainer");
  switching = true;
  direction = "asc"; 
  while (switching) {
    switching = false;
    // b = list.getElementsByTagName("div");
    b = list.getElementsByClassName("box");
    for (i = 0; i < (b.length - 1); i++) {
      shouldSwitch = false;
      if (direction == "asc") {
        if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      } else if (direction == "desc") {
        if (b[i].innerHTML.toLowerCase() < b[i + 1].innerHTML.toLowerCase()) {
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
      switchcount ++;
    } else {
      if (switchcount == 0 && direction == "asc") {
        direction = "desc";
        switching = true;
      }
    }
  }
}
