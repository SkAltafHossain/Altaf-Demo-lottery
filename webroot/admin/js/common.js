         $(document).ready(function(){
            $("#wizard").steps();
            $("#form1").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }
                    
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
                        if($("#success_discount").val()==1){
                            
                            $(".current").addClass("error");
                            form.validate().settings.ignore = ":disabled";
                            
                            return form.valid();

                        }
                        
                    }

                    if (currentIndex === 2){
                        
                        if($('#vehicle_name').val()!=''){
                        $('#vehicle_quantity').addClass('required');
                         
                         $('#vehicle_quantity').attr('data-msg-required','Please select quantity');
                        }else{
                            $('#vehicle_quantity').removeClass('required');
                            
                         $('#vehicle_quantity').removeAttr('data-msg-required');
                        }

                        if($('#vehicle_name').val()=='' && $('#vehicle_quantity').val()!='' ){
                            $('#vehicle_name').addClass('required');
                            $('#vehicle_name').attr('data-msg-required','Please select Vehicle');
                        }else{
                            $('#vehicle_name').removeClass('required');
                            $('#vehicle_name').removeAttr('data-msg-required');
                        }
                        
                    }


                    var form = $(this);

                   
                    if (currentIndex < newIndex)
                    {
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    
                    form.validate().settings.ignore = ":disabled,:hidden";

                    
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    if (currentIndex < 4 )  {

                       var discout=$('#dis_amount').val();
                       var dis_res=$("#discount_reason").val();
                       if(dis_res=='N/A'){
                        dis_res='';
                       }
                       
                       if(discout > 0){
                        window.setTimeout(function(){
                            $('.show1').val( discout);
                            
                            document.getElementById('discount_reason').value=dis_res;

                            
                            $("#discount_reason_box").show("100");

                           
                        },
                        500) ;
                       }
                       else{
                           $("#discount_reason").val(dis_res);


                        $("#discount_reason_box").show("100");
                       }
                    }
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("Save & Continue");
                    }
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
                           
                        }

                    }else{
                    
                    }


                    if(currentIndex==4){


                        $('a[href="#finish"]').text('Confirm');
                       
                        if( parseInt($("#dis_amount").val()) > 0)
                        {
                        var reason = $("#discount_reason").val();
                        
                       
                       window.setTimeout(function(){
                        $('#before_append').html("<label><strong>Discount Reason: </strong></label><div><span id='show_less1_span3' style='cursor: pointer;' onclick='show_more3(\""+reason+"\")' >"+reason.substring(0,20)+"<span class='data-more'><br><b style='color:blue'>more</b></span></span><span style='display: none; cursor: pointer;' id='show_full1_span3' onclick='show_less3(\""+reason+"\")'><span class='data-more'>"+reason+"<br><b style='color: blue'>less</b></span></span> </div><br>");
                        },500);                     

                        }else{
                            $("#discount_reason").val('N/A');

                            $("#discount_reason_box").hide("100");
                            

                        }



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
                       if(typeof dis_amount=='undefined'){
                        dis_amount=0;
                       }
                       discount_amount(dis_amount);                       

                    }                    
                    if(currentIndex==2){
                        get_bed();
                    }
              
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    
                    form.validate().settings.ignore = ":disabled";

                    
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                   
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
    $("#category_data").validationEngine();
    $("#subcategory_data").validationEngine();
    $("#size_data").validationEngine();
    $("#color_data").validationEngine();
    $("#even_data").validationEngine();
    $("#advertisement_data").validationEngine();
    $("#logo_data").validationEngine();
    $("#about_data").validationEngine();
    $("#add_agent").validationEngine();   
    $("#add_banner").validationEngine();
    $("#validate").validationEngine();

});

