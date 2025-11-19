 $(document).ready(function(){
            $("#wizard").steps();
            $("#form1").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!

                    if (currentIndex > newIndex)
                    {
                        return true;
                    }
                    

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                 if (currentIndex === 3){
                         
                        if($("#invoice_details").val()==1){
                            
                            $(".current").addClass("error");
                            form.validate().settings.ignore = ":disabled";
                            return form.valid();
                        }
                        if($("#success_payment").val()==1){
                            
                            $(".current").addClass("error");
                            form.validate().settings.ignore = ":disabled";
                            return form.valid();
                        }
                        
                    }


                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.

                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("Save & Continue");
                    }

                    
                    
                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("Back");
                    }

                    if (currentIndex === 4){
                        confirm_details(); 
                        $(".excelbtn").css("display", "block");
                    }else{
                        $(".excelbtn").css("display", "none");
                    }
                    
                     if(currentIndex===1){
                        var get_total_pass_count = []
                        $("input[name='get_total_pass_count[]']").each(function (){
                            get_total_pass_count.push(String($(this).val()));
                        });
                        

                    }

                   
                     if(currentIndex==1){
                        if(get_total_pass_count.length>1){
                            //alert("grater");
                            //$('a[href="#next"]').hide();
                        }

                    }else{
                    
                    }


                    if(currentIndex==4){
                        $('a[href="#finish"]').text('Confirm');
                    }
                    if(currentIndex===3){
                        $('.decimal').keypress(function(event) {    

                            var $this = $(this);
                            if ($this.val().length == 0 && event.which == 48 ){
                              return false;
                           }else{
                            if ((event.which != 46 || $this.val().indexOf('.') != -1) &&
                               ((event.which < 48 || event.which > 57) &&
                               (event.which != 0 && event.which != 8))) {
                                   event.preventDefault();
                            }

                            var text = $(this).val();
                            if ((event.which == 46) && (text.indexOf('.') == -1)) {
                                setTimeout(function() {
                                    if ($this.val().substring($this.val().indexOf('.')).length > 3) {
                                        $this.val($this.val().substring(0, $this.val().indexOf('.') + 3));
                                    }
                                }, 1);
                            }

                            if ((text.indexOf('.') != -1) &&
                                (text.substring(text.indexOf('.')).length > 2) &&
                                (event.which != 0 && event.which != 8) &&
                                ($(this)[0].selectionStart >= text.length - 2)) {
                                    event.preventDefault();
                            }   
                           }   
                        });

                        $('.decimal').bind("paste", function(e) {
                        var text = e.originalEvent.clipboardData.getData('Text');
                        if ($.isNumeric(text)) {
                            if ((text.substring(text.indexOf('.')).length > 3) && (text.indexOf('.') > -1)) {
                                e.preventDefault();
                                $(this).val(text.substring(0, text.indexOf('.') + 3));
                           }
                        }
                        else {
                                e.preventDefault();
                             }
                        });
                        var add_on_transid=null;
                        if($("#add_on_0").is(":checked")){
                            var add_on_transid=$("#add_on_0").val();
                        }
                        if($("#add_on_1").is(":checked")){
                            var add_on_transid=$("#add_on_1").val();
                        }
                       fare_details(add_on_transid);                       

                    }                    
                    if(currentIndex==2){
                        get_bed();
                    }
              
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },                        

                    });
       });



        $(document).ready(function() {            
            
            var elems = document.querySelectorAll('.js-switch');                
            for (var i = 0; i < elems.length; i++) {
                //var switchery = new Switchery(elems[i]);
                var switchery = new Switchery(elems[i], { color: '#1AB394', secondaryColor: '#ED5565', jackColor: '#ffffff', jackSecondaryColor: '#ffffff' });
            }                        

            var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
            var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

            var data1 = [
                { label: "Data 1", data: d1, color: '#17a084'},
                { label: "Data 2", data: d2, color: '#127e68' }
            ];
            


        }); 
       
