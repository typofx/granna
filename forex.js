<!DOCTYPE html>
<html>
<body>

<form id="myForm">
  <input id="BRLvalue" type="text" onfocusout="calcEUR()" onkeypress="enterKeyBRL()">
  <input id="EURvalue" type="text" onfocusout="calcBRL()" onkeypress="enterKeyEUR()">
</form>
<br>
<button onclick="calcEUR(),calcBRL()">Calc</button>


<script>
    var forex;
	const apiCryptoETH = 'https://api.coingecko.com/api/v3/coins/ethereum';
async function getEURBRL()
    {
	const response = await fetch (apiCryptoETH);
	const data = await response.json();
	const { market_data } = data; 
    console.log(data);
	document.getElementById('EURvalue').value = parseFloat( (market_data.current_price.brl/market_data.current_price.eur) * (0.989) ).toFixed(2);
	document.getElementById('BRLvalue').value = parseFloat(1.00).toFixed(2);
	forex = parseFloat( (market_data.current_price.brl/market_data.current_price.eur) * (0.989) ).toFixed(6);
	}
    getEURBRL();
    
function round() { 
    document.getElementById('BRLvalue').value = parseFloat(document.getElementById('BRLvalue').value).toFixed(2);
    document.getElementById('EURvalue').value = parseFloat(document.getElementById('EURvalue').value).toFixed(2);
                 }

    function enterKeyBRL() { if (event.keyCode === 13) calcEUR(); }
    function enterKeyEUR() { if (event.keyCode === 13) calcBRL(); }


function calcEUR() {
        round();
		var txtBRLvalue = parseFloat(document.getElementById('BRLvalue').value);
		var result = parseFloat( txtBRLvalue * forex ).toFixed(2);
            if (!isNaN(result)) document.getElementById('EURvalue').value = result;
                  }

function calcBRL() { 
        round();
		var txtEURvalue = parseFloat(document.getElementById('EURvalue').value);
		var result = parseFloat( txtEURvalue / forex ).toFixed(2);
            if (!isNaN(result)) document.getElementById('BRLvalue').value = result;
                  }

</script>

</body>
</html>
