<footer class="bg-light">
  <!-- Copyright -->
  <div class="text-center p-3" style="background: -webkit-linear-gradient(white, gray);">
    © 2021 Lottery. All rights reserved || Powered By :
    <a class="text-dark" href="#Lol">My Company</a>
  </div>
  <!-- Copyright -->
</footer>    


    <script src="<?=base_url()?>webroot/live_draw/assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?=base_url()?>webroot/live_draw/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>webroot/live_draw/assets/js/popper.min.js"></script>
    <script src="<?=base_url()?>webroot/live_draw/assets/js/bootstrap.min.js"></script>
    <!--<script src="<?=base_url()?>webroot/live_draw/assets/js/custom.js"></script>-->
    <script src="<?=base_url()?>webroot/live_draw/assets/js/odometer.js"></script>
    
    <script>
        
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

function convert(num) {
  if (num == 0) 
    return "zero";
  else if (num == 1) 
    return "one";
  else if (num == 2) 
    return "two";
  else if (num == 3) 
    return "three";
  else if (num == 4) 
    return "four";
  else if (num == 5) 
    return "five";
  else if (num == 6) 
    return "six";
  else if (num == 7) 
    return "seven";
  else if (num == 8) 
    return "eight";
  else if (num == 9) 
    return "nine";
  else
    return num;  
} 

var fp= document.getElementById('shimla_price_31').value;
var sp= document.getElementById('shimla_price_32').value;
var tp= document.getElementById('shimla_price_33').value;
var fop= document.getElementById('shimla_price_34').value;
var fip= document.getElementById('shimla_price_35').value;

setTimeout(function(){
  var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_adio1.mp3');
  audio.play();
  setTimeout(function(){

    audio.pause();
    audio.currentTime = 0;
  },240000);
});

setTimeout(function(){
    //var text = document.getElementById("txt").value;

    responsiveVoice.speak("Dice Through","Hindi Male",{pitch: 0.7});

},245500);

setTimeout(function(){
  var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_adio1.mp3');
  audio.play();
  setTimeout(function(){

    audio.pause();
    audio.currentTime = 0;
  },35000);
},260000);

setTimeout(function(){

  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide();
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").show();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").hide();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},248000);

setTimeout(function(){
    var vid = document.getElementById("myVideo"); 
    vid.play()
},248000);

setTimeout(function(){

  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide();
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").show();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").hide();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},260000);

setTimeout(function(){

  $("#section_1").show();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").hide();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();
},298000);

//302000
setTimeout(function(){
    //var text = document.getElementById("txt").value;

    responsiveVoice.speak("First Price "+fp+" On Five Digits With Series On One Time. ","Hindi Male",{pitch: 0.7});

},300000);

setTimeout(function(){

    var chakkaValue=document.getElementById("chaka").value;
    var tmpAnimation = 360;
    var start_point=51;

    for(var i=50;i<100;i++){
        if(start_point==chakkaValue){
            tmpAnimation=360;
        }
        start_point++;
        tmpAnimation=tmpAnimation+7.2;
    }

  
    var element = $("#chaka");
    tmpAnimation = tmpAnimation + 4;
    $({degrees: tmpAnimation - 2560}).animate({degrees: tmpAnimation}, {
        duration: 10000,
        step: function(now) {
            element.css({
                transform: 'rotate(' + now + 'deg)'
            });
        }
    });



},305000);

//307000
setTimeout(function(){

    var chakkaValue=document.getElementById("chaka").value;
    var tmpAnimation = 360;
    var start_point=51;

    for(var i=50;i<100;i++){
        if(start_point==chakkaValue){
            tmpAnimation=358;
        }
        start_point++;
        tmpAnimation=tmpAnimation+7.2;
    }

  
    var element = $("#chaka_15");
    tmpAnimation = tmpAnimation + 4;
    $({degrees: tmpAnimation - 2560}).animate({degrees: tmpAnimation}, {
        duration: 10000,
        step: function(now) {
            element.css({
                transform: 'rotate(' + now + 'deg)'
            });
        }
    });

    

},305000);


