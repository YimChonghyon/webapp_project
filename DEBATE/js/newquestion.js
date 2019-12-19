function showPopup() {
    var url = "question.html";
    var name = "question";
    var option = "width=900, height=550, left= 100, top = 50";
    window.open(url, name, option);
    
 }

function Close() {
    self.close();
  }

  function textareaAutoHeight(el) {
    setTimeout(() => {
        el.style.height = 'auto';

        let scrollHeight = el.scrollHeight;
        let outlineHeight = el.offsetHeight - el.clientHeight;

        el.style.height = (scrollHeight + outlineHeight) + 'px';
    }, 0);
}