
var messengerApp = angular.module('messengerApp',['ngRoute']);

messengerApp.config(function($routeProvider){
    $routeProvider
    .when('/messenger',{
        templateUrl : ('../controllers/ControllerMessenger.php')
    })
    .when('/messenger/victor',{
        templateUrl : ('../assets/include/victor.php')
    })
    .when('/messenger/marcus',{
        templateUrl : ('../assets/include/marcus.php')
    })
    .when('/messenger/ellena',{
        templateUrl : ('../assets/include/ellena.php')
    })
    .when('/messenger/julia',{
        templateUrl : ('../assets/include/julia.php')
    })
    .otherwise({
        redirectTo: ('/messenger')
    });
});
$(window).scroll(function() {
  if ($(document).scrollTop() > 75) {
    $('.logoTitle').addClass('disable');
  } else {
    $('.logoTitle').removeClass('disable');
  }
});

$(window).scroll(function() {
  if ($(document).scrollTop() > 100) {
    $('.navbar').addClass('color-change');
    $('.logo').addClass('minimize');

    $('.title').removeClass('disable');
  } else {
    $('.navbar').removeClass('color-change');
    $('.logo').removeClass('minimize');

    $('.title').addClass('disable');

  }
});

$('.logoTitle').html(function(i, html) {
  var chars = $.trim(html).split("");

  return '<span>' + chars.join('</span><span>') + '</span>';
});
$('.title').html(function(i, html) {
  var chars = $.trim(html).split("");

  return '<span>' + chars.join('</span><span>') + '</span>';
});


// Applied globally on all textareas with the "autoExpand" class
$(document)
    .one('focus.autoExpand', 'textarea.autoExpand', function(){
        var savedValue = this.value;
        this.value = '';
        this.baseScrollHeight = this.scrollHeight;
        this.value = savedValue;
    })
    .on('input.autoExpand', 'textarea.autoExpand', function(){
        var minRows = this.getAttribute('data-min-rows')|0, rows;
        this.rows = minRows;
        rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 16);
        this.rows = minRows + rows;
    });
// var inscriptionApp = angular.module('inscriptionApp',['ngRoute']);

// inscriptionApp.config(function($routeProvider){
//     $routeProvider
//     .when('/step1',{
//         templateUrl : ('../views/inscriptionStep1.php')
//     })
//     .when('/step2',{
//         templateUrl : ('../views/inscriptionStep2.php')
//     })
//     .when('/step3',{
//         templateUrl : ('../views/inscriptionStep3.php')
//     })

//     .otherwise({
//         redirectTo: ('../views/inscriptionStep1.php')
//     });
// });

