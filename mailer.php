<?php
    // Get the form fields, removes html tags and whitespace
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $tel = trim($_POST["tel"]);

    // Check the data
    if (empty($name) OR empty($tel) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://www.funnytoto.com/painters/index.php?success=-1");
        exit;
    }

    // Set the recipient email addresxs
    //$recipient = "info@funnytoto.com";
    $recipient = "taoliu404@gmail.com";

    // Set the email subject
    $subject = "New contact from $name";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Tel: $tel\n\n";
    $email_content .= "Message:\nYou have a new contact!\n";

    // Build the email headers
    $email_headers = "From: $name <$email>";

    // Send the email
    mail($recipient, $subject, $email_content, $email_headers);

    $email_confirmation = "Name: $name\n";
    $email_confirmation .= "Email: $recipient\n\n";
    $email_confirmation .= "Message:\nHere is a confirmation for your signing up for Professional Painters.\n";

    $email_newheaders = "From: Professional Painters <$recipient>";

    $newsubject = "Confirmation from Professional Painters";

    mail($email, $newsubject, $email_confirmation, $email_newheaders);

    // Redirect to index.html
	header("Location: http://www.funnytoto.com/painters/index.php?success=1");
?>
