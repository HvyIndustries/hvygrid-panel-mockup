    <div class="wrap">
        <ul>
            <li class="right">
                <a href="/settings" id="account-dropdown-button" class="nohover">nevada_scout <i class="fa fa-fw fa-caret-down"></i></a>
                <ul class="dropdown" id="account-dropdown">
                    <li><a href="/settings">Settings</a></li>
                    <li><a href="/settings/billing">Billing</a></li>
                    <li class="divider"></li>
                    <li><a href="/logout">Sign Out</a></li>
                </ul>
            </li>
            <li class="right">
                <a href="/notifications" class="nohover" title="You have 5 unread notifications">
                    <span id="notifications-icon" class="fa-stack shake-horizontal shake-constant">
                        <i class="fa fa-fw fa-bell fa-stack-1x"></i>
                        <i class="fa fa-fw fa-circle fa-stack-1x unread-icon"></i>
                    </span>
                </a>
            </li>

            <li><a href="/websites" class="logo nohover">HVYGRID</a></li>
            <li><a href="/websites" <?php if($menuItem == "websites") { ?> class="active" <?php } ?>>Websites</a></li>
            <li><a href="/databases" <?php if($menuItem == "databases") { ?> class="active" <?php } ?>>Databases</a></li>
            <!-- <li><a href="./teams.html">Manage Teams</a></li> -->
            <li><a href="/support" <?php if($menuItem == "support") { ?> class="active" <?php } ?>>Support</a></li>
        </ul>
    </div>

    <script type="text/javascript">
        window.onload = function() {
            document.body.addEventListener('click', hideDropdown);
            document.getElementById("account-dropdown-button").addEventListener('click', showHideDropdown);

            setTimeout(stopShakingNotificationIcon, 400);
        }

        function showHideDropdown(e) {
            var dropdown = document.getElementById("account-dropdown");

            if (dropdown.style.display === "none" || dropdown.style.display === "") {
                dropdown.style.display = "block";
            } else {
                dropdown.style.display = "none";
            }

            e.preventDefault();
            e.stopPropagation();
        }

        function hideDropdown(e) {
            var dropdown = document.getElementById("account-dropdown");
            dropdown.style.display = "none";
        }

        function stopShakingNotificationIcon() {
            var notificationsIcon = document.getElementById("notifications-icon");
            notificationsIcon.className = "fa-stack";
        }
    </script>