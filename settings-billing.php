<!DOCTYPE html>
<html lang="en">
<head>
    <title>Billing | HvyGrid</title>
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
                        <li><a href="/settings">Account</a></li>

                         <!-- Enable/disable shake, enable/disable web/email notifications, set extra email address to recieve notifications -->
                        <li><a href="/settings/notifications">Notifications</a></li>

                         <!-- Show plan + usage, show billing cycle, show overall bandwidth + storage used, show payment info (last digits of card, next due date, amount), show full payment history -->
                        <li><a href="/settings/billing" class="active">Billing</a></li>

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

                    <p><?= $_GET["id"] ?></p>
                </div>

                <!-- <h1>Billing &amp; Credit</h1> -->

                <!-- TODO -- handle VAT (for VATMOSS) for european customers -->

                <!-- <h2>Billing History</h2>

                <table class="table table-billing">
                    <tr>
                        <th>Date <i class="fa fa-fw fa-caret-down"></i></th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <td>February 1st, 2016</td>
                        <td>Invoice for January 2016</td>
                        <td>$24.00</td>
                        <td><a href="#">View Invoice</a></td>
                    </tr>
                    <tr>
                        <td>January 1st, 2016</td>
                        <td>Invoice for December 2015</td>
                        <td>$18.00</td>
                        <td><a href="#">View Invoice</a></td>
                    </tr>
                    <tr>
                        <td>December 22nd, 2015</td>
                        <td>Credit top-up via card ending 7334</td>
                        <td>$50.00</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>December 1st, 2015</td>
                        <td>Invoice for November 2015</td>
                        <td>$18.00</td>
                        <td><a href="#">View Invoice</a></td>
                    </tr>
                </table> -->

            </div>
        </div>

        <div class="push"></div>
    </div>

    <footer>
        <?php require "/inc/footer.php" ?>
    </footer>
</body>
</html>