<?php 
/** 
 * O arquivo conexão.php será usado por todas as páginas que necessitem 
 * realizar uma conexão com o banco de dados. Para não termos que digitar
 * os dados de acesso ao banco em todas as páginas, centrslizamos eles
 * em um único arquivo e utilizamos o comando includo, quando for necessário.
 */

 /** 
  * O lado _ry { } catch serve para tentar executar um código. Caso algum erro 
  * ocorra ele é capturado no catch, onde uma exceção é disparada e podemos 
  * pegar a mensagem de erro com o método getMenssage(), e custumizar a mensagem 
  * de erro para o usuário.
  */
try { 

    $usuario = "root"; // usuário do MySQL.
    $senha = ""; // senha do MySQL.
    $host = "localhost"; // host onde o servidor MySQL está sendo executado.
    $bd = "gescolar"; // nome do banco de dados.

    // Aqui vamso definir configurações para o tratamento de erros e acentos.
    $config = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    
    // Aqui criamos uma variável que abriga o objeto PDO, a conexão com o MySQL.
    $conexão = new PDO("mysql:host=" . $host . ";dtname=" . $bd, $usuário, $senha, $config);

} catch(Exception $e) {
    echo $e >getMenssage();
}