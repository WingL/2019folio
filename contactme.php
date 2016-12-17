<?php include'header.php'?>



<div id="contactdetail" class="col-md-6">
 <strong><span style="color:#54284e; font-size:1.3em">My Contact<br/></span></strong><br/>

<p>E-mail:hello@lunwing.com</p>
<p>Enquiries?</p>
<p>Need a quote?</p>
<p>Have a thought of my site?</p>
<p>Email me or use the contact form on the right!</p>


</div>

<div id="contactform" class="col-md-6" >
 <strong><span style="color:#54284e; font-size:1.3em">Contact Me<br/></span></strong><br/>

<form name="contact from" method="post" action="contactform.php">
<div class="col-md-6">
<table>
<tr><td><label for="your_name">Your Name</label></td></tr>

<tr><td><input type="text" name="your_name" maxlength="50" size="30"></td></tr>

<tr><td><label for="your_email">Your Email</label></td></tr>

<tr><td><input type="text" name="email" maxlength="80" size="38"></td></tr>

<tr><td><label for="about_you">About You</label></td></tr>

<tr><td><input type="text" name="about_you" maxlength="80" size="38"></td></tr>

</table>
</div>

<div class="col-md-6">
<table>
<tr>
<td><label for="feedback">Tell me What you are thinking</label></td>
</tr>
 
<tr>
<td><textarea name="feedback" rows="10" cols="33"></textarea></td></tr>
</table>
<button type="submit" value="Submit" class="col-md-1 col-md-offset-9">Submit</button>

</div>

</form>


</div>

</div>

<div class="spacer">&nbsp;</div>  
        <?php include'footer.php'?>
        