//307000
setTimeout(function(){

    var tmpAnimation = 345;
    var chakkaValue=document.getElementById("chaka1").value;

    if(chakkaValue=="A"){
        tmpAnimation = 345+(30*0);
    }
    else if(chakkaValue=="L"){
        tmpAnimation = 345+(30*1);
    }
    else if(chakkaValue=="K"){
        tmpAnimation = 345+(30*2);
    }
    else if(chakkaValue=="J"){
        tmpAnimation = 345+(30*3);
    }
    else if(chakkaValue=="I"){
        tmpAnimation = 345+(30*4);
    }
    else if(chakkaValue=="H"){
        tmpAnimation = 345+(30*5);
    }
    else if(chakkaValue=="G"){
        tmpAnimation = 345+(30*6);
    }
    else if(chakkaValue=="F"){
        tmpAnimation = 345+(30*7);
    }
    else if(chakkaValue=="E"){
        tmpAnimation = 345+(30*8);
    }
    else if(chakkaValue=="D"){
        tmpAnimation = 345+(30*9);
    }
    else if(chakkaValue=="C"){
        tmpAnimation = 345+(30*10);
    }
    else if(chakkaValue=="B"){
        tmpAnimation = 345+(30*11);
    }
    
    var element = $("#chaka1");
    tmpAnimation = tmpAnimation + 3;
    
    $({degrees: tmpAnimation - 2560}).animate({degrees: tmpAnimation}, {
        duration: 10000,
        step: function(now) {
            element.css({
                transform: 'rotate(' + now + 'deg)'
            });
        }
    });

},305000);

//307000
setTimeout(function(){

    var tmpAnimation = 345;
    var chakkaValue=document.getElementById("chaka1").value;

    if(chakkaValue=="A"){
        tmpAnimation = 345+(30*0);
    }
    else if(chakkaValue=="L"){
        tmpAnimation = 345+(30*1);
    }
    else if(chakkaValue=="K"){
        tmpAnimation = 345+(30*2);
    }
    else if(chakkaValue=="J"){
        tmpAnimation = 345+(30*3);
    }
    else if(chakkaValue=="I"){
        tmpAnimation = 345+(30*4);
    }
    else if(chakkaValue=="H"){
        tmpAnimation = 345+(30*5);
    }
    else if(chakkaValue=="G"){
        tmpAnimation = 345+(30*6);
    }
    else if(chakkaValue=="F"){
        tmpAnimation = 345+(30*7);
    }
    else if(chakkaValue=="E"){
        tmpAnimation = 345+(30*8);
    }
    else if(chakkaValue=="D"){
        tmpAnimation = 345+(30*9);
    }
    else if(chakkaValue=="C"){
        tmpAnimation = 345+(30*10);
    }
    else if(chakkaValue=="B"){
        tmpAnimation = 345+(30*11);
    }
    
    var element = $("#chaka16");
    tmpAnimation = tmpAnimation + 3;
    
    $({degrees: tmpAnimation - 2560}).animate({degrees: tmpAnimation}, {
        duration: 10000,
        step: function(now) {
            element.css({
                transform: 'rotate(' + now + 'deg)'
            });
        }
    });

},305000);

setTimeout(function(){
  var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_audio2.mp3');
  audio.play();
  
},304900);

setTimeout(function(){
  $(".odometer1").hide();

});

setTimeout(function(){
  $(".odometer").hide();
  $(".odometer_zoom").hide();
  $(".odometer1").show();
},304900);

setTimeout(function(){
  $(".odometer1").hide();
  $(".odometer").show();
  $(".odometer_zoom").show();

},314900);

setTimeout(function(){
 
  for(var k=1;k<=5;k++)
  {
    for(var j=1;j<=2;j++)
    {
      for(var i=0;i<10;i++) 
      {
        id='odometer'+i+j+k;
        
        var m=document.getElementById(id);
        m.innerHTML = m.value;
      }
    } 
  }
   
},314500);

setTimeout(function(){
 
  for(var k=1;k<=5;k++)
  {
    for(var j=1;j<=2;j++)
    {
      for(var i=0;i<10;i++) 
      {
        id='odometer_17'+i+j+k;
        
        var m=document.getElementById(id);
        m.innerHTML = m.value;
      }
    } 
  }
   
},314500);


