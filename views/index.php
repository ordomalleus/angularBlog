<?php
    header( 'Content-Type: text/html; charset=utf-8' );
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="views/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="views/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="views/css/colorbox.css" rel="stylesheet" type="text/css"/>
    <link href="views/css/my.css" rel="stylesheet" type="text/css"/>
    <script src="views/js/angular.js" type="text/javascript"></script>
    <script src="views/js/angularjs/controller/controller.js" type="text/javascript"></script>
    <script src="views/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="views/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="views/js/my.js" type="text/javascript"></script>
</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h1>Главная страница</h1>
                </div>
                <div>
                    <a class="btn btn-primary" role="button" href="index.php?ctrl=news&act=ShowAll">показать все
                        новости</a>
                </div>
            </div>
        </div>
        <div class="row" data-ng-app="phonecatApp">
            <div class="col-md-12" data-ng-controller="PhoneListCtrl">
                <input type="text" data-ng-model="input"/>
                <p>Привет {{input}}</p>
                <h2>{{title}}</h2>
                <ul>
                    <li data-ng-repeat="phone in phones">
                        <span>{{phone.name}}</span>
                        <p>{{phone.snippet}}</p>
                    </li>
                </ul>
                <p>Общее количество телефонов {{phones.length}}</p>
                <table>
                    <tr data-ng-repeat="i in [0,1,2,3,4,5,6,7,8]">
                        <td>{{i + 1}}</td>
                    </tr>
                </table>
                <p>Время {{today | date: 'dd / MM / yyyy  H:m:s'}}</p>
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
