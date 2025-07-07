<!DOCTYPE html>
<html>
<head>
  <title>Student Feedback Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
      margin: 0;
      padding: 0;
    }
    .container {
      width: 40%;
      margin: 50px auto;
      background: #fff;
      padding: 25px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 10px;
    }
    h2 {
      text-align: center;
      color: #333;
    }
    input[type="text"],
    input[type="number"],
    textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    input[type="submit"] {
      background-color: #007BFF;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      width: 100%;
      font-size: 16px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #0056b3;
    }
    .message {
      background: #d4edda;
      color: #155724;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Student Feedback Form</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $con = mysqli_connect("localhost", "root", "", "student_feedback");
        if (!$con) {
            echo "<div class='message'>Connection Failed</div>";
        } else {
            $name = $_POST["name"];
            $subject = $_POST["subject"];
            $rating = $_POST["rating"];
            $comments = $_POST["comments"];

            $query = "INSERT INTO feedback (name, subject, rating, comments)
                      VALUES ('$name', '$subject', '$rating', '$comments')";
            mysqli_query($con, $query);

            echo "<div class='message'>Thank you for your feedback, $name!</div>";
        }
    }
    ?>

    <form action="" method="POST">
      <label>Name:</label>
      <input type="text" name="name" required>

      <label>Subject:</label>
      <input type="text" name="subject" required>

      <label>Rating (1 to 5):</label>
      <input type="number" name="rating" min="1" max="5" required>

      <label>Comments:</label>
      <textarea name="comments" rows="4" required></textarea>

      <input type="submit" value="Submit Feedback">
    </form>
  </div>
</body>
</html>