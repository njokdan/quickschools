$('#registernew').submit(function(){
	var firstname = $('#firstname').val();
	var middlename = $('#middlename').val();
	var lastname = $('#lastname').val();
	var sex = $('#sex').val();
	var dateofbirth = $('#dob').val();
	var classx = $('#class').val();
	var session = $('#session').val();
	var term = $('#term').val();
	var username = $('#username').val();
	var password = $('#password').val();
	var email = $('#email').val();
	var phone = $('#phone').val();
	var degree = $('#degree').val();
	var salary = $('#salary').val();
	var address = $('#address').val();
	var type = $('#type').val();
	var role = $('#role').val();
	
	// if(($('#firstname').val(''))||($('#firstname').val(''))||($('#firstname').val(''))||($('#firstname').val(''))){
	// 	$.ajax(function(){
			
	// 			$('#alertbox1').html("Record Not added Succesfully!");

	// 			$('#alertbox1').fadeIn(500, function(){
	// 				$('#alertbox1').fadeOut(8500)
	// 			});

	// 			);

	// }else{

	// }


	$.ajax({
		url: 'pr.php',
		data: {firstname:firstname, middlename:middlename, lastname:lastname, sex:sex, dateofbirth:dateofbirth, classx:classx, session:session, term:term, username:username, password:password, email:email, phone:phone, degree:degree, salary:salary, address:address, type:type, role:role }, //{sender: sender, message: message, receiver:receiver}
		success: function(data){
			
				$('#alertbox1').html("Record added Succesfully!");

				$('#alertbox1').fadeIn(500, function(){
					$('#alertbox1').fadeOut(8500)
				});

				$('#firstname').val('');
				$('#middlename').val('');
				$('#lastname').val('');
				$('#sex').val('');
				$('#dob').val('');
				$('#class').val('');
				$('#session').val('');
				$('#term').val('');
				$('#username').val('');
				$('#password').val('');
				$('#email').val('');
				$('#phone').val('');
				$('#degree').val('');
				$('#salary').val('');
				$('#address').val('');
				$('#type').val('');
				$('#role').val('');

		}

		
	});
	return false;
});