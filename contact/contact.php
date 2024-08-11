<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Page</title>
    <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/final/contact/contstyle.css">
</head>

<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    echo "Full Name: " . htmlspecialchars($fullname) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Message: " . htmlspecialchars($msg) . "<br>";

    $conn = new mysqli('localhost', 'root', '', 'siddhi');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO registration (fullname, email, msg) VALUES (?, ?, ?)");
        if ($stmt === false) {
            die('Prepare failed: ' . $conn->error);
        }
        $stmt->bind_param("sss", $fullname, $email, $msg);
        if (!$stmt->execute()) {
            die('Execute failed: ' . $stmt->error);
        }
        echo "Registration successful.";
        $stmt->close();
        $conn->close();
    }
}
?>

<section class="home">
    <div class="menu-bar">
        <h1 class="logo">Ur<span>Home.</span></h1>
        <ul>
            <li><a href="C:\Users\Siddhi\Desktop\liaisionIT\final\index.html">Home</a></li>
            <li><a href="C:\Users\Siddhi\Desktop\liaisionIT\final\about us\index.html">About us</a></li>
            <li><a href="C:\Users\Siddhi\Desktop\liaisionIT\final\services\index.html">Services<i class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#">Construction<i class="fas fa-caret-right"></i></a>
                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="C:\Users\Siddhi\Desktop\liaisionIT\final\sevice\sevice\1.html">Commercial</a></li>
                                    <li><a href="C:\Users\Siddhi\Desktop\liaisionIT\final\sevice\sevice\2.html">Residential</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Interior<i class="fas fa-caret-right"></i></a>
                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="C:\Users\Siddhi\Desktop\liaisionIT\final\sevice\sevice\3.html">Commercial</a></li>
                                    <li><a href="C:\Users\Siddhi\Desktop\liaisionIT\final\sevice\sevice\4.html">Residential</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="../final/finalgall/gallery.html">Gallery</a></li>
            <li><a href="C:\Users\Siddhi\Desktop\liaisionIT\final\blog\blog.html">Blog</a></li>
            <li><a href="C:\Users\Siddhi\Desktop\liaisionIT\final\contact\contact.php">Contact us</a></li>
        </ul>
    </div>

    <section class="contactss">
        <div class="section-header">
            <div class="container">
                <h2>Contact Us</h2>
                <p>The house you looked at today and wanted to think about tomorrow may be the same house someone looked at yesterday and will buy today.</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="contact-info">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Address</h4>
                            <p>191, Panchshil Towers Rd,<br/> Kharadi, Pune, <br/>Maharashtra 411014</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Phone</h4>
                            <p>561-456-2321</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Email</h4>
                            <p>urhome@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <form action="" method="post">
                        <h2>Send Message</h2>
                        <div class="input-box">
                            <input type="text" required="true" name="fullname">
                            <span>Full Name</span>
                        </div>

                        <div class="input-box">
                            <input type="email" required="true" name="email">
                            <span>Email</span>
                        </div>

                        <div class="input-box">
                            <textarea required="true" name="msg"></textarea>
                            <span>Type your Message...</span>
                        </div>

                        <div class="input-box">
                            <input type="submit" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
