<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 28/11/2017
 * Time: 16:02
 */

// CLASSE PRODUTO CRIADO APENAS COMO EXERCICIO

class Produto
{

    private $produtoId;
    private $produtoDesc;
    private $produtoValor;
    private $produtoCad;

    public function getProdutoId()
    {
        return $this->produtoId;
    }

    public function setProdutoId($valor)
    {
        $this->produtoId = $valor;
    }


    public function getProdutoDesc()
    {
        return $this->produtoDesc;
    }

    public function setProdutoDesc($valor)
    {
        $this->produtoDesc = $valor;
    }


    public function getProdutoValor()
    {
        return $this->produtoValor;
    }

    public function setProdutoValor($valor)
    {
        $this->produtoValor = $valor;
    }


    public function getProdutoCad()
    {
        return $this->produtoCad;
    }

    public function setProdutoCad($valor)
    {
        $this->produtoCad = $valor;
    }






/*--------------------------------- METODOS DE SELECT --------------------------------------*/


    //METODO PARA CARREGAR A PARTIR DE UM ID
    public function loadById($id)
    {
        $sql = new Sql();
        $resultado = $sql->select("SELECT * FROM tb_produto WHERE produtoId = :ID",array(
            'ID'=>$id
        ));

        if(count($resultado)>0){
            $this->setData($resultado[0]);
        }
    }

    /*METODO TRAS UMA LISTA COM TODOS OS USUARIOS QUE ESTAO EM UMA TABELA COMO NAO TEM O THIS
   ESSE METODO PODE SER ESTATICO ENTAO PODE CHAMAR DIRETO NA HORA DE CRIAR A CLASSE*/
    public static function getList()
    {

        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_produto ORDER BY produtoDesc;");

    }


    //METODO ESTATICO PQ NAO TEM THIS QUE BUSCA O PRODUTO PELA DESCRICAO
    public static function search($descricao)
    {

        $sql = new Sql;
        return $sql->select("SELECT * FROM tb_produto WHERE produtoDesc LIKE :SEARCH ORDER BY produtoDesc",array(
            ':SEARCH' => "%" . $descricao . "%"
        ));

    }






    /*--------------------------------- METODOS DE INSERT, UPDATE E DELETE --------------------------------------*/

    // INSERT - DEVE SER CRIADO A PROCEDURE NO BANCO DE DADOS
    public function insert()
    {

        $sql = new Sql();
        $resultado = $sql->select("CALL sp_produto_insert(:DESCRICAO, :VALOR)",array(
            ':DESCRICAO'=>$this->getProdutoDesc(),
            ':VALOR'=>$this->getProdutoValor()
        ));

        if(count($resultado > 0)){
            $this->setData($resultado[0]);
        }

    }

    //UPDATE
    public function update($descricao, $valor)
    {

        $this->setProdutoDesc($descricao);
        $this->setProdutoValor($valor);

        $sql = new Sql();
        $sql->query("UPDATE tb_produto SET produtoDesc = :DESCRICAO, produtoValor = :VALOR WHERE produtoId = :ID",array(
            ':DESCRICAO'=>$this->getProdutoDesc(),
            ':VALOR'=>$this->getProdutoValor(),
            ':ID'=>$this->getProdutoId()
        ));

    }


    //DELETE
    public function delete()
    {

        $sql = new Sql();
        $sql->query("DELETE FROM tb_produto WHERE produtoID = :ID",array(
           ':ID'=>$this->getProdutoId()
        ));

        //OPCIONAL
        $this->setProdutoId(0);
        $this->setProdutoDesc("");
        $this->setProdutoValor("");
        $this->setProdutoCad(new DateTime());

    }





    /*--------------------------------- METODOS DE "CONFIGURACAO DA CLASSE" VAMOS CHAMAR ASSIM KKK --------------------------------------*/

    //FUNCAO PARA SETAR O OBJETO ESSA FUNÇÃO É CHAMADA EM PRATICAMENTE TODOS OS METODOS
    public function setData($row)
    {

        $this->setProdutoId($row['produtoId']);
        $this->setProdutoDesc($row['produtoDesc']);
        $this->setProdutoValor($row['produtoValor']);
        $this->setProdutoCad(new DateTime($row['produtoCad']));

    }



    // METODO PARA DEFINIR VALORES DO OBJETO AO CHAMAR
    public function __construct($descricao = "", $valor = "")
    {
        $this->setProdutoDesc($descricao);
        $this->setProdutoValor($valor);
    }


    /*METODO CONSTRUTOR TOSTRING "METODO MAGICO" PARA MOSTRAR OS DADOS - SELECT*/
   public function __toString()
    {
        return json_encode(array(

            "produtoId" => $this->getProdutoId(),
            "produtoDesc" => $this->getProdutoDesc(),
            "produtoValor" => $this->getProdutoValor(),
            "produtoCad" => $this->getProdutoCad()->format("d/m/Y H:i:s") // formatando a data no formato brasileiro

        ));

    }




}