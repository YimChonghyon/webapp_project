window.onload = function() {
	new Ajax.Request("query_json.php",{
		method : "get",
		onSuccess : query_JSON,
		onFailure : ajaxFailed,
		onException : ajaxFailed
	});
}

var querys;
function query_JSON(ajax) {
	querys = ajax.responseText;
	var data = JSON.parse(querys);
	$$('.list_container')[0].descendants().each(function(element){element.remove();});
	for(var i=0;i<data.debates.length;i++) {
		var debate_content_container = document.createElement('div');
		debate_content_container.className = 'debate_content_container';
		debate_content_container.id = i;
		debate_content_container.observe('click',query_select);
		$$('.list_container')[0].appendChild(debate_content_container);

		var title_tag = document.createElement('div');
		title_tag.className = 'title_tag';
		$$('.debate_content_container')[i].appendChild(title_tag);

		var tag_number = document.createElement('div');
		tag_number.className = 'tag_number';
		tag_number.innerHTML = data.debates[i].number;
		$$('.title_tag')[i].appendChild(tag_number);
		var tag_catagory = document.createElement('div');
		tag_catagory.className = 'tag_catagory';
		for (var j = 0; j < data.debates[i].tags.length; j++) {
			tag_catagory.innerHTML += '#' + data.debates[i].tags[j]+ " ";
		}
		$$('.title_tag')[i].appendChild(tag_catagory);


		var titlebox = document.createElement('div');
		titlebox.className = 'titlebox';
		$$('.title_tag')[i].appendChild(titlebox);
		var title_text = document.createElement('div');
		title_text.className = 'title_text';
		titlebox.innerHTML = data.debates[i].title;
		$$('.titlebox')[i].appendChild(title_text);

		var bottom_infor = document.createElement('div');
		bottom_infor.className = 'bottom_infor';
		$$('.title_tag')[i].appendChild(bottom_infor);
		var write_infor = document.createElement('div');
		write_infor.className = 'write_infor';
		$$('.bottom_infor')[i].appendChild(write_infor);		
		var name = document.createElement('div');
		name.className = 'name';
		name.innerHTML = data.debates[i].name;
		$$('.write_infor')[i].appendChild(name);		
		var time = document.createElement('div');
		time.className = 'time';
		time.innerHTML = data.debates[i].date;
		$$('.write_infor')[i].appendChild(time);

		var icon_container = document.createElement('div');
		icon_container.className = 'icon_container pull-right';
		$$('.bottom_infor')[i].appendChild(icon_container);
		var question_container = document.createElement('div');
		question_container.className = 'question_container';
		$$('.icon_container')[i].appendChild(question_container);
		var question_icon = document.createElement('img');
		question_icon.className = 'question_icon';
		question_icon.src = '../resource/images/question.png';
		$$('.question_container')[i].appendChild(question_icon);
		var question_icon_num = document.createElement('div');
		question_icon_num.className = 'question_icon_num';
		question_icon_num.innerHTML = data.debates[i].wanted;
		$$('.question_container')[i].appendChild(question_icon_num);
		var comment_container = document.createElement('div');
		comment_container.className = 'comment_container';
		$$('.icon_container')[i].appendChild(comment_container);
		var comment_icon = document.createElement('img');
		comment_icon.className = 'comment_icon';
		comment_icon.src = '../resource/images/comment.png';
		$$('.comment_container')[i].appendChild(comment_icon);		
		var comment_icon_num = document.createElement('div');
		comment_icon_num.className = 'comment_icon_num';
		comment_icon_num.innerHTML = data.debates[i].replys.length;
		$$('.comment_container')[i].appendChild(comment_icon_num);
	}
}

function query_select() {
	var data = JSON.parse(querys);
	//내용 갱신
	$('main_number').innerHTML = '#' + data.debates[this.id].number;
	$('main_tag').innerHTML = "";
	for (var j = 0; j < data.debates[this.id].tags.length; j++) {
		$('main_tag').innerHTML += '#' + data.debates[this.id].tags[j]+ " ";
	}
	$('main_title').innerHTML = data.debates[this.id].title;
	$('main_content').innerHTML = data.debates[this.id].content;
	$("main_question").innerHTML = data.debates[this.id].wanted;

	//댓글 초기화
	$('reply_container').descendants().each(function(element){element.remove();});
	for (var i = 0; i < data.debates[this.id].replys.length; i++) {
		var comment_container = document.createElement('div');
		comment_container.className = 'comment_container';

		var commentbox = document.createElement('div');
		commentbox.className = 'commentbox';

		var name = document.createElement('div');
		name.className = 'name';
		name.innerHTML = data.debates[this.id].replys[i].name;

		var comment_contents_box = document.createElement('div');
		comment_contents_box.className = 'comment_contents_box';

		var comment = document.createElement('div');
		comment.className = 'comment';

		var comment_text = document.createElement('div');
		comment_text.className = 'comment_text';
		comment_text.innerHTML = data.debates[this.id].replys[i].content;

		var comment = document.createElement('div');
		comment.className = 'comment';
		// $('reply_container').appendChild(comment_container);
		// $('reply_container').appendChild(commentbox);
	}
}	

function ajaxFailed(ajax, exception) {
	var errorMessage = "Error making Ajax request:\n\n";
	if (exception) {
		errorMessage += "Exception: " + exception.message;
	} else {
		errorMessage += "Server status:\n" + ajax.status + " " + ajax.statusText +
		"\n\nServer response text:\n" + ajax.responseText;
	}
	alert(errorMessage);
}