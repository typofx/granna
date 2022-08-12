<script>
function detectLanguage() {
    var phpadd = "<?php echo $whichLanguage = substr ($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)?>";
    alert(phpadd);
}

</script>

<button onclick="detectLanguage()">Try it</button>

<?php

$language = substr ($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$titled = "";
$teste = "English";
$titled = "";

$MainLanguage = "";
$LogIn = "";
$Contact = "";
$MeetTeam = "";

$yousend = "";
$recipientgets = "";
$trade = "";
$easiest = "";
$PaymentMethods = "";
$personalTransfer  = "";
$moneyietob = "";
$exchangeRate = "";
$fasterSimplerCheaper = "";

    if ($language == "en")
    {
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
    else
    {
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
    
?>
