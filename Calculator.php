
<html>
    <head>
       <title>Calculator</title> 
       <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
       <link rel="stylesheet" href="CalcStyle.css">
      
    </head>

    <body>
          <?php
            $nbr="";
             if(isset($_POST['cmd'])){
                $nbr = $_POST['cmd'];
            }


            $stored='';
            
            if(isset($_POST['stored']) && preg_match('~^(?:[\d.]+[*/+-]?)+$~',$_POST['stored'],$out)){
                $stored=$out[0];    
                echo "<br>Aloha<br><br>";
            }


        
            $display="display";
            $display= $stored.$nbr;
            $result=" result ";
            echo "<br>nbr: $nbr <br>stored: $stored <br>display: $display<br><br>";
           

            if($nbr=='C'){
                $display='';
                echo"<br>SEEE<br>";
            }elseif($nbr=='=' && preg_match('~^\d*\.?\d+(?:[*/+-]\d*\.?\d+)*$~',$stored)){
                $result.=eval("return $stored;");
                echo"<br>r<br>";
            }else{
                echo"<br>nope<br>";
            }
                
        ?>

        <h3>Calculator(php)</h3><br>
        

        <form class="Calculator" method="post" action="Calculator.php">
             <?php
                 echo $display." = ".$result."<br>";
            
                 
            ?> 
            <br>
        
            <br>
            <div class="calcNumbpad">
                <button class=boxbtn type="submit" name="cmd" value="7">7</button>
                <button class=boxbtn type="submit" name="cmd" value="8">8</button>
                <button class=boxbtn type="submit" name="cmd" value="9">9</button>
                
                <button class=boxbtn type="submit" name="cmd" value="*">*</button>
                <button class=boxbtn type="submit" name="cmd" value="/">/</button>
                
                <button class=boxbtn type="submit" name="cmd" value="4">4</button>
                <button class=boxbtn type="submit" name="cmd" value="5">5</button>
                <button class=boxbtn type="submit" name="cmd" value="6">6</button>

                <button class=boxbtn type="submit" name="cmd" value="+">+</button>
                <button class=boxbtn type="submit" name="cmd" value="-">-</button>
                
                <button class=boxbtn type="submit" name="cmd" value="1">1</button>
                <button class=boxbtn type="submit" name="cmd" value="2">2</button>
                <button class=boxbtn type="submit" name="cmd" value="3">3</button>

                <button class=boxbtn type="submit" name="cmd" value="C">C</button>
                <button class=boxbtn type="submit" name="cmd" value="c">C</button>

                <button class=boxbtn type="submit" name="cmd" value=".">.</button>
                <button class=boxbtn type="submit" name="cmd" value="1">0</button>
                <button class=boxbtn type="submit" name="cmd" value="*">*</button>
                
                <button class=boxbtn type="submit" name="cmd" value='='>=</button>
                <?php
                 echo "<input type=\"hidden\" name=\"stored\" value=\"$display\">";
                ?>
            </div>
        </form>

 
        

    </body>
</html>