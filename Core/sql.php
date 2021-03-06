<?php

    //function parameters, two variables.
    //returns the second argument passed into the function
    function exeSql($sql, $pars, $isLimit = 1){ 
        $ini = parse_ini_file('config.ini');
        $servername = $ini['db_name'];
        $username = $ini['db_user'];
        $password = $ini['db_password'];

        // Create connection
        $conn = new mysqli($servername, $username, $password);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        for ($i=0; $i < count($pars); $i++)
            $sql = str_replace("{".$i."}", $pars[$i], $sql); 

        if($isLimit)
            $sql .=  " LIMIT 30 ";

        

        $data = mysqli_query($conn, $sql); 

        return $data;  
    }
    
?>