$(function () {                
    $("#form").validationEngine();
    $("#add_package_category").validationEngine();
    $("#validation_data").validationEngine();
    $("#add_agent").validationEngine();
});
$(document).ready(function(){
    $('.dataTables-example').DataTable({
        pageLength: 25,
        responsive: true,
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
           /* { extend: 'copy'},
            {extend: 'csv'},
            {extend: 'excel', title: 'ExampleFile'},
            {extend: 'pdf', title: 'ExampleFile'},
*/
            /*{extend: 'print',
             customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
            }
            }*/
        ]

    });

});


 
    function common_status_change(transid) {  

        var transid=transid;
        var transid = transid.replace(/ /g,'');
        var current_url=$('#current_url').val()

         $.ajax({                
            type:'post',                
            url:current_url+'/status',
            data: {                    
                transid: transid,                    
            },                
            success:function(data){                                           
                                
            }

         });   
    }
    function show_button(value) {

    $('#check_all_filed').prop('checked', false);       

   var check = []
            
    $("input[name='check_delete[]']:checked").each(function ()
    {
        check.push(String($(this).val()));
     });
        
    if(check.length>0){
        $('#show_delete').show();
    }else{
        $('#show_delete').hide();
    }
}
function check_all(){        

        if($('#check_all_filed').is(':checked')){
            
            $('.check_class').prop('checked', true);
            
        }else{
            $('.check_class').prop('checked', false);        }

        var check = []
            
        $("input[name='check_delete[]']:checked").each(function ()
        {
            check.push(String($(this).val()));
         });
            
        if(check.length>0){
            $('#show_delete').show();
        }else{
            $('#show_delete').hide();
        }
}


    function edit_data(transid) {
            $('html, body').animate({
                scrollTop: 0
             }, 'slow');
            var transid=transid;                        
            var current_url=$('#current_url').val()                                                
            $('#edit-data').modal('show');
            
             $.ajax({
                type:'POST',
                url:current_url+'/edit_data',
                data: {
                    transid: transid
                },
                
                success:function(data){
                    if(data==1){
                        location.reload();
                    }else{
                        $("#edit_data").html(data);    
                    }
                    
                }
             });
        
    }
   /* $("#flight_name").keypress(function(event) {        
      var inputValue = event.charCode;  
      if (!(inputValue >= 65 && inputValue <= 90) && !(inputValue >= 97 && inputValue <= 122) && (inputValue != 32 && inputValue != 0) && (inputValue!=46)) {
          event.preventDefault();
      }  
    });*/
    $('#flight_name').keypress(function (e) {
            var regex = new RegExp("^[a-zA-Z ]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regex.test(str)) {
                return true;
            }

            e.preventDefault();
            return false;
        });
    $(".only_character").keypress(function (e) {
            var regex = new RegExp("^[a-zA-Z ]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regex.test(str)) {
                return true;
            }

            e.preventDefault();
            return false;
        });
    $(function() {
  
        $("[name='from_date']").datepicker({
            defaultDate: "",
            dateFormat: "yy-mm-dd",
            minDate: 0,            
            changeMonth: true,        
            changeYear: true,
            numberOfMonths: 1,        
            onClose: function( selectedDate ) {
             $("[name='to_date']").datepicker( "option", "minDate", selectedDate );    
              
            }
          });
          $("[name='to_date']").datepicker({
            defaultDate: "",
            dateFormat: "yy-mm-dd",
            minDate: 0,
            changeMonth: true,
            numberOfMonths: 1,
            onClose: function( selectedDate ) {
             
              
            }
          });
    
     });
         
    $(function() {
         
        $("#date").datepicker({
            defaultDate: "",
            dateFormat: "yy-mm-dd",
                 

            changeMonth: true,        
            changeYear: true,
            numberOfMonths: 1,                    
          });
      
    
  });

     $(function() {
      var currentYear = (new Date).getFullYear();
      var currentYear=currentYear-16;

        $(".date_picker").datepicker({
            //defaultDate: currentYear,
            dateFormat: "yy-mm-dd",
            maxDate: currentYear,     
            yearRange: "-80:"+currentYear,
            changeMonth: true,        
            changeYear: true,
            numberOfMonths: 1,                    
          });
      
    
  });

    $(function() {
        var pkg_date=$("#package_date").val();
  
        $("#date1").datepicker({
            defaultDate: "",
            dateFormat: "yy-mm-dd",
            //minDate: 1,
            maxDate: pkg_date,
            changeMonth: true,        
            changeYear: true,
            numberOfMonths: 1,                    
          });
      
    
  });

