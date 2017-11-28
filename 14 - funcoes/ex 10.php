<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 25/10/2017
 * Time: 15:24
 */

//FUNCOES RECURSIVAS - UMA FUNCAO CHAMA ELA MESMA

// LISTA DE HIERARQUIA DE CARGOS
//array bimidicional

// ISSO ESTA MANUAL, NA MÃO ENTRETANTO DEVERIA VIR DE UM BANCO DE DADOS
$hierarquia = array(

    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Inicio: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //Inicio Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas',
                        'subordinados' => array(
                            // Inicio: Cordenador de Vendas
                            array(
                                'nome_cargo' => 'Coordenador de Vendas',
                                'subordinados' => array(

                                    // Inicio: Vendedores
                                    array(
                                        'nome_cargo' => 'Vendedores'
                                    )

                                    // Termino: Vendedores
                                )
                            )// Termino: Cordenador de Vendas
                        )
                    ) //Termino Gerente de Vendas

                )
            ),


            //Inicio Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(

                    //Inicio: Gerente de Contas a pagar
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            //Inicio: Supervisor de Pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            )

                            // Termino: Supervisor de pagamentos

                        )

                    ),

                    //Termino: Gerente de Contas a Pagar
                    //Inicio: Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            //Inicio Supervisor de Suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos'
                            )
                            //Termino Supervisor de Suprimentos

                        )
                    )


                    //Termino : Gerente de Compras

                ),
            )
        )
        //Termino: Diretor Comercial

    ),
    array(
        'nome_cargo' => 'Executivo',
        'subordinados' => array(
            array(
                'nome_cargo' => 'Assistente de Executivo'
            )
        )
    )
);

function exibe($cargos) // função recursiva onde ela chama ela mesma
{

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {//isset - verifica se existe a variavel e "cout" conta a quantidade dentro do array .

            $html .= exibe($cargo['subordinados']);

        }
        $html .= "</li>";

    }

    $html .= "</ul>";

    return $html;

}

echo exibe($hierarquia);