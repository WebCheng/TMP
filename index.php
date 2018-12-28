<?php
    include './Core/sql.php';
    include './Core/table.php';
    $select_op = $_POST['select_op'];
    if($select_op != ""){
        $pars = array($select_op);
        $sql =   "  SELECT NAME, DISTRICT, POPULATION
                    FROM WORLD.CITY  ";

        $data = exeSql($sql,$pars);
        $header = array( "NAME", "DISTRICT","POPULATION");  
        createHtmlTable($data,$header); 
    }
?>