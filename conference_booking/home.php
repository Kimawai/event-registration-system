<?php
include 'database.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Conference Events</title>
</head>

<body>

<h1>Conference Event List</h1>

<?php

$sql = "SELECT * FROM conference_events";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){

echo "<h3>".$row['title']."</h3>";
echo "Date: ".$row['event_date']."<br>";
echo "Venue: ".$row['venue']."<br>";
echo "<a href='event.php?id=".$row['event_id']."'>View Event</a><br><br>";

}

?>

</body>
</html>