$(document).ready(function(){
    $('.dataTables-example').DataTable({
        pageLength: 10,
        responsive: true,
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
           
        ]

    });

});

    
        function show_more1(transid) {

        $('#show_full1_span').show();
        $('#show_less1_span').hide();
        }
        function show_less1(transid) {
        $('#show_full1_span').hide();
        $('#show_less1_span').show();
        }

        function show_more2(transid) {

        $('#show_full1_span2').show();
        $('#show_less1_span2').hide();
        }
        function show_less2(transid) {
        $('#show_full1_span2').hide();
        $('#show_less1_span2').show();
        }
        function show_more3(transid) {

        $('#show_full1_span3').show();
        $('#show_less1_span3').hide();
        $("#before_append").css('overflow-x','scroll');
        }
        function show_less3(transid) {
        $('#show_full1_span3').hide();
        $('#show_less1_span3').show();
        $("#before_append").css('overflow','hidden');
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
      // var currentYear=currentYear-16;

        $(".date_picker").datepicker({
            //defaultDate: currentYear,
            dateFormat: "yy-mm-dd",
            // maxDate: currentYear,     
            yearRange: "-70:currentYear",
            changeMonth: true,        
            changeYear: true,
            numberOfMonths: 1,

          });
        $(".date_picker").datepicker(
            'option','maxDate','-16y'
            );
      
    
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
function get_action1(uniqcode) { 
    
       var uniqcode=uniqcode;
       var value=$("#uniqcode"+uniqcode).val();
        if(value=='Edit'){           
           $("#uniqcode"+uniqcode).val('');
           var url=$("#get_edit_select_"+uniqcode).attr('redirect_url');
           window.location = url; // redirect
        }else{
            $("#get_action_val_"+uniqcode).val('');
            var r= confirm('Do you want to delete this?');
            if(r==true){ 
                 window.location = value;
            }        
            
        }
   }

    function char_check() {
        
        var pass_val=$('#password').val();
        
            var count=$("#password").val().length;
            if(count < 8){
                $("#password").removeClass('success_cls');
                $("#password").addClass('error_cls');
                $('#show_pass1').text('Minimum 8 characters required');
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
            // $('#payment-details').modal('show');
            $('#payment-data').modal('show');
            
             $.ajax({
                type:'POST',
                url:current_url+'/payment_details_one',
                data: {
                    transid: transid
                },
                
                success:function(data){
                    // $("#payment_details").html(data);
                    $("#payment_data").html(data);
                }
             });
        
    }

    function fare_details(add_on_transid) {
        var current_url=$('#current_url').val() ;                                                           
        var package_tid=$("#package_tid").val();
        var total_number_pax=$("#total_number_pax").val();
        var append_data = [];
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

                var dis_amount=$('#dis_amount').val();
                discount_amount(dis_amount); 

                var final = $('#final_cost').val();
                var payment_amount = $('#payee_amount').val();
                if(parseFloat(final)<parseFloat(payment_amount)){
                    $('#payee_amount').val('');
                }

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



$('.next').click(function(){
   $(this).parent().hide().next().show();
});

$('.back').click(function(){
   $(this).parent().hide().prev().show();
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




 function show_less(transid) {
  
 $('#more_'+transid).show();
 $('#less_'+transid).hide();
}
function show_more(transid) {
    
 $('#more_'+transid).hide();
 $('#less_'+transid).show();
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






///Bongtech
 ///////*** bongbazar Superadmin manage_subcategory apurbo das 7/24/2020***////////

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

     
    function edit_banner(transid){
        var transid=transid;
        var value=$("#get_action_val_"+transid).val();
        update_banner(transid);
    }

    function update_banner(transid){
      $('html, body').animate({
                scrollTop: 0
             }, 'slow');
       var transid=transid;                        
            var current_url=$('#current_url').val()                                                
             $('#update_banner').modal('show');
              $.ajax({
                type:'POST',
                url:current_url+'/update_banner',
                data: {
                    uniqcode: transid
                },
                 success:function(data){
                    // alert(data);
                    if(data==1){
                        location.reload();
                    }else{
                        $("#banner_id").html(data);    
                    }
                    
                }
             });
    }

function edit_action(transid) {
       //alert(uniqcode);

       var transid=transid;
       var value=$("#get_action_val_"+transid).val();
           // $("#get_action_val_"+transid).val('');
            edit_data(transid);        
   }
    function edit_data(transid) {
            $('html, body').animate({
                scrollTop: 0
             }, 'slow');
            var transid=transid;                        
            var current_url=$('#current_url').val()                                                
            // $('#edit-data').modal('show');
           // alert(current_url);
             $.ajax({
                type:'POST',
                url:current_url+'/edit_data',
                data: {
                    uniqcode: transid
                },
                
                success:function(data){
                    // alert(data);
                    if(data==1){
                        location.reload();
                    }else{
                        $("#edit_data").html(data);    
                    }
                    
                }
             });
        
    }


// $( "#uniqcode" ).keyup(function() {
//   alert( "Handler for .keyup() called." );
// });
function category(uniqcode)
{
    var uniqcode=uniqcode;
    var current_url=$('#current_url').val();               

    $.ajax({
    type:'POST',
    url:current_url+'/size_category',
    data: {
        cat_uniqcode: uniqcode
    },
    
    success:function(data){
        data=data.trim();
        if(data != ''){
        // $('#sub_category_id').empty();
        // $('#sub_category_id').find('option:empty').remove();

    $('#sub_category_id').html(data);
}
}
 });
}


// upload banner
function get_upload_banner(x) {

    $("#banner_input_upload").trigger("click"); 
    }
function banner_show_photo(input, x) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    var FileSize = input.files[0].size / 1024 / 1024; // in MB
        var FileType = input.files[0].type;
        var ext = $('#banner_input_upload').val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['JPEG','PNG','JPG','png','jpg','jpeg']) == -1) {
            alert('invalid extension!');
            $("#banner_input_upload").val('');
        }else{
        
    if(FileSize < 1){
    reader.onload = function (e) {
    $('#upload_banner')
    .attr('src', e.target.result)
    .width(100)
    .height(100);
    };
    reader.readAsDataURL(input.files[0]);
    }else{
        alert('Maximum file size 1MB can be upload');
        $(input).val('');
    }
    } 
    }
}

//upload logo
function get_upload_logo(x) 
{
    $("#logo_input_upload").trigger("click"); 
}
function logo_show_photo(input, x) 
{
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    var FileSize = input.files[0].size / 1024 / 1024; // in MB
        var FileType = input.files[0].type;
        var ext = $('#logo_input_upload').val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['JPEG','PNG','JPG','png','jpg','jpeg']) == -1) {
            alert('invalid extension!');
            $("#logo_input_upload").val('');
        }else{
        
    if(FileSize < 1){
    reader.onload = function (e) {
    $('#upload_logo')
    .attr('src', e.target.result)
    .width(100)
    .height(100);
    };
    reader.readAsDataURL(input.files[0]);
    }else{
        alert('Maximum file size 1MB can be upload');
        $(input).val('');
    }
    } 
    }
}



