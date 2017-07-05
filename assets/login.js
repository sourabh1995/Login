// JavaScript Validation For Login Page

$('document').ready(function()
{
		 


		 // valid email pattern
		 var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		 $.validator.addMethod("validemail", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });

		 $("#login-form").validate({

		  rules:
		  {
				
				email: {
					required: true,
					validemail: true
				},
				password1: {
					required: true,
					minlength: 8,
					maxlength: 15
				}
				
		   },
		   messages:
		   {
				
			    email: {
					  required: "Please Enter Email Address",
					  validemail: "Enter Valid Email Address"
					   },
				password1:{
					required: "Please Enter Password",
					minlength: "Password at least have 8 characters"
					}
		   },
		   errorPlacement : function(error, element) {
			  $(element).closest('.form-group').find('.help-block').html(error.html());
		   },
		   highlight : function(element) {
			  $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		   },
		   unhighlight: function(element, errorClass, validClass) {
			  $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			  $(element).closest('.form-group').find('.help-block').html('');
		   },

		   		submitHandler: function(form){

					
					form.submit();
					

				}

				
		   });


		   
});
