<?php
if(isset($_POST['register'])){
    

    $Name=$_POST['Name'];
    $ID=$_POST['studid'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $formEntries=array($Name,$ID,$email,$password);

    $returnStr="";


    for($i=0;$i<count($formEntries);$i++){
        if(empty($formEntries[$i])){
      
            switch($i){
                case 0:
                    $returnStr.="&Name";
                break;
                case 1:
                    $returnStr.="&ID";
                break;
                case 2:
                    $returnStr.="&email";
                break;
                case 3:
                    $returnStr.="&password";
                break;

            }

        }
    }

    if(!preg_match("/^[a-z,A-Z]*$/",$Name)){
        $returnStr.="&characters";
    }
    else{


        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $returnStr.="&InValidEmail";
        }
        
    }


   
    if(strlen($returnStr)>0){
        $returnUrl=("location:studentreg.php?".substr($returnStr,1)); 
     
        header($returnUrl);
        exit();
    }
}
else{

    header("location:studentreg.php");
}
header("location:studentview.html");
?>