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
                    <a href="/websites/add" class="btn btn-secondary"><i class="fa fa-fw fa-plus"></i> Add Website</a>
                </div>

                <h1>Websites</h1>

                <!-- TODO -- Near instant fuzzy search on website domains (filter the list below) -->
                <!--<input type="search" class="form-control" placeholder="Search websites by domain" spellcheck="false" />-->

                <!-- TODO -- Order by column heading asc + desc -->
                <table class="table table-websites">
                    <tr>
                        <th>Domain <i class="fa fa-fw fa-caret-down"></i></th>
                        <th>Status</th>
                        <th>Added</th>
                    </tr>
                    <tr>
                        <td><a href="./website-detail.html">hvy.io</a></td>
                        <td><i class="fa fa-fw fa-warning"></i> Maintenance mode</td>
                        <td>3 weeks ago</td>
                    </tr>
                    <tr>
                        <td><a href="./website-detail.html">jckd.co.uk</a></td>
                        <td><i class="fa fa-fw fa-check"></i> Online</td>
                        <td>2 weeks ago</td>
                    </tr>
                    <tr>
                        <td><a href="./website-detail.html">nevadascout.com</a></td>
                        <td><i class="fa fa-fw fa-check"></i> Online</td>
                        <td>2 weeks ago</td>
                    </tr>
                    <tr>
                        <td><a href="./website-detail.html">rustfactions.net</a></td>
                        <td><i class="fa fa-fw fa-check"></i> Online</td>
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