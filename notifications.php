<!DOCTYPE html>
<html lang="en">
<head>
    <title>Notifications | HvyGrid</title>
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
                        <li class="title">Notifications</li>
                        <li><a href="/notifications" class="active">Unread <span class="right">5</span></a></li>
                        <li><a href="/notifications/archive">Archived</a></li>
                        <li><a href="/settings/notifications">Notification Settings</a></li>
                    </ul>
                </div>

                <div class="right-content">
                    <div class="right">
                        <a href="/websites/add" class="btn btn-tertiary">Mark all as read</a>
                    </div>
                    <div style="clear: right;"></div>

                    <table>
                        <tr>
                            <td>Severity</td>
                            <td>Action</td>
                            <td>Timestamp</td>
                            <td>&nbsp;</td> <!-- Actions (Mark read) -->
                        </tr>
                    </table>
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