$(function() {
            $( "#datepicker-13" ).datepicker();
            $( "#datepicker-13" ).datepicker("hide");
            $("#datepicker-13").datepicker( "setDate" , "7/11/1990" );
            $("#datepicker-13").datepicker({ dateFormat: 'dd-mm-yy' });
         });
