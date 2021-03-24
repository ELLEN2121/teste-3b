<?php
    $ano = "";
?>

<html>
<head>
    <title>Violência Doméstica</title>
    <style>
    #sombra{
        background-color:cornsilk;
        width: 350px;
        padding: 150px;
    
       box-shadow: 5px 5px 0 #333;
       -webkit-box-shadow: 5px 5px 0 #333;
       -moz-box-shadow: 5px 5px 0 #333;

}   
    body{
        text-align: center;
        margin: 0%; 
    } 
    #meiotela {
        width: 110vw;
        height: 200vh;
        background: #6C7A89;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
       
        
	} 
  
   
    #a {
    width: 300px;
    height: 25px;
    }

    
   </style>
        
  
</head>
<body>
<div id="meiotela" >
   <div id="sombra"> <h1> Violência domestica</h1> 
    <?php
        $ano = array("2011-", "2012-", "2013-", "2014-", "2015-", "2016-");
        foreach($ano as $ano) {
            echo "<a href=\"frontend.php?seleciona=$ano\">$ano</a> .";
        }
        $local = null;
    ?>

    <form method="post" action="frontend.php">
        <h2>Localidade:</h2>
            <p><textarea name="local" ><?=$local?></textarea></p>
            <p><button type="submit">OK!</button></p>
    </form>
    </div>
    </div>
</body>
</html>