<!-- edit.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Event</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h3>Edit Event</h3>
    <form action="update.php" method="post">
        <!-- Add necessary input fields and pre-fill them with the event details -->
        <input type="hidden" name="event_id" value="<?php echo $_GET['id']; ?>">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required=""><br>
        <label for="startDate">Start Date:</label><br>
        <input type="date" id="startDate" name="startDate" required=""><br>
        <label for="hw_days">No of Days:</label><br>
        <input type="number" id="hw_days" name="hw_days" required=""><br>
        <select id="color" name="color">
            <option value="green">green</option>
            <option value="blue">blue</option>
            <option value="red">red</option>
            <option value="yellow">yellow</option>
        </select>
        <input type="submit" value="Update Event">
    </form>
    <button onclick="closePopup()">Close</button>

    <script>
        // Function to close the popup window
        function closePopup() {
            window.opener.location.reload(); // Refresh the parent page after closing the popup
            window.close(); // Close the popup window
        }
    </script>
    

</body>
</html>
