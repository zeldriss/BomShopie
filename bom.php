<?php
include ("funcbom.php");

		echo "===========================\n";
		echo "BOM SMS,WA,TELPON\n";
		echo "SGB-TEAM\n";
		echo "@xgzka\n";
		echo "GUNAKAN DENGAN BIJAK!\n";
		echo "===========================\n";

		echo "List Tools :\n-PHD(SMS) = 1 \n-JD.ID(SMS) = 2\n-SOPHIE(SMS) = 3\n-MYPOIN(SMS) = 4\n-ELEVENIA(SMS) = 5\n Pilih Mana?: ";
		$type = trim(fgets(STDIN));
	if($type == 1){
		echo "===========================\n";
		echo "BOM SMS PHD LIMIT 3x!\n";
		echo "Nomor? (ex : 8xxxx)\nInput : ";
		$nomor = trim(fgets(STDIN));
		echo "Jumlah?\nInput : ";
		$jumlah = trim(fgets(STDIN));
		echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
		$wait = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = phd($nomor, $jumlah, $wait);
		print $execute;
		echo "+===========END===========+\n";
	}else if($type == 2){
		echo "===========================\n";
		echo "BOM SMS JD.ID LIMIT 3x!\n";
		echo "Nomor? (ex : 08xxxx)\nInput : ";
		$nomor = trim(fgets(STDIN));
		echo "Jumlah?\nInput : ";
		$jumlah = trim(fgets(STDIN));
		echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
		$wait = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = jdid($nomor, $jumlah, $wait);
		print $execute;
		echo "+===========END===========+\n";
	}else if($type == 3){
		echo "===========================\n";
		echo "BOM SMS SOPHIE NO LIMIT!\n";
		echo "Nomor? (ex : 08xxxx)\nInput : ";
		$nomor = trim(fgets(STDIN));
		echo "Jumlah?\nInput : ";
		$jumlah = trim(fgets(STDIN));
		echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
		$wait = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = sophie($nomor, $jumlah, $wait);
		print $execute;
		echo "+===========END===========+\n";
	}else if($type == 4){
		echo "===========================\n";
		echo "BOM SMS MYPOIN 3x LIMIT!\n";
		echo "Nomor? (ex : 08xxxx)\nInput : ";
		$nomor = trim(fgets(STDIN));
		echo "Jumlah?\nInput : ";
		$jumlah = trim(fgets(STDIN));
		echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
		$wait = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = mypoin($nomor, $jumlah, $wait);
		print $execute;
		echo "+===========END===========+\n";
	}else if($type == 5){
		echo "===========================\n";
		echo "BOM SMS ELEVENIA 3x LIMIT!\n";
		echo "Nomor? (ex : 08xxxx)\nInput : ";
		$nomor = trim(fgets(STDIN));
		echo "Jumlah?\nInput : ";
		$jumlah = trim(fgets(STDIN));
		echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
		$wait = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = mypoin($nomor, $jumlah, $wait);
		print $execute;
		echo "+===========END===========+\n";
	}
?>
