<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/debate.css">
	<link rel="stylesheet" type="text/css" href="../resource/css/common.css" />
</head>
<body>
<?php 
  include "../resource/nav.php";
  ?>
	<main>
		<!-- <div class="in_nav pull-left">
			<a href="" class="pull-left"><h1>Web Application Development</h1></a>
				<img class= "out_button pull-right" src="../resource/images/out.png">
		</div> -->

		<div class="list scroll">
				
			<form method="post" action="">
				<div class="search">
					
					<input type="text" name="" id="searchbox" size="30"  >
					<button type="submit" class="button">
					<image class="pull-right search_icon" src="../resource/images/search.png">
					</button>
					
					
				<!-- <span class="pull-right">
					<button type="submit" class="button" >
						<img class="add_content_icon" src="../resource/images/plus.png">
					</button>
				</span> -->
		
				</div>
				<div class="">
					<button type="submit" class="plus button" >
						<img class="add_content_icon" src="../resource/images/plus.png">
					</button>
				</div>
			</form>
			<form>
				
			</form>
			<hr />
	
			<div class="debate_content_container">
				<div>
					<div class="title_tag">
						<div class="tag_number">
							#1
						</div>
						<div class="tag_catagory">
							#공지
						</div>
					</div>
				
				
					<div class="titlebox">
						<div class="title_text">
						안녕하세요. 제목입니다.안녕하세요. 제목입니다.안녕하세요. 제목입니다.안녕하세요. 제목입니다.안녕하세요. 제목입니다.안녕하세요. 제목입니다.안녕하세요. 제목입니다.안녕하세요. 제목입니다.안녕하세요. 제목입니다.
						</div>
					</div>
				
					<div class="bottom_infor">
						<div class="write_infor">
							<div class="name">
								임정현
							</div>
							<div class="time">
								23:03
							</div>
						</div>

						<div class="icon_container pull-right">
							<div class="question_container">
									<img class="question_icon" src="../resource/images/question.png">
									<div class="question_icon_num">
										3
									</div>
							</div>
							<div class="comment_container ">
									<img class="comment_icon" src="../resource/images/comment.png">
									<div class="comment_icon_num"> 
										1
									</div>
								</div>
						</div>
						
					</div>
				</div>
			</div>
			

			<!-- <form>
				<div class="">
					<button type="submit" class="plus button" >
						<img class="add_content_icon" src="../resource/images/plus.png">
					</button>
				</div>
			</form> -->
		</div>


		<div class="debatebox scroll">
			<div class="debate_content_container_maincontainer">
			<div class="debate_content_container_main">
			<form method="POST">
				<div class="title_tag"> 
					<div class="tag_number">
						#1
					</div>
					<div class="tag_catagory">
						#공지
					</div>
					<span class="deletebox pull-right">
						<input class="delete button" type="button" value="수정">
						<input class="delete button" type="button" value="삭제">
					</span>
				</div>
			</form>
			
				<div class="titlebox_main">
					<div class="title_text_main">
						안녕하세요. 제목입니다.
					</div>
				</div>
				<!-- <div class= "write_info">
						<div class="time pull-right">
							23:03
								</div>
						<div class="name pull-right">
							임정현
						</div> -->
						

				<div class="contentsbox">
					<div class="content_text">
						안녕하세요. 웹애플리케이션 수업 토론 페이지 입니다.
					</div>
				</div>
				<form method="POST">
					<div class="question_button">
						<button type = "submit" class="question">
							<img class="question_button_icon" src="../resource/images/question.png">
							
							<span class="question_num">
								3
							</span>
							<p>저도궁금해요!</p>
							
						</button>
					</div>
				</form>	
			</div>
			</div>
		
				
			
			<hr />
			
		<div class="debate_reply">
			<div class="comment_container">
				<div class="commentbox">
					<form method="POST">
					<div class ="namebox">
					<div class="name">임정현
						<span class="deletebox">
						<input class="delete button" type="button" value="수정" onClick="##">
						<input class="delete button" type="button" value="삭제">
						</span>
					</div>
					</form>
					
					<div class="comment_contents_box"> 
						<div class="comment">
							<div clss="comment_text">
								
							최고에요!최고에요!최고에요!최고에요!최고에요!최고에요!
							최고에요!최고에요!최고에요!최고에요!최고에요!최고에요!
							
							</div>
						</div>
						<div class="comment_additional">
							<div class= "comment_time">
								오후 11:30
							</div>
							<div class= "heart">
								<form method="POST">
								<button type="submit" class ="button">
									<img class = "heart_button" src="../resource/images/hearts.png">
								</button>
							</form>
							<div class="heart_num">
								3
							</div>
							</div>
						</div>
					</div>	
				</div>
			</div>

			<div class="comment_container">
				<div class="commentbox">
					<div class="name">
						임정현
					</div>
					
					<div class="comment_contents_box"> 
						<div class="comment">
							<div clss="comment_text">
							최고에요!
							</div>
						</div>
						<div class="comment_additional">
							<div class= "comment_time">
								오후 11:30
							</div>
							<div class= "heart">
								<form method="POST">
								<button type="submit" class ="button">
									<img class = "heart_button" src="../resource/images/hearts.png">
								</button>
							</form>
							<div class="heart_num">
								3
							</div>
							</div>
						</div>
					</div>	
				</div>
			</div>

			<div class="comment_container">
				<div class="commentbox">
					<div class="name">
						임정현
					</div>
					
					<div class="comment_contents_box"> 
						<div class="comment">
							<div clss="comment_text">
								최고에요!
							</div>
						</div>
						<div class="comment_additional">
							<div class= "comment_time">
								오후 11:30
							</div>
							<div class= "heart">
								<form method="POST">
								<button type="submit" class ="button">
									<img class = "heart_button" src="../resource/images/hearts.png">
								</button>
							</form>
							<div class="heart_num">
								3
							</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
</div>
			
		

			
			
				<div class="reply_box_container">
				<form method="POST">
					<fieldset class="reply_box">
						<!-- <legend>댓글달기</legend> -->
						<div class="reply_infor">
							ID <input type="text" name= "Name" size="15" > 
							Password <input type="text" name= "Name" size="20" > 
							익명 <input type = "checkbox" name="anonymous" checked="checked">
						</div>
	
								
								<textarea  class=reply_text></textarea>
								<button type="submit" class="button">
								<img class ="enter_button" src = "../resource/images/enter.png">
								</button>
							
					</fieldset>
				</form>
				</div>
			</div>
</div>
		</div>
</div>
	</main>
</body>
</html>