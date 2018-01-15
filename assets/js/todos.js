$('li').click(function(event) {
	 $(this).toggleClass("completed");
	 $.post('done.php',
	 	{id: $(this).attr('id')},
	 	function(data,status){
	 	});
});

$('#newTask').keypress(function(event) {
	if(event.which == 13 && $(this).val() !=''){
	var todoText = $(this).val();
	$(this).val('');

	$.post('create.php', 
		{task: todoText}, 
		function(data, status) {

		$('ul').append('<li class="collection-item" id="'+ data +'"><span><i class="fa fa-window-close fa-2x"></i></span>'+todoText+'</li>')
	});

	}
});

$('ul').on('click','span',function(){
	//remove item from DOM
	$(this).parent().fadeOut(100, function() {
		$(this).remove();
	});
	//ajax request to update JSON
	$.post('delete.php', 
		{id: $(this).parent().attr('id')}, 
		function(data, status) {
			
	});

})

$('#showNew').click(function(event) {
	 $('.showInput').toggle();
});
