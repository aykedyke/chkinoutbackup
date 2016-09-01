<?php

$to      = 'mikebaccay@gmail.com';
					$subject = 'CheckInOut Filed Leave';
					$message = 'Kindly check the backend panel of your CheckInOut System for pending filed leave';
					$from = '';
					
					mail($to, $subject, $message, $from);

?>