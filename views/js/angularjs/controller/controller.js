
var phonecatApp = angular.module('phonecatApp' , []);
phonecatApp.controller('PhoneListCtrl' , function($scope){
    $scope.title = 'Телефоны для пацанчиков';
    $scope.phones = [
        {'name' : 'Nexus S',
        'snippet' : 'Ну очень мощный уася телефон'},
        {'name' : 'Motorolla',
        'snippet' : 'Телефон для пацана'},
        {'name' : 'НокиЙа',
        'snippet' : 'По ебалу на'},
    ];
    var date = new Date();
    $scope.today = date;
});

var newsApp = angular.module('newsApp' , []);
phonecatApp.controller('newsListCtrl' , function($scope){
    $scope.news = ''; 
});