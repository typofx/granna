<script>
function detectLanguage() {
    var phpadd = "<?php echo $whichLanguage = substr ($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)?>";
    alert(phpadd);
}

</script>

<button onclick="detectLanguage()">Try it</button>
