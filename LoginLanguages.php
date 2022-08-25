<?php

$language = substr ($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    if ($language == "pt")
    {
        

        // login/index PT
        
        
        $topLogin = "entrar na granna";

        $textEmail= "Email";
        $textPassword = "Senha";
        $textLogin = "Acessar";
        $textDontHaveAccount = "Não tem uma conta?";
        $textRegister = "Registrar-se";
        $boxWrongPassword = "Email ou senha não encontrado";
        
        // login/main PT
        
        $textWelcome = "Bem Vindo";
        $textSending = "Enviando (eur)";
        $textTheSelected = "O destinatário";
        $textNoPayeeFound = "Nenhum destinatário encontrado.<br>Por favor, adicionar ao menos um.";
        $textGets = "Recebe (brl)";
        $textRunTransfer = "Transferir";
        $textAddPayee = "Novo Destino";
        $textLogout = "Sair";
        
        
        $textNewPayee = "Novo Beneficiário";
        $textNameRecipient = "Quem vai receber (Nome Completo)";
        $textPixKey = "Chave PIX";
        $textBank = "Nome do Banco";
        $textBranch = "Agência";
        $textAccount = "Número da Conta";
        $textType = "Tipo da Conta";
        $textCurrent = "Conta Corrente";
        $textSaving = "Conta Poupança";
        //$textAddPayee = "Adicionar";
        $textCancel = "Cancelar";


        $teste = 'Português';
        $titled = 'granna - mais rápido, barato e fácil';

        $MainLanguage = "PT";
        $LogIn = "Entrar";
        $Contact = "Contato";
        $MeetTeam = "Conheça o Time";
        $ReportBug = "Reportar Bug";

        $yousend = "você envia (EUR)";
        $recipientgets = "destinatário recebe (BRL)";
        $trade = "Tranferir";
        $easiest = "Agência ou online?<br> O mais fácil.";
        $PaymentMethods = "Formas<br>de pagamento";
        $PersonalTransfer  = "transferência pessoal";
        $moneyietobr = "Dinheiro da Irlanda para o Brasil";
        $exchangeRate = "Taxa de câmbio Euro para Real brasileiro, sem taxa extra.";
        $fasterSimplerCheaper = "mais<br>rápido,<br>barato e fácil";
    }
    else
    {

        // login/index EN
        
        $topLogin = "Login granna";

        $textEmail= "Email";
        $textPassword = "Password";
        $textLogin = "Login";
        $textDontHaveAccount = "Don't have an account?";
        $textRegister = "Register here";
        $boxWrongPassword = "Email or password not found";
        
        //login/main
        
        $textWelcome = "Welcome";
        $textSending = "Sending (eur)";
        $textTheSelected = "The Selected Payee";
        $textNoPayeeFound = "No Payee found.<br>Please, add at least one to continue.";
        $textGets = "Gets (brl)";
        $textRunTransfer = "Run Transfer";
        $textAddPayee = "Add Payee";
        $textLogout = "Logout";
        

        $textNewPayee = "New Payee";
        $textNameRecipient = "To be paid (Full Name)";
        $textPixKey = "PIX Key";
        $textBank = "Bank's Name";
        $textBranch = "Branch";
        $textAccount = "Account Number";
        $textType = "Account Type";
        $textCurrent = "Current Account";
        $textSaving = "Saving Account";
        $textAddPayee = "Add Payee";
        $textCancel = "Cancel";


        $teste = 'English';
        $titled = 'granna - faster simpler cheaper';

        $MainLanguage = "EN";
        $LogIn = "Log in";
        $Contact = "Contact";
        $MeetTeam = "Meet the Team";
        $ReportBug = "Report Bug";

        $yousend = "you send (EUR)";
        $recipientgets = "recipient gets (BRL)";
        $trade = "Trade";
        $easiest = "Branch or online?<br> The easiest.";
        $PaymentMethods = "Payment<br>methods";
        $PersonalTransfer  = "personal transfer";
        $moneyietobr = "Money From Ireland to Brazil";
        $exchangeRate = "Exchange Rate Euro to Brazilian Real With no extra fee.";
        $fasterSimplerCheaper = "faster<br>simpler<br>cheaper";




    }
    
?>