setTimeout(function(){

  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").hide();
  $("#section_15").show();
  $("#section_16").hide();
  $("#section_17").hide();

},316500);

var firstPrice= document.getElementById('section_1').value;
var arrayFirstPrice=firstPrice.split("");
var i=0;
var m=0;

for(i=0;i<2;i++){
  setTimeout(function(){
    responsiveVoice.speak(convert(arrayFirstPrice[m++]),"Hindi Male",{pitch: 0.7},{rate: 0.8});

  },316500+(1000*i));
}

setTimeout(function(){

  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").hide();
  $("#section_15").hide();
  $("#section_16").show();
  $("#section_17").hide(); 

},319500);

for(i=0;i<1;i++){
  setTimeout(function(){
    responsiveVoice.speak(convert(arrayFirstPrice[m++]),"Hindi Male",{pitch: 0.7},{rate: 0.8});

  },319500+(1000*i));
}

setTimeout(function(){
  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").hide();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").show(); 
},321500);

for(i=0;i<5;i++){
  setTimeout(function(){
    responsiveVoice.speak(convert(arrayFirstPrice[m++]),"Hindi Male",{pitch: 0.7},{rate: 0.8});

  },321500+(1000*i));
}

setTimeout(function(){
  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").show();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();
},328500);

setTimeout(function(){
  var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_adio1.mp3');
  audio.play();
  setTimeout(function(){

    audio.pause();
    audio.currentTime = 0;
  },5000);
},328500);

