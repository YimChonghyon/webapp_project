document.getElementByID("home").onclick = home;
document.getElementByID("home").onclick = slide_button;
document.getElementByID("home").onclick = debate;


function home() {
  var con = document.getElementByID("home");
  if(con.style.display=='none') {
    con.style.display = 'block';
  }else {
    con.style.display = 'none';
  }
}

function slide_button() {
  var con = document.getElementByID("slide_button");
  if(con.style.display=='none') {
    con.style.display = 'block';
  }else {
    con.style.display = 'none';
  }
}
