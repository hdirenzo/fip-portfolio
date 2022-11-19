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

    // Sanitize the values
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    // If is valid
    if (count($errors) === 0) {
        // Compose & send email
        require_once "Mail.php";

        // $success = mail("hannuccia@renetwork.ca","Email from Hannuccia", $message);
        $mail = Mail::factory('smtp', [
            'host' => 'smtp.ionos.com',
            'port' => '587',
            'auth' => true,
            'username' => 'support@hannuccia.com',
            'password' => '_Pantone1999_9991'
        ]);

        $success = $mail->send('support@hannuccia.com', [
            'From' => $email,
            'Reply-To' => $email,
            'Subject' => 'Business inquiry from ' . $name
        ], $message);

        // Respond with success message
        if(!PEAR::isError($success)){
            $response["message"] = "Sent Successfully, We will be in contact with you soon! (:";
            echo json_encode($response);
        }
        else{
            $response["message"] = "Whoops, Error Sending e-mail";
            die(json_encode($response));
            //echo json_encode(["message" => "Whoops, Error Sending e-mail"]);
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

