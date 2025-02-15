<?php
$server =  "localhost";
$username = "root";
$pass = "";
$db = "lict";

//connect to  database
$conn = new mysqli($server, $username, $pass, $db);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//query to select data from marks
$qry = "SELECT students.name, subjects.name as subjectname, subjects.fullmarks, subjects.passmarks, marks.obtainedmarks

FROM marks
INNER JOIN students ON marks.student_id = students.id
INNER JOIN subjects ON marks.subject_id = subjects.id
WHERE students.id = 1";

$qry2 = "SELECT avg(obtainedmarks) as avgmarks, sum(obtainedmarks) as totalmarks
FROM marks
WHERE student_id = 2";

$result = $conn->query($qry);
$result2 = $conn->query($qry2);

while($row = $result->fetch_assoc()){
    echo "Name:". $row['name']."<br>";
    echo "Subject:". $row['subjectname']."<br>";
echo "Full Marks:".$row['fullmarks']."<br>";
echo "Pass Marks:".$row['passmarks']."<br>";
echo "Obtained Marks:".$row['obtainedmarks']."<br><br>";
echo "<br>";

}
$conn->close();
?>


