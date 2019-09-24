<?php
array_shift($argv);
if (!isset($argv[0])) {
	echo "Geen argumenten opgegeven!";
	exit();
}
$s = 0;
foreach ($argv as $a) {
	if (strpos($a, "s")) {
		$b = (int)$a;
		$s = $s+$b;
	} elseif (strpos($a, "m")) {
		$b = (int)$a;
		$s = $s+($b*60);
	} elseif (strpos($a, "u")) {
		$b = (int)$a;
		$s = $s+($b*60*60);
	} elseif (strpos($a, "d")) {
		$b = (int)$a;
		$s = $s+($b*24*60*60);
	} else {
		echo "Geen goede variable gegeven!\r\n";
	}
}
echo $s;
echo " seconden";
?>