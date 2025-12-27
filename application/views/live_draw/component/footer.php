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

      function updateClock() {
        const now = new Date();

        let h = now.getHours();
        let m = now.getMinutes();
        let s = now.getSeconds();
        let ap = "AM";

        if (h >= 12) ap = "PM";
        h = h % 12 || 12;

        h = h < 10 ? "0" + h : h;
        m = m < 10 ? "0" + m : m;
        s = s < 10 ? "0" + s : s;

        document.getElementById("time").innerText = h + ":" + m + ":" + s;
        document.getElementById("ampm").innerText = ap;
      }

      setInterval(updateClock, 1000);
      updateClock();
        
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
      var start = 15000;
      var videoTime = 10000
      var musicTime = 3000;
      var voice = "Hindi Male";
      var pitch = 1;
      var rate =1;
      const arr = {
        first: "gir",
        second: "boy", 
        third: "girl",
        fourth: "girl",
        fifth: "girl",
        sixth: "girl",
        second: "boy",
      };
      
      const keys = Object.keys(arr);
      const key = keys[Math.floor(Math.random() * keys.length)];
      const audioFile = arr[key];
       
        function playNumber(num) {
          new Audio("<?=base_url()?>webroot/live_draw/assets/audio/"+audioFile+"/"+num+".mp3").play();
        }

        function playChar(char) {
          if (!char) return;
          char = char.toLowerCase();
          const audio = new Audio(
            "<?=base_url()?>webroot/live_draw/assets/audio/" +
            audioFile + "/" + char + ".mp3"
          );

          audio.play();
        }

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
        },start + 3000);

        var afterStartVideo = start + videoTime; //15000

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

        let first = afterStartVideo + musicTime + 4000;//23000

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
            new Audio("<?=base_url()?>webroot/live_draw/assets/audio/"+audioFile+"/firstPrize.mp3").play();
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
              duration: 12000,
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
                duration: 12000,
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
              duration:14000,
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
                duration: 14000,
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
        },first + 21500);

        var firstPrice= document.getElementById('section_1').value;
        var arrayFirstPrice=firstPrice.split("");
        var i=0;
        var m=0;

        for(i=0;i<2;i++){
          setTimeout(function(){
            playNumber(parseInt(arrayFirstPrice[m++]));
          },first + 21500+(1000*i));
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
        },first + 24000);

        for(i=0;i<1;i++){
          setTimeout(function(){
            playChar(arrayFirstPrice[m++]);
          },first + 24000+(1000*i));
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
        },first + 26000);

        for(i=0;i<5;i++){
          setTimeout(function(){
            playNumber(parseInt(arrayFirstPrice[m++]));
          },first + 26000+(1000*i));
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
        },first + 33000);

        const second = first + musicTime + 33000;//56000

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
            new Audio("<?=base_url()?>webroot/live_draw/assets/audio/"+audioFile+"/secondPrize.mp3").play();
        },(second + 1000));

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
              playNumber(parseInt(arraySecondPrice[mSecondPrice++]));
            },time+(500*i));
          }
          time=time+3000;
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

        },second + 48000);

        var third = second + musicTime + 48000 //107000

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
            new Audio("<?=base_url()?>webroot/live_draw/assets/audio/"+audioFile+"/thirdPrize.mp3").play();
        },third + 1000);

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
        var time = third + 18000;
        for(j=0;j<10;j++){
          for(i=0;i<4;i++){
            setTimeout(function(){
              playNumber(parseInt(arrayThirdPrice[mThirdPrice++]));
            },time+(500*i));
          }
          time=time+3000;
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
        },third + 48000);

        var fourth = third + musicTime + 48000; //158000

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
        },fourth);

        setTimeout(function(){
          $(".odometer").show();
          $(".odometer1").hide();
        },fourth);

        setTimeout(function(){
            new Audio("<?=base_url()?>webroot/live_draw/assets/audio/"+audioFile+"/fourthPrize.mp3").play();
        },fourth + 1000);

        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_audio2.mp3');
          audio.play();
          
        },fourth + 7000);

        const delays4 = [
            { start: (fourth + 6500), end: (fourth + 16100) },
            { start: (fourth + 7000), end: (fourth + 16600) },
            { start: (fourth + 7500), end: (fourth + 17100) },
            { start: (fourth + 6500), end: (fourth + 16100) },
            { start: (fourth + 7000), end: (fourth + 16600) },
            { start: (fourth + 7500), end: (fourth + 17100) }, 
            { start: (fourth + 6500), end: (fourth + 16100) },
            { start: (fourth + 7000), end: (fourth + 16600) },
            { start: (fourth + 7500), end: (fourth + 17100) },
            { start: (fourth + 6500), end: (fourth + 16100) }
        ];
        for (let k = 1; k <= 5; k++) {
            for (let j = 1; j <= 2; j++) {
                for (let i = 1; i <= 10; i++) {
                    const delay = delays4[i - 1];
                    setTimeout(() => {
                        $("#odometer1c"+i+j+k).show();
                        $("#odometer5"+i+j+k).hide();
                    }, delay.start);

                    // Show original, hide animation
                    setTimeout(() => {
                        $("#odometer1c"+i+j+k).hide();
                        $("#odometer5"+i+j+k).show();
                    }, delay.end);
                }
            }
        } 

        var fourthPrice= document.getElementById('section_9').value;
        var arrayFourthPrice=fourthPrice.split("");
        var i=0,j=0;
        var mFourthPrice=0;
        var time=fourth + 18000;
        for(j=0;j<10;j++){
          for(i=0;i<4;i++){
            setTimeout(function(){
              playNumber(parseInt(arrayFourthPrice[mFourthPrice++]));
            },time+(500*i)); 
          }
          time=time+3000;
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
        },fourth + 48000);

        var fifth = fourth + musicTime + 48000; //209000

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
        },fifth);

        setTimeout(function(){
          $(".odometer").show();
          $(".odometer1").hide();
        },fifth);

        setTimeout(function(){
            new Audio("<?=base_url()?>webroot/live_draw/assets/audio/"+audioFile+"/fifthPrize.mp3").play();
        },fifth + 1000);

        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_audio2.mp3');
          audio.play();
          
        },fifth + 7000);

        const delays5 = [
            { start: (fifth + 6500), end: (fifth + 16100) },
            { start: (fifth + 7000), end: (fifth + 16600) },
            { start: (fifth + 7500), end: (fifth + 17100) },
            { start: (fifth + 6500), end: (fifth + 16100) },
            { start: (fifth + 7000), end: (fifth + 16600) },
            { start: (fifth + 7500), end: (fifth + 17100) }, 
            { start: (fifth + 6500), end: (fifth + 16100) },
            { start: (fifth + 7000), end: (fifth + 16600) },
            { start: (fifth + 7500), end: (fifth + 17100) },
            { start: (fifth + 6500), end: (fifth + 16100) }
        ];
        for (let k = 1; k <= 5; k++) {
            for (let j = 1; j <= 2; j++) {
                for (let i = 1; i <= 10; i++) {
                    const delay = delays5[i - 1];
                    setTimeout(() => {
                        $("#odometer1d"+i+j+k).show();
                        $("#odometer4"+i+j+k).hide();
                    }, delay.start);

                    // Show original, hide animation
                    setTimeout(() => {
                        $("#odometer1d"+i+j+k).hide();
                        $("#odometer4"+i+j+k).show();
                    }, delay.end);
                }
            }
        }

        var fifthPrice1= document.getElementById('section_4').value;
        var arrayFifthPrice1=fifthPrice1.split("");
        var i=0,j=0;
        var mFifthPrice1=0;
        var time=fifth + 18000;
        for(j=0;j<20;j++){
          for(i=0;i<4;i++){
            setTimeout(function(){
              playNumber(parseInt(arrayFifthPrice1[mFifthPrice1++]));
            },time+(500*i));
          }
          time=time+3000;
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
        },fifth + 78000);

        var sixth = fifth + musicTime + 78000; //290000
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
        },sixth);

        setTimeout(function(){
          $(".odometer").show();
          $(".odometer1").hide();
        },sixth);

        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_audio2.mp3');
          audio.play();
          
        },sixth + 2000);

        const delays6 = [
            { start: (sixth + 1500), end: (sixth + 11100) },
            { start: (sixth + 2000), end: (sixth + 11600) },
            { start: (sixth + 2500), end: (sixth + 12100) },
            { start: (sixth + 1500), end: (sixth + 11100) },
            { start: (sixth + 2000), end: (sixth + 11600) },
            { start: (sixth + 2500), end: (sixth + 12100) }, 
            { start: (sixth + 1500), end: (sixth + 11100) },
            { start: (sixth + 2000), end: (sixth + 11600) },
            { start: (sixth + 2500), end: (sixth + 12100) },
            { start: (sixth + 2500), end: (sixth + 12100) },
        ];
        for (let k = 1; k <= 5; k++) {
            for (let j = 1; j <= 2; j++) {
                for (let i = 1; i <= 10; i++) {
                    const delay = delays6[i - 1];
                    setTimeout(() => {
                        $("#odometer1e"+i+j+k).show();
                        $("#odometer6"+i+j+k).hide();
                    }, delay.start);

                    // Show original, hide animation
                    setTimeout(() => {
                        $("#odometer1e"+i+j+k).hide();
                        $("#odometer6"+i+j+k).show();
                    }, delay.end);
                }
            }
        }

        var sixthPrice= document.getElementById('section_10').value;
        var arraySixthPrice=sixthPrice.split("");
        var i=0,j=0;
        var mSixthPrice=0;
        var time2=sixth + 13000;
        for(j=0;j<20;j++){        
          for(i=0;i<4;i++){
            setTimeout(function(){
              playNumber(parseInt(arraySixthPrice[mSixthPrice++]));
            },time2+(500*i));
          }
          time2=time2+3000;
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
        },sixth + 73000);

        var seventh = sixth + musicTime + 73000; //366000
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
        },seventh);

        setTimeout(function(){
          $(".odometer").show();
          $(".odometer1").hide();
        },seventh);

        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_audio2.mp3');
          audio.play();
          
        },seventh + 2000);

        const delays7 = [
            { start: (seventh + 1500), end: (seventh + 11100) },
            { start: (seventh + 2000), end: (seventh + 11600) },
            { start: (seventh + 2500), end: (seventh + 12100) },
            { start: (seventh + 1500), end: (seventh + 11100) },
            { start: (seventh + 2000), end: (seventh + 11600) },
            { start: (seventh + 2500), end: (seventh + 12100) },
            { start: (seventh + 1500), end: (seventh + 11100) },
            { start: (seventh + 2000), end: (seventh + 11600) },
            { start: (seventh + 2500), end: (seventh + 12100) },
            { start: (seventh + 1500), end: (seventh + 11100) },
        ];
        for (let k = 1; k <= 5; k++) {
            for (let j = 1; j <= 2; j++) {
                for (let i = 1; i <= 10; i++) {
                    const delay = delays7[i - 1];
                    setTimeout(() => {
                        $("#odometer1f"+i+j+k).show();
                        $("#odometer7"+i+j+k).hide();
                    }, delay.start);

                    // Show original, hide animation
                    setTimeout(() => {
                        $("#odometer1f"+i+j+k).hide();
                        $("#odometer7"+i+j+k).show();
                    }, delay.end);
                }
            }
        }

        var seventhPrice= document.getElementById('section_11').value;
        var arraySeventhPrice=seventhPrice.split("");
        var i=0,j=0;
        var mSeventhPrice=0;
        var time3=seventh + 13000;
        for(j=0;j<20;j++){

          for(i=0;i<4;i++){
            setTimeout(function(){
              playNumber(parseInt(arraySeventhPrice[mSeventhPrice++]));
            },time3+(500*i));
          }
          time3=time3+3000;
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
        },seventh + 73000);

        var eighth = seventh + musicTime + 73000; //442000
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
        },eighth);

        setTimeout(function(){
          $(".odometer").show();
          $(".odometer1").hide();
        },eighth);

        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_audio2.mp3');
          audio.play();
          
        },eighth + 2000);

        const delays8 = [
            { start: (eighth + 1500), end: (eighth + 11100) },
            { start: (eighth + 2000), end: (eighth + 11600) },
            { start: (eighth + 2500), end: (eighth + 12100) },
            { start: (eighth + 1500), end: (eighth + 11100) },
            { start: (eighth + 2000), end: (eighth + 11600) },
            { start: (eighth + 2500), end: (eighth + 12100) },
            { start: (eighth + 1500), end: (eighth + 11100) },
            { start: (eighth + 2000), end: (eighth + 11600) },
            { start: (eighth + 2500), end: (eighth + 12100) },
            { start: (eighth + 1500), end: (eighth + 11100) },
        ];
        for (let k = 1; k <= 5; k++) {
            for (let j = 1; j <= 2; j++) {
                for (let i = 1; i <= 10; i++) {
                    const delay = delays8[i - 1];
                    setTimeout(() => {
                        $("#odometer1g"+i+j+k).show();
                        $("#odometer8"+i+j+k).hide();
                    }, delay.start);

                    // Show original, hide animation
                    setTimeout(() => {
                        $("#odometer1g"+i+j+k).hide();
                        $("#odometer8"+i+j+k).show();
                    }, delay.end);
                }
            }
        }

        var eigthPrice4= document.getElementById('section_12').value;
        var arrayEigthPrice4=eigthPrice4.split("");
        var i=0,j=0;
        var mEigthPrice4=0;
        var time4=eighth + 13000;
        for(j=0;j<20;j++){

          for(i=0;i<4;i++){
            setTimeout(function(){
              playNumber(parseInt(arrayEigthPrice4[mEigthPrice4++]));
            },time4+(500*i));
          }
          time4=time4+3000;
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
        },eighth + 73000);

        var ninth = eighth + musicTime + 73000; //518000
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
        },ninth);

        setTimeout(function(){
          $(".odometer").show();
          $(".odometer1").hide();
        },ninth);

        setTimeout(function(){
          var audio = new Audio('<?=base_url()?>webroot/live_draw/assets/images/lottery_audio2.mp3');
          audio.play();
          
        },ninth + 2000);

        const delays9 = [
            { start: (ninth + 1500), end: (ninth + 11100) },
            { start: (ninth + 2000), end: (ninth + 11600) },
            { start: (ninth + 2500), end: (ninth + 12100) },
            { start: (ninth + 1500), end: (ninth + 11100) },
            { start: (ninth + 2000), end: (ninth + 11600) },
            { start: (ninth + 2500), end: (ninth + 12100) },
            { start: (ninth + 1500), end: (ninth + 11100) },
            { start: (ninth + 2000), end: (ninth + 11600) },
            { start: (ninth + 2500), end: (ninth + 12100) },
            { start: (ninth + 1500), end: (ninth + 11100) },
        ];
        for (let k = 1; k <= 5; k++) {
            for (let j = 1; j <= 2; j++) {
                for (let i = 1; i <= 10; i++) {
                    const delay = delays9[i - 1];
                    setTimeout(() => {
                        $("#odometer1h"+i+j+k).show();
                        $("#odometer9"+i+j+k).hide();
                    }, delay.start);

                    // Show original, hide animation
                    setTimeout(() => {
                        $("#odometer1h"+i+j+k).hide();
                        $("#odometer9"+i+j+k).show();
                    }, delay.end);
                }
            }
        }

        var ninthPrice5= document.getElementById('section_13').value;
        var arrayNinthPrice5=ninthPrice5.split("");
        var i=0,j=0;
        var mNinthPrice5=0;
        var time5=ninth + 13000;
        for(j=0;j<20;j++){

          for(i=0;i<4;i++){
            setTimeout(function(){
              playNumber(parseInt(arrayNinthPrice5[mNinthPrice5++]));
            },time5+(500*i));
          }
          time5=time5+3000;
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
        },ninth + 73000);

    </script>
</body>
</html>
