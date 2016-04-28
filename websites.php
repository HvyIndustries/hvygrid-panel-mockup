<!DOCTYPE html>
<html lang="en">
<head>
    <title>Websites | HvyGrid</title>
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

                <div class="right">
                    <a href="/websites/add" class="btn btn-secondary"><i class="fa fa-plus"></i> Add Website</a>
                </div>

                <h1>Websites</h1>

                <!-- TODO -- Near instant fuzzy search on website domains (filter the list below) -->
                <input type="search" class="form-control search" placeholder="Search by domain" spellcheck="false" />

                <!-- TODO -- Order by column heading asc + desc -->
                <table class="table table-websites">
                    <tr>
                        <th>Domain <i class="fa fa-fw fa-caret-down"></i></th>
                        <th>Status</th>
                        <th>Traffic</th>
                        <th>Repo Updated</th>
                    </tr>
                    <tr>
                        <td><a href="/websites/site/cf7s42g3">hvy.io</a></td>
                        <td><i class="fa fa-fw fa-warning"></i> Maintenance mode</td>
                        <td>53 views this week</td>
                        <td>45 minutes ago</td>
                    </tr>
                    <tr>
                        <td><a href="/websites/site/ktbf0s62">jckd.co.uk</a></td>
                        <td><i class="fa fa-fw fa-check"></i> Online</td>
                        <td>192 views this week</td>
                        <td>6 months ago</td>
                    </tr>
                    <tr>
                        <td><a href="/websites/site/0js09kiw">nevadascout.com</a></td>
                        <td><i class="fa fa-fw fa-check"></i> Online</td>
                        <td>732 views this week</td>
                        <td>Yesterday</td>
                    </tr>
                    <tr>
                        <td><a href="/websites/site/5juh5ttq">rustfactions.net</a></td>
                        <td><i class="fa fa-fw fa-check"></i> Online</td>
                        <td>5,153 views this week</td>
                        <td>3 weeks ago</td>
                    </tr>
                </table>

            </div>
        </div>

        <div class="push"></div>
    </div>

    <footer>
        <?php require "/inc/footer.php" ?>
    </footer>
</body>
</html>