$('.decimal').keypress(function(event) {    

    var $this = $(this);
    if ($this.val().length == 0 && event.which == 48 ){
      return false;
   }else{
    if ((event.which != 46 || $this.val().indexOf('.') != -1) &&
       ((event.which < 48 || event.which > 57) &&
       (event.which != 0 && event.which != 8))) {
           event.preventDefault();
    }

    var text = $(this).val();
    if ((event.which == 46) && (text.indexOf('.') == -1)) {
        setTimeout(function() {
            if ($this.val().substring($this.val().indexOf('.')).length > 3) {
                $this.val($this.val().substring(0, $this.val().indexOf('.') + 3));
            }
        }, 1);
    }

    if ((text.indexOf('.') != -1) &&
        (text.substring(text.indexOf('.')).length > 2) &&
        (event.which != 0 && event.which != 8) &&
        ($(this)[0].selectionStart >= text.length - 2)) {
            event.preventDefault();
    }   
   }   
});

$('.decimal').bind("paste", function(e) {
var text = e.originalEvent.clipboardData.getData('Text');
if ($.isNumeric(text)) {
    if ((text.substring(text.indexOf('.')).length > 3) && (text.indexOf('.') > -1)) {
        e.preventDefault();
        $(this).val(text.substring(0, text.indexOf('.') + 3));
   }
}
else {
        e.preventDefault();
     }
});
$(function () {                
    $('.timepicker').wickedpicker();
});
$(function () {                
    $('.travel_duration_timepicker').wickedpicker({
        twentyFour: true,        
        now: "00:00"
    });
});
   function get_action(transid) {
       

       var transid=transid;
       var value=$("#get_action_val_"+transid).val();
        if(value=='Edit'){           
           $("#get_action_val_"+transid).val('');
            edit_data(transid);        
        }else{
            $("#get_action_val_"+transid).val('');
            var r= confirm('Do you want to delete this?');
            if(r==true){ 
                 window.location = value;
            }        
            
        }
   }
function get_action1(transid) {
       

       var transid=transid;
       var value=$("#get_action_val_"+transid).val();
        if(value=='Edit'){           
           $("#get_action_val_"+transid).val('');
           var url=$("#get_edit_select_"+transid).attr('redirect_url');
           window.location = url; // redirect
        }else{
            $("#get_action_val_"+transid).val('');
            var r= confirm('Do you want to delete this?');
            if(r==true){ 
                 window.location = value;
            }        
            
        }
   }

