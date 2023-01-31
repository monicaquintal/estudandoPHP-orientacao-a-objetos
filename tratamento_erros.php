<?php

try {
  echo '<h3> *** Try *** </h3>';

  // $sql = 'Select * from clientes';
  // mysql_query($sql); // erro

  if (!file_exists('require_arquivo_a.php')) {
    throw new Exception('O arquivo em questão deveria estar disponível às ' . date('d/m/Y H:i:s') . ' horas, mas não estava. Vamos seguir mesmo assim.');
    //classe já definida de forma nativa no PHP
    // usada para criação de novo objeto do tipo exceção.
    // lanca exceção que será capturada no catch
  }

} catch (Error $e) {

  echo '<h3> *** Catch Error *** </h3>';
  echo '<p style="color: red;">' . $e . '</p>';
  // a mensagem de erro é impressa
  // porém a aplicação não "morre"!!
  // armazenando esse erro em BD

} catch (Exception $e) {

  echo '<h3> *** Catch Exception *** </h3>';
  echo '<p style="color: red;">' . $e . '</p>';
  // armazenando esse erro em BD

} finally {

  echo '<h3> *** Finally *** </h3>';

}


?>