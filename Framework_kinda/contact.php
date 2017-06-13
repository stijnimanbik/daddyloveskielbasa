<?php
ini_set("SMTP", "aspmx.l.google.com");
ini_set("sendmail_from", "grandcafedeveghte@gmail.com");

$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'grandcafedeveghte@gmail.com';
$subject = 'Vraag van: '.$field_name;

$body_message = 'Van: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Bericht: '.$field_message;

$headers = 'Van: '.$field_email."\r\n";
$headers .= 'Reactie op: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Bedankt voor het verzenden van uw vraag. We beantwoorden uw bericht zo spoedig mogelijk.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Bericht is niet verzonden. Is uw E-mail correct?');
		// window.location = 'contact_page.html';
	</script>
<?php
}
?>