function show_end_banner() {
if($("#check_banner").prop('checked') == true){
 $("#to_date").val('Lifetime');
    $('#to_date').attr('class','form-control validate[required] dis_click');
}else{
    if($todate==null){
         // $('#to_date').prop('disabled', true);
        $("#to_date").val('');
    $('#to_date').attr('class','form-control validate[required]');

        // $('#to_date').prop('disabled', true);
    }
    else{
    $('#to_date').attr('class','form-control validate[required]');

        $("#to_date").val($todate);
        // $('#to_date').prop('disabled', true);
    }
}
}
function get_banner_date_add(value) {
//$("#banner_end_date_add").val("");
//$("#active_days_add").val("");
$todate=$("#to_date").val();
if(value==''){
$('#to_date').prop('disabled', false);
}else{
$('#to_date').prop('disabled', false);
}
}





 $(document).ready(function(){

        $("#serial_no").change(function(){
        var serial_no = $('#serial_no').val();
        //alert(serial_no);
         var current_url=$('#current_url').val() ;  
             $.ajax({
                type:'POST',
                url:current_url+'/replace',
                data: {
                    serial_no: serial_no
                },
                success:function(f){
                if(f==1)
                {
                    alert("Serial No Already Exist");
                    $('.disabled_banner').prop('disabled', true);
                }
                else
                {
                    $('.disabled_banner').prop('disabled', false);
                }
            }
        });
    });
});



   function show_more_cat(transid) {
      $('#less_sub_'+transid+'').show();
      $('#more_sub_'+transid+'').hide();
    }
   function show_less_cat(transid) {
    $('#less_sub_'+transid+'').hide();
    $('#more_sub_'+transid+'').show();
   }

    function show_more_child(transid) {
      $('#less_child_'+transid+'').show();
      $('#more_child_'+transid+'').hide();
    }
   function show_less_child(transid) {
    $('#less_child_'+transid+'').hide();
    $('#more_child_'+transid+'').show();
   }


    function show_less_des(transid) {
  
         $('#more_des_'+transid).show();
         $('#less_des_'+transid).hide();
        }
        function show_more_des(transid) {
            
         $('#more_des_'+transid).hide();
         $('#less_des_'+transid).show();
        }

    function show_less_kid_acc(transid) {
  
         $('#more_kid_acc_'+transid).show();
         $('#less_kid_acc_'+transid).hide();
        }
        function show_more_kid_acc(transid) {
            
         $('#more_kid_acc_'+transid).hide();
         $('#less_kid_acc_'+transid).show();
        }


    function show_less_ka_other_fun(transid) {
  
         $('#more_ka_other_fun_'+transid).show();
         $('#less_ka_other_fun_'+transid).hide();
        }
        function show_more_ka_other_fun(transid) {
            
         $('#more_ka_other_fun_'+transid).hide();
         $('#less_ka_other_fun_'+transid).show();
        }

    function show_less_ka_des(transid) {
  
         $('#more_ka_des_'+transid).show();
         $('#less_ka_des_'+transid).hide();
        }
        function show_more_ka_des(transid) {
            
         $('#more_ka_des_'+transid).hide();
         $('#less_ka_des_'+transid).show();
        }
    function view_product(transid){
        var transid=transid;
        var current_url=$('#current_url').val();
        $.ajax({
        type:'POST',
        url:current_url+'/product_others_features',
        data: {
            transid : transid,
        },
        success:function(data)
        {
            $('#others_product').modal('show');
            $('#product_features').html(data);
        }
    });
    }


