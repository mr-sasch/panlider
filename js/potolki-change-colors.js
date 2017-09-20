$(document).ready(function(){
	//при загрузке страниц устанавливаем фон активного
	var background = $('.back-toggles ul li a.active').attr('style');
	$('.image-box .bg').attr('style',background);
	//меняем при нажатии
	$('.back-toggles ul li a').click(function(e){
		e.preventDefault();
		$('.back-toggles ul li a').removeClass('active');
		$(this).addClass('active');
		var background = $(this).attr('style');
		$('.image-box .bg').attr('style',background);
	});
});
