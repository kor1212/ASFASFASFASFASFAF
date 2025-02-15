<?php
// Redirect target URL
$redirect_url = "https://github.com/kor1212/Xperience-Tweaker-Free-Version-Official-Release";  // Change this URL to the desired redirection target
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3;url=<?php echo $redirect_url; ?>">
    <title>Redirecting...</title>
    <link rel="stylesheet" href="styles.css"> <!-- Linking your existing styles.css -->
</head>
<body>
    <div class="container">
        <h1>You are being redirected...</h1>
        <p>If you are not redirected, <a href="<?php echo $redirect_url; ?>">click here</a>.</p>
    </div>
</body>
</html>
