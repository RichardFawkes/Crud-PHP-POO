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
    $sql = $conn->prepare("UPDATE clientes 
    SET nome = :nome, cpfcnpj = :cpfcnpj, data_nascimento = :data_nascimento,
     endereco = :endereco, descri_titulo = :descri_titulo, valor = :valor, data_venc = :data_venc, update_at = :update_at WHERE id=:id ");
    $sql->execute(array(
        ':id'   => $_POST['idUser'],
        ':nome'   => $_POST['nome'],
        ':cpfcnpj' => $cpf_e_cnpj,
        ':data_nascimento' => $_POST['data_nascimento'],
        ':endereco' => $_POST['endereco'],
        ':descri_titulo' => $_POST['descri_titulo'],
        ':valor' => $_POST['valor'],
        ':data_venc' => $_POST['data_venc'],
        ':update_at' => $datetime
      ));
    
    echo 'Atualizado com Sucesso<br>ID_',$_POST['idUser'];
}
 

?>

