<?php
    // include './Core/sql.php';

    // $pars = array();
    // $pars[] =  '1';
    // $pars[] =  '2';
    // $pars[] =  '3';
    // $sql =   "  SELECT name, district, population
    //             FROM world.city 
    //             where id = '{0}'
    //             or id = '{1}'
    //             or id = '{2}'";

    // $data = exeSql($sql,$pars);
    // $header = array( "name", "distr","pop");

    // echo "<table>\n"; 
    // echo "<tr>\n";
    // for($i = 0; $i<count($header); $i++) 
    //     echo "<th>" . $header[$i] . "</th>\n"; 
    // echo "</tr>\n";
    
    // while($row = mysqli_fetch_array($data)) 
    // { 
    //     echo "<tr>\n";
    //     for($i = 0; $i<count($header); $i++)  
    //         echo "<td>". $row[$i]. "</td>\n"; 
    //     echo "</tr>\n";
    // }
    
    // echo "</table>\n";

    function createHtmlTable($data, $header){  
        echo "<table>\n"; 
        echo "<tr>\n";
        for($i = 0; $i<count($header); $i++) 
            echo "<th>" . $header[$i] . "</th>\n"; 
        echo "</tr>\n";
        
        while($row = mysqli_fetch_array($data)) 
        { 
            echo "<tr>\n";
            for($i = 0; $i<count($header); $i++)  
                echo "<td>". $row[$i]. "</td>\n"; 
            echo "</tr>\n";
        }
        
        echo "</table>\n";
    }
?>