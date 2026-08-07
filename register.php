<?php

// Store success or error message
$message = "";

// Process the registration form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve user input
    $name = trim($_POST["name"]);
    $studentid = trim($_POST["studentid"]);
    $email = trim($_POST["email"]);
    $event = $_POST["event"];
    $comments = trim($_POST["comments"]);

    // Validate required fields and email format
    if (
        $name != "" &&
        $studentid != "" &&
        $email != "" &&
        filter_var($email, FILTER_VALIDATE_EMAIL)
    ) {

        // Save registration data to the CSV file
        $file = fopen("registrations.csv", "a");

        fputcsv($file, [
            $name,
            $studentid,
            $email,
            $event,
            $comments
        ]);

        fclose($file);

        // Display success message
        $message = "Registration completed successfully!";

    } else {

        // Display validation error
        $message = "Please complete all required fields using a valid email address.";

    }
}

?>

<?php include 'includes/header.php'; ?>

<main>

<section>

<h2>Event Registration</h2>

<p>
Complete the form below to register for an upcoming Robotics Club event.
</p>

<!-- Display success or error message -->
<?php
if ($message != "") {
    echo "<p><strong>$message</strong></p>";
}
?>

<!-- Registration form -->
<form method="POST" action="">

<label for="name">Full Name</label><br>
<input type="text" id="name" name="name" required><br><br>

<label for="studentid">Student ID</label><br>
<input type="text" id="studentid" name="studentid" required><br><br>

<label for="email">Email</label><br>
<input type="email" id="email" name="email" required><br><br>

<label for="event">Choose Event</label><br>

<select id="event" name="event">
    <option value="Robotics Workshop">Robotics Workshop</option>
    <option value="Programming Competition">Programming Competition</option>
    <option value="AI Seminar">AI Seminar</option>
</select>

<br><br>

<label for="comments">Comments</label><br>

<textarea
    id="comments"
    name="comments"
    rows="5"></textarea>

<br><br>

<button type="submit">
    Register
</button>

</form>

</section>

</main>

<?php include 'includes/footer.php'; ?>