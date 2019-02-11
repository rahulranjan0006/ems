<?php
$visit=fopen("visit.txt","r");
if(!$visit)
{
  echo "could not open the file";
}
else
{
	$counter=(int ) fread($visit,20);
	fclose($visit);
	$counter++;
	echo "VISITER COUNTS:$counter times";
	$visit=fopen("visit.txt","w");
	fwrite($visit,$counter);
	fclose($visit);
}
?>