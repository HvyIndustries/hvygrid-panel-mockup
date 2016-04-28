<?php

$siteId = $_GET["id"];
if (!isset($siteId)) {
    header("location: /websites");
}

$baseUrl = "/websites/site/{$siteId}";

?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Website - hvy.io | HvyGrid</title>
    <link rel="stylesheet" type="text/css" href="/styles/core.css" />
    <script type="text/javascript" src="/html5.js"></script>
</head>
<body>
    <div class="main">
        <div class="nav">
            <?php $menuItem = "websites"; require "/inc/menu.php" ?>
        </div>

        <div class="content">
            <div class="wrap">

                <div class="sidebar">
                    <ul>
                        <li class="title">Manage Website</li>
                        <li><a href="<?= $baseUrl ?>" class="active">Site Overview</a></li>
                        <li><a href="<?= $baseUrl ?>/settings">General Settings</a></li>
                        <li><a href="<?= $baseUrl ?>/repository">Repository</a></li>
                        <li><a href="<?= $baseUrl ?>/email">Email Forwarding</a></li>
                        <li><a href="<?= $baseUrl ?>/mailboxes">Mailboxes</a></li>
                        <li><a href="<?= $baseUrl ?>/traffic">Traffic Stats</a></li>
                        <li><a href="<?= $baseUrl ?>/traffic">Customise Static Pages</a></li>

                        <!--
                            Note: Handle update scheduling for container updates to ruby, php, etc
                            Default: install automatically (restart the container when an update is detected)
                            Option: manual (run manually from control panel)
                       -->
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