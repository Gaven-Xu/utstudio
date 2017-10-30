</head>
<body>
    <div id="Nav" class="clear">
        <div class="logo">
            <div class="line line_u line_u1"></div>
            <div class="line line_u line_u2"></div>
            <div class="line line_u line_u3"></div>
            <div class="line line_t line_t1"></div>
            <div class="line line_t line_t2"></div>
        </div>
        <?php wp_nav_menu()?>
        <?php if(is_user_logged_in()){?>
            <a href="/wp-admin" class="admin">Admin</a>
        <?php } ?>
    </div>