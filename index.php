<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            include($path . '/templates/head.html');
        ?>

        <title>Alan W. Song</title>
    </head>
    <body>
        <div class="container">
            <?php
                include($path . '/templates/header.html');
                include($path . '/templates/buttons.html');
                include($path . '/templates/top_nav.html');
                include('contents.html');
                include($path . '/templates/footer.html');
            ?>
        </div>

        <script>
            $('li#top_nav_home').addClass('active');
        </script>

        <?php
            include($path . '/templates/foot.html');
        ?>
    </body>
</html>