/*$('#validation_data').submit(function (e) {
        
            var pass_val=$('#password').val();
            var count=$("#password").val().length;
            if(pass_val==''){
                e.preventDefault();
                $("#password").removeClass('success_cls');
                $("#password").addClass('error_cls');
                $('#show_pass').text('Password is required');
                $('#show_pass').show('');
            }
            if(count < 8){
                e.preventDefault();
            }
            if(count >= 8){
                var pwd=pass_val.match(/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/)
                if(pwd==null && $("#password-confirm").val()!= $("#password").val()){
                    e.preventDefault();
                }else{
                    $('#validation_data').submit();
                }
            }
        });*/
    function char_check() {
        /*(".formErrorContent").css('dispaly', 'none');
        (".formErrorArrow").css('dispaly', 'none');*/
        
            //$("#password").removeClass('validate[required]');    
        
        
        var pass_val=$('#password').val();
        
            var count=$("#password").val().length;
            if(count < 8){
                $("#password").removeClass('success_cls');
                $("#password").addClass('error_cls');
                $('#show_pass1').text('Minimum 8 chracters required');
                $('#show_pass1').show('');
            }else{
                $('#show_pass1').hide();
            }
            if(count >= 8){
                var pwd=pass_val.match(/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/)
                if(pwd==null){
                    $("#password").removeClass('success_cls');
                    $("#password").addClass('error_cls');
                    $('#show_pass').text('The password must be contain an uppercase a lowercase and a digit');
                    $('#show_pass').show('');
                    
                    $("#validation_data").submit(function(e){
                        e.preventDefault();
                    });
                    
                }else{
                    $("#password").removeClass('error_cls');
                    $("#password").addClass('success_cls');
                    $('#show_pass').text('');
                    $('#show_pass').hide();
                    

                   // $("#form").submit();
                }
            }       
    }
    $("#description").keyup(function(){    
          $("#count1").text("Characters left: " + (200 - $(this).val().length));
    });
     $(document).ready(function () {
            $(".i-checks").iCheck({
                checkboxClass: "icheckbox_square-green",
                radioClass: "iradio_square-green", 
                
            });            

        });

 function get_package_details(transid) {
      var current_url=$('#current_url').val()                                                
      $("#package_tid").val(transid);
    
     $.ajax({
        type:'POST',
        url:current_url+'/package_details',
        data: {
            transid: transid
        },
        
        success:function(data){    
        
        //$("#get_desctiotion").show();

            //get_pkg_description();
            $("#get_package_details").html(data);

        }
     });   
 }

 function get_passenger_details(count) {

     get_bed();

      var current_url=$('#current_url').val()                                                
    
            if($("#package_amount_front").val()!=0){
                var pacakge_amount=$("#package_amount_front").val();
            }else{
                var pacakge_amount=$("#package_amount").val();
            }

        var append_data = []
        $("input[name='get_total_pass_count[]']").each(function(){
                append_data.push(String($(this).val()));

          }); 
         
        var package_tid=$("#package_tid").val();
           


        var appen_data_count=append_data.length;
       var count= parseInt(count);
        
        if(appen_data_count > count){

            for(i=1; i<appen_data_count; i++){
                var zzz= ((count) + (i));
                $("#pass_details_"+zzz+"").remove();
            }
        }
        var total_amount=pacakge_amount*count;    
        
        
         
         var add_on_transid=null;
         fare_details(add_on_transid);

     $.ajax({
        type:'POST',
        url:current_url+'/get_passenger',
        data: {
            count: count,
            appen_data_count: appen_data_count,
            package_tid:package_tid
        },
        
        success:function(data){
            
            $("#package_cost").text(($.number(total_amount,2)));
            $("#get_passenger").append(data);
        }
     });   
 }
 function get_state(country_id) {
     
       var current_url=$('#current_url').val()   
    
         $.ajax({
            type:'POST',
            url:current_url+'/get_state',
            data: {
                country_id: country_id
            },
            
            success:function(data){
                $("#state").html(data);
            }
         });      
 }
 function get_state_multiple(country_id, append_state_id) {
     
       var current_url=$('#current_url').val()   
    
         $.ajax({
            type:'POST',
            url:current_url+'/get_state',
            data: {
                country_id: country_id
            },
            
            success:function(data){
                $("#state_"+append_state_id).html(data);
            }
         });      
 }
 $(".only_integer").keypress(function(event) {
  var inputValue = event.charCode;  
  if (!(inputValue >= 48 && inputValue <= 57)) {
    event.preventDefault();
  }  
});
 function date_search(select_val) {

  var departure =select_val;
var current_url=$('#current_url').val()
  // alert(transid);exit;
  $.ajax({
    type : "POST",
    url:current_url+'/departure_date_search',
    dataType : "text",
    data : {
        departure:departure,
        pkg_guctomer:$("#pkg_guctomer1").val(),
    },
    
    success: function(data){
         
      $('#fetch_data').html(data);
  
    }
  });
 
    
}

$(document).ready(function(){

  // Search all columns
 
  // Search on name column only
  $('#pkg_guctomer').keyup(function(){
    // Search Text
    var search = $(this).val();

    // Hide all table tbody rows
    $('table tbody tr').hide();

    // Count total search result
    var len = $('table tbody tr:not(.notfound) td:nth-child(2):contains("'+search+'")').length;
    var len4 = $('table tbody tr:not(.notfound) td:nth-child(3):contains("'+search+'")').length;

    if(len > 0){
      // Searching text in columns and show match row
      $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
         $(this).closest('tr').show();
      });
    }else{
      if(len4 > 0){
      // Searching text in columns and show match row
      $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
         $(this).closest('tr').show();
      });
    }else{
      $('.notfound').show();
      }
    }

    

    

  });

});

// Case-insensitive searching (Note - remove the below script for Case sensitive search )
$.expr[":"].contains = $.expr.createPseudo(function(arg) {
   return function( elem ) {
     return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
   };
});

function get_action_customer(transid,booking_tid) {
       
        var transid=transid;
       var value=$("#get_action_val_customer_"+transid).val();
       //alert(value);exit;
        if(value=='collact_payment'){
               $("#get_action_val_customer_"+transid).val('');
                payment_details(transid);        
        }else if(value=='add_pax'){                
                $("#add_extra_pax_"+transid).submit();


        }else{
           
            var r= confirm('Do you want to cancel booking?');
            if(r==true){ 
                  window.location = value;                 
            }       
        }
   }


function collact_payment(transid) {
            var transid=transid; 
            // alert(transid);exit;                        
            var current_url=$('#current_url').val()                                                
            $('#payment-data').modal('show');
            
             $.ajax({
                type:'POST',
                url:current_url+'/payment_details',
                data: {
                    transid: transid
                },
                
                success:function(data){
                    $("#payment_data").html(data);
                }
             });
        
    }

