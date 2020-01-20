<body>
	<div class="main-content">
		<div class="main">
			<div class="header-content">
			<div class="d-flex align-itemss-start flex-column ">
				<img class="logo"src="img/logo.png"/>
			</div>
			<div class="header-comment">
				<img width="200px" src="img/email.png"/>
			</div>
				<form id="form" action="/manager.php" method="get">
					<div class="flex-cls">
						 <div class="flex-column d-flex ">
							<label class="label-text text-white"  for="exampleInputName">Имя <span class="text-danger">*</span></label>
							<input name="name"  type="text"  class="height-text-input cls-name-inp-bg class-input-text" >
							<label class="text-white p-text-email label-text" for="emailForm">E-mail <span class="text-danger">*</span></label>
							<input id="emailForm" name="email" type="email"  class="height-text-input class-input-text cls-email-inp-bg" required>
						</div>
					  <div class="">
						   <div class="flex-column d-flex">
							<label class="label-text text-white" for="exampleFormControlTextarea1">Комментарий <span class="text-danger">*</span></label>
							<textarea name="comm" class="class-input-text wd-text-area cls-comm-txt-bg" id="exampleFormControlTextarea1" rows="8" required></textarea>
						  </div>
					  </div>
					</div>
					<div class=" ms-cls bd-highlight  mt-5 mb-3">
						<button id="submit" type="submit" class="btn bg-danger class-button-input text-white mt-auto p-3 bd-highlight ">Записать</button>
					</div>
				</form>
			</div>
				<!--<form id="form" action="/manager.php" method="get">
					<div class="d-flex justify-content-between">
						 <div class="col px-md-5">
							<label class="label-text text-white"  for="exampleInputName">Имя <span class="text-danger">*</span></label>
							<input name="name" data-atr="" type="text" style="width:350px" class="height-text-input bg-input form-control"  aria-describedby="exampleInputName" required>
							<label class="text-white p-text-email label-text" for="emailForm">E-mail <span class="text-danger">*</span></label>
							<input id="emailForm" name="email" type="email" style="width:350px" class="height-text-input bg-input form-control" required>
						</div>
					  <div class="col">
						   <div class=" form-group">
							<label class="label-text text-white" for="exampleFormControlTextarea1">Комментарий <span class="text-danger">*</span></label>
							<textarea name="comm" class="form-control bg-input " id="exampleFormControlTextarea1" rows="9" required></textarea>
						  </div>
					  </div>
					</div>
				</div>
					<div class="d-flex align-items-end flex-column bd-highlight mt-4 mb-3 mr-3">
						<button id="submit" type="submit" class="btn bg-danger class-button-input text-white mt-auto p-3 bd-highlight">Записать</button>
					</div>
				</form>-->
			
		</div>
	</div>
<div class="main">
	<div class="header-comment">
		<h1>Выводим комментарии</h1>
	</div>
	<div id='comment' class="comments-all">
	<?php if(isset($this->data)):?>
	
		<?php $i=1; foreach($this->data as $value):?>
		<div data-i="<?php echo $i ?>" class="attr_i <?php if(($i%2) == 0){echo 'comment-green';}else {echo 'comments';}?>" >
			<h3><?php echo $value['name'];?></h3>
			<div class="<?php if(($i%2) == 0){echo 'comment-content-green';}else {echo 'comment-content';}?>">
				<p><?php echo $value['email'];?></p>
				<span><?php echo $value['text'];?></span>
			</div>
		</div>
		
		<?php $i++; endForeach; ?>
		<?php endif;?>	
			<!--<div class="comment-green">
				<h3>Sasha</h3>
				<div class="comment-content-green">
					<p>kvazar-12@mail.ru</p>
					<span>Власов Александр Сергеевич</span>
				</div>
			</div>-->
		</div>
</div>
	
