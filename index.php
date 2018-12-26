<?php
    include 'SQLHub.php';
    
    $pars = array();
    $pars[] =  '1';
    $pars[] =  '2';
    $pars[] =  '3';
    $sql =   "  SELECT *
                FROM world.city 
                where id = '{0}'
                or id = '{1}'
                or id = '{2}'";

    $data = exeSql($sql,$pars); 
    echo mysqli_num_rows($data);
?>