function trip_details_customer(transid) {
            var transid=transid; 
            // alert(transid);exit;                        
            var current_url=$('#current_url').val()                                                
            $('#trip-details').modal('show');
            
             $.ajax({
                type:'POST',
                url:current_url+'/trip_details',
                data: {
                    transid: transid
                },
                
                success:function(data){
                    $("#trip_details").html(data);
                }
             });
        
    }

function payment_details(transid) {
            var transid=transid; 
            // alert(transid);exit;                        
            var current_url=$('#current_url').val()                                                
            $('#payment-details').modal('show');
            
             $.ajax({
                type:'POST',
                url:current_url+'/payment_details',
                data: {
                    transid: transid
                },
                
                success:function(data){
                    $("#payment_details").html(data);
                }
             });
        
    }

    function fare_details(add_on_transid) {
        var current_url=$('#current_url').val() ;                                                           
        var package_tid=$("#package_tid").val();
        var total_number_pax=$("#total_number_pax").val();
        var append_data = []
        $("input[name='get_total_pass_count[]']").each(function(){
                append_data.push(String($(this).val()));

          }); 
        var total_pass=append_data.length;

        if(add_on_transid!=''){
            var add_on_transid=add_on_transid;    
        }else{
            var add_on_transid='';
        }
        

         $.ajax({
            type:'POST',
            url:current_url+'/fare_details',
            /*data: {
                add_on_transid: add_on_transid,
                package_tid: package_tid,
                total_number_pax: total_pass
            },*/
            data: $('#form1').serialize(),
            
            success:function(data){
                $("#get_payment_details").html(data);
            }
         });
        
    }

    function confirm_details() {
        var current_url=$('#current_url').val() ;                                                           
        var package_tid=$("#package_tid").val();
        var add_on=$("#add_on").val();        
        var total_number_pax=$("#total_number_pax").val();
         $.ajax({
            type:'POST',
            url:current_url+'/confirm_details',
            /*data: {
                add_on: add_on,
                package_tid: package_tid,
                total_number_pax: total_number_pax
            },*/
            data: $('#form1').serialize(),
            success:function(data){
                $("#confirm_section").html(data);
            }
         });        
    }

    function printDiv() 
    {      

      var divToPrint=document.getElementById("confirm_section");
       newWin= window.open("");
       newWin.document.write(divToPrint.outerHTML);
       newWin.print();
       newWin.close();
    }
 $(document).ready(function(){
        var doc = new jsPDF();
        var specialElementHandlers = {
        '#editor': function (element, renderer) {
            return true;
        }
    };

    $('#cmd').click(function () {
        doc.fromHTML($('#confirm_section').html(), 10, 10, {
            'width': 110,
                'elementHandlers': specialElementHandlers
        });
        doc.save('booking.pdf');
    });
});        

 function check_invoice(invoice_number) {
        var current_url=$('#current_url').val() ;                                                           
        
         $.ajax({
            type:'POST',
            url:current_url+'/check_invoice',
            data: {                
                invoice_number: invoice_number
            },
           
            success:function(data){                
                if(data==1){
                    $("#invoice_msg").show();    
                    $("#invoice_details").val(1);
                }else{                    
                    $("#invoice_msg").hide();    
                    $("#invoice_details").val(0);

                }
                
            }
         });        
 }
 function get_passenger_form() {

     if($("#form1").valid()){
         //$(".passenger_section").css('display', 'block');
     }
     
 }





    function cancel_details(transid) {
            var transid=transid; 
            confirm('Do you want to delete this?');                     
            var current_url=$('#current_url').val()                                                
            
            
             $.ajax({
                type:'POST',
                url:current_url+'/cancel_trip',
                data: {
                    transid: transid
                },
                
                // success:function(data){
                //     $("#payment_details").html(data);
                // }
             });
        
    }



    function view_record(search){
   
    // var search = $(this).val();

    // Hide all table tbody rows
    $('table tbody tr').hide();

    // Count total search result
    var len = $('table tbody tr:not(.notfound) td:nth-child(2):contains("'+search+'")').length;
    

    if(len > 0){
      // Searching text in columns and show match row
      $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
         $(this).closest('tr').show();
      });
    }else{
      $('.notfound').show();
      }
    

};

