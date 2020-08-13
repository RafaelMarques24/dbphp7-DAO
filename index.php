<?php  

require_once("config.php");

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;


//----------------------------------------------------------------------------------
// ATUALIZA PELO ID USUARIO alterar.
//$usuario = new Usuario();
//$usuario->loadById(7);
//$usuario->update("professor", "!@#$%");
//echo $usuario;

//----------------------------------------------------------------------------------
//CRIANDO UM NOVO USUARIO INSERT
//$aluno = new Usuario("joao", "maria123");
//$aluno->insert();
//echo $aluno;
//-----------------------------------------------------------------------------------

//CARREGA UM USUARIO USANDO LOGIN E SENHA
//$usuario = new Usuario();
//$usuario->login("professor", "!@#$%¨&");
//echo $usuario;

//-----------------------------------------------------------------------------------
//BUSCA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN

//$search = Usuario::search("alu");

//echo json_encode($search);

//-----------------------------------------------------------------------------------

// CARREGA UMA LISTA DE USUARIOS.
//require_once("config.php");

//$lista = Usuario::getList();

//echo json_encode($lista);
//-----------------------------------------------------------------------------------
/*
require_once("config.php");

$root = new Usuario(); // SELECT DE UM ID ESPECIFICO do Usuario.

$root->loadById(8);

echo $root;
//---------------------------------------------------------------------------------------
*/
/*require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */ // SELECT SIMPLES DE TODOS OS DADOS.

?>