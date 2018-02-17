function registration(){
	var name = $("#name").val();
	var email = $("#email").val();
	var pasword = $("#password").val();
	alert("success");
		if(!name){
			$("#name").focus();	
			return false;
		}else if(!email){
			$("#email").focus();	
			return false;
		}else if(!pasword){
			$("#password").focus();	
			return false;
		}else{
			$.post("/customer/ajaxupdate", function( data ) {
							alert(data);
			});
			
		}
}