function package_details(transid) {
            var transid=transid; 
            
            var current_url=$('#current_url').val()                                                
            $('#package-details').modal('show');
            
             $.ajax({
                type:'POST',
                url:current_url+'/package_details',
                data: {
                    transid: transid
                    
                },
                
                success:function(data){
                    $("#package_details").html(data);
                }
             });
        
    }

$('.next').click(function(){
   $(this).parent().hide().next().show();//hide parent and show next
});

$('.back').click(function(){
   $(this).parent().hide().prev().show();//hide parent and show previous
});

function get_pkg_description() {
     
     var current_url=$('#current_url').val()                                                
            $('#package-description').modal('show');
            var pkg_tid=$("#package_tid").val();
            
             $.ajax({
                type:'POST',
                url:current_url+'/package_description',
                data: {
                    pkg_tid: pkg_tid
                },
                
                success:function(data){                    
                    $("#package_description").html(data);
                }
             });   
}

function get_clear(value) {
    window.location = value;
    
}
function check_due_amount(payee_amount) {
    
    var current_url=$('#current_url').val()                                                
    
     $.ajax({
        type:'POST',
        url:current_url+'/due_amount_check',
        data: {
            payee_amount: payee_amount,
            invoice_number: $("#invoice_number").val()
        },
        
        success:function(data){
            //$("#package_description").html(data);            
            if(data==1){
                $("#amount_error").show();
                $("#payment_submit").attr('type','button');
                //alert('Your Entered amount is grater than due amount');
                
            }else{                    
                $("#amount_error").hide();    
                $("#payment_submit").attr('type','submit');

            }
        }
     });

}

$("#password").blur(function(){
        // alert();
        var newpass= $('#password').val();
        var current_pass= $('#current_password').val();
        if(newpass==current_pass){
           $('#show_error_msg').show();
           $('#change_password').attr('type', 'button');
        }else{

            $('#show_error_msg').hide();
            $('#change_password').attr('type', 'submit');
        }    
   
    
 });

$(".number_character").keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z  0-9]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }

        e.preventDefault();
        return false;
    });

      function payee_amount_advance(payee_amount) {
    
         var current_url=$('#current_url').val();
         var pkg_tid=$("#package_tid").val();  
         var total_number_pax=$("#total_number_pax").val();                                            
         var total_cost=$("#final_cost").val();
         

         if($("#add_on_0").is(":checked")){
            var add_on_transid=$("#add_on_0").val();
        }else{
            var add_on_transid=null;
        }
        if($("#add_on_1").is(":checked")){
            var add_on_transid=$("#add_on_1").val();
        }else{
            var add_on_transid=null;
        }
        
         $.ajax({
            type:'POST',
            url:current_url+'/payee_amount',
            data: {
                payee_amount: payee_amount,
                pkg_tid: pkg_tid,
                total_number_pax: total_number_pax,
                add_on_transid: add_on_transid,
                total_cost:total_cost
            },
            
            success:function(data){            
                if(data==1){                                
                    $("#amount_error").show();                    
                    $("#success_payment").val(1);
                    
                }else{                    
                    $("#amount_error").hide();                        
                    $("#success_payment").val(0);

                }
            }
         });

    }
    function due_payment() {        
        check_due_amount($("#pay_amount").val());
    }
    $('.formEmail').on('change', function() {

        var base_url=$('#base_url').val()
        // alert(base_url);exit;
        $.ajax({
            type:'POST',
            url:base_url+'/foorgot_pass_email',
            data: {
                'email' : $('.formEmail').val()
            },
            success:function(data){
                    
            if(data==1){

                $("#email_error").show();
                $("#email_submit").attr('type','button');
                $(".formErrorContent").hide();  
                //alert('Your Entered amount is grater than due amount');
            }else{                    
                $("#email_error").hide();    
                $("#email_submit").attr('type','submit');

            }
        }
        });
    });

    $(".only_character_package").keypress(function (e) {
            var regex = new RegExp("^[a-zA-Z\-\(\)\&) ]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regex.test(str)) {
                return true;
            }

            e.preventDefault();
            return false;
        });

 function show_less(transid) {
  
 $('#more_'+transid).show();
 $('#less_'+transid).hide();
}
function show_more(transid) {
    
 $('#more_'+transid).hide();
 $('#less_'+transid).show();
}

function get_bed() {
    var current_url=$('#current_url').val()                                                
    
     $.ajax({
        type:'POST',
        url:current_url+'/get_bed_details',
        data: $('#form1').serialize(),
        
        success:function(data){
            $("#get_bed").html(data);            
            
        }
     });
}
function set_excel_download() {
    var current_url=$('#current_url').val()                                                
        
     $.ajax({
        type:'POST',
        url:current_url+'/set_excel_download',
        data: $('#form1').serialize(),
        
        success:function(data){
            get_excel_download();
            //$("#get_bed").html(data);  
            //window.open(current_url+'/excel_download');

            
        }
     });
}
function get_excel_download() {
    var current_url=$('#current_url').val()                                                
        
     $.ajax({
        type:'POST',
        url:current_url+'/excel_download',
        //data: $('#form1').serialize(),
        
        success:function(data){
            //$("#get_bed").html(data);  
            window.open(current_url+'/excel_download');

            
        }
     });
}

/*$('#add_on_1').click(function() {     
  var checked = $(this).attr('checked', true);
  if(checked){ 
    $(this).attr('checked', false);
  }
  else{ 
    $(this).attr('checked', true);
  }
});*/
/*$('#add_on_0').click(function() {     
  var checked = $(this).attr('checked', true);
  if(checked){ 
    $(this).attr('checked', false);
  }
  else{ 
    $(this).attr('checked', true);
  }
});*/

function add_on_selection(k) {

    $(k).find('.iradio_square-green').removeClass('checked');
    
      if($(k).find("#add_on_0").prop('checked')){ 

            $(k).find("#add_on_0").prop('checked', false);
      }
      else{ 
          
        $(k).find("#add_on_1").prop('checked', false);
      }
}






function get_vehicle_amount(vehicle_count) {
    var current_url=$('#current_url').val();
    var vehicle_transid=$("#vehicle_name").val();
        
     $.ajax({
        type:'POST',
        url:current_url+'/get_vehicle_cost',
        data: {
                vehicle_transid: vehicle_transid,
                vehicle_count: vehicle_count
            },
        
        success:function(data){
            $("#vehicle_cost").text(($.number(data,2)));  
            $("#total_vehicle_cost").val(data);  
            

            
        }
     });
}


function get_vahicle_amount() {
    var current_url=$('#current_url').val();
    var vehicle_transid=$("#vehicle_name").val();
    var vehicle_count=$("#vehicle_quantity").val();
        
     $.ajax({
        type:'POST',
        url:current_url+'/get_vehicle_cost',
        data: {
                vehicle_transid: vehicle_transid,
                vehicle_count: vehicle_count
            },
        
        success:function(data){
            $("#vehicle_cost").text(($.number(data,2)));  
            $("#total_vehicle_cost").val(data);  
            

            
        }
     });
}

function get_phone_code(country_id) {

    var current_url=$('#current_url').val();    
        
     $.ajax({
        type:'POST',
        url:current_url+'/get_phone_code',
        data: {
                country_id: country_id,
                
            },
        
        success:function(data){
            
         $(".get_phone_code").text(data);

            
        }
     });
}


function get_phone_code_family(country_id) {
    
    var current_url=$('#current_url').val();    
        
     $.ajax({
        type:'POST',
        url:current_url+'/get_phone_code',
        data: {
                country_id: country_id,
                
            },
        
        success:function(data){
            
         $(".get_phone_code1").text(data);

            
        }
     });
}
$('.formEmail1').on('change', function() {

        var current_url=$('#current_url').val();    
        // alert(base_url);exit;
        $.ajax({
            type:'POST',
            url:current_url+'/foorgot_pass_email',
            data: {
                'email' : $('.formEmail1').val()
            },
            success:function(data){
                    
            if(data==1){

                $("#email_error").show();
                $("#email_submit").attr('type','button');
                $(".formErrorContent").hide();  
                //alert('Your Entered amount is grater than due amount');
            }else{                    
                $("#email_error").hide();    
                $("#email_submit").attr('type','submit');

            }
        }
        });
    });
