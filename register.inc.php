<style>

.entry input[type=text], input[type=password] {		
    float: left;
    padding: 10px;
    border: 1px solid light gray;
    border: 1px solid light gray;
	border-radius: 2px;
    margin-top: 8px;
    margin-left: 20px;
    font-size: 20px;	
}

.entry {
	margin: 8px;	
}

</style>

<div class="entry">
<div class="content">
<p>Register here to be a part of KO Girls Who Code. Your account will let you validate your attendance and post about your projects.</p>
<hr size="1" noshade="noshade">
<h4>Please enter the following information:</h4>

<form action="index.php" method="post">

<b>User Name:</b><br><input type="text" name="userid"  size="40" placeholder="username..." required><br>
<br />
<br> </br>
<b>Password:</b><br><input type="password" name="password"  size="40" placeholder="password..." required><br>
<br/><br>
<br/>
<b>Confirm Password:</b><br /> 
<input type="password" name="password2"  size="40"placeholder="password..." required><br>
<br />
<br> </br>
<b>Full name:</b><br><input type="text" size="40" name="fullname" placeholder="name..." required>
<br><br /><br><br/>
<b>E-mail address:</b><br><input type="text" size="40" name="email" placeholder="email address..." required> <br>
<br/><br> </br>
<font size="3px">We do not share e-mail addresses with others.</font> <br>

<input type="submit" value="Submit" class="button">
<input type="hidden" name="content" value="adduser">
</br> <br> <br/>
<hr size="1" noshade="noshade">

</form>
</div>
</div>