<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
<div class="jumbotron text-center">
  <h1>My Solution</h1>
  <p>Please create your new password</p>
  
  <div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
  
  <?php echo validation_errors(); ?>

	<p id="feedback1"></p>
	<p id="feedback2"></p>
	<p id="compare_words"></p>
	<p id="duplicate_word"></p>

	<form name="myForm" id="myForm" onsubmit="return validatePW()" action="<?php echo site_url('authenticate/changepw'); ?>"" method="post">
				<input type="text" name="password" id="password" class="form-control" value="<?php echo set_value('password'); ?>"  placeholder="four different words(lowercase letters) separated by spaces: eg cat in a hat" required="" autofocus="">
				
				<button class="btn btn-lg btn-primary btn-block" onclick="validatePW();">
					Submit my new Password
				</button>
	</form>	
  
  
  </div>
  <div class="col-sm-3"></div>
  
</div>
  	

<script>
function validatePW() {

	var words = document.getElementById("password").value.trim().split(/\s+/);

	var wordCount = words.length;
//	document.getElementById("feedback2").innerHTML = words[0];

 //   var patt = new RegExp("[a-z]");
 //   var res = patt.test(words[0]);
	
  //  document.getElementById("feedback2").innerHTML = res;
	document.getElementById("feedback2").innerHTML = wordCount;

	if( wordCount == 4 ) { 
		//document.getElementById("feedback1").innerHTML = 'valid';
		//document.getElementById("feedback1").innerHTML = words[0];
		
		//To test for alphanumeric characters only:
		var sorted_arr = words.sort(); 
                             
		var results = [];
		for (i = 0; i < 4; i++) {

			var checkThisWord = words[i];
			// check to see if each word is made up of valid lowercase letters only
			if (/^[a-z]+$/.test(checkThisWord)){
			
				
				//document.getElementById("feedback1").innerHTML = 'all good';
				// set the input element that all is good so far
				var element = document.getElementById("password");
				element.classList.remove("alert-danger");
				element.classList.add("alert-success");		
				
				// lets order the words to see if the are all unique
				for (var x = 0; x < words.length - 1; x++) {
					if (sorted_arr[x + 1] == sorted_arr[x]) {
						results.push(sorted_arr[x]);
					}
				}
				
				document.getElementById("compare_words").innerHTML = sorted_arr;
				
				// set the variable - no duplicate word to start with
				var duplicateWord=false;
				
				// compare each with the word next it (as they are all in order)			
				for (var y = 0; y < sorted_arr.length - 1; y++) {
					if (sorted_arr[y + 1] == sorted_arr[y]) {
						element.classList.add("alert-danger");
						duplicateWord=true;
						document.getElementById("duplicate_word").innerHTML = 'Error: Each word needs to be unique, for your new password';
					}
				}
				
				if (duplicateWord==true){
					// duplicate word found - user needs to reenter
					return false;
				}else{
					//all good - submit the form
					return true;
				}
			
			}
			else
			{
				document.getElementById("feedback1").innerHTML = 'Error: You have four "words" but there is a an uppercase character, a numeric or a special character)';
				// set the input element to show that we have found an error
				var element = document.getElementById("password");
				element.classList.add("alert-danger");
				// return false to prevent the default form behavior
				return false;
			}
		} // end for	
	}else{
		var element = document.getElementById("password");
		element.classList.add("alert-danger");
		document.getElementById("feedback1").innerHTML = 'Please try enter four lowercase words';
		// return false to prevent the default form behavior
		return false;
	}
				
}
</script>