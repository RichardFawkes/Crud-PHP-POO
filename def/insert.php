<?php
include('connection.php');

$now = new DateTime();
$datetime = $now->format('Y-m-d H:i:s'); 
// Clean CPF/CNPJ
function tirarCaracteresEspeciais($string){
    //Usa a função para padronizar a codificação da página
        $string = utf8_encode($string);
    //Trim retira os espaços vazios no começo e fim da variável
        $string = trim($string);
    //str_replace substitui um carácter por outro, nesse caso espaço por nada
        $string = str_replace(' ', '', $string);
    //Aqui substitui o underline por nada
        $string = str_replace('_', '', $string);
    //Aqui retira a barra
        $string = str_replace('/', '', $string);
    //Nessa linha o traço
        $string = str_replace('-', '', $string);
    //A abertura de parenteses
        $string = str_replace('(', '', $string);
    //O fechamento de parenteses
        $string = str_replace(')', '', $string);
    //O ponto
        $string = str_replace('.', '', $string);
    //No fim é retornado a variável com todas as alterações
        return $string;
    }
    
  $cpf_e_cnpj = tirarCaracteresEspeciais($_POST['cpf_cnpj']);

    


//Insert.
if(isset($_POST['nome'])){
    $sql = $conn->prepare("INSERT INTO clientes VALUES (null,?,?,?,?,?,?,?,?)");
    $sql -> execute(array($_POST['nome'],$cpf_e_cnpj,$_POST['data_nascimento'],$_POST['endereco'],$_POST['descri_titulo'],$_POST['valor'],$_POST['data_venc'],$datetime));
    echo 'Inserido com Sucesso<br>',$cpf_e_cnpj ;
}
 

?>

