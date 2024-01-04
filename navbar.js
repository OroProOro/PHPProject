function navfunction() {
  var x = document.getElementById("navbar");
  if (x.className === "navigation") {
    x.className += " responsive";
  } else {
    x.className = "navigation";
  }
}