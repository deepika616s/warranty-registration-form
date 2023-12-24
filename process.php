<!-- process.php -->
<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $orderNo = $_POST['orderNo'];
    $model = $_POST['model'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $serial = $_POST['serial'];
    $purchaseDate = $_POST['purchaseDate'];

    // Handle file uploads
    $invoiceFileName = $_FILES['invoice']['name'];
    $registrationFormFileName = $_FILES['registrationForm']['name'];

    $invoiceFilePath = 'uploads/' . $invoiceFileName;
    $registrationFormFilePath = 'uploads/' . $registrationFormFileName;

    move_uploaded_file($_FILES['invoice']['tmp_name'], $invoiceFilePath);
    move_uploaded_file($_FILES['registrationForm']['tmp_name'], $registrationFormFilePath);

    // Validate and process the form data
    // Add your validation logic here

    // Store data in the database
    $sql = "INSERT INTO warranty_registration (order_no, model, name, email, mobile, address, city, state, pincode, serial, purchase_date, invoice_path, registration_form_path) 
            VALUES ('$orderNo', '$model', '$name', '$email', '$mobile', '$address', '$city', '$state', '$pincode', '$serial', '$purchaseDate', '$invoiceFilePath', '$registrationFormFilePath')";

    if ($conn->query($sql) === TRUE) {
        // Send email to hr@unbundl.com
        $to = 'hr@unbundl.com';
        $subject = 'New Warranty Registration';
        $message = "New warranty registration details:\n\n";
        $message .= "Order No: $orderNo\n";
        $message .= "Model: $model\n";
        $message .= "Name: $name\n";
        $message .= "Email: $email\n";
        $message .= "Mobile: $mobile\n";
        $message .= "Address: $address, $city, $state, $pincode\n";
        $message .= "Serial: $serial\n";
        $message .= "Purchase Date: $purchaseDate\n";

        mail($to, $subject, $message);

        echo "Thank you for sharing the documents with us. Our team will verify the details and get back to you within 7 working days.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
