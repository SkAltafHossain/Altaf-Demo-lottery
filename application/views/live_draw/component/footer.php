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
          },5000);
        });

        setTimeout(function(){
            //var text = document.getElementById("txt").value;

            responsiveVoice.speak("Dice Through","Hindi Male",{pitch: 0.7});

        },7000);

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
        },8500);

        setTimeout(function(){
          var vid = document.getElementById("myVideo"); 
          vid.play()
        },9000);

        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_adio1.mp3');
          audio.play();
          setTimeout(function(){

            audio.pause();
            audio.currentTime = 0;
          },3000);
        },14000);

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
        },14000);

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
        },17000);

        setTimeout(function(){
            responsiveVoice.speak("First Price "+fp+" On Five Digits With Series On One Time. ","Hindi Male",{pitch: 0.7});
        },18000);

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
        },23500);

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
        },23500);

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
        },24000);

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
        },24000);


        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_audio2.mp3');
          audio.play();
        },23900);

        setTimeout(function(){
          $(".odometer1").hide();
        });

        setTimeout(function(){
          $(".odometer").hide();
          $(".odometer_zoom").hide();
          $(".odometer1").show();
        },23900);

        setTimeout(function(){
          $(".odometer_zoom").show();
          $(".odometer1").hide();
          $(".odometer").show();
        },33900);

        // setTimeout(() => {
        //   $("#odometer525").show();
        //   $("#odometer1525").hide();
        // }, 32500);

        // setTimeout(() => {
        //   $("#odometer925").show();
        //   $("#odometer1925").hide();
        // }, 33100);

        // setTimeout(() => {
        //   $("#odometer725").show();
        //   $("#odometer1725").hide();
        // }, 32800);

        // setTimeout(() => {
        //   $("#odometer625").show();
        //   $("#odometer1625").hide();
        // }, 33700);

        // setTimeout(() => {
        //   $("#odometer825").show();
        //   $("#odometer1825").hide();
        // }, 33400);



    </script>
</body>
</html>

