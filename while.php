<?php

$test = 1;

while ($test <= 15) {
	echo "$test\n";
	$test++;
	if ($test == 7) goto end;
	}

end:
echo "testing goto\n";