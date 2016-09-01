
$(document).ready(function(){
        var date_input1=$('input[name="date1"]'); //our date input has the name "date"
        var date_input2=$('input[name="date2"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input1.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });
        date_input2.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });
    })


function validateForm() {
    var idnum = document.forms["leaveform"]["idnum"].value;
    var type = document.forms["leaveform"]["type"].value;
    var date1 = document.forms["leaveform"]["date1"].value;
    var date2 = document.forms["leaveform"]["date2"].value;
    var secode = document.forms["leaveform"]["secode"].value;
    var reason = document.forms["leaveform"]["reason"].value;
    if (idnum == "" || type == "" || date1 == "" || date2 == "" || secode == "" || reason == "") {
			alert("Please complete all the fields!");
        return false;
    }else {
        confirm("Are you sure you want to file this leave?");
    }
}