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
<<<<<<< HEAD
		</div> -->
=======
			</div> -->

			
			<div class="list  scroll">
				<div class="search_box  ">
					<div class="search">
						<select id ="tag_selecter" class="tagselect" onchange="searchtag();" multiple="multiple">
							<optgroup label="태그선택" id="TEL_tag">
								<option>질문</option>
								<option>토의</option>
								<option>토의</option>
								<option>토의</option>
							</optgroup>
						</select>
						<div id = "search_container">
							<input type="text" name="" id="searchbox" size="30"/>
							<button type="button" class="button" onclick="searching();">
								<image class="pull-right search_icon" src="../resource/images/search.png">
								</button>
							</div>



>>>>>>> f8d646db507f3858c61c36dca8f744a3a39023aa

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
<<<<<<< HEAD
		
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
=======

			</div>
		</div>

		<form method="post" action="">
			<div class="">
				<button type="button" class="plus button" onclick="showPopup()" >
					<img class="add_content_icon" src="../resource/images/plus.png">
				</button>

			</div>
		</form>



		
		<div class="list_container" id="query_list">

			<div class="debate_content_container" id="debate_num_0">
				<div class="title_tag">
					<div class="tag_number">
						#1
					</div>
					<div class="tag_catagory">
						#공지
>>>>>>> f8d646db507f3858c61c36dca8f744a3a39023aa
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
<<<<<<< HEAD
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
=======
			<!-- <div class="scroll"> -->
				<div class="debate_content_container_maincontainer">
					<div class="debate_content_container_main">
						<div class="title_tag"> 
							<div class="tag_number" id="main_number">
								#1
							</div>
							<div class="tag_catagory" id="main_tag">
								#공지
							</div>
							<span class="deletebox pull-right">
								<form method="POST" action="dropdebate.php" id="debate_option_list">
									<input type="hidden" name="id" value="0" id='debate_option_id' />
									<input class="delete button" type="button" value="수정">
									<input class="delete button" type="submit" value="삭제">
								</form>
							</span>
						</div>

						<div class="titlebox_main">
							<div class="title_text_main" id="main_title">
								SELAB DEBATE 페이지에 오신걸 환영합니다!
							</div>
						</div>
>>>>>>> f8d646db507f3858c61c36dca8f744a3a39023aa
				<!-- <div class= "write_info">
						<div class="time pull-right">
							23:03
								</div>
						<div class="name pull-right">
							임정현
						</div> -->
						

<<<<<<< HEAD
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
=======
						<div class="contentsbox">
							<div class="content_text" id="main_content">
								<h3>페이지 활용 꿀팁!!</h3>
								<br/>
								<p> 1.  <strong>익명 기능</strong>을 활용해 편하게 질문을 올리고 토론에 참여해요!</p>
								<p> 2.  <strong>태그 기능</strong>을 이용해 게시물을 올려주세요! 게시물 검색이 <strong>편리</strong>해집니다!</p>
								<p> 3.  <strong>게시물 공감</strong>과 <strong>댓글 공감</strong>을 통해 친구들과 활발하게 <strong>소통</strong>을 해주세요!</p>

								
							</div>
						</div>
						<div class="question_button">
							<button type = "button" class="question" id="questions">
								<img class="question_button_icon" src="../resource/images/question.png">

								<span class="question_num" id="main_question">
									3
								</span>
								<p>저도궁금해요!</p>

							</button>
						</div>
					</div>
				</div>

				

				<hr />

				<div class="debate_reply" id="reply_container">


					<!-- reply box container START -->
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
											<button type="button" class ="button">
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

					
					
					<!-- reply box container END -->



				</div>
			</div>
		</div>








	</div>
	<div class="reply_box_container">
		<form method="POST" action="registerreply.php" onsubmit="return check_reply_blank();">
			<fieldset class="reply_box">
				<!-- <legend>댓글달기</legend> -->
				<div class="reply_infor">
					<input type="hidden" name="debate_id" value="0" id="reply_debate_id" />
					Name <input type="text" name= "name" size="15" id="reply_id"> 
					Password <input type="text" name= "password" size="20" maxlength="10" id="reply_password" onKeyup="this.value=this.value.replace(/[^0-9]/g,'')" autocomplete="off"> 
					익명 <input type = "checkbox" name="anonymous" id="anonymous_button">
				</div>

				<textarea  class=reply_text name="content" id="reply_content"></textarea>
				<button class="button" id="reply_button">
					<img class ="enter_button" src = "../resource/images/enter.png">
				</button>

			</fieldset>
		</form>
	</div>
</div>
</div>
</div>
</main>
>>>>>>> f8d646db507f3858c61c36dca8f744a3a39023aa
</body>
</html>