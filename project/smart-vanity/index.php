<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include('../../templates/head.html');
        ?>

        <title>Smart Vanity - Alan W. Song</title>
    </head>
    <body>
        <div class="container">
            <?php
                include('../../templates/header.html');
                include('../../templates/buttons.html');
                include('../../templates/top_nav.html');
            ?>
            <div class="row">
                <div class="col-lg-2">      
                    <?php
                        include('../../templates/side_nav.html');
                    ?>
                </div>

                <script>
                    // sidenav 
                    $('li#top_nav_projects').addClass('active');
                    $('div#side_nav_smart_vanity > div.collapse').attr('id', 'open');
                    $('div#side_nav_smart_vanity > div.collapse > a.des').attr('id', 'side_active');
                </script>

                <div class="col-lg-10"> 
                    <?php
                        include('contents.html');
                    ?>
                </div>
            </div>

            <?php
                include('../../templates/footer.html');
            ?>
        </div>

        <?php
            include('../../templates/foot.html');
        ?>
    </body>
</html>