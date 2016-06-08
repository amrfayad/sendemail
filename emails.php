<?php
# Try running this locally.
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;
# Instantiate the client.
$mgClient = new Mailgun('key-3ax6xnjp29jd6fds4gc373sgvjxteol0');
$domain = "samples.mailgun.org";
$mails = $_POST['mails'];
$to = '';
foreach($mails as $key => $value)
{
  $to .= $key .',';
}
$result = $mgClient->sendMessage("$domain",
	 array('from'    => 'Site Admin <admin@samples.mailgun.org>',
		'to'      => $to ,
		'subject' => '%recipient.subject%',
		'text'    => '%recipient.content%',
		'recipient-variables'       =>   json_encode($mails)  ,
		));
?>
