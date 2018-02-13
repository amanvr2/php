<html>
<head>
<title> form</title>
    <link rel="stylesheet" href="gkexm.css">
  </head>
<body>
    <form method="post">
    <ul>
        <li><a href="home.php"> Home</a></li>
    </ul>
    <h1>
    GENERAL KNOWLEDGE EXAMINATION</h1>
    <div class="tble">
    <table border="1">
    <tr>
        <td colspan="5">
      Q1. A parallel port is most often used by ?
        </td>
        <td> <input type="radio" name="loc" value="">mouse
                    </td>
       <td> <input type="radio" name="loc" value=""> monitor
                    </td>
        <td> <input type="radio" name="loc" value=""> printer
                    </td>
        <td> <input type="radio" name="loc" value=""> keyboard
        </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q2. Bluetooth technology allows ?
        </td>
        <td> <input type="radio" name="loc" value=""> landline to mobile communication
                    </td>
       <td> <input type="radio" name="loc" value="">wireless communication between communication
                    </td>
        <td> <input type="radio" name="loc" value="">signal transmission on mobile phone only
                    </td>
        <td> <input type="radio" name="loc" value="">satellite telivision communication
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
       Q3. which of the following is not an example of optical disk ?
        </td>
        <td> <input type="radio" name="loc" value=""> memory disk
                    </td>
       <td> <input type="radio" name="loc" value="">magnetic disk
                    </td>
        <td> <input type="radio" name="loc" value="">hard disk
                    </td>
        <td> <input type="radio" name="loc" value=""> digital versatile disk
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q4. which of the following is an example of storage devices?
        </td>
        <td> <input type="radio" name="loc" value=""> tapes
                    </td>
       <td> <input type="radio" name="loc" value="">dvd
                    </td>
        <td> <input type="radio" name="loc" value="">magnetic disks
                    </td>
        <td> <input type="radio" name="loc" value=""> all of these
                    </td>
        
    </table>
        <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q5. ic chips used in ?
        </td>
        <td> <input type="radio" name="loc" value=""> silicon
                    </td>
       <td> <input type="radio" name="loc" value=""> chromium
                    </td>
        <td> <input type="radio" name="loc" value=""> silver
                    </td>
        <td> <input type="radio" name="loc" value=""> lead
                    </td>
        
    </table>
        <br>
    </div>
    
    <button class="button" type="submit" name="next"> NEXT</button>
    </form>
    
    </body>
</html>
<?php
if(isset($_POST['next']))
{
    header("location:engstrtpge.php");
}
?>