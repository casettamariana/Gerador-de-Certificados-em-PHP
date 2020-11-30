<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Certificado Embaixadores da Cidadania</title>

  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Script's com defer, para que os mesmo só sejam carregados após todo o resto da página -->
  <script src="./node_modules/jquery/dist/jquery.min.js" defer></script>
  <script src="./node_modules/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js" defer></script>
  <script src="./assets/js/scripts.js" defer></script>
  
</head>
<body>
  
  <form id="form" name="form" method="POST" action="server-mPdf-version-php7.php">
    <input type="text" name="cpf" id="cpf" maxlength="14">

    <button type="submit" id="buttonCertificado">Gerar Certificado</button>
  </form>
  <div class="result"></div>

</body>
</html>