{
    var forex;
	const apiCryptoETH = 'https://api.coingecko.com/api/v3/coins/ethereum';
async function getEURBRL()
    {
	const response = await fetch (apiCryptoETH);
	const data = await response.json();
	const { market_data } = data; 
    console.log(data);
	//document.getElementById('ETHBRL').textContent = parseFloat(market_data.current_price.brl).toFixed(6);
	//document.getElementById('ETHEUR').textContent = parseFloat(market_data.current_price.eur).toFixed(6);
	//document.getElementById('EURBRLtext').textContent = parseFloat( (market_data.current_price.brl/market_data.current_price.eur) ).toFixed(6);
	//document.getElementById('EURBRLtext2').textContent = parseFloat( (market_data.current_price.brl/market_data.current_price.eur) * (0.991) ).toFixed(6);
	document.getElementById('EURBRLvalue').value = parseFloat( (market_data.current_price.brl/market_data.current_price.eur) * (0.991) ).toFixed(2);
	document.getElementById('BRLvalue').value = parseFloat(1.00).toFixed(2);
	forex = parseFloat( (market_data.current_price.brl/market_data.current_price.eur) * (0.991) ).toFixed(6);
	}
    getEURBRL();
    
}

function sumBRL() { 
		var txtFirstNo = parseFloat(document.getElementById('BRLvalue').value);
		var result = parseFloat( txtFirstNo * forex ).toFixed(2);
            if (!isNaN(result)) {
                document.getElementById('EURBRLvalue').value = result;
            }
}

function sumEUR() { 
		var txtSecondNo = parseFloat(document.getElementById('EURBRLvalue').value);
		var result = parseFloat( txtSecondNo / forex ).toFixed(2);
            if (!isNaN(result)) {
                //document.getElementById('result').value = result;
                document.getElementById('BRLvalue').value = result;
            }
}
       
function round() { 
    document.getElementById('BRLvalue').value = parseFloat(document.getElementById('BRLvalue').value).toFixed(2);
    document.getElementById('EURBRLvalue').value = parseFloat(document.getElementById('EURBRLvalue').value).toFixed(2);
    
}