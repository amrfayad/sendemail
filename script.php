<?php
# Try running this locally.
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-3ax6xnjp29jd6fds4gc373sgvjxteol0');
$domain = "samples.mailgun.org";
$to = filter_input(INPUT_POST, 'email');
$subject = filter_input(INPUT_POST, 'subject');
$content = filter_input(INPUT_POST, 'content');
# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
 array('from'    => 'Site Admin <admin@samples.mailgun.org>',
        'to'      => 'Amr Fayad <'.$to.'>',
        'subject' => $subject,
        'text'    => $content));
?>