setTimeout(function(){
  
  $("#section_1").hide();
  $("#section_2").show();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").hide();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},333500);

setTimeout(function(){
  $(".odometer").show();
  $(".odometer1").hide();
},333500);

setTimeout(function(){
  $(".odometer").hide();
  $(".odometer1").show();
},341000);

setTimeout(function(){
    
    responsiveVoice.speak("Second price "+sp+" on five digit on ten times","Hindi Male",{pitch: 0.7});

},335500);

setTimeout(function(){
  var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_audio2.mp3');
  audio.play();
  
},340500);

setTimeout(function(){
  $(".odometer1").hide();
  $(".odometer").show();
},350500);

setTimeout(function(){
  for(var k=1;k<=5;k++)
  {
    for(var j=1;j<=2;j++)
    {
      for(var i=1;i<=10;i++) 
      {
        id='odometer2'+i+j+k;
        var m=document.getElementById(id);
        console.log(m);
        m.innerHTML = m.value;
      }
    } 
  }
   
},350000);

var secondPrice= document.getElementById('section_2').value;
var arraySecondPrice=secondPrice.split("");
var i=0,j=0;
var mSecondPrice=0;
var time=351000;
for(j=0;j<10;j++){

  for(i=0;i<5;i++){
  
    setTimeout(function(){

      responsiveVoice.speak(convert(arraySecondPrice[mSecondPrice++]),"Hindi Male",{pitch: 0.7},{rate: 0.8});

    },time+(1000*i));
    
  }

  time=time+6000;
}

setTimeout(function(){
  
  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").show();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},413000);

setTimeout(function(){
  var audio = new Audio('http://shimlastatelottery.in/webroot/live_draw/assets/images/lottery_adio1.mp3');
  audio.play();
  setTimeout(function(){

    audio.pause();
    audio.currentTime = 0;
  },5000);
},413000);

setTimeout(function(){
  
  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").show(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").hide();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},418000);

setTimeout(function(){
  $(".odometer").show();
  $(".odometer1").hide();
},418000);

setTimeout(function(){
  $(".odometer").hide();
  $(".odometer1").show();
},425500);

setTimeout(function(){
    
    responsiveVoice.speak("Third price "+tp+" on four digit on ten times","Hindi Male",{pitch: 0.7});

},420000);

setTimeout(function(){
  var audio = new Audio('http://shimlastatelottery.in/webroot/live_draw/assets/images/lottery_audio2.mp3');
  audio.play();
  
},425000);

setTimeout(function(){
  $(".odometer1").hide();
  $(".odometer").show();
},435000);

setTimeout(function(){
  for(var k=1;k<=5;k++)
  {
    for(var j=1;j<=2;j++)
    {
      for(var i=1;i<=10;i++) 
      {
        id='odometer3'+i+j+k;
        var m=document.getElementById(id);
        console.log(m);
        m.innerHTML = m.value;
      }
    } 
  }
   
},434500);

var thirdPrice= document.getElementById('section_3').value;

var arrayThirdPrice=thirdPrice.split("");
var i=0,j=0;
var mThirdPrice=0;
var time=435500;
for(j=0;j<10;j++){

  for(i=0;i<4;i++){
  
    setTimeout(function(){

      responsiveVoice.speak(convert(arrayThirdPrice[mThirdPrice++]),"Hindi Male",{pitch: 0.7},{rate: 0.8});

    },time+(1000*i));
    
  }

  time=time+5000;
}

setTimeout(function(){

  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").show();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},487500);

setTimeout(function(){
  var audio = new Audio('http://shimlastatelottery.in/webroot/live_draw/assets/images/lottery_adio1.mp3');
  audio.play();
  setTimeout(function(){

    audio.pause();
    audio.currentTime = 0;
  },5000);
},487500);

setTimeout(function(){

  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").show();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").hide();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},492500);

setTimeout(function(){
  $(".odometer").show();
  $(".odometer1").hide();
},492500);

setTimeout(function(){
  $(".odometer").hide();
  $(".odometer1").show();
},500000);

setTimeout(function(){
    
    responsiveVoice.speak("Fourth price "+fop+" on four digit on ten times","Hindi Male",{pitch: 0.7});

},494500);

setTimeout(function(){
  var audio = new Audio('http://shimlastatelottery.in/webroot/live_draw/assets/images/lottery_audio2.mp3');
  audio.play();
  
},499500);

setTimeout(function(){
  $(".odometer1").hide();
  $(".odometer").show();
},509500);

setTimeout(function(){
  for(var k=1;k<=5;k++)
  {
    for(var j=1;j<=2;j++)
    {
      for(var i=1;i<=10;i++) 
      {
        id='odometer5'+i+j+k;
        var m=document.getElementById(id);
        console.log(m);
        m.innerHTML = m.value;
      }
    } 
  }
   
},509000);

var fourthPrice= document.getElementById('section_9').value;
var arrayFourthPrice=fourthPrice.split("");
var i=0,j=0;
var mFourthPrice=0;
var time=510000;
for(j=0;j<10;j++){

  for(i=0;i<4;i++){
  
    setTimeout(function(){

      responsiveVoice.speak(convert(arrayFourthPrice[mFourthPrice++]),"Hindi Male",{pitch: 0.7},{rate: 0.8});

    },time+(1000*i));
    
  }

  time=time+5000;
}

setTimeout(function(){

  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").show();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},572000);

setTimeout(function(){
  var audio = new Audio('http://shimlastatelottery.in/webroot/live_draw/assets/images/lottery_adio1.mp3');
  audio.play();
  setTimeout(function(){

    audio.pause();
    audio.currentTime = 0;
  },5000);
},572000);

//579000
setTimeout(function(){
  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").show();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").hide();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();
},579000);

setTimeout(function(){
  $(".odometer").show();
  $(".odometer1").hide();
},579000);

setTimeout(function(){
  $(".odometer").hide();
  $(".odometer1").show();
},586500);

setTimeout(function(){
    
    responsiveVoice.speak("Fifth price "+fip+" on four digit on hundred times","Hindi Male",{pitch: 0.7});

},581000);

setTimeout(function(){
  var audio = new Audio('http://shimlastatelottery.in/webroot/live_draw/assets/images/lottery_audio2.mp3');
  audio.play();
  
},586000);

setTimeout(function(){
  $(".odometer1").hide();
  $(".odometer").show();
},596000);

setTimeout(function(){
  for(var k=1;k<=5;k++)
  {
    for(var j=1;j<=2;j++)
    {
      for(var i=1;i<=10;i++) 
      {
        id='odometer4'+i+j+k;
        var m=document.getElementById(id);
        console.log(m);
        m.innerHTML = m.value;
      }
    } 
  }
   
},595500);

var fifthPrice1= document.getElementById('section_4').value;
var arrayFifthPrice1=fifthPrice1.split("");
var i=0,j=0;
var mFifthPrice1=0;
var time=596500;
for(j=0;j<20;j++){

  for(i=0;i<4;i++){
  
    setTimeout(function(){

      responsiveVoice.speak(convert(arrayFifthPrice1[mFifthPrice1++]),"Hindi Male",{pitch: 0.7},{rate: 0.8});

    },time+(1000*i));
    
  }

  time=time+5000;
}

setTimeout(function(){
  
  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").show();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},698500);

setTimeout(function(){
  var audio = new Audio('http://shimlastatelottery.in/webroot/live_draw/assets/images/lottery_adio1.mp3');
  audio.play();
  setTimeout(function(){

    audio.pause();
    audio.currentTime = 0;
  },5000);
},698500);

setTimeout(function(){
  
  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").show();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").hide();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},703500);

setTimeout(function(){
  $(".odometer").show();
  $(".odometer1").hide();
},703500);

setTimeout(function(){
  $(".odometer").hide();
  $(".odometer1").show();
},704000);

setTimeout(function(){
  var audio = new Audio('http://shimlastatelottery.in/webroot/live_draw/assets/images/lottery_audio2.mp3');
  audio.play();
  
},704000);

setTimeout(function(){
  $(".odometer1").hide();
  $(".odometer").show();
},714000);

setTimeout(function(){
  for(var k=1;k<=5;k++)
  {
    for(var j=1;j<=2;j++)
    {
      for(var i=1;i<=10;i++) 
      {
        id='odometer6'+i+j+k;
        var m=document.getElementById(id);
        console.log(m);
        m.innerHTML = m.value;
      }
    } 
  }
   
},713500);

var fifthPrice2= document.getElementById('section_10').value;
var arrayFifthPrice2=fifthPrice2.split("");
var i=0,j=0;
var mFifthPrice2=0;
var time=714500;
for(j=0;j<20;j++){

  for(i=0;i<4;i++){
  
    setTimeout(function(){

      responsiveVoice.speak(convert(arrayFifthPrice2[mFifthPrice2++]),"Hindi Male",{pitch: 0.7},{rate: 0.8});

    },time+(1000*i));
    
  }

  time=time+5000;
}

setTimeout(function(){
  
  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").show();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},816500);

setTimeout(function(){
  var audio = new Audio('http://shimlastatelottery.in/webroot/live_draw/assets/images/lottery_adio1.mp3');
  audio.play();
  setTimeout(function(){

    audio.pause();
    audio.currentTime = 0;
  },5000);
},816500);

setTimeout(function(){

  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").show();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").hide();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},821500);

setTimeout(function(){
  $(".odometer").show();
  $(".odometer1").hide();
},821500);

setTimeout(function(){
  $(".odometer").hide();
  $(".odometer1").show();
},822000);

setTimeout(function(){
  var audio = new Audio('http://shimlastatelottery.in/webroot/live_draw/assets/images/lottery_audio2.mp3');
  audio.play();
  
},822000);

setTimeout(function(){
  $(".odometer1").hide();
  $(".odometer").show();
},832000);

setTimeout(function(){
  for(var k=1;k<=5;k++)
  {
    for(var j=1;j<=2;j++)
    {
      for(var i=1;i<=10;i++) 
      {
        id='odometer7'+i+j+k;
        var m=document.getElementById(id);
        console.log(m);
        m.innerHTML = m.value;
      }
    } 
  }
   
},831500);

var fifthPrice3= document.getElementById('section_11').value;
var arrayFifthPrice3=fifthPrice3.split("");
var i=0,j=0;
var mFifthPrice3=0;
var time=832500;
for(j=0;j<20;j++){

  for(i=0;i<4;i++){
  
    setTimeout(function(){

      responsiveVoice.speak(convert(arrayFifthPrice3[mFifthPrice3++]),"Hindi Male",{pitch: 0.7},{rate: 0.8});

    },time+(1000*i));
    
  }

  time=time+5000;
}

setTimeout(function(){

  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").show();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},934500);

setTimeout(function(){
  var audio = new Audio('http://shimlastatelottery.in/webroot/live_draw/assets/images/lottery_adio1.mp3');
  audio.play();
  setTimeout(function(){

    audio.pause();
    audio.currentTime = 0;
  },5000);
},934500);

setTimeout(function(){

  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").show();
  $("#section_13").hide();
  $("#section_14").hide();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},939500);

setTimeout(function(){
  $(".odometer").show();
  $(".odometer1").hide();
},939500);

setTimeout(function(){
  $(".odometer").hide();
  $(".odometer1").show();
},940000);

setTimeout(function(){
  var audio = new Audio('http://shimlastatelottery.in/webroot/live_draw/assets/images/lottery_audio2.mp3');
  audio.play();
  
},940000);

setTimeout(function(){
  $(".odometer1").hide();
  $(".odometer").show();
},950000);

setTimeout(function(){
  for(var k=1;k<=5;k++)
  {
    for(var j=1;j<=2;j++)
    {
      for(var i=1;i<=10;i++) 
      {
        id='odometer8'+i+j+k;
        var m=document.getElementById(id);
        console.log(m);
        m.innerHTML = m.value;
      }
    } 
  }
   
},949500);

var fifthPrice4= document.getElementById('section_12').value;
var arrayFifthPrice4=fifthPrice4.split("");
var i=0,j=0;
var mFifthPrice4=0;
var time=950500;
for(j=0;j<20;j++){

  for(i=0;i<4;i++){
  
    setTimeout(function(){

      responsiveVoice.speak(convert(arrayFifthPrice4[mFifthPrice4++]),"Hindi Male",{pitch: 0.7},{rate: 0.8});

    },time+(1000*i));
    
  }

  time=time+5000;
}

setTimeout(function(){

  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").show();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},1052500);

setTimeout(function(){
  var audio = new Audio('http://shimlastatelottery.in/webroot/live_draw/assets/images/lottery_adio1.mp3');
  audio.play();
  setTimeout(function(){

    audio.pause();
    audio.currentTime = 0;
  },5000);
},1052500);

setTimeout(function(){

  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").show();
  $("#section_14").hide();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();

},1057500);

setTimeout(function(){
  $(".odometer").show();
  $(".odometer1").hide();
},1057500);

setTimeout(function(){
  $(".odometer").hide();
  $(".odometer1").show();
},1058000);

setTimeout(function(){
  var audio = new Audio('http://shimlastatelottery.in/webroot/live_draw/assets/images/lottery_audio2.mp3');
  audio.play();
  
},1058000);

setTimeout(function(){
  $(".odometer1").hide();
  $(".odometer").show();
},1068000);

setTimeout(function(){
  for(var k=1;k<=5;k++)
  {
    for(var j=1;j<=2;j++)
    {
      for(var i=1;i<=10;i++) 
      {
        id='odometer9'+i+j+k;
        var m=document.getElementById(id);
        console.log(m);
        m.innerHTML = m.value;
      }
    } 
  }
   
},1067500);

var fifthPrice5= document.getElementById('section_13').value;
var arrayFifthPrice5=fifthPrice5.split("");
var i=0,j=0;
var mFifthPrice5=0;
var time=1068500;
for(j=0;j<20;j++){

  for(i=0;i<4;i++){
  
    setTimeout(function(){

      responsiveVoice.speak(convert(arrayFifthPrice5[mFifthPrice5++]),"Hindi Male",{pitch: 0.7},{rate: 0.8});

    },time+(1000*i));
    
  }

  time=time+5000;
}

setTimeout(function(){

  $("#section_1").hide();
  $("#section_2").hide();
  $("#section_3").hide(); 
  $("#section_4").hide();
  $("#section_5").hide();
  $("#section_6").hide();
  $("#section_7").hide();
  $("#section_8").hide();
  $("#section_9").hide();
  $("#section_10").hide();
  $("#section_11").hide();
  $("#section_12").hide();
  $("#section_13").hide();
  $("#section_14").show();
  $("#section_15").hide();
  $("#section_16").hide();
  $("#section_17").hide();  

},1170500);

setTimeout(function(){
  var audio = new Audio('http://shimlastatelottery.in/webroot/live_draw/assets/images/lottery_adio1.mp3');
  audio.play();
  setTimeout(function(){

    audio.pause();
    audio.currentTime = 0;
  },5000);

},1170500);

    </script>

    
</body>
</html>