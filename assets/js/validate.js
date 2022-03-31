function validateForm() {
    let info = document.getElementById("message-info");
    let fname = document.forms["contactForm"]["fname"].value;
    let email = document.forms['contactForm']['email'].value;
    let subject = document.forms['contactForm']['subject'].value;
    let message = document.forms['contactForm']['message'].value;
    let danger = '<i class="fa-solid fa-circle-xmark"></i>';
    let success = '<i class="fa-solid fa-circle-check"></i>';
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (fname.length < 5 || fname.length > 30) {
      info.classList.add('bg-danger');
      info.prepend(danger);
      info.innerText = "Numele trebuie sa contina minim 5 caractere sau maxim 30 de caractere!";
      return false;
    }else if(!email.match(validRegex)){
        info.classList.add('bg-danger');
        info.prepend(danger);
        info.innerText = "Email-ul nu are un format valid!";
        return false;
    }else if(subject.length < 5 || subject.length > 30){
        info.classList.add('bg-danger');
        info.prepend(danger);
        info.innerText = "Subiectul trebuie sa contina minim 5 caractere sau maxim 30 de caractere!";
        return false;
    }else if(message.length < 5){
        info.classList.add('bg-danger');
        info.prepend(danger);
        info.innerText = "Mesajul trebuie sa contina minim 5 caractere!";
        return false;
    }else{
        info.classList.remove('bg-danger');
        info.prepend(success);
        info.classList.add('bg-success');
        info.innerText = "Formularul a fost completat cu succes!";
        return true;
    }
  }