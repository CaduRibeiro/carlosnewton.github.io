<?php

// SMTP Config
define("SMTP_SERVER", "smtp.gmail.com");
define("SMTP_PORT", 587);
define("SMTP_USERNAME", "carlosnewton005@gmail.com");
define("SMTP_PASSWORD", "");
define("SMTP_SUBJECT_ADMIN", "Olá, recebemos sua mensagem e iremos entre em contato prontamente, obrigado.");

define("MAIL_FROM_ADDRESS", "carlosnewton005@gmail.com");
define("MAIL_FROM_NAME",  "Carlos Ribeiro");

define("MAIL_TO_ADDRESS", "carlostip4@hotmail.com");
define("MAIL_TO_NAME",  "Carlos");

/* RECAPTHCA */
// define("RECAPTCHA_SECRET_KEY", "6Le-1MsbAAAAAFbErSyMOn9IsemfeQk49JtKfQWS");

/* Erros messages */
define("E001", "Campo obligatório");
define("E002", "Nome - " . E001);
define("E003", "Assunto - " . E001);
define("E004", "E-mail - " . E001);
define("E005", "Mensagem - " . E001);
define("E006", "Oficina - " . E001);
define("E007", "Su mensaje fue enviado con éxito. <br>Nos contactaremos a la brevedad.");
define("E008", "Hubo un problema al enviar la información. Vuelve a intentarlo más tarde.");
define("E009", "Hubo un problema con la configuración del recaptcha. Vuelve a intentarlo más tarde.");
define("E010", "Ingrese el código del país y el número para continuar.");
define("E011", "E-mail inválido, por favor entre com um e-mail válido.");
define("E012", "Sua mensagem foi enviada com sucesso. <br>Entraremos em contato com você em breve");
define("E013", "Ocorreu um problema ao enviar as informações. Tente mais tarde");