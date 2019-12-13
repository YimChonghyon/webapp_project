window.onload = function() {
  presentss();
}


function presentss() {
  var prc = document.getElementById("present_course");
  var unc = document.getElementById("undergraduate_course");
  var poc = document.getElementById("postgraduate_course");

    prc.style.display = 'block';
    unc.style.display = 'none';
    poc.style.display = 'none';

    $("presentss").style.backgroundColor = "#dcdcdc";
    $("presentss").style.fontSize = "18px";
    $("presentss").style.height = "70px";
    $("presentss").style.color = "black";
    $("presentss").style.border = "1px solid black";
    $("presentss").style.borderRight = "3px solid #dcdcdc";

    $("undergraduate").style.backgroundColor = "skyblue";
    $("undergraduate").style.fontSize = "15px";
    $("undergraduate").style.height = "50px";
    $("undergraduate").style.color = "black";
    $("undergraduate").style.border = "1px solid black";
    $("undergraduate").style.borderRight = "1px solid black";

    $("postgraduate").style.backgroundColor = "skyblue";
    $("postgraduate").style.fontSize = "15px";
    $("postgraduate").style.height = "50px";
    $("postgraduate").style.color = "black";
    $("postgraduate").style.border = "1px solid black";
    $("postgraduate").style.borderRight = "1px solid black";

}

function undergraduate() {
  var prc = document.getElementById("present_course");
  var unc = document.getElementById("undergraduate_course");
  var poc = document.getElementById("postgraduate_course");

    unc.style.display = 'block';
    prc.style.display = 'none';
    poc.style.display = 'none';

    $("undergraduate").style.backgroundColor = "#dcdcdc";
    $("undergraduate").style.fontSize = "18px";
    $("undergraduate").style.height = "70px";
    $("undergraduate").style.color = "black";
    $("undergraduate").style.border = "1px solid black";
    $("undergraduate").style.borderRight = "3px solid #dcdcdc";

    $("presentss").style.backgroundColor = "skyblue";
    $("presentss").style.fontSize = "15px";
    $("presentss").style.height = "50px";
    $("presentss").style.color = "black";
    $("presentss").style.border = "1px solid black";
    $("presentss").style.borderRight = "1px solid black";

    $("postgraduate").style.backgroundColor = "skyblue";
    $("postgraduate").style.fontSize = "15px";
    $("postgraduate").style.height = "50px";
    $("postgraduate").style.color = "black";
    $("postgraduate").style.border = "1px solid black";
    $("postgraduate").style.borderRight = "1px solid black";


}

function postgraduate() {
  var prc = document.getElementById("present_course");
  var unc = document.getElementById("undergraduate_course");
  var poc = document.getElementById("postgraduate_course");

    poc.style.display = 'block';
    unc.style.display = 'none';
    prc.style.display = 'none';

    $("postgraduate").style.backgroundColor = "#dcdcdc";
    $("postgraduate").style.fontSize = "18px";
    $("postgraduate").style.height = "70px";
    $("postgraduate").style.color = "black";
    $("postgraduate").style.border = "1px solid black";
    $("postgraduate").style.borderRight = "3px solid #dcdcdc";

    $("undergraduate").style.backgroundColor = "skyblue";
    $("undergraduate").style.fontSize = "15px";
    $("undergraduate").style.height = "50px";
    $("undergraduate").style.color = "black";
    $("undergraduate").style.border = "1px solid black";
    $("undergraduate").style.borderRight = "1px solid black";

    $("presentss").style.backgroundColor = "skyblue";
    $("presentss").style.fontSize = "15px";
    $("presentss").style.height = "50px";
    $("presentss").style.color = "black";
    $("presentss").style.border = "1px solid black";
    $("presentss").style.borderRight = "1px solid black";


}
