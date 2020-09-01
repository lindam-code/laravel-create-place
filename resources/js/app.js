require('./bootstrap');

var $ = require('jquery');

var Handlebars = require("handlebars");

$(document).ready(function(){

  $.ajax(
    {
      url: 'http://127.0.0.1:8000/api/students',
      method: 'GET',
      success: function(dataResponse){
        console.log(dataResponse);
        var allStudents = dataResponse.students;

        var source = $('#student-template').html();
        var template = Handlebars.compile(source);

        for (var i = 0; i < allStudents.length; i++) {
          var thisStudents = allStudents[i];
          var html = template(thisStudents);
          $('#student-list').append(html);
        }
    },
    error: function(){
      alert('error');
    }
  });

});
