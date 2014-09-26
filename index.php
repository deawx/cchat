<?php

require('classes/cchat.class.php');

date_default_timezone_set('Europe/London');

?><!DOCTYPE html>

<html lang="en">
	<head>
		<title>CChat</title>
		<meta charset="iso-8859-1">
		<meta name="description" content="CChat ~ Cryptochat">
		<meta name="author" content="Martin Latter">
		<meta name="copyright" content="&copy; 2010-<?php echo date('Y'); ?> Martin Latter">

		<link type="text/css" href="css/cchat.css" rel="stylesheet" media="all">

		<script type="text/javaScript" src="js/cchat.js"></script>
		<script type="text/javaScript" src="js/bf.js"></script>
	</head>

	<body>

		<div id="chatboxcontainer">

			<noscript>
				<p>Browser JavaScript must be enabled for CChat to operate.</p>
			</noscript>

			<div id="title">CryptoChat</div>
			<div id="chatbox" class="curved">

			<?php
				echo Chatbox::outputMessages();
			?>

			</div>

			<div id="chatboxinput">
				<input type="text" id="name" name="name" maxlength="15" value="name" title= "your name" class="curved">
				<input type="password" id="pw" maxlength="30" title="enter password" class="curved">
				<textarea id="message" name="message" maxlength="255" cols="26" rows="7" class="curved">message</textarea>
				<div id="remcharcontainer"><span id="remchar">255</span> chars remaining</div>
				<div>
					<input type="button" id="chatsubmit" value="chat" class="curved">
					<input type="button" id="decrypt" value="decrypt" class="curved">
				</div>
				<div id="error"></div>
			</div>

			<div id="debug"></div>

		</div>

	</body>

</html>
