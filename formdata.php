<?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
          
        function get_data() { 
            $datae = array(); 
            $datae[] = array( 
                'Name' => $_POST['name'], 
                'Email' => $_POST['email'], 
                'Message' => $_POST['message'], 
            ); 
            return json_encode($datae); 
        } 
          
        $name = "formdata"; 
        $file_name = $name . '.json'; 
       
        if(file_put_contents( 
            "$file_name", get_data())) { 
                echo $file_name .' file created'; 
            } 
        else { 
            echo 'There is some error'; 
        } 
    } 
?> 
