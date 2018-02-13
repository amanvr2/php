<html>
<head>
<title> form</title>
    <link rel="stylesheet" href="csexm.css">
  </head>
<body>
    <form method="POST">
    <ul>
        <li><a href="home.php"> Home</a></li>
    </ul>
    <h1>
    COMPUTER SCIENCE EXAMINATION</h1>
    <div class="tble">
    <table border="1">
    <tr>
        <td colspan="5">
        Q1. How many color dots make up one color pixel on a screen?
        </td>
        <td> <input type="radio" name="r1" value="256"> 256
                    </td>
       <td> <input type="radio" name="r1" value="16"> 16
                    </td>
        <td> <input type="radio" name="r1" value="3"> 3
                    </td>
        <td> <input type="radio" name="r1" value="1"> 1
        </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q2. Data is stored on diskettes in what form?
        </td>
        <td> <input type="radio" name="loc" value=""> ink
                    </td>
       <td> <input type="radio" name="loc" value="">laser bubbles
                    </td>
        <td> <input type="radio" name="loc" value="">magnetism
                    </td>
        <td> <input type="radio" name="loc" value=""> circuits
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q3. Which of the following languages is more suited to a structured program ?
        </td>
        <td> <input type="radio" name="loc" value=""> Pl/1
                    </td>
       <td> <input type="radio" name="loc" value="">fortan
                    </td>
        <td> <input type="radio" name="loc" value="">basic
                    </td>
        <td> <input type="radio" name="loc" value=""> pascal
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q4. A computer assisted method for the recording and anylizing of existing of existing or hypothetical system is?
        </td>
        <td> <input type="radio" name="loc" value=""> Data transmission
                    </td>
       <td> <input type="radio" name="loc" value="">Data flow
                    </td>
        <td> <input type="radio" name="loc" value="">Data capture
                    </td>
        <td> <input type="radio" name="loc" value=""> Data processing
                    </td>
        <td> <input type="radio" name="loc" value=""> None of the above
                    </td></tr>
    </table>
        <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q5. The brain of any computer system is ?
        </td>
        <td> <input type="radio" name="loc" value=""> ALU
                    </td>
       <td> <input type="radio" name="loc" value=""> Memory
                    </td>
        <td> <input type="radio" name="loc" value=""> CPU
                    </td>
        <td> <input type="radio" name="loc" value=""> Control unit
                    </td>
        <td> <input type="radio" name="loc" value=""> none of the above
                    </td></tr>
    </table>
        <br>
    </div>
    
    <button class="button" type="submit" name="next"> Next</button>
    </form>
    
    
    </body>
</html>
<?php
if(isset($_POST['next']))
{
    
header("location:gkstrtpge.php");
}


?>