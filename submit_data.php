<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $orderNo = $_POST['orderNo'];
    $model = $_POST['model'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $formData = [
        'Order No' => $orderNo,
        'Model' => $model,
        'Name' => $name,
        'Email' => $email,
    ];

    $jsonData = json_encode($formData);
    $filename = 'form_submissions.txt';
    file_put_contents($filename, $jsonData . PHP_EOL, FILE_APPEND);

    $to = 'hr@unbundl.com';
    $subject = 'New Warranty Registration';
    $message = "New warranty registration details:\n\n";
    $message .= "Order No: $orderNo\n";
    $message .= "Model: $model\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";

    mail($to, $subject, $message);

    echo "Thank you for sharing the documents with us. Our team will verify the details and get back to you within 7 working days.";
} else {
    echo "Invalid request method.";
}
?>
