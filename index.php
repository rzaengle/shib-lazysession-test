<?php
session_start();
if(isset($_SERVER['REMOTE_USER'])) {
	$authtype = 'Shibboleth';
}
else if(isset($_SESSION['LOCALAUTHNAME'])) {
	$authtype = 'Local';
}
else {
	$authtype = 'None';
}
?>
<html>
<head>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->

</head>
<body class='blue darken-4 valign-wrapper'>
<div class='container valign'>
<?php
switch($authtype) {
	case 'None':
	default:
		?>
		<div class='row'>
			<div class='col l6 offset-l3'>
				<div class='card white center-align'>
					<div class='card-content'>
						<h2>Welcome</h2>
						<p>Login locally</p>
						<form method='post' action='login.php'>
							<input type='text' value='test' name='name'>
							<input type='password' value='123' name='pw'>
							<button type='submit' class='btn blue white-text waves-effect waves-light'>Go</button>
						</form>
						<p>Or</p>
						<p><a href='https://myubcard.com/Shibboleth.sso/Login?target=https://myubcard.com/shibtest'>Login with Shibboleth</a></p>
					</div>
				</div>
			</div>
		</div>
		<?php break;
	case 'Shibboleth': 
		?>
		<div class='row'>
			<div class='col l12 center-align white-text'>
				<h2>You are authed with Shibboleth</h2>
				<h3>UID: <?php echo $_SERVER['uid'];?></h3>
				<a href='/Shibboleth.sso/Logout?return=/shibtest/'>Logout</a>
			</div>
		</div>
		<?php break;
	case 'Local':
		?>
		<div class='row'>
			<div class='col l12 center-align white-text'>
				<h2>You are authed locally</h2>
				<h3>Local Name: <?php echo $_SESSION['LOCALAUTHNAME'];?></h3>
				<a href='/shibtest/kill.php'>Logout</a>
			</div>
		</div>
	<?php break;
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/js/materialize.min.js"></script>