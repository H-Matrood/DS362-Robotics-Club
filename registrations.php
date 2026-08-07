<?php include 'includes/header.php'; ?>

<main>

<section>

<h2>Event Registrations</h2>

<p>Current registrations for Robotics Club events.</p>

<?php

// CSV file name
$filename = "registrations.csv";

// Count the total number of registrations
$count = 0;

if (file_exists($filename)) {

    $file = fopen($filename, "r");

    while (fgetcsv($file)) {
        $count++;
    }

    fclose($file);
}

?>

<p><strong>Total Registrations:</strong> <?php echo $count; ?></p>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>#</th>
    <th>Full Name</th>
    <th>Student ID</th>
    <th>Email</th>
    <th>Event</th>
    <th>Comments</th>
</tr>

<?php

// Read registration records from the CSV file
if (file_exists($filename)) {

    $file = fopen($filename, "r");

    // Start numbering registrations
    $id = 1;

    while (($row = fgetcsv($file)) !== FALSE) {

        echo "<tr>";

        echo "<td>$id</td>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";

        echo "</tr>";

        $id++;
    }

    fclose($file);
}

?>

</table>

</section>

</main>

<?php include 'includes/footer.php'; ?>