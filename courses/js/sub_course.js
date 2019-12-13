window.onload = function() {
  home_button();
}


function home_button() {
  var ho = document.getElementById("home");
  var sl = document.getElementById("slides");
    ho.style.display = 'block';
    sl.style.display = 'none';

    $("home_button").style.backgroundColor = "#dcdcdc";
    $("home_button").style.fontSize = "18px";
    $("home_button").style.height = "70px";
    $("home_button").style.color = "black";
    $("home_button").style.border = "1px solid black";
    $("home_button").style.borderRight = "3px solid #dcdcdc";

    $("slide_button").style.backgroundColor = "skyblue";
    $("slide_button").style.fontSize = "15px";
    $("slide_button").style.height = "50px";
    $("slide_button").style.color = "black";
    $("slide_button").style.border = "1px solid black";
    $("slide_button").style.borderRight = "1px solid black";

}

function slide_button() {
  var ho = document.getElementById("home");
  var sl = document.getElementById("slides");
    ho.style.display = 'none';
    sl.style.display = 'block';

    $("slide_button").style.backgroundColor = "#dcdcdc";
    $("slide_button").style.fontSize = "18px";
    $("slide_button").style.height = "70px";
    $("slide_button").style.color = "black";
    $("slide_button").style.border = "1px solid black";
    $("slide_button").style.borderRight = "3px solid #dcdcdc";

    $("home_button").style.backgroundColor = "skyblue";
    $("home_button").style.fontSize = "15px";
    $("home_button").style.height = "50px";
    $("home_button").style.color = "black";
    $("home_button").style.border = "1px solid black";
    $("home_button").style.borderRight = "1px solid black";
}