function get_passenger_search() {
     var current_url=$('#current_url').val();  

     var departure_date=$("#departure_date").val();
     var search_value=$("#pkg_guctomer1").val();
     var invoice_no=$("#invoice_no").val();
     var package_tid=$("#package_tid").val();
     
          $.ajax({
            type:'POST',
            url:current_url+'/search_passenger_data',
            data: {
                search_value : search_value,
                departure_date : departure_date,
                invoice_no : invoice_no,
                package_tid : package_tid,
            },
            success:function(data){
               $('#fetch_data').html(data);
            
            }
        });  

}
function get_dep_date(package_tid) {
     var current_url=$('#current_url').val();  
     
          $.ajax({
            type:'POST',
            url:current_url+'/get_dep_date',
            data: {                
                package_tid : package_tid,
            },
            success:function(data){
               $('#departure_date').html(data);
            
            }
        });  

}
function get_invoice(package_tid) {
     var current_url=$('#current_url').val();  
     
      $.ajax({
        type:'POST',
        url:current_url+'/get_invoice',
        data: {                
            package_tid : package_tid,
        },
        success:function(data){
           $('#invoice_no').html(data);
        
        }
    });  

}
function get_agent_details(transid) {
            
    var transid=transid;                        
    var current_url=$('#current_url').val()                                                
    $('#agent-details').modal('show');
    
     $.ajax({
        type:'POST',
        url:current_url+'/agent_details',
        data: {
            transid: transid
        },
        
        success:function(data){
                
                $("#agent_details").html(data);    
            
            
        }
     });
    
}
  function get_disease_yes() {    
  
      $("#disease_details").css("display", "block");      
      
  }
  function get_disease_no() {      
      $("#disease_details").css("display", "none");      
      
  }

 
 function get_checkbox(bed_value, id, transid) {



     if(bed_value=='Double'){
         if($(".double_get_check_box_"+id).prop('checked') == true){
             //alert('checked');
             $(".double_get_check_box_"+id).prop("checked", true);
             $(".triple_get_check_box_"+id).prop("checked", false);    
         }else{
             //alert('unchecked');
             
             $(".double_get_check_box_"+id).prop("checked", false);
             $(".triple_get_check_box_"+id).prop("checked", false);    
         }
         
     }
      if(bed_value=='Triple'){
         if($(".triple_get_check_box_"+id).prop('checked') == true){
            // alert('checked');
              $(".triple_get_check_box_"+id).prop("checked", true);
             $(".double_get_check_box_"+id).prop("checked", false);
          }else{
              //alert('unchecked');
             
             $(".triple_get_check_box_"+id).prop("checked", false);
             $(".double_get_check_box_"+id).prop("checked", false);
          }
     }
 }
function get_invoice_list() {
     var current_url=$('#current_url').val();  

     var departure_date=$("#departure_date").val();     
     
     var package_tid=$("#package_tid").val();
     
          $.ajax({
            type:'POST',
            url:current_url+'/invoice_list',
            data: {                
                departure_date : departure_date,                
                package_tid : package_tid,
            },
            success:function(data){
               $('#invoice_no').html(data);
            
            }
        });  

}
$('#password').on('keypress', function (event) {
    var regex = new RegExp("^[a-zA-Z0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
       event.preventDefault();
       return false;
    }
});


function discount_amount(payee_amount) {
       var current_url=$('#current_url').val();
         var total = parseInt(document.getElementById("totalval").value);
        if(payee_amount){


         
         // alert(total);
           if(payee_amount>total){

            $('#final_dis_ammount').hide();
            $('#equalshow').hide();
            $('#final_cost').val(total);
            $('#dis_error').show();
           }else{
            $('#dis_error').hide();
         $.ajax({
            type:'POST',
            url:current_url+'/discount',
            data: {
                total: total,
                payee_amount: payee_amount,
                
            },
            
            success:function(data){ 
            var $amount_r =  parseFloat(data).toFixed(2);    
                $('#final_dis_ammount').html('Total Cost: RM '+$amount_r);
                 $('#final_dis_ammount').show();
                $('#final_cost').val(data);
                $('#equalshow').show();

                

            }
         });
     }
     }else{
        
        $('#equalshow').show();
        // alert(parseInt(document.getElementById("totalval").value));
        var $amount_r =  parseFloat(total).toFixed(2);   
        $('#final_dis_ammount').html('Total Cost: RM '+$amount_r);
     }

    }

    function get_travel_class() {
    var current_url=$('#current_url').val();
    var class_tid=$("#class_tid").val();
    
        
     $.ajax({
        type:'POST',
        url:current_url+'/get_travel_class',
        data: {
                class_tid: class_tid
            },
        
        success:function(data){
            
            $("#class_show").val(data);  
            

            
        }
     });
}

function payment_date() {

// var pkg_date=$("#date").val();
$("#date").datepicker({
defaultDate: "",
dateFormat: "yy-mm-dd",
// maxDate: pkg_date,
changeMonth: true,
numberOfMonths: 1,
// onClose: function( selectedDate ) {


// }
});
}