<html>
<head>
<title> form</title>
    <link rel="stylesheet" href="engexm.css">
  </head>
<body>
    <form method="post">
    <ul>
        <li><a href="training.html"> Home</a></li>
    </ul>
    <h1>
    REASONING EXAMINATION</h1>
    <div class="tble">
    <table border="1">
    <tr>
        <td colspan="5">
      Q1. BEH, DGJ,(?),EJO,GLQ,INS?
        </td>
        <td> <input type="radio" name="loc" value="">FLR
                    </td>
       <td> <input type="radio" name="loc" value="">FIS
                    </td>
        <td> <input type="radio" name="loc" value=""> FKO
                    </td>
        <td> <input type="radio" name="loc" value=""> FIL
        </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q2. APZLT,CQYNR,ERXPP,GSWRN,... ?
        </td>
        <td> <input type="radio" name="loc" value=""> KVIJUJ
                    </td>
       <td> <input type="radio" name="loc" value="">JUUVK
                    </td>
        <td> <input type="radio" name="loc" value="">ITVTL
                    </td>
        <td> <input type="radio" name="loc" value="">KUUVK
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
       Q3.light::sun::heat::... ?
        </td>
        <td> <input type="radio" name="loc" value=""> electricity
                    </td>
       <td> <input type="radio" name="loc" value=""> moon
                    </td>
        <td> <input type="radio" name="loc" value=""> fire
                    </td>
        <td> <input type="radio" name="loc" value=""> star
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q4. parrot::cage::man:: ... ?
        </td>
        <td> <input type="radio" name="loc" value=""> home
                    </td>
       <td> <input type="radio" name="loc" value="">motor car
                    </td>
        <td> <input type="radio" name="loc" value="">forest
                    </td>
        <td> <input type="radio" name="loc" value=""> prison
                    </td>
        
    </table>
        <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q5. 8 , 20 , 36, 56 ?
        </td>
        <td> <input type="radio" name="loc" value=""> 80
                    </td>
       <td> <input type="radio" name="loc" value=""> 100
                    </td>
        <td> <input type="radio" name="loc" value=""> 64
                    </td>
        <td> <input type="radio" name="loc" value=""> 84
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
    header("location:aptitude.php");
}
?>