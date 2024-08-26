<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="calendar.css">
        <title>Dashboard</title>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
   
    <div class="navbar">
        <div class="container">
            <h1>Dashboard</h1>
        </div>
    </div>
    <div class="container">
        <h2>Booking Details</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Package</th>
                    <th>Booking Date</th>
                    <th>Timing</th>
                </tr>
            </thead>
            <tbody>
            <?php
               
                require_once '../db_connect.php';
                try {
                    // Fetch booking details from the database
                    $sql = "SELECT id, name, email, subject, package, booking_date, timing FROM booking";
                    $stmt = $pdo->query($sql);
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['subject']}</td>
                                <td>{$row['package']}</td>
                                <td>{$row['booking_date']}</td>
                                <td>{$row['timing']}</td>
                              </tr>";
                    }
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </tbody>
        </table>
        <div>
            <h2>Calendar</h2>
            <div id="calendar"></div>
        </div>
    </div>
    <script src='calendar.js'></script>
</body>
</html>