function get_upload_photo1(x)
{
$("#input_upload_"+x+"").trigger("click");
}

function show_photo1(input, x)
{
    if (input.files && input.files[0])
    {
        var reader = new FileReader();
        var FileType = input.files[0].type;
        var ext = $('#input_upload_'+x+'').val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['JPEG','PNG','JPG','png','jpg','jpeg']) == -1)
        {
            alert('invalid extension!');
        }
        else
        {
            reader.onload = function (e) {
            $('#upload_photo_'+x+'')
            .attr('src', e.target.result)
            .width(100)
            .height(100);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
}

function save_submit()
{
var append_data = [];
var count;

$(".selected_img").each(function()
{
if($(this).val() != '')
{
append_data.push(String($(this).val()));
}
});
count=append_data.length;
count= parseInt(count);

if(count==0)
{
$('html, body').animate({scrollTop: 0}, 'slow');
$("#image_required").show();
$(".save_submit").attr('type','button');
return false;
}
else
{

$("#image_required").hide();
$(".save_submit").attr('type','submit');
return true;
}

}
function save_update_submit()
{
    var check_image=$('#selected_images_count').val();
    if(check_image=='0')
    {
        $('html, body').animate({scrollTop: 0}, 'slow');
        $("#image_required").show();
        $(".save_submit").attr('type','button');
        return false;
    }
    else
    {
        $("#image_required").hide();
        $(".save_submit").attr('type','submit');
        return true;
    }
}


function del_img(image_name,id)
{
var image_name=image_name;
var count=$('.del_icon').data('id');

var current_url=$('#current_url').val();
var con=confirm('Do you want to delete this image?');

if (con==true)
{
$.ajax({
type:'POST',
url:current_url+'/product-image',
data: {
image_name : image_name,
uniqcode : $('.del_icon').data("uniqcode"),
},

success:function(data)
{
console.log(data);

if('a:0:{}' == data)
{
$("#selected_images_count").val('0');
}
else
{
$("#selected_images_count").val('1');
}
$("#product_item_image").val(data);
$(".del_image_"+id).css('display','none');
$(".show_image_icon_"+id).css('display','block');
}
});
}
//alert(x);
}
function tcCancel()
{
    location.reload();
}

function checkfile()
{
if( document.getElementById("logo_input_upload").files.length == 0 )
{
$('html, body').animate({scrollTop: 0}, 'slow');
$("#image_required").show();
$(".save_submit").attr('type','button');
return false;
}
else
{

$("#image_required").hide();
$(".save_submit").attr('type','submit');
return true;
}
}

 function all_date_search()
   {
        var fromdate=$('#fromdate').val();
        var todate=$('#todate').val();
        var current_url=$('#current_url').val();
        if(fromdate !='' && todate !='')
        {
            var url =current_url+'/all_data_search';
            $.ajax({
                type:'POST',
                url:url,
                data: {
                    fromdate : fromdate,
                    todate : todate
                },
                success:function(data)
                {
                    //var order_data=data.split('##');
                    $('#load_dataTable').html(data);
                    // $('#total_order_product_amount_html').html(order_data[1]);
                    // $('#total_today_product_amount_html').html(order_data[2]);
                    // $('#total_month_product_amount_html').html(order_data[3]);
                }
            });
        }
        else
        {
            alert('Please Select From Date And To Date');
        }  
   }
   
   function all_delivery_date_search()
   {
        var fromdate=$('#fromdate').val();
        var todate=$('#todate').val();
        var current_url=$('#current_url').val();
        if(fromdate !='' && todate !='')
        {
            var url =current_url+'/delivery_data_search';
            $.ajax({
                type:'POST',
                url:url,
                data: {
                    fromdate : fromdate,
                    todate : todate
                },
                success:function(data)
                {
                    var order_data=data.split('##');
                    $('#load_dataTable').html(order_data[0]);
                    $('#total_order_product_amount_html').html(order_data[1]);
                    $('#total_today_product_amount_html').html(order_data[2]);
                    $('#total_month_product_amount_html').html(order_data[3]);
                }
            });
        }
        else
        {
            alert('Please Select From Date And To Date');
        }
   }
   
   function common_offer_change(transid)
   {
       var uniqcode=transid;
       alert(uniqcode);
       
        var uniqcode = uniqcode.replace(/ /g,'');
        var current_url=$('#current_url').val()
         $.ajax({                
            type:'post',                
            url:current_url+'/product_offer_chang',
            data: {                    
                uniqcode: uniqcode,                    
            },                
            success:function(data){                                                                 
            }

         });   
   }
   
function get_upload_img(xy)
{
    $("#input_upload_"+xy+"").trigger("click");
}
function uploadShow_photo(input, xy) 
{
    var current_url=$('#current_url').val();
    var base_url=$('#base_url').val();
    var csrf_test_name=$("input[name='csrf_test_name']").val();
    var features_id=$(input).attr('data-id');
    var oldImage=$(input).attr('data-oldimage');
    var divnumber=$(input).attr('data-no');
    
    if (input.files && input.files[0]){
        var reader = new FileReader();
        var FileSize = input.files[0].size / 1024 / 1024; // in MB
        var FileType = input.files[0].type;
        var ext = $('#input_upload_'+xy+'').val().split('.').pop().toLowerCase();

    if($.inArray(ext, ['JPEG','PNG','JPG','png','jpg','jpeg']) == -1) {
        alert('invalid extension!');
    }
    else if(FileSize < 1)
    {

        var property = input.files[0];
        // console.log(property);
        var form_data= new FormData();
        form_data.append('file', property);
        form_data.append('features_id', features_id);
        form_data.append('oldImage', oldImage);
        form_data.append('csrf_test_name', csrf_test_name);
        $.ajax({
        url:current_url+'/product_image_upload',
        method:"POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,

        success:function(data){  
        var data=data.split('/');
        $("#img_append_count_"+divnumber).val(1);      
        $('#upload_photo_'+xy+'')
        .attr('src', base_url+'webroot/adminImages/product/web/'+data[1])
        .width(80)
        .height(80);        
        $("#selected_images_count_"+divnumber+"").val(data[0]);
        $("#upload_photo_"+xy+"").css('pointer-events','none');
        $("#sl_img_del_"+xy+"").show();
        $("#sl_img_del_"+xy+"").html('<a href="javascript:void(0)" class="btn btn-sm grediant-btn del_icon del_'+xy+'" onclick="del_img(\''+data+'\',\''+xy+'\')" data-uniqcode="'+features_id+'" data-ids="'+xy+'" data-row="'+divnumber+'"><i class="fa fa-trash" aria-hidden="true"></i></a>');
        $('#input_upload_'+xy+'').val('');
        }
        })

    }
    else
    {
        alert('Maximum file size 1MB can be upload');
        $(input).val('');
        }
        }
        if($('#input_upload_'+xy+'').val() == ''){
        $('#upload_photo_'+xy+'')
        .attr('src', base_url+'webroot/admin/images/Add-Photo-Button.png')
        .width(80)
        .height(80);
        $("#image_required_"+xy).hide();
    }
}
function get_upload_product_img(x) 
{
    $("#product_image_upload_"+x).trigger("click"); 
}
function productUploadShow_photo(input, x) 
{
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    var FileSize = input.files[0].size / 1024 / 1024; // in MB
        var FileType = input.files[0].type;
        var ext = $('#product_image_upload_'+x).val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['JPEG','PNG','JPG','png','jpg','jpeg']) == -1) {
            alert('invalid extension!');
            $("#product_image_upload_"+x).val('');
        }else{
        
    if(FileSize < 1){
    reader.onload = function (e) {
    $('#product_upload_photo_'+x)
    .attr('src', e.target.result)
    .width(100)
    .height(100);
    };
    reader.readAsDataURL(input.files[0]);
    }else{
        alert('Maximum file size 1MB can be upload');
        $(input).val('');
    }
    } 
    }
}

function pending_common_status_change(transid)
{  
     var uniqcode=transid;
        var uniqcode = uniqcode.replace(/ /g,'');
       // alert(uniqcode);
        var base_url=$('#base_url').val()
         $.ajax({                
            type:'post',                
            url:base_url+'status',
            data: {                    
                uniqcode: uniqcode,                    
            },                
            success:function(data){   
                location.reload();                                                              
            }

         });    
}
