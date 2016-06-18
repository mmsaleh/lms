$(document).ready(function(){
        var date_input=$('input[name="start_date"]'); //our date input has the name "date"
        var container=$('.bootstrap-form form').length>0 ? $('.bootstrap-form form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
$(document).ready(function(){
        var date_input=$('input[name="end_date"]'); //our date input has the name "date"
        var container=$('.bootstrap-form form').length>0 ? $('.bootstrap-form form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })