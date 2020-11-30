<?php
  header("Content-type: text/html; charset=utf-8");
  header('Pragma: no-cache');


  ob_start();

 


  //  insira aqui os dados de acesso do seu banco de dados
  $servername = '';
  $username = '';
  $password = '';
  $db = '';

  // no contexto que foi usado, o input solicita o CPF e introduz uma mascara para o cpf
  // com isso temos que limpar essa máscara para que o CPF fique apenas com números
  $cpfMask = $_POST['cpf'];
  $cpf = str_replace(".", "",  $cpfMask);
  $cpf = str_replace("-", "",  $cpf);


  try {
    $conn = new mysqli($servername, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        $array["erro"] = $conn->connect_error;
        die("Connection failed: " . $conn->connect_error);
    }



    
    
    $sql = "select * from nome_tabela where cpf = '$cpf'";

    $result = $conn->query($sql);

    // verifica se existe o CPF inserido, no banco de dados
    if ($result->num_rows > 0) {
      // dados de saída de cada linha e converter para UTF_8
      while ($row = $result->fetch_assoc()) {
        $cpf = utf8_encode($row["cpf"]);
      }
    } else {
      echo 'Certificado não disponível para esse CPF.'; 
      die();
    }
    $conn->close();
  } catch (Exception $ex) {
      
  }
  ?>


  <div style="background-size: 2880px 1810px; background-repeat: no-repeat; height: 800px; width: 100%; background-image: url('./diretorio_a_sua_escolha/modelo_certificado.png');">                    

    <div style="
      text-align: justify;
      margin: 75px;
      color: #000;
      font-size: 16px;
      font-weight: normal;
      line-height: 35px;
      z-index: 999;" >
        <p>
            <?php
            echo '
            Certificamos que <span style="font-weight: bold; text-transform: uppercase;">' . $nome . '</span>
            de documento de identificação 
            <span style="font-weight: bold; text-transform: uppercase;">' . $cpfMask . '</span>,
            concluiu sua participação ....
            ';
            ?>
        </p>
    </div>


  <?php

    $html = ob_get_clean();
    define('MPDF_PATCH', 'vendor/');
    include(MPDF_PATCH . 'autoload.php');
    $mpdf = new \Mpdf\Mpdf([
      'mode' => 'utf-8',
      'orientation' => 'L',
    ]);
    $mpdf->allow_charset_conversion = true;
    $mpdf->useSubstitutions = false;
    $mpdf->simpleTables = true;

    $mpdf->WriteHTML($html);

    $mpdf->Output();
    exit();


?>