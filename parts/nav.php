</head>
<body>
    <div id="Nav" class="clear">
        <div class="logo">
        </div>
        <?php wp_nav_menu()?>
        <?php if(is_user_logged_in()){?>
            <a href="/wp-admin" class="admin">Admin</a>
        <?php } ?>
    </div>