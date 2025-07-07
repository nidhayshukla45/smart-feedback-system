<!DOCTYPE html>
<html>
<head>
  <title>View Student Feedback</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
      padding: 20px;
    }
    h2 {
      text-align: center;
      color: #333;
    }
    table {
      width: 90%;
      margin: 20px auto;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px 15px;
      border: 1px solid #ccc;
      text-align: left;
    }
    th {
      background-color: #007BFF;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h2>Submitted Student Feedback</h2>

  <?php
  $con = mysqli_connect("localhost", "root", "", "student_feedback");

  if (!$con) {
      echo "<p style='color:red; text-align:center;'>Failed to connect to database.</p>";
      exit();
  }

  $query = "SELECT * FROM feedback ORDER BY id DESC";
  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result) > 0) {
      echo "<table>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Rating</th>
                <th>Comments</th>
              </tr>";

      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>" . $row["id"] . "</td>
                  <td>" . $row["name"] . "</td>
                  <td>" . $row["subject"] . "</td>
                  <td>" . $row["rating"] . "</td>
                  <td>" . $row["comments"] . "</td>
                </tr>";
      }

      echo "</table>";
  } else {
      echo "<p style='text-align:center;'>No feedback submitted yet.</p>";
  }

  mysqli_close($con);
  ?>
</body>
</html>