<?php

// Get the selected event ID from the URL
$id = $_GET['id'] ?? 1;

// Load event information based on the selected ID
if ($id == 1) {

    $title = "Robotics Workshop";
    $date = "August 20, 2026";
    $time = "2:00 PM";
    $location = "Engineering Building";
    $description = "The Robotics Workshop introduces students to the fundamentals of robotics. Participants will build a simple robot, learn basic programming concepts, and work together in practical activities.";

}
elseif ($id == 2) {

    $title = "Programming Competition";
    $date = "August 28, 2026";
    $time = "10:00 AM";
    $location = "Computer Lab";
    $description = "Join a programming competition where students solve coding challenges, improve problem-solving skills, and compete for prizes.";

}
else {

    $title = "AI Seminar";
    $date = "September 5, 2026";
    $time = "1:00 PM";
    $location = "Conference Hall";
    $description = "Learn how artificial intelligence is applied in robotics through presentations, demonstrations, and discussions with experts.";

}

?>

<?php include 'includes/header.php'; ?>

<main>

<section>

<!-- Display selected event information -->
<h2><?php echo $title; ?></h2>

<p><strong>Date:</strong> <?php echo $date; ?></p>

<p><strong>Time:</strong> <?php echo $time; ?></p>

<p><strong>Location:</strong> <?php echo $location; ?></p>

<p>
<?php echo $description; ?>
</p>

<!-- Navigate to the registration page -->
<a href="register.php">
    <button>Register Now</button>
</a>

</section>

</main>

<?php include 'includes/footer.php'; ?>