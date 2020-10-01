function IsEmail(email){
    var exclude=/[^@-.w]|^[_@.-]|[._-]{2}|[@.]{2}|(@)[^@]*1/;
    let check=/@[w-]+./;
    let checkend=/.[a-zA-Z]{2,3}$/;
    if(((email.search(exclude) != -1)||(email.search(check)) == -1)||(email.search(checkend) == -1)){
        return console.log("E-mail inválido");
    }
    else {
        return console.log("E-mail válido");
    }
}

IsEmail("gere.c@hotmail.com")