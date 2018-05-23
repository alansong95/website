<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            include($path . '/templates/head.html');
        ?>

        <title>Smart Picture Frame - Documentation - Alan W. Song</title>
    </head>
    <body>     
        <div class="container">
            <?php
                include($path . '/templates/header.html');
                include($path . '/templates/buttons.html');
                include($path . '/templates/top_nav.html');
            ?>
            <div class="row">
                <div class="col-lg-2">      
                    <?php
                        include($path . '/templates/side_nav.html');
                    ?>
                </div>

                <script>
                    // sidenav 
                    $('li#top_nav_projects').addClass('active');
                    $('div#side_nav_smart_picture_frame > div.collapse').attr('id', 'open');
                    $('div#side_nav_smart_picture_frame > div.collapse > a.doc').attr('id', 'side_active');
                </script>
            
                <div class="col-lg-10">
                    <?php
                        include('contents.html');
                    ?>
                </div>
            </div>
            <div class="clearfix visible-md"></div> 
            <?php
                include($path . '/templates/footer.html');
            ?>
        </div>
            
        <?php
            include($path . '/templates/foot.html');
        ?>
    </body>
</html>