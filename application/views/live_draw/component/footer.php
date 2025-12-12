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
        var start = 5000;
        var videoTime = 5000
        var musicTime = 3000;
        

        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_adio1.mp3');
          audio.play();
          setTimeout(function(){

            audio.pause();
            audio.currentTime = 0;
          },start);
        });

        setTimeout(function(){
            //var text = document.getElementById("txt").value;

            responsiveVoice.speak("Dice Through","Hindi Male",{pitch: 0.7});

        },start + 2000);

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
        },start + 3500);

        setTimeout(function(){
          var vid = document.getElementById("myVideo"); 
          vid.play()
        },start + 4000);
        var afterStartVideo = start + videoTime;

        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_adio1.mp3');
          audio.play();
          setTimeout(function(){

            audio.pause();
            audio.currentTime = 0;
          },musicTime);
        },afterStartVideo + 4000);

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
        },afterStartVideo + 4000);

        let first = afterStartVideo + musicTime + 4000;//17000

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
        },first);

        setTimeout(function(){
            responsiveVoice.speak("First Price "+fp+" On Five Digits With Series On One Time. ","Hindi Male",{pitch: 0.7});
        },first + 1000);

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
        },first + 6500);

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
        },first + 6500);

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
        },first + 7000);

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
        },first + 7000);


        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_audio2.mp3');
          audio.play();
        },first + 6900);

        setTimeout(function(){
          $(".odometer1").hide();
        });

        setTimeout(function(){
          $(".odometer_zoom").hide();
        },first + 6900);

        setTimeout(function(){
          $(".odometer_zoom").show();
        },first + 16900);

        const delays = [
            { start: first + 6000, end: first + 15600 },
            { start: first + 6500, end: first + 16100 },
            { start: first + 7000, end: first + 16600 },
            { start: first + 6000, end: first + 15600 },
            { start: first + 6500, end: first + 16100 },
        ];

        for (let k = 1; k <= 5; k++) {
            for (let j = 1; j <= 2; j++) {
                for (let i = 1; i <= 10; i++) {
                  if(i > 4 && i != 10){
                    const delay = delays[i- 4 - 1];
                    console.log("tag", delay);
                    // Hide original, show animation
                    setTimeout(() => {
                        $("#odometer"+i+j+k).hide();
                        $("#odometer1"+i+j+k).show();
                    }, delay.start);

                    // Show original, hide animation
                    setTimeout(() => {
                        $("#odometer"+i+j+k).show();
                        $("#odometer1"+i+j+k).hide();
                    }, delay.end);
                  }
                }
            }
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
          $("#section_15").show();
          $("#section_16").hide();
          $("#section_17").hide();
        },first + 18500);

        var firstPrice= document.getElementById('section_1').value;
        var arrayFirstPrice=firstPrice.split("");
        var i=0;
        var m=0;

        for(i=0;i<2;i++){
          setTimeout(function(){
            responsiveVoice.speak(convert(arrayFirstPrice[m++]),"Hindi Male",{pitch: 0.7},{rate: 0.8});

          },first + 18500+(1000*i));
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
        },first + 21000);

        for(i=0;i<1;i++){
          setTimeout(function(){
            responsiveVoice.speak(convert(arrayFirstPrice[m++]),"Hindi Male",{pitch: 0.7},{rate: 0.8});

          },first + 21000+(1000*i));
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
        },first + 23000);

        for(i=0;i<5;i++){
          setTimeout(function(){
            responsiveVoice.speak(convert(arrayFirstPrice[m++]),"Hindi Male",{pitch: 0.7},{rate: 0.8});

          },first + 23000+(1000*i));
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
        },first + 30000);

        
        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_adio1.mp3');
          audio.play();
          setTimeout(function(){

            audio.pause();
            audio.currentTime = 0;
          },musicTime);
        },first + 30000);

        const second = first + musicTime + 30000;//50000

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
        },(second));

        setTimeout(function(){
          $(".odometer2").show();
          $(".odometer1").hide();
        },(second));


        setTimeout(function(){
            
            responsiveVoice.speak("Second price "+sp+" on five digit on ten times","Hindi Male",{pitch: 0.7});

        },(second + 2000));

        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_audio2.mp3');
          audio.play();
        },(second + 7000));

        const delays2 = [
            { start: (second + 6500), end: (second + 16100) },
            { start: (second + 7000), end: (second + 16600) },
            { start: (second + 7500), end: (second + 17100) },
            { start: (second + 6500), end: (second + 16100) },
            { start: (second + 7000), end: (second + 16600) },
            { start: (second + 7500), end: (second + 17100) }, 
            { start: (second + 6500), end: (second + 16100) },
            { start: (second + 7000), end: (second + 16600) },
            { start: (second + 7500), end: (second + 17100) },
            { start: (second + 6500), end: (second + 16100) },
        ];
        for (let k = 1; k <= 5; k++) {
            for (let j = 1; j <= 2; j++) {
                for (let i = 1; i <= 10; i++) {
                    const delay = delays2[i - 1];
                    setTimeout(() => {
                        $("#odometer1a"+i+j+k).show();
                        $("#odometer2"+i+j+k).hide();
                    }, delay.start);

                    // Show original, hide animation
                    setTimeout(() => {
                        $("#odometer1a"+i+j+k).hide();
                        $("#odometer2"+i+j+k).show();
                    }, delay.end);
                }
            }
        }

        var secondPrice= document.getElementById('section_2').value;
        var arraySecondPrice=secondPrice.split("");
        var i=0,j=0;
        var mSecondPrice=0;
        var time = second + 18000;
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

        },second + 80000);

        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_adio1.mp3');
          audio.play();
          setTimeout(function(){

            audio.pause();
            audio.currentTime = 0;
          },musicTime);
        },second + 80000);

        var third = second + musicTime + 80000 //133000

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
        },third);

        setTimeout(function(){
          $(".odometer").show();
          $(".odometer1").hide();
        },third);

        setTimeout(function(){
            responsiveVoice.speak("Third price "+tp+" on four digit on ten times","Hindi Male",{pitch: 0.7});
        },third + 2000);

        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_audio2.mp3');
          audio.play();
          
        },third + 7000);

        const delays3 = [
            { start: (third + 6500), end: (third + 16100) },
            { start: (third + 7000), end: (third + 16600) },
            { start: (third + 7500), end: (third + 17100) },
            { start: (third + 6500), end: (third + 16100) },
            { start: (third + 7000), end: (third + 16600) },
            { start: (third + 7500), end: (third + 17100) }, 
            { start: (third + 6500), end: (third + 16100) },
            { start: (third + 7000), end: (third + 16600) },
            { start: (third + 7500), end: (third + 17100) },
            { start: (third + 6500), end: (third + 16100) }
        ];
        for (let k = 1; k <= 5; k++) {
            for (let j = 1; j <= 2; j++) {
                for (let i = 1; i <= 10; i++) {
                    const delay = delays3[i - 1];
                    setTimeout(() => {
                        $("#odometer1b"+i+j+k).show();
                        $("#odometer3"+i+j+k).hide();
                    }, delay.start);

                    // Show original, hide animation
                    setTimeout(() => {
                        $("#odometer1b"+i+j+k).hide();
                        $("#odometer3"+i+j+k).show();
                    }, delay.end);
                }
            }
        } 
    
        var thirdPrice= document.getElementById('section_3').value;
        var arrayThirdPrice=thirdPrice.split("");
        var i=0,j=0;
        var mThirdPrice=0;
        var time=third + 18000;
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
        },third + 70000);

        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_adio1.mp3');
          audio.play();
          setTimeout(function(){

            audio.pause();
            audio.currentTime = 0;
          },musicTime);
        },third + 70000);

        var fourth = third + musicTime + 70000; //
    </script>
</body>
</html>
