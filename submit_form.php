<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $nin = $_POST['nin'];
    $referral_id = $_POST['referral_id'];
    $date = $_POST['date'];

    $to = "empirevirtual99@gmail.com";
    $subject = "New Registration Request";
    $message = "
    First Name: $first_name
    Last Name: $last_name
    Email: $email
    Phone Number: $phone
    Date of Birth: $dob
    Gender: $gender
    Country: $country
    NiN: $nin
    Referral ID: $referral_id
    Date: $date
    ";
    $headers = "From: noreply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Your registration request has been submitted successfully.";
    } else {
        echo "There was a problem submitting your request. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>