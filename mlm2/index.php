<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Bhabijee</title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>

		<div id="formContainer">
			<form id="login" method="post" action="log.php">
				<a href="#" id="flipToRecover" class="flipLink">Forgot?</a>
				<input type="text" name="loginEmail" id="loginEmail" value="Enter your USER ID" onBlur="if(this.value=='') this.value='Enter your USER ID'" onFocus="if(this.value =='Enter your USER ID' ) this.value=''"  />
				<input type="password" name="loginPass" id="loginPass" value="Password" onBlur="if(this.value=='') this.value='Password'" onFocus="if(this.value =='Password' ) this.value=''" />
				<input type="submit" name="submit" value="Login" />
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink">Forgot?</a>
				<input type="text" name="recoverEmail" id="recoverEmail" value="Email" />
				<input type="submit" name="submit" value="Recover" />
			</form>
		</div>

    <footer>
        <h2> Designed & Developed By <i><a href="http://www.facebook.com/profile.php?id=100002422501287">Ricky</a></i></h2>
            <a class="tzine" href="http://ultrasoft.co.in">powered By <i>Ultra<b>soft</b></i> </a>      </footer>
        
        <!-- JavaScript includes -->
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="assets/js/script.js"></script>

    </body>
</html>

