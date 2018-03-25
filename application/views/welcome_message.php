<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #b3ccff; color: white; }

	body {
		background-color: #0b2b7a;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #b3ccff;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #f0f3f3;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
  .btn 
  {
   outline:0;
   border:none;
   border-top:none;
   border-bottom:none;
   border-left:none;
   border-right:none;
   box-shadow:inset 2px -3px rgba(0,0,0,0.15);
  }
  .btn:focus
  {
   outline:0;
   -webkit-outline:0;
   -moz-outline:0;
  }
  .fullscreen_bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: 50% 50%;
    background-image: url('http://cleancanvas.herokuapp.com/img/backgrounds/color-splash.jpg');
    background-repeat:repeat;
  }
  .form-signin {
    max-width: 280px;
    padding: 15px;
    margin: 0 auto;
      margin-top:50px;
  }
  .form-signin .form-signin-heading, .form-signin {
    margin-bottom: 10px;
  }
  .form-signin .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .form-signin .form-control:focus {
    z-index: 2;
  }
  .form-signin input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: none;
    border-left-style: solid;
    border-color: #000;
  }
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-top-style: none;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-color: rgb(0,0,0);
    border-top:1px solid rgba(0,0,0,0.08);
  }
  .form-signin-heading {
    color: #fff;
    text-align: center;
    text-shadow: 0 2px 2px rgba(0,0,0,0.5);
  }
	
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome my Solution 4</h1>

	<div id="body">

	<h2>--- Day 4: High-Entropy Passphrases ---</h2>
<p>
A new system policy has been put in place that requires all accounts to use a passphrase instead of simply a password. </p>
<p>A passphrase consists of a series of words (lowercase letters) separated by spaces.</p>
<p>
To ensure security, a valid passphrase must contain no duplicate words.
</p>
<p>
For example:
</p>
<ul>
<li>aa bb cc dd ee is valid.</li>
<li>aa bb cc dd aa is not valid - the word aa appears more than once.</li>
<li>aa bb cc dd aaa is valid - aa and aaa count as different words.</li>
</ul>
<p>
The system's full passphrase list is available as your puzzle input. How many passphrases are valid?
</p>



	<h2 class="form-signin-heading">Please create your new password</h2>
	<form name="myForm" id="myForm" onsubmit="return validatePW()" action="/action_page.php" method="post">
				<input type="text" id="newPW" class="form-control" placeholder="four different words(lowercase letters) separated by spaces: eg cat in a hat" required="" autofocus="">
				<button class="btn btn-lg btn-primary btn-block" onclick="validatePW();">
					Submit my new Password
				</button>
	</form>	
	


	<p id="demo"></p>
	<p id="demo2"></p>
	<p id="compare_words"></p>
	<p id="duplicate_word"></p>

	 <button onclick="myFunction()">Try it</button>
	
		<p>My is written using:</p>
		<code>CodeIgniter php framework</code>
		<code>Twitter Bootstrap</code>
		<code>JavaScript</code>
		<p>You can find my source code at <a href="code/">Solution 4 Code</a>.</p>
	
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>

<script>
function validatePW() {

	var words = document.getElementById("newPW").value.trim().split(/\s+/);

	var wordCount = words.length;
	document.getElementById("demo2").innerHTML = words[0];

    var patt = new RegExp("[a-z]");
    var res = patt.test(words[0]);
	
    document.getElementById("demo2").innerHTML = res;
	document.getElementById("demo2").innerHTML = wordCount;

	if( wordCount == 4 ) { 
		//document.getElementById("demo").innerHTML = 'valid';
		document.getElementById("demo").innerHTML = words[0];
		
		//To test for alphanumeric characters only:
		var sorted_arr = words.sort(); 
                             
		var results = [];
		for (i = 0; i < 4; i++) {

			if (/^[a-z]+$/.test(words[i])){
				//there are only alphanumeric characters
				document.getElementById("demo").innerHTML = 'all good';
				var element = document.getElementById("newPW");
				element.classList.remove("alert-danger");
				element.classList.add("alert-success");		

				for (var x = 0; x < words.length - 1; x++) {
					if (sorted_arr[x + 1] == sorted_arr[x]) {
						results.push(sorted_arr[x]);
					}
				}
				
				document.getElementById("compare_words").innerHTML = sorted_arr;
				
				var duplicateWord=false;
								
				for (var x = 0; x < sorted_arr.length - 1; x++) {
					if (sorted_arr[x + 1] == sorted_arr[x]) {
						element.classList.add("alert-danger");
						duplicateWord=true;
						document.getElementById("duplicate_word").innerHTML = 'Error: Please unique word in your new password';
					}
				}
				
				if (duplicateWord==true){
					return false;
				}else{
					//all goo submit the form
					return true;
				}
			
			}
			else
			{
				document.getElementById("demo").innerHTML = 'You have less than four words (a numeric or a special charater is not a word)';
		
				var element = document.getElementById("newPW");
				element.classList.add("alert-danger");
				return false;
			}

		}	

	}else{
		var element = document.getElementById("newPW");
		element.classList.add("alert-danger");
		document.getElementById("demo").innerHTML = 'Please try enter four lowercase words';
		// You must return false to prevent the default form behavior
		return false;
	}
				
}
</script>

</html>