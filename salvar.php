
<?php 
     $numero = $_POST["numb"];
     $data = $_POST["data"];
     $firma =  $_POST["firma"];
     $endereço = $_POST["end"];
     $complemento=$_POST["comple"];
     $bairro= $_POST["bairro"];
     $cidade=$_POST["cidade"];
     $estado= $_POST["estado"];
     $cep=  $_POST["cep"];
     $cnpj = $_POST["cnpj"];
     $inscriçao =  $_POST["ins"];
     $telefone= $_POST["tel"];
     $celular=  $_POST["cel"];
     $email=  $_POST["email"];
     $obs = $_POST["obs"];

     if(empty($firma))
    {
        echo "<b>O campo firma deve ser preenchido.";
        include "erro.php";
        die;
    }
     if(empty($telefone||$celular||$email))
    {
        echo "<b>O campo telefone, celular ou email deve ser preenchido.</b>";
        include "erro.php";
        die;
    }

     if(empty($cnpj)) {
        echo "<b>O campo cnpj deve ser preenchido.";
        include "erro.php";
        die;
        }
    if (strlen($cnpj) != 14) {
        echo "<b>O campo cnpj está incorreto.";
        include "erro.php";
        die;
        }
        
        $cnpj = preg_replace("/[^0-9]/", "", $cnpj);
        $cnpj = str_pad($cnpj, 14, '0', STR_PAD_LEFT);
        
       
     
        
     if ($cnpj == '00000000000000' || 
            $cnpj == '11111111111111' || 
            $cnpj == '22222222222222' || 
            $cnpj == '33333333333333' || 
            $cnpj == '44444444444444' || 
            $cnpj == '55555555555555' || 
            $cnpj == '66666666666666' || 
            $cnpj == '77777777777777' || 
            $cnpj == '88888888888888' || 
            $cnpj == '99999999999999') {

                echo "<b>O campo cnpj está incorreto.";
                include "erro.php";
                die;
            
         
         } 

    $f = fopen("mensagens.csv","a");
    fputcsv($f, array($numero, $data, $firma,$endereço, $complemento, $bairro, $cidade, $estado, $cep, $cnpj,$inscriçao,$telefone, $celular, $email, $obs));
    fclose($f);

    // redirecionamento
    header('location: Obrigado.php');

    ?>