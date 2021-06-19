<?php
    function backup(){
        include '../App/conBackup.php'; 

        $arquivo = fopen(date('d-m-Y').'.sql','wt'); 
        $tables = $pdo->query('SHOW TABLES');
        
        foreach ($tables as $table) {
            $sql = '-- TABLE: '.$table[0].PHP_EOL; 
            $create = $pdo->query('SHOW CREATE TABLE `'.$table[0].'`')->fetch(); 
            $sql.=$create['Create Table'].';'.PHP_EOL;
            fwrite($arquivo, $sql); 
            $linhas = $pdo->query('SELECT * FROM `'.$table[0].'`'); 
            $linhas->setFetchMode(PDO::FETCH_ASSOC); 

            foreach ($linhas as $linha) {
                $linha = array_map(array($pdo,'quote'),$linha); 
                $sql = 'INSERT INTO `'.$table[0].'` (`'.implode('`, `',array_keys($linha)).'`) VALUES ('.utf8_encode(implode(', ',$linha)).');'. PHP_EOL;
                fwrite($arquivo, $sql); 
            }

            $sql = PHP_EOL; 
            $resultado = fwrite($arquivo, $sql); 
            flush();          
        }

        if($resultado !== false){
           
        }else{
            echo 'OPS FALHOU!';
        }
        fclose($arquivo); 
    }   
     session_destroy();
    unset($_SESSION['userEmail'],
    $_SESSION['userSenha']);
    header('location: /../s-pdv/index.php');
    backup();
?>