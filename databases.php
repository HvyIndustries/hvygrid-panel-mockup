<!DOCTYPE html>
<html lang="en">
<head>
    <title>Databases | HvyGrid</title>
    <link rel="stylesheet" type="text/css" href="/styles/core.css" />
    <script type="text/javascript" src="/html5.js"></script>
</head>
<body>
    <div class="main">
        <div class="nav">
            <?php $menuItem = "databases"; require "/inc/menu.php" ?>
        </div>

        <div class="content">
            <div class="wrap">

                <div class="right">
                    <a href="/databases/add" class="btn btn-secondary"><i class="fa fa-fw fa-plus"></i> Add Database</a>
                </div>

                <h1>Databases</h1>

                <!-- TODO -- Near instant fuzzy search on database names (filter the list below) -->
                <input type="search" class="form-control search" placeholder="Search by name" spellcheck="false" />

                <!-- TODO -- Order by column heading asc + desc -->
                <table class="table table-databases">
                    <tr>
                        <th>DB Name <i class="fa fa-fw fa-caret-down"></i></th>
                        <th>Engine</th>
                        <th>Status</th>
                        <th>Users</th>
                        <th>Added</th>
                    </tr>
                    <tr>
                        <td><a href="/databases/db/js6hu2wk">wfsed_wordpress</a></td>
                        <td>MySQL</td>
                        <td><i class="fa fa-fw fa-warning"></i> Read-only mode</td>
                        <td>1</td>
                        <td>1 week ago</td>
                    </tr>
                    <tr>
                        <td><a href="/databases/db/ed26sj80">wfsed_CustomApp</a></td>
                        <td>MongoDB</td>
                        <td><i class="fa fa-fw fa-check"></i> Online</td>
                        <td>2</td>
                        <td>2 weeks ago</td>
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