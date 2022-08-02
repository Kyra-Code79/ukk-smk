<?php
    include_once 'user_activity_log.php'; 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>How to Store Visitor Activity Log in the MySql Database Using PHP</title>
</head>

<body>
    <div class="container">
        <div class="cw-info-box">
            <p><strong>Visitor Activity Log</strong></p>
            <div class="log-data">
                <p><b>Ip Address</b> : <?php echo $user_ip_address; ?></p>
                <p><b>User Agent</b> : <?php echo $user_agent; ?></p>
                <p><b>Current page url</b> : <?php echo $user_current_url; ?></p>
                <p><b>Referrer url</b> : <?php echo $referrer_url; ?></p>
            </div>
        </div>
    </div>
</body>

</html>