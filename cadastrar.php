<?php

include_once 'conexao.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (empty($dados['email'])) {
  $return = ['status' => false, 'msg' => "<p>Erro: Necessário preencher o campo e-mail!</p>"];
} else {
  $query_usuario = "INSERT INTO cadastrorocketnews (email) VALUES (:email)";
  $cad_usuario = $conn->prepare($query_usuario);
  $cad_usuario->bindParam(':email', $dados['email']);
  $cad_usuario->execute();

  if ($cad_usuario->rowCount()) {
    $return = ['status' => true, 'msg' => "<p style='color:#04d361; margin-top:10px;' >Cadastro realizado com sucesso</p>"];
  } else {
    $return = ['status' => false, 'msg' => "<p>Usúario não cadastrado</p>"];
  }
}

echo json_encode($return);
