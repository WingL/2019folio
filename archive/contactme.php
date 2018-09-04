	<?php include'head.php' ?>

<body id="contactpage">
<?php include'header.php' ?>

  


<div id="contactform" class="col-md-6 col-md-push-3 col-sm-6 col-sm-3 col-xs-12">
 <strong><span style="color:#54284e; font-size:1.3em">Contact Me<br/></span></strong><br/>

<form name="contact from" method="post" action="contactform.php">
<table>
<tr><td><label for="your_name">Your Name</label></td>
<td><input type="text" name="your_name" maxlength="50" size="30"></td></tr>

<tr><td><label for="your_email">Your Email</label></td>

<td><input type="text" name="email" maxlength="80" size="38"></td></tr>

<tr><td><label for="about_you">About You</label></td>

<td><input type="text" name="about_you" maxlength="80" size="38"></td></tr>

<tr>
<td><label for="feedback">Tell me What you are thinking</label></td>
<td><textarea name="feedback" rows="10" cols="33"></textarea></td></tr>
</table>
<button type="submit" value="Submit" class="col-md-1 col-md-offset-9">Submit</button>


</form>


</div>

</div>

</section>
</body>