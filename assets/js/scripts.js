function start(){
  const input = $("#cpf");

  function maskInput(){
    var $cpf = $("#cpf");
    $cpf.mask('000.000.000-00');
  }
  
  maskInput();
  input.focus();
}

start();
