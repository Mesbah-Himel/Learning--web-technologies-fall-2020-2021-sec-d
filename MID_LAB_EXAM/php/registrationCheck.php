
<?php

if(isset($_REQUEST['Sign Up'])){
    
    if(!empty($_REQUEST['name']) || !empty($_REQUEST['id']) || !empty($_REQUEST['password']) || !empty($_REQUEST['radio'])){
        
        if($_REQUEST['password'] == $_REQUEST['cpassword']){
            
            $myfile = fopen('register.txt', 'a');
	        $data = $_REQUEST['radio']."|".$_REQUEST['password']."|".$_REQUEST['id']."|".$_REQUEST['name']."\n";
	        fwrite($myfile, $data);
	        fclose($myfile);
            
        }
        
        else{
            
            echo "Error";
            
        }
        
    }
    
    else{echo "Please fill up all information.";}
    
}

?>