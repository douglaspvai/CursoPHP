<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 27/11/2017
 * Time: 12:03
 */

//CLASSE DA TABELA USUARIO
class Usuario
{

    private $idUsuario;
    private $desLogin;
    private $desSenha;
    private $dtCadastro;

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($value)
    {
        $this->idUsuario = $value;
    }


    public function getDesLogin()
    {
        return $this->desLogin;
    }

    public function setDesLogin($value)
    {
        $this->desLogin = $value;
    }


    public function getDesSenha()
    {
        return $this->desSenha;
    }

    public function setDesSenha($value)
    {
        $this->desSenha = $value;
    }


    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    public function setDtCadastro($value)
    {
        $this->dtCadastro = $value;
    }

    /*METODO SELECT PARA ALIMENTAR OS ATRIBUTOS CARREGANDO O METODO DO BANCO PARA OS OBJETOS */
    public function loadById($id)
    {

        $sql = new Sql();

        $result = $sql->select("SELECT * FROM tb_usuarios WHERE idUsuario = :ID", array(
            ":ID" => $id
        ));

        if (count($result > 0)) {

            $this->setData($result[0]);

            // O MESMO QUE ESSE DE CIMA QUE CHAMA A FUNÇÃO
            /*$row = $result[0];

            $this->setIdUsuario($row['idUsuario']);
            $this->setDesLogin($row['desLogin']);
            $this->setDesSenha($row['desSenha']);
            $this->setDtCadastro(new DateTime($row['dtCadastro'])); // ALTERANDO O FORMATO PARA O */

        }
    }

    /*METODO TRAS UMA LISTA COM TODOS OS USUARIOS QUE ESTAO EM UMA TABELA COMO NAO TEM O THIS
    ESSE METODO PODE SER ESTATICO ENTAO PODE CHAMAR DIRETO NA HORA DE CRIAR A CLASSE*/
    public static function getList()
    {
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY desLogin;");
    }


    //METODO ESTATICO PQ NAO TEM THIS QUE BUSCA O USUARIO PELA DESCRICAO LOGIN
    public static function search($login)
    {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios WHERE desLogin LIKE :SEARCH ORDER BY desLogin", array(
            ':SEARCH' => "%" . $login . "%"
        ));
    }

    //METODO PARA DEFINIR LOGIN E SENHA
    public function login($login, $password)
    {
        $sql = new Sql();

        $result = $sql->select("SELECT * FROM tb_usuarios WHERE desLogin = :LOGIN AND desSenha = :PASSWORD", array(
            ":LOGIN" => $login,
            ":PASSWORD" => $password
        ));

        if (count($result > 0)) {

            $this->setData($result[0]);

            // O MESMO QUE ESSE DE CIMA QUE CHAMA A FUNÇÃO
            /* $this->setIdUsuario($row['idUsuario']);
             $this->setDesLogin($row['desLogin']);
             $this->setDesSenha($row['desSenha']);
             $this->setDtCadastro(new DateTime($row['dtCadastro'])); // ALTERANDO O FORMATO PARA O PADRAO*/

        } else {


            throw new Exception("LOGIN e/ou SENHA INVALIDOS");


        }
    }


    //FUNCAO PARA SETAR O OBJETO
    public function setData($data)
    {

        $this->setIdUsuario($data['idUsuario']);
        $this->setDesLogin($data['desLogin']);
        $this->setDesSenha($data['desSenha']);
        $this->setDtCadastro(new DateTime($data['dtCadastro'])); // ALTERANDO O FORMATO PARA O PADRAO

    }


    // METODO PARA INSERIR NO BANCO DE DADOS
    public function insert()
    {
        $sql = new Sql();

        //PASSA 2 PARAMETROS O LOGIN E A SENHA
        $result = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            'LOGIN' => $this->getDesLogin(),
            'PASSWORD' => $this->getDesSenha()
        ));

        if (count($result) > 0) {
            $this->setData($result[0]);
        }
    }

    //METODO PARA ALTERAR NO BANCO DE DADOS
    public function update($login, $password){

        $this->setDesLogin($login);
        $this->setDesSenha($password);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET desLogin = :LOGIN, desSenha = :PASSWORD WHERE idUsuario = :ID",array(
            ':LOGIN'=>$this->getDesLogin(),
            ':PASSWORD'=>$this->getDesSenha(),
            ':ID'=>$this->getIdUsuario()
        ));
    }

    //METODO PARA EXCLUIR NO BANCO DE DADOS
    public function delete(){

        $sql = new Sql();

        $sql->query("DELETE FROM tb_usuarios WHERE idUsuario = :ID", array(
            ':ID'=>$this->getIdUsuario()
        ));

        $this->setIdUsuario(0);
        $this->setDesLogin("");
        $this->setDesSenha("");
        $this->setDtCadastro(new DateTime());
    }


public function __construct($login ="", $password="")
{
    $this->setDesLogin($login);
    $this->setDesSenha($password);
}


    /*METODO CONSTRUTOR TOSTRING "METODO MAGICO" PARA MOSTRAR OS DADOS - SELECT*/
public function __toString()
{
    // TODO: Implement __toString() method.

    return json_encode(array(

        "idUsuario" => $this->getIdUsuario(),
        "desLogin" => $this->getDesLogin(),
        "desSenha" => $this->getDesSenha(),
        "dtCadastro" => $this->getDtCadastro()->format("d/m/Y H:i:s") // formatando a data no formato brasileiro

    ));
}

}