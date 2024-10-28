<?php
	$to = "baphometsatan77@gmail.com"; // Recipient Email Address
	
	$errors = array();
	
	if ($_SERVER['REQUEST_METHOD'] != "POST")
	{
		$errors[] = "No data was sent!";
	}
	
	
	if (!$errors)
	{
		$email = "Baphomet You got a mail...\n\n";
		foreach ($_POST as $name => $value)
		{
			if ($name != "captcha-solution" && $name != "captcha-response")
			{
				$email .= "$name: $value\n";
			}
		}
		if (mail($to, "Baphomet Time", $email))
		{
			
		}
		else
		{
			$errors[] = "Form failed to send!";
		}
	}
	
/**	if ($errors)
	{
		echo "Sorry, something went wrong:";
		echo "<ul>";
		foreach ($errors as $error)
		{
			echo "<li>$error</li>";
		}
		echo "</ul>";
	}
**/

    extract($_REQUEST);
    $file=fopen("form-save.txt","a");
    fwrite($file,"name :");
	
    fwrite($file, $username ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"number :");
    fwrite($file, $number ."\n");
    fwrite($file,"time :");
    fwrite($file, $time ."\n");
    fwrite($file,"subject :");
    fwrite($file, $subject ."\n");
    fwrite($file,"message :");
    fwrite($file, $message ."\n");
	fwrite($file,"--------------------------------- ");

    fclose($file);
    header("location: index.php");

 ?>
