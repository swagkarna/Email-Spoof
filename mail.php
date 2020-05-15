<?php

$To(victim) = $_POST['To'];

$Subject = $_POST['Subject'];

$Message = $_POST['Message'];

$From(Fake Mail) = $_POST['From'];

$headers = "From:" . $From;

$mail = mail($To,$Subject,$Message,$headers,$From);

if($mail)
	{
	echo "Email sent to: ".$To;
	echo "</br>";
	echo "From: ".$From;
	}
