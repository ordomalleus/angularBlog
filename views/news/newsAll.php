<?php
    header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/views/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/views/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="/views/css/colorbox.css" rel="stylesheet" type="text/css"/>
    <link href="/views/css/my.css" rel="stylesheet" type="text/css"/>
    <script src="/views/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="/views/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/views/js/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="/views/js/my.js" type="text/javascript"></script>
</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <p>Страница новостей</p>
                </div>
                <div>
                    <?php foreach($newsViews as $new): ?>
                        <div>
                            <h2>
                                <a href="<?php echo '/index.php?ctrl=news&act=ShowOne&id=' . $new->id; ?>">
                                    <?php echo $new->title; ?>
                                </a>
                            </h2>
                            <div>
                                <p><?php echo $new->text; ?></p>
                            </div>
                        </div>
                    <?php endforeach?>
                </div>

            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</section>
</body>
</html>