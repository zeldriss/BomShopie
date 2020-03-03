<?php
include ("funcbom.php");

		echo "===========================\n";
		echo "BOM SMS,WA,TELPON\n";
		echo "SGB-TEAM\n";
		echo "@xgzka\n";
		echo "GUNAKAN DENGAN BIJAK!\n";
		echo "===========================\n";

		echo "List Tools :\n-PHD(SMS) = 1 \n-JDID(SMS) = 2\n-BUKALAPAK(SMS) = 3\n-TOKPED(WA) = 4\n-Codashop(SMS) = 5\n-OYO(SMS) = 6\n-INSTAGRAM = 7\n-SOPHIE (SMS) = 8\n Pilih Mana?: ";
		$type = trim(fgets(STDIN));
	if($type == 1){
		echo "===========================\n";
		echo "BOM SMS PHD LIMIT 3x!\n";
		echo "Nomor? (ex : 8xxxx)\nInput : ";
		$nomor = trim(fgets(STDIN));
		echo "Jumlah?\nInput : ";
		$jumlah = trim(fgets(STDIN));
		echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
		$jeda = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = phd($nomor, $jumlah, $jeda);
		print $execute;
		echo "+===========END===========+\n";
	}else if($type == 2){
		echo "===========================\n";
		echo "BOM SMS JDID LIMIT 3x!\n";
		echo "Nomor? (ex : 08xxxx)\nInput : ";
		$nomor = trim(fgets(STDIN));
		echo "Jumlah?\nInput : ";
		$jumlah = trim(fgets(STDIN));
		echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
		$jeda = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = jdid($nomor, $jumlah, $jeda);
		print $execute;
		echo "+===========END===========+\n";
	}else if($type == 3){
		echo "===========================\n";
		echo "BOM SMS BL LIMIT 3x!\n";
		echo "Nomor? (ex : 08xxxx)\nInput : ";
		$nomor = trim(fgets(STDIN));
		echo "Jumlah?\nInput : ";
		$jumlah = trim(fgets(STDIN));
		echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
		$jeda = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = bl($nomor, $jumlah, $jeda);
		print $execute;
		echo "+===========END===========+\n";
	}else if($type == 4){
		echo "===========================\n";
		echo "BOM WA TOKPED LIMIT 3x!\n";
		echo "Nomor? (ex : 08xxxx)\nInput : ";
		$nomor = trim(fgets(STDIN));
		echo "Jumlah?\nInput : ";
		$jumlah = trim(fgets(STDIN));
		echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
		$jeda = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = tokped($nomor, $jumlah, $jeda);
		print $execute;
		echo "+===========END===========+\n";
	}else if($type == 5){
		echo "===========================\n";
		echo "BOM SMS CODASHOP LIMIT 3x!\n";
		echo "Nomor? (ex : 08xxxx)\nInput : ";
		$nomor = trim(fgets(STDIN));
		echo "Jumlah?\nInput : ";
		$jumlah = trim(fgets(STDIN));
		echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
		$jeda = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = coda($nomor, $jumlah, $jeda);
		print $execute;
		echo "+===========END===========+\n";
	}else if($type == 6){
		echo "===========================\n";
		echo "BOM SMS OYO LIMIT 3x!\n";
		echo "Nomor? (ex : 8xxxx)\nInput : ";
		$nomor = trim(fgets(STDIN));
		echo "Jumlah?\nInput : ";
		$jumlah = trim(fgets(STDIN));
		echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
		$jeda = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = oyo($nomor, $jumlah, $jeda);
		print $execute;
		echo "+===========END===========+\n";
	}else if($type == 7){
		echo "===========================\n";
		echo "BOM SMS IG LIMIT 3x!\n";
		echo "Nomor? (ex : 8xxxx)\nInput : ";
		$nomor = trim(fgets(STDIN));
		echo "Jumlah?\nInput : ";
		$jumlah = trim(fgets(STDIN));
		echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
		$jeda = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = ig($nomor, $jumlah, $jeda);
		print $execute;
		echo "+===========END===========+\n";
	}else if($type == 8){
		echo "===========================\n";
		echo "BOM SMS SOPHIE UNLIMITED!\n";
		echo "Nomor? (ex : 08xxxx)\nInput : ";
		$nomor = trim(fgets(STDIN));
		echo "Jumlah?\nInput : ";
		$jumlah = trim(fgets(STDIN));
		echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
		$jeda = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = sophie($nomor, $jumlah, $jeda);
		print $execute;
		echo "+===========END===========+\n";
	}
?>
