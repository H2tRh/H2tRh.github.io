<html>
<head>
<link rel="stylesheet" href="s.css">
<title> Test - HstRh </title>
</head>
<script language="javascript">
function check(form)
{

if(form.userid.value == "Roseindia" && form.pwd.value == "Roseindia")
{
	alert("Ok Pitch , Your login :$")
	return true;
}
else
{
	alert("Error Password or Username")
	return false;
}
}
</script>

<body>

<div class="login">
	<h1>Login Root .</h1>
    <form method="post">

    	<input type="text" name="userid" value="" placeholder="User Name" />
        <input type="password" name="pwd" placeholder="Password" required="required" />
        <button type="submit"  onclick="check(this.form)" class="btn btn-primary btn-block btn-large">Login</button>
		
    </form>
</div>
</body>
</html>
