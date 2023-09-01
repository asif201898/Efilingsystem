<?php
session_start();

// Database Configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "odss_db";

// Google OAuth Configuration
require 'vendor/autoload.php';
$client_id = '650419867810-bbnp61strh8r688oikg0derer9u6iuuv.apps.googleusercontent.com';
$client_secret = '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';
$redirect_uri = 'http://localhost/EFiling/EFile/User/dashboard.php';

// Initialize PDO connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Google Login Handling
$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope('email');

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
    $oauth2 = new Google_Service_Oauth2($client);
    $userInfo = $oauth2->userinfo->get();
    $email = $userInfo->getEmail();
    $name = $userInfo->getName();

    // Check if the user's email exists in the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);

    if ($stmt->execute() && $stmt->rowCount() > 0) {
        // Email exists in the database, allow access
        // You can use this information to log the user in or perform other actions
        header('Location: dashboard.php');
        exit;
    } else {
        // Email does not exist in the database, log out the user
        session_unset();
        session_destroy();
        header('Location: index.php'); // Redirect to your login page
        exit;
    }
} else {
    $authUrl = $client->createAuthUrl();
}

// Normal Login Handling
if (isset($_POST['submit'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (strpos($email, "@nstu.edu.bd") === false) {
        $login_failed = true;
    } else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);

        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $_SESSION['email'] = $email;
            header('Location: dashboard.php');
            exit;
        } else {
            $login_failed = true;
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>E-Filing System - User Access Control</title>
    <style>
        body {
            background-image: url('image/homepage.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        h1,
        form {
            padding-left: 80px;
            padding-top: 70px;
            color: white;
        }

        h3 {
            padding-left: 500px;
        }

        b {
            color: black;
        }

        .error {
            color: #d61364;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Welcome to E-Filing System of NSTU</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="email"><b>Institutional Mail</b></label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password"><b>Password:</b></label>
                <input type="password" class="form-control" id="password" name="password" required>
                <span class="error">
                    <?php if (isset($login_failed)) { ?>
                        <strong>*Login failed. Please try again with an edu mail.</strong>
                    <?php } ?>
                </span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="LOG IN">
                <?php if (isset($authUrl)) { ?>
                    <a href="<?php echo $authUrl; ?>" class="btn btn-warning">Login with Google</a>
                <?php } ?>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/js/bootstrap.min.js"></script>
    <?php include 'footer.php'; ?>
</body>

</html>
