
function present() {
  var prc = document.getElementById("present_course");
  var unc = document.getElementById("undergraduate_course");
  var poc = document.getElementById("postgraduate_course");
    prc.style.display = 'block';
    unc.style.display = 'none';
    poc.style.display = 'none';
    if($(this).hasId('active')) {
      $(this).removeId('active')
    }else {
      $(this).addId('active')
    }
}

function undergraduate() {
  var prc = document.getElementById("present_course");
  var unc = document.getElementById("undergraduate_course");
  var poc = document.getElementById("postgraduate_course");
    unc.style.display = 'block';
    prc.style.display = 'none';
    poc.style.display = 'none';
    if($(this).hasId('active')) {
      $(this).removeId('active')
    }else {
      $(this).addId('active')
    }
}

function postgraduate() {
  var prc = document.getElementById("present_course");
  var unc = document.getElementById("undergraduate_course");
  var poc = document.getElementById("postgraduate_course");
    poc.style.display = 'block';
    unc.style.display = 'none';
    prc.style.display = 'none';
    if($(this).hasId('active')) {
      $(this).removeId('active')
    }else {
      $(this).addId('active')
    }
}
