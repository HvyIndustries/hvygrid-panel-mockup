<!DOCTYPE html>
<html lang="en">
<head>
    <title>Settings | HvyGrid</title>
    <link rel="stylesheet" type="text/css" href="/styles/core.css" />
    <script type="text/javascript" src="/html5.js"></script>
</head>
<body>
    <div class="main">
        <div class="nav">
            <?php $menuItem = "none"; require "/inc/menu.php" ?>
        </div>

        <div class="content">
            <div class="wrap">

                <div class="sidebar">
                    <ul>
                        <li class="title">Account Settings</li>

                        <!-- Change password, change email, delete account -->
                        <li><a href="/settings" class="active">Account</a></li>

                         <!-- Enable/disable shake, enable/disable web/email notifications, set extra email address to recieve notifications -->
                        <li><a href="/settings/notifications">Notifications</a></li>

                         <!-- Show plan + usage, show billing cycle, show overall bandwidth + storage used, show payment info (last digits of card, next due date, amount), show full payment history -->
                        <li><a href="/settings/billing">Billing</a></li>

                         <!-- Show keys attached to account (name, pc name, fingerprint, last usage date) -->
                        <li><a href="/settings/keys">SSH Keys</a></li>

                         <!-- Enable/disable 2FA (text or app), list of sessions, log of security events (inc. failed logins + source IPs) -->
                        <li><a href="/settings/security">Security</a></li>

                         <!-- Show API usage stats, add/remove tokens for API access -->
                        <li><a href="/settings/tokens">API Tokens</a></li>
                    </ul>
                </div>

                <div class="right-content">
                    <div class="right">
                        <a href="/websites/add" class="btn btn-tertiary">Mark all as read</a>
                    </div>
                    <div style="clear: right;"></div>

                    <p>TODO</p>
                </div>
            </div>
        </div>

        <div class="push"></div>
    </div>

    <footer>
        <?php require "/inc/footer.php" ?>
    </footer>
</body>
</html>