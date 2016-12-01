$('#name').focusin(function(){

	$('#name').html(' FULL NAME');
});
$('#name').focusout(function(){

	$('#name').html('');
});

$('#password').focusin(function(){

	$('#pwd').html(' PASSWORD');
});
$('#password').focusout(function(){

	$('#pwd').html('');
});

$('#display').click(function(){
	var name=$('#name').val();
	$('#name_span').text(name);
	
});
$('#display').click(function(){
	var name=$('#user_id').val();
	$('#user_span').text(name);
	
});
$('#display').click(function(){
	var name=$('#password').val();
	$('#pwd_span').text(name);
	
});
$('#display').click(function(){
	var name=$('#cnf_pwd').val();
	$('#cpwd_span').text(name);
	
});

