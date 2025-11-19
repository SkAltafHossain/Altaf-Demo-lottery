document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
        document.body.style.paddingTop = '0';
      } 
  });
}); 

$("#spin_btn").click(function(){
    var tmpAnimation = 0;
    var element = $("#chaka");
    tmpAnimation = tmpAnimation + 3;
    
    $({degrees: tmpAnimation - 3240}).animate({degrees: tmpAnimation}, {
        duration: 7000,
        step: function(now) {
            element.css({
                transform: 'rotate(' + now + 'deg)'
            });
        }
    });
  });

setTimeout(function(){  
    odometer.innerHTML = 561;
});

  function textspeech(){
      var text = document.getElementById("txt").value;
      responsiveVoice.speak(text);
  }
  function result()
  {
       //  var current_url=$('#current_url').val()                                                
       // $.ajax({
       //    type:'POST',
       //    url:current_url+'/today_result',
       //    //data: $('#form1').serialize(),
          
       //    success:function(data){
       //        //$("#get_bed").html(data);  
       //        window.open(current_url+'/today_result'); 
       //    }
       // });
       //alert('hi');
        var time=$('#time').val();
        alert(time);
        var base_url=$('#base_url').val();
        url=base_url+'today_result';
       
        $.ajax({
          type:'POST',
          url:url,
          data: {
                time: time
            },
          
          success:function(data){
             //$("#get_bed").html(data);  
             // window.open(url); 
          }
       });
  }
  function old_result(id)
  {
    
     var pdate = document.getElementById("pdate").value;
   // 
   if(pdate=="")
   {
        alert("Please Enter The Date");
   }
   else
   {
      //alert(pdate);
        var base_url=$('#base_url').val();
        url=base_url+'oldday_result_date';
         $.ajax({
          type:'POST',
          url:url,
          data:{time:id,pvf_date:pdate},
          
          success:function(data){
              //$("#get_bed").html(data);  
             // window.open(url); 
             console.log(data);
          }
       });
   }
  }

  $(function () {                
    $("#form").validationEngine(); 
    $("#form2").validationEngine(); 
    $("#form3").validationEngine();    
});

$("#filenotfound").hide();

function file_not_found(data)
{
    if(data=='0'){
        $("#filenotfound").show();
        setTimeout(function(){
            $("#filenotfound").hide();
        },4000);
    }
    else if(data=='1'){
        $("#filenotfound").hide();
    }
}