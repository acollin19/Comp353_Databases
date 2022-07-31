<?php
    include_once 'dbh.inc.php';

?>
<!DOCTYPE html>
<HTML>
<HEAD>
<HTML>
<HEAD>
  <TITLE> C19PPS </TITLE>
  <link rel = "stylesheet" type = "text/css" href = "style.css"> 
</HEAD>
<BODY>
<H1> COVID-19 Pandemic Progress System </H1>
<H2>The C19PPS system helps researchers, companies, and world population to keep track of the COVID-19 pandemic progress.</H2>
<p>Click <a href="worlddata.php"> here </a> to view the COVID-19 Database.</p>

<p> If you are an Administrator or Researcher, please Login.</p>

    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> Username: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
      
    <script>  
        function validation()  
        {  
            var id=document.f1.user.value;  
            var ps=document.f1.pass.value;  
            if(id.length=="" && ps.length=="") {  
                alert("Username and Password fields are empty");  
                return false;  
            }  else
            {  
                if(id.length=="") {  
                    alert("Username is empty");  
                    return false;  
                }   
                if (ps.length=="") {  
                alert("Password field is empty");  
                return false;  
                }  
            }  

        }  
    </script>  

<P>The current date and time is
<EM><?echo date("D M d, Y H:i:s", time())?></EM>

<P>Current PHP version:
<EM><?echo  phpversion()?></EM>
</BODY>


</HTML>

