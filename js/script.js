/*welcome表示、高さ消し*/
$(function(){
	$('#welcome').css({
		visibility:'visible',
	});
	$('#wrapper0').css({
		overflow:'hidden',
	});
});

/*時間経過でwelcomeフェードアウト、高さ戻し*/
function weloff(){
	$('#welcome').fadeOut('slow');
	$('#wrapper0').css({
		overflow:'auto',
	});
}
setTimeout('weloff()',3500);

/*エンターキーでwelcomeフェードアウト、高さ戻し*/
$(function(){
	$('body').keypress(function(event){
		if(event.which==13){
			$('#welcome').fadeOut('slow');
			$('#wrapper0').css({
				overflow:'auto',
			});
		}
	});
});

/*SKIPクリックでwelcomeフェードアウト、高さ戻し*/
$(function(){
	$('input#skip').click(function(){
		$('#welcome').fadeOut('slow');
		$('#wrapper0').css({
			overflow:'auto',
		});
	});
});

/*レスポンシブ画像切替(breakpoints.js)*/
$(function() {
	$(window).setBreakpoints({
		distinct: true,
		breakpoints: [ 1, 480, 801 ]
	});
	
	$(window).bind('enterBreakpoint1',function() {
		$('.sp-img').each(function() {
			$(this).attr('src', $(this).data('img'));
		});
	});
	$(window).bind('enterBreakpoint480',function() {
		$('.sp-img').each(function() {
			$(this).attr('src', $(this).data('img').replace('_sp', '_tb'));
		});
	});
	$(window).bind('enterBreakpoint801',function() {
		$('.sp-img').each(function() {
			$(this).attr('src', $(this).data('img').replace('_sp', '_pc'));
		});
	});
});

