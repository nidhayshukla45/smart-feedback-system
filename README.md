# 🧠 Smart Student Feedback System

A simple yet functional full-stack web app that lets students submit feedback and lets admins view it — all built using PHP, MySQL, and XAMPP. Whether you're just starting out or want to showcase a neat academic project, this one hits the mark!

---

# 📌 What This Project Does

📝 Clean and easy-to-use student feedback form

💾 Stores all feedback entries securely in a MySQL database

👀 View all feedback instantly on the admin panel

🖥️ Runs entirely on localhost with XAMPP

💡 Built for beginners — simple code, easy to follow



---

# 🛠️ Tech Stack

Frontend: HTML + CSS

Backend: PHP

Database: MySQL

Environment: XAMPP (Apache + MySQL)

Database Manager: phpMyAdmin



---

# 📁 Folder Structure

smart-feedback-system/
│
├── feedback_form.php         # Student feedback form (UI)
├── view_feedback.php         # Admin panel to view submitted feedback
├── style.css                 # Stylesheet for basic design
└── db_connection.php         # Reusable database connection file


---

🚀 Getting Started (Local Setup Guide)

1. 📥 Download and install XAMPP


2. ▶️ Open the XAMPP Control Panel, and start Apache and MySQL


3. 📂 Move this project folder (smart-feedback-system) to:

C:\xampp\htdocs\


4. 🌐 Go to phpMyAdmin and create a new database:

student_feedback


5. 🧱 Inside that database, create a table named feedback with the following columns:



Field	Type	Extra

id	INT	AUTO_INCREMENT, PRIMARY KEY
name	VARCHAR(100)	
subject	VARCHAR(100)	
rating	INT	
comments	TEXT	


6. 🔗 Access your app in the browser:



To submit feedback:
http://localhost/smart-feedback-system/feedback_form.php

To view feedback (admin):
http://localhost/smart-feedback-system/view_feedback.php



---

# 👨‍💻 About the Author

Nidhay Shukla
🎓 MSc IT Student | 💻 Web Developer | 🐍 Python Enthusiast
📍 Based in Chhatrapati Sambhajinagar (Aurangabad), India
🔗 Connect on LinkedIn


---

⭐ Found this project helpful?

Give it a ⭐ star, fork it, or share it with your peers!
Feedback and pull requests are always welcome. 😊


---

