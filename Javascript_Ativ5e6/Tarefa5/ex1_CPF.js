
    function validaCPF(cpf) {
        let soma = 0;
        let resto;

      if (cpf == "00000000000") //Caso 
        return false;
         
      for (i=1; i<=9; i++) soma = soma + parseInt(cpf.substring(i-1, i)) * (11 - i);
      resto = (soma * 10) % 11;
       
        if ((resto == 10) || (resto == 11))  resto = 0;
        if (resto != parseInt(cpf.substring(9, 10)) ) return false;
       
      soma = 0;
        for (i = 1; i <= 10; i++) soma = soma + parseInt(cpf.substring(i-1, i)) * (12 - i);
        resto = (soma * 10) % 11;
       
        if ((resto == 10) || (resto == 11))  resto = 0;
        if (resto != parseInt(cpf.substring(10, 11) ) ) return false;
        return true;
    }

    //Caso queira ignorar isso abaixo e apenas chamar o script pelo .html e fazer de lá, basta importar no html:
        // <script src="myscripts.js"></script> 

    let cpf = "11111111111";
    console.log("O CPF é: ", validaCPF(cpf));
