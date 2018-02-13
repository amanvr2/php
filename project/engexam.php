<html>
<head>
<title> form</title>
    <link rel="stylesheet" href="engexm.css">
  </head>
<body>
    <form method="post">
    <ul>
        <li><a href="home.php"> Home</a></li>
    </ul>
    <h1>
    ENGLISH EXAMINATION</h1>
    <div class="tble">
    <table border="1">
    <tr>
        <td colspan="5">
      Q1. One who abandons his religious faith ?
        </td>
        <td> <input type="radio" name="loc" value="">Apostate
                    </td>
       <td> <input type="radio" name="loc" value=""> prostate
                    </td>
        <td> <input type="radio" name="loc" value=""> profane
                    </td>
        <td> <input type="radio" name="loc" value=""> agnostic
        </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q2. A hater of knowledge and learning ?
        </td>
        <td> <input type="radio" name="loc" value=""> bibliophile
                    </td>
       <td> <input type="radio" name="loc" value="">philologist
                    </td>
        <td> <input type="radio" name="loc" value="">misogonist
                    </td>
        <td> <input type="radio" name="loc" value="">misologist
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
       Q3. Commencement of words with the same letter?
        </td>
        <td> <input type="radio" name="loc" value=""> Pun
                    </td>
       <td> <input type="radio" name="loc" value=""> allitertaion
                    </td>
        <td> <input type="radio" name="loc" value=""> transferred epithet
                    </td>
        <td> <input type="radio" name="loc" value=""> Oxymoron
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q4. person who does not believe in the existence of god ?
        </td>
        <td> <input type="radio" name="loc" value=""> Theist
                    </td>
       <td> <input type="radio" name="loc" value="">Heretic
                    </td>
        <td> <input type="radio" name="loc" value="">Atheist
                    </td>
        <td> <input type="radio" name="loc" value=""> Fanatic
                    </td>
        
    </table>
        <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q5. One who believes in the power of fate ?
        </td>
        <td> <input type="radio" name="loc" value=""> Pun
                    </td>
       <td> <input type="radio" name="loc" value=""> allitertaion
                    </td>
        <td> <input type="radio" name="loc" value=""> transferred epithet
                    </td>
        <td> <input type="radio" name="loc" value=""> fatalist
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
    header("location:reasoningstrtpge.html");
}
?>