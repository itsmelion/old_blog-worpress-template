var collapses = document.getElementsByClassName("collapses");

for (i = 0; i < collapses.length; i++) {
  collapses[i].addEventListener("click", toggleVisibility);
}

function toggleVisibility(e) {
  var classes = this.parentElement.classList;
  var contentClasses = this.parentElement.lastElementChild.classList;

  if (classes.contains("collapsed")) {
    return classes.remove("collapsed");
  } else {
    return classes.add("collapsed")
  }

  classes.add("collapsed");
}