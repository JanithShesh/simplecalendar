<?php
include("../auth_session.php");
$loguser = $_SESSION['username'];

include 'Calendar.php';

include('../db.php');

$calendar = new Calendar(date("Y-m-d"));

//loop through the query result again and add events one by one
$query = mysqli_query($con, "SELECT * FROM `events` WHERE username= '$loguser'");
$i = 0;
while ($events = mysqli_fetch_array($query)) {
    $title = $events['title'];
    $startDate = $events['startDate'];
    $days = $events['hw_days'];
    $color = $events['color'];

    $calendar->add_event($events['title'], $events['startDate'], $events['hw_days'], $events['color']);
    // Or
    //$calendar->add_event($title[$i], $startDate[$i], $days[$i], 'green');
    $i++;
}

?>
<!DOCTYPE html>
<html>
	<head>
        <title>Calendar</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
	    <nav class="navtop">
	    	<div>
                <h1>Hey,
                <?php
                echo $loguser; ?> </h1>
                <h1>Manage Your Calendar</h1>
                <a class="button" href="../logout.php"><span>
                Logout
                </span>
                </a>
	    	</div>
	    </nav>
        <div class="container">
            <div class="row">
                <div class="content home" class="col-sm-9 col-md-6 col-lg-8">
                    <?=$calendar?>
                </div>
                <div class="cardaddevent" class="col-sm-3 col-md-6 col-lg-4">
                    </br>
                    <h3>Add Event</h3>
                        <form action="addevent.php" method="post">
                            <label for="title">Title:</label><br>
                            <input class="cardintext" type="text" id="title" name="title" required=""><br>
                            <label for="startDate">Start Date:</label><br>
                            <input class="cardintext" type="date" id="startDate" name="startDate" required=""><br>
                            <label for="hw_days">No of Days:</label><br>
                            <input class="cardintext" type="number" id="hw_days" name="hw_days" required=""><br>
                            <select id="color" name="color" class="cardintext">
                                <option value="green"> green</option>
                                <option value="blue"> blue</option>
                                <option value="red"> red</option>
                                <option value="yellow"> yellow</option>
                            </select>
                            <input type="submit" class="button" value="Add Event">
                        </form>
                        <br>
                    <h3>All Events</h3>
                    <div class="table-responsive">
                        <table class="table" style="color: black;">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Start date</th>
                                    <th>Days</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($con, "select * from `events` WHERE username= '$loguser'");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                <td>
                                    <?php echo $row['title']; ?>
                                </td>
                                <td>
                                    <?php echo $row['startDate']; ?>
                                </td>
                                <td>
                                    <?php echo $row['hw_days']; ?>
                                </td>
                                <td>
                                <!-- still not working(edit) -->
                                    <a href="edit.php?id=<?php echo $row['event_id']; ?>" onclick="event.preventDefault(); openPopup(this.href);"><i class="bi bi-pen"></i></a>
                                <!-- still not working(delete)-> bug done_2022.12.14-->
                                    <a href="delete.php?id=<?php echo $row['event_id']; ?>"><i class="bi bi-trash"></i></a>
                                </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <script src="calendar.js"></script>
        <script>
        // Function to open the popup window
        function openPopup(url) {
        window.open(url, 'popup', 'width=500,height=400,scrollbars=yes');
        }
        </script>

	</body>
</html>