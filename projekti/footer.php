<link rel="stylesheet" type="text/css" href="css/index.css">
<footer style="clear:both;">  
  <div id="footer">
 <div  id="contacts">
            <h2><span>Follow Me</span></h2>
            <div>
                
                <a href="#">
                    <img alt="Facebook" src="images/fb.png"/>
                </a>
                <a href="#">
                    <img alt="Twitter" src="images/tw.png" />
                </a>
            </div>
        </div>
<div id="form1">
<form name="forma1" onsubmit=" return validateForm()" >
  <div class="EmriMbiemri">
    <br>
    <h3>Kyçuni: </h3>
    <br>
    <label><b>Emri &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </b></label>
    <input type="text" placeholder="Shkruani emrin" name="emri" required>
  </br><br>
    <label><b>Fjalekalimi</b></label>
    <input type="password" placeholder="Shkruani fjalekalimin" name="fjalekalimi" >
        <br>
    <button type="submit">Kyçu</button>
    <input type="checkbox" checked="checked"> Me ruaj
  </div>
  <br>
    <span class="psw">Keni harruar <a href="#">fjalekalimin?</a></span>
  </div>
 </form>
 <form>
  <div id="form2" onsubmit="return validateEmail() " >
    <h3> Kontaktoni në</h3>
    <form action="mailto:someone@example.com" method="post" enctype="text/plain">
    Emri dhe Mbiemri:<br>
    <input type="text" name="name" ><br>
    E-mail:<br>
    <input type="text" name="mail"><br>
    Comment:<br>
    <textarea name="Description" rows="4" cols="30"> </textarea>
    <input type="submit" value="Dërgo">
    </form>
  </div>
  </div> 
</form>
    </div>
    <div class="copyright">
            &copy; 2019 . All rights reserved.
        </div>
</footer>
<script>
function validateForm() {
	var fjalkalimi1 = document.forms["forma1"]["fjalekalimi"].value;
		if (fjalkalimi1 == null || fjalkalimi1 == "")
		{
      alert("Duhet te shtypni fjalekalimin tuaj!")
		}
}
function ValidateEmail(mail)
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form2.mail.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}
</script>
