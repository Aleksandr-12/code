$('#submit').on('click',  function(e){
	e.preventDefault();
	
	
	name = $("input[name='name']").val();
	email = $("input[name='email']").val();
	comm = $("textarea[name='comm']").val();
	var i = $('.attr_i:last').attr('data-i');

	if(i == null){
		
		i = localStorage.rem_i;
		i++;
		localStorage.rem_i = i;
		
	}else{
		i++;
		localStorage.rem_i = i;
	}
	
	$.ajax({
		url: '/manager.php',
		data: {name: name, email:email, comm:comm},
		type: 'get',
		success: function(data){
			data = $.parseJSON(data);
			alert(data);
			data.forEach(function(entry) {
				let cls = i%2 == 0 ? 'comment-green': 'comments';
				let cls_1 = i%2 == 0 ? 'comment-content-green': ' comment-content';
				$('#comment').append('<div data-i="'+i+'"  class=" attr_i '+ cls +'"><h3>'+entry.name+'</h3><div class="'+ cls_1 +'"><p>'+entry.email+'</p><span>'+entry.text+'</span></div></div>');
			});
			
		   
		},
		error:function(){
			alert('Ошибка, Пропробуйте позже!');
		}
	});
	
	
});
(function($){
    $(function(){
		$('input').change(function(e) {
                $('#form').validate({
		  rules: {
			 name: {
			 required: true,
			 minlength: 3
			 },
			 email: {
				 required: true,
				 
				
			 },
			 comm: {
				 required: true,
				 minlength: 3
			 }
		  },
		  messages: {
			 name: {
				 required: "Поле 'Имя' обязательно к заполнению",
				 minlength: "Введите не менее 3-х символов в поле 'Имя'"
			 },
			 email: {
			 required: "Поле 'Email' обязательно к заполнению",
			 email: "Необходим формат адреса email" 
				},
			 comm: {
				 required:"Поле 'comment' обязательно к заполнению",
				  minlength: "Введите не менее 3-х символов в поле 'Комментарий'"
			 }
			  }
			 }).element($(e.target));
            });
		
     
    });
})(jQuery);

 $('.comments').click(function() {
				 
		alert();
				 
	});


$(document).ready(function() {
		//var block = $("#block");
		//block.scrollTop( block.prop('scrollHeight') );
		//block.scrollTop = block.scrollHeight;
	});
	/*$(function() {
		var block = document.getElementById("block");
		block.scrollTop = block.scrollHeight;
		
	 
	});
	const el = document.getElementById('block');

	el.scrollIntoView(false);*/
