<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$response = [];
$errors = [];

// Restrict to POST requests only
if ($_POST) {
    
    // Get the name,email,message from the request
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate the values
    if (empty($name)) {
        array_push($errors, "Name is required.");
    }
    if (empty($email)) {
        array_push($errors, "Email is required.");
    }
    if (empty($message)) {
        array_push($errors, "Message is required.");
    }
    // check the rest

// Sanitize the values

    // If is valid
    if (count($errors) === 0) {
		ini_set('SMTP', 'ssl://smtp.ionos.com');
		ini_set('smtp_port', '587');
		
        // Compose & send email
		$headers = 'From: ' . $email . "\r\n" .
			'Reply-To: ' . $email . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

        $success = mail("h_direnzo@fanshaweonline.ca","Email from Hannuccia", $message, $headers);

        // Respond with success message
        if($success){
            $response["message"] = "Sent Successfully, Thank You";
            echo json_encode($response);
        }
        else{
            echo json_encode([ "message" => "Error sending e-mail." ]);
        }
    }    
    // Not valid
    else {
        // Respond with error message
        $response["message"] = "Invalid data please fix errors.";
        $response["errors"] = $errors;

        http_response_code(400);
        die(json_encode($response));
    }
}
else {
    http_response_code(404);
}

