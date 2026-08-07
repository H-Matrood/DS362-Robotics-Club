<?php

// Store success or error message
$message = "";

// Process the contact form when the user submits it
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve user input
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $userMessage = trim($_POST["message"]);

    // Validate required fields and email format
    if (
        $name != "" &&
        $userMessage != "" &&
        filter_var($email, FILTER_VALIDATE_EMAIL)
    ) {

        // Display success message
        $message = "Your message has been sent successfully!";

    } else {

        // Display validation error
        $message = "Please complete all required fields using a valid email address.";

    }
}

?>

<?php include 'includes/header.php'; ?>

<main>

<section>

<h2>Contact Us</h2>

<p>
If you have any questions about Robotics Club activities,
please contact us using the information below.
</p>

<h3>Club Information</h3>

<p><strong>Email:</strong> roboticsclub@university.edu</p>
<p><strong>Phone:</strong> +966 13 123 4567</p>
<p><strong>Location:</strong> Engineering Building, Room 205</p>

<br>

<h3>Send a Message</h3>

<!-- Display success or error message -->
<?php
if ($message != "") {
    echo "<p><strong>$message</strong></p>";
}
?>

<!-- Contact form -->
<form method="POST" action="">

<label for="name">Full Name</label><br>
<input type="text" id="name" name="name" required><br><br>

<label for="email">Email</label><br>
<input type="email" id="email" name="email" required><br><br>

<label for="message">Message</label><br>
<textarea
    id="message"
    name="message"
    rows="5"
    required></textarea><br><br>

<button type="submit">
    Send Message
</button>

</form>

</section>

</main>

<?php include 'includes/footer.php'; ?>