<!DOCTYPE html>
<html lang="en">
	<head> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="<?=base_url()?>webroot/live_draw/assets/images/logo_chagol.png">
		<meta charset="utf-8">
		<title>Lottery</title>
		<!--<link rel="stylesheet" href="<?=base_url()?>webroot/live_draw/assets/css/style.css">-->
		<link rel="stylesheet" href="<?=base_url()?>webroot/live_draw/assets/css/bootstrap.min.css">
		<link href="<?=base_url()?>webroot/live_draw/assets/css/odometer-theme-default.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="" crossorigin="anonymous"/>
		<script type="text/javascript" src="<?=base_url()?>webroot/live_draw/assets/js/responsivevoice.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
		<style>
		    body{
          overflow: hidden !important;
          background-color: #bc5f24 !important;
        }
        #altaf{
                position: fixed;
                top: 0;
                left: 0;
                width:100%;
                z-index: 9999;
            }
            .sakir{
              position: relative;
              animation: myfirst 15s 50;
              animation-direction: alternate;
            }
            .sakir p{
                color:#FF0000;
                font-size:30px;
                margin-bottom:0px;
                font-weight:800;
            }
            @keyframes myfirst {
              0%   {left: 25px; top: 0;}
              50%  {left: 85%; top: 35vh;}
              100% {left: 25px; top: 70vh;}
            }
#navbar {  
  background: -webkit-linear-gradient(gray, black);
}


#kus{
  position: relative;
  top: 16px;
  right: 8px;
}

#kus15{
  position: relative;
  top: 16px;
  left: 906px;
}
#kus16{
  position: relative;
  top: 12px;
  left: 906px;
}
#kus17{
  position: relative;
  bottom: 580px;
  right: 250px;
}

#kus1703{
  position: relative;
  bottom: 340px;
  right: 250px;
}

#kus1704{
  position: relative;
  bottom: 20px;
  right: 250px;
}

#kus1705{
  position: relative;
  bottom: -220px;
  right: 250px;
}

#chaka_angtha{
  position: relative;
  bottom: 1621px;
  left: 114px;
  z-index: -9999999;
}

#chaka_angtha_15 {
  position: relative;
  bottom: 1560px;
  left: 671px;
  z-index: -9999999;
}

#chaka_angtha2{
  position: relative;
  bottom: 1295px;
  left: 33px;
  z-index: -9999999;
}

#chaka_angtha2_15{
  display: none;
}

#chaka_angtha2_16{
  position: relative;
    bottom: 1720px;
    left: 613px;
    z-index: -9999999;
}

/*Today result start*/

.row.equal {
  display: flex;
  flex-wrap: wrap;
}

[class*="col-"] {
  margin-bottom: 30px;
  /* border: 1px solid rgb(180, 6, 248); */
}

.boxthing {
  height: 100%;
  padding: 25px 25px 16.5px;
}

/*Today result end*/

/*Contact form start*/

#contact {
  width: 100%;
  height: 100%;
}

.section-header {
  text-align: center;
  margin: 0 auto;
  padding: 40px 0;
  font: 300 60px 'Oswald', sans-serif;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 6px;
}

.contact-wrapper {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  margin: 0 auto;
  padding: 20px;
  position: relative;
  max-width: 840px;
}

/* Left contact page */

.form-horizontal {
  max-width: 400px;
  font-family: 'Lato';
  font-weight: 400;
}

.form-control, textarea {
  max-width: 400px;
  background-color: #000;
  color: #fff;
  letter-spacing: 1px;
}

.send-button {
  margin-top: 15px;
  height: 34px;
  width: 400px;
  overflow: hidden;
  transition: all .2s ease-in-out;
}

.alt-send-button {
  width: 400px;
  height: 34px;
  transition: all .2s ease-in-out;
}

.send-text {
  display: block;
  margin-top: 10px;
  font: 700 12px 'Lato', sans-serif;
  letter-spacing: 2px;
}

.alt-send-button:hover {
  transform: translate3d(0px, -29px, 0px);
}

/* Begin Right Contact Page */

.direct-contact-container {
  max-width: 400px;
}

/* Location, Phone, Email Section */

.contact-list {
  list-style-type: none;
  margin-left: -30px;
  padding-right: 20px;
}

.list-item {
  line-height: 4;
}

.contact-text {
  font: 300 18px 'Lato', sans-serif;
  letter-spacing: 1.9px;
}

.place {
  margin-left: 62px;
}

.phone {
  margin-left: 56px;
}

.gmail {
  margin-left: 53px;
}

.contact-text a {
  color: #212529;
  text-decoration: none;
  transition-duration: 0.2s;
}

.contact-text a:hover {
  color: violet;
  text-decoration: none;
}

/* Social Media Icons */

.social-media-list {
  position: relative;
  font-size: 22px;
  text-align: center;
  width: 100%;
  margin: 0 auto;
  padding: 0;
}

.social-media-list li a {
  color: #fff;
}

.social-media-list li {
  position: relative;
  display: inline-block;
  height: 60px;
  width: 60px;
  margin: 10px 3px;
  line-height: 60px;
  border-radius: 50%;
  color: #fff;
  background-color: rgb(27, 27, 27);
  cursor: pointer;
  transition: all .2s ease-in-out;
}

.social-media-list li:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 60px;
  height: 60px;
  line-height: 60px;
  border-radius: 50%;
  opacity: 0;
  box-shadow: 0 0 0 1px #fff;
  transition: all .2s ease-in-out;
}

.social-media-list li:hover {
  background-color: #fff;
}

.social-media-list li:hover:after {
  opacity: 1;
  transform: scale(1.12);
  transition-timing-function: cubic-bezier(0.37, 0.74, 0.15, 1.65);
}

.social-media-list li:hover a {
  color: #000;
}

.copyright {
  font: 200 14px 'Oswald', sans-serif;
  color: #555;
  letter-spacing: 1px;
  text-align: center;
}

hr {
  border-color: rgba(255, 255, 255, .6);
}

/* Begin Media Queries*/

@media screen and (max-width: 850px) {
  .contact-wrapper {
    display: flex;
    flex-direction: column;
  }
  .direct-contact-container, .form-horizontal {
    margin: 0 auto;
  }
  .direct-contact-container {
    margin-top: 60px;
    max-width: 300px;
  }
  .social-media-list li {
    height: 60px;
    width: 60px;
    line-height: 60px;
  }
  .social-media-list li:after {
    width: 60px;
    height: 60px;
    line-height: 60px;
  }
}

@media screen and (max-width: 569px) {
  .direct-contact-container, .form-wrapper {
    float: none;
    margin: 0 auto;
  }
  .form-control, textarea {
    margin: 0 auto;
  }
  .name, .email, textarea {
    width: 280px;
  }
  .direct-contact-container {
    margin-top: 60px;
    max-width: 280px;
  }
  .social-media-list {
    left: 0;
  }
  .social-media-list li {
    height: 55px;
    width: 55px;
    line-height: 55px;
    font-size: 2rem;
  }
  .social-media-list li:after {
    width: 55px;
    height: 55px;
    line-height: 55px;
  }
}

@media screen and (max-width: 410px) {
  .send-button {
    width: 99%;
  }
}

/*Contact form end*/

/* Chaka style start */

#chaka {
  background: white;
  border-radius: 150px;
  position: relative;
  bottom: 1029px;
  right: 6px;
  width: 21.5%;
  height: 29%;
}

#chaka_15 {
  background: white;
    border-radius: 227px;
    position: relative;
    bottom: 1025px;
    left: 499px;
    width: 32.5%;
    height: 45%;
}

#circle {
  position: relative;
  bottom: 1028px;
  width: 23.8%;
  height: 30%;
  right: 23.4%;
}

#circle_15 {
  position: relative;
  bottom: 1025px;
  width: 35.5%;
  height: 42%;
  left: 2.4%;
}


#chaka1 {
  background: white;
  border-radius: 150px;
  position: relative;
  bottom: 1012px;
  left: 41px;
  width: 9.3%;
  height: 29%;
}

#chaka16 {
    background: white;
    border-radius: 243px;
    position: relative;
    bottom: 1028px;    
    left: 546px;
    width: 29.3%;
    height: 29%;
}

#circle1 {
  position: relative;
  bottom: 1012px;
  width: 10.0%;
  height: 30%;
  right: 94px;
}

#circle16 {
  position: relative;
  bottom: 1028px;
  width: 31.8%;
  height: 30%;
  left: 125px;
}

@media only screen and (max-width: 600px) {
  #chaka {
    width: 65% !important;
    left: 21px;
  }
  #circle {
    width: 64% !important;
    left: 23.5px;
    bottom: 231.2px;
  }
}

/* Chaka style end */

/*Meter Style Start*/

main p{
  margin-top: -14px !important;
  margin-bottom: 0px !important;
  /*display: none !important;*/
}

main {
  background-color: white;
  position: relative;
  width: 18px;
  height: 30px;
  margin-left: 8px;
  margin-right: 8px;
  font-size: 20px;
  border: groove 3px;
  border-radius: 0px;
}

main #odometer {
  position: relative;
  left: 70px;
  display: flex;
  margin: 0;
}
#main_1{
  background-color: white;
  position: relative;
  width: 45px;
  height: 58px;
  margin-left: 8px;
  margin-right: 8px;
  font-size: 20px;
  border: groove 3px;
  border-radius: 0px;
}

@media only screen and (max-width: 600px) {
  main #odometer {
    padding-right: 10px;
    left: 0px;
  }
  .odometer-inside {
    position: relative;
    left: 55px;
  }
}
/*Meter Style End*/
#voice_btn{
  position: relative;
  border-radius: 8px;
  background-color: #17a2b8;
}
#spin_btn{
  position: relative;
  bottom: 603px;
  right: 422px;
}
#spin_btn2{
  position: relative;
  bottom: 850px;
}
.odometer-inside{
  font-size: 3vh;
  padding: 0px;
}
@media only screen and (max-width: 600px) {
  .odometer-inside{
    margin-left: 0px;
  }
}
.col{
  padding-left: 0px !important;
  padding-top: 20px !important;
  max-width: 3% !important;
  font-size: smaller !important;
}
#meater_box_row{
  position: relative;
  top: 58px;
  left: 40px;
  width: 743px;
  height: 50px;
  background-color: #dfd2ba;
  box-shadow: 0 0 0 1em #e9dcc4,
              0 0 0 2em #e5e2d5;
 /* margin: 3em;
  padding: 0em;*/
  margin-top: 43px !important;
  margin-bottom: 43px !important;
  margin-left: 43px !important;
  margin-right: 43px !important;
  border: 3mm ridge rgba(209, 199, 175, 0.4);
}

#meater_box_row_15{
  position: relative;
  top: -66px;
  left: -141px;
  width: 1352px;
  height: 140px;
  background-color: #dfd2ba;
  box-shadow: 0 0 0 2em #e9dcc4, 0 0 0 3em #e5e2d5;
  margin-top: 48px!important;
  margin-bottom: 93px!important;
  margin-left: 43px!important;
  margin-right: 43px!important;
  border: 11mm ridge rgba(209, 199, 175, 0.4);
}

.col main{
  position: relative;
  bottom: 19px;
  height: 30px;
  left: 10px;
}

#image1{
  position: relative;
  left: 13px;
  bottom: 443px;
  width: 125px;
  height: 390px;
}
#image2{
  position: relative;
  left: 1040px;
  bottom: 328px;
  width: 249px;
  height: 360px;
}
#image3{
  position: relative;
  bottom: 950px;
  width: 100%;
  height: 76px;
}
#image4{
  position: relative;
  left: 1040px;
  bottom: 902px;
  height: 100px;
  width: 263px;
}
#line1{
  position: relative;
  bottom: 947px;
  right: 142px;
  width: 879px;

}
#line2{
  position: relative;
  bottom: 948px;
  left: 125px;
  width: 879px;
  
}
#line3{
  position: relative;
  bottom: 953px;
  left: 125px;
  width: 879px;
  
}
#line4{
  position: relative;
  bottom: 959px;
  left: 125px;
  width: 879px;
  
}
#line5{
  position: relative;
  bottom: 964px;
  left: 125px;
  width: 879px;

}
#result_div_1{
  background-image: linear-gradient(#a04207, #a4470d);
  position: relative;
  bottom: 1061px;
  width: 100%;
  height: 120px;
  display: inline-block;
}
#result_div_2{
  background-image: linear-gradient(#a04207, #a4470d);
  position: relative;
  bottom: 994px;
  width: 100%;
  height: 95px;
  display: inline-block;
}

#result_div_3{
  background-image: linear-gradient(#a04207, #a4470d);
  position: relative;
  bottom: 1040px;
  width: 100%;
  height: 95px;
  display: inline-block;
}
#result_div_17{
  background-image: linear-gradient(#a04207, #a4470d);
    position: relative;
    bottom: 688px;
    width: 145%;
    height: 219px;
    right: 528px;
    display: inline-block;
}

#result_div_3_15{
  display: none;
}
#result_div_3_16{
  background-image: linear-gradient(#a04207, #a4470d);
  position: relative;
  bottom: 920px;
  width: 150%;
  height: 200px;
  right: 50px;
  display: inline-block;
}

#draw_1{
  font-size: 35px !important;
  font-weight: bold;
    position: relative;
    font-size: larger;
    background-color: #fff;
    color: #721c24;
    padding-top: 17px;
    padding-bottom: 17px;
    padding-left: 30px;
    padding-right: 30px;
    left: 100px;
    top: 20px;
    text-transform: uppercase;
}
#draw_2{
  font-size: 35px !important;
  font-weight: bold;
  position: relative;
  font-size: larger;
  background-color: #fff;
  color: #721c24;
  padding-top: 17px;
  padding-bottom: 17px;
  padding-left: 30px;
  padding-right: 30px;
  left: 220px;
  top: 20px;
  text-transform: uppercase;
}

#draw_17_1{
  position: relative;
  font-size: 50px;
  font-weight: bold;
  background-color: #fff;
  color: #721c24;
  padding: 35px;
  left: 150px;
  top: 75px;
  text-transform: uppercase;
}

#draw_17_2{
  position: relative;
  font-size: 50px;
  font-weight: bold;
  background-color: #fff;
  color: #721c24;
  padding: 35px;
  left: 250px;
  top: 75px;
  text-transform: uppercase;
}

#draw_16_1{
  position: relative;
  font-size: 50px;
  font-weight: bold;
  background-color: #fff;
  color: #721c24;
  padding: 35px;
  left: 950px;
  top: 75px;
  text-transform: uppercase;
}

#draw_16_2{
  position: relative;
  font-size: 50px;
  font-weight: bold;
  background-color: #fff;
  color: #721c24;
  padding: 35px;
  left: 750px;
  top: 75px;
  text-transform: uppercase;
}

#porda_div1{
  position: relative;
  background-color: transparent;
  text-align: center;
  width: 59.8%;
  height: 90px;
  left: 171px;
  bottom: 364.5px;
}

#porda_div15{
  position: relative;
  background-color: transparent;
  text-align: center;
  width: 59.8%;
  height: 90px;
  left: 904px;
  bottom: 364.5px;
}
#porda_div16{
  position: relative;
  background-color: transparent;
  text-align: center;
  width: 59.8%;
  height: 90px;
  left: 904px;
  bottom: 513px;
}

#porda_div17{
      position: relative;
    background-color: transparent;
    text-align: center;
    width: 59.8%;
    height: 90px;
    right: 321px;
    bottom: 2372px;
}

#porda_div1702{
      position: relative;
    background-color: transparent;
    text-align: center;
    width: 59.8%;
    height: 90px;
    right: 321px;
    bottom: 2072px;
}

#porda_div1703{
      position: relative;
    background-color: transparent;
    text-align: center;
    width: 59.8%;
    height: 90px;
    right: 321px;
    bottom: 1772px;
}

#porda_div1704{
      position: relative;
    background-color: transparent;
    text-align: center;
    width: 59.8%;
    height: 90px;
    right: 321px;
    bottom: 1372px;
}

#porda_div1705{
      position: relative;
    background-color: transparent;
    text-align: center;
    width: 59.8%;
    height: 90px;
    right: 321px;
    bottom: 1072px;
}

#porda_div1706{
    position: relative;
    background-color: transparent;
    text-align: center;
    width: 59.8%;
    height: 90px;
    right: 321px;
    bottom: 2372px;
}

#porda_div1707{
    position: relative;
    background-color: transparent;
    text-align: center;
    width: 59.8%;
    height: 90px;
    right: 321px;
    bottom: 2072px;
}

#porda_div1708{
    position: relative;
    background-color: transparent;
    text-align: center;
    width: 59.8%;
    height: 90px;
    right: 321px;
    bottom: 1772px;
}

#porda_div1709{
    position: relative;
    background-color: transparent;
    text-align: center;
    width: 59.8%;
    height: 90px;
    right: 321px;
    bottom: 1372px;
}

#porda_div1710{
    position: relative;
    background-color: transparent;
    text-align: center;
    width: 59.8%;
    height: 90px;
    right: 321px;
    bottom: 1072px;
}

#porda_img1{
  position: relative;
  width: 809px;
  height: 97px;
  bottom: 630px;
  right: 5px; 
}

#porda_img105{
  position: relative;
  width: 594px;
  bottom: 630px;
  height: 97px;
  right: 112px;
}

#porda_img1101{
  position: relative;
  width: 450px;
  bottom: 630px;
  height: 97px;
  right: 92px;
}

#porda_img1102{
  position: relative;
  width: 180px;
  height: 97px;
  bottom: 630px;
  left: 82px;
}

#porda_img1_15{
  position: relative;
  width: 809px;
  height: 150px;
  bottom: 630px;
  right: 5px; 
}

#porda_img1_17{
  position: relative;
  width: 1500px;
  height: 300px;
  bottom: 630px;
  right: 5px; 
}

#porda_img1_1705{
  position: relative;
    width: 1097px;
    height: 279px;
    bottom: 631px;
    right: 5px; 
}

#porda_img1_17101{
  position: relative;
    width: 1097px;
    height: 279px;
    bottom: 631px;
    right:250px;
}

#porda_img1_17102{
  position: relative;
  width: 330px;
  height: 279px;
  bottom: 910px;
  left: 922px; 
}

#porda_img2{
  position: relative;
  width: 809px;
  height: 97px;
  bottom: 630px;
  right: 5px;
}

#porda_img204{
  position: relative;
  width: 594px;
  bottom: 630px;
  height: 97px;
  right: 112px;
}

#porda_img2091{
  position: relative;
  width: 450px;
  bottom: 630px;
  height: 97px;
  right: 92px;
}

#porda_img2092{
  position: relative;
  width: 180px;
  height: 97px;
  bottom: 630px;
  left: 82px;
}

#porda_img2_15{
  position: relative;
  width: 809px;
  height: 150px;
  bottom: 630px;
  right: 5px;
}

#porda_img2_17{
  position: relative;
  width: 1500px;
  height: 300px;
  bottom: 630px;
  right: 5px; 
}

#porda_img2_1704{
  position: relative;
    width: 1097px;
    height: 279px;
    bottom: 631px;
    right: 5px; 
}

#porda_img2_1710{
    position: relative;
    width: 1500px;
    height: 300px;
    bottom: 930px;
    right: 5px;
}

#porda_img2_17091{
  position: relative;
    width: 1097px;
    height: 279px;
    bottom: 631px;
    right:250px;
}

#porda_img2_17092{
  position: relative;
  width: 330px;
  height: 279px;
  bottom: 910px;
  left: 922px; 
}

#porda_img3{
  position: relative;
  width: 809px;
  height: 97px;
  bottom: 630px;
  right: 5px;
}

#porda_img303{
  position: relative;
  width: 594px;
  bottom: 630px;
  height: 97px;
  right: 112px;
}

#porda_img3081{
  position: relative;
  width: 450px;
  bottom: 630px;
  height: 97px;
  right: 92px;
}

#porda_img3082{
  position: relative;
  width: 180px;
  height: 97px;
  bottom: 630px;
  left: 82px;
}

#porda_img3_15{
  position: relative;
  width: 1500px;
  height: 150px;
  bottom: 630px;
  right: 5px;
}

#porda_img3_17{
  position: relative;
  width: 1500px;
  height: 300px;
  bottom: 630px;
  right: 5px; 
}

#porda_img3_1703{
  position: relative;
    width: 1097px;
    height: 279px;
    bottom: 631px;
    right: 5px; 
}

#porda_img3_1709{
    position: relative;
    width: 1500px;
    height: 300px;
    bottom: 930px;
    right: 5px;
}

#porda_img3_17081{
  position: relative;
    width: 1097px;
    height: 279px;
    bottom: 631px;
    right:250px;
}

#porda_img3_17082{
  position: relative;
  width: 330px;
  height: 279px;
  bottom: 910px;
  left: 922px; 
}

#porda_img4{
  position: relative;
  width: 809px;
  height: 97px;
  bottom: 630px;
  right: 5px;
}

#porda_img402{
  position: relative;
  width: 594px;
  bottom: 630px;
  height: 97px;
  right: 112px;
}

#porda_img4071{
  position: relative;
  width: 450px;
  bottom: 630px;
  height: 97px;
  right: 92px;
}

#porda_img4072{
  position: relative;
  width: 180px;
  height: 97px;
  bottom: 630px;
  left: 82px;
}

#porda_img4_15{
  position: relative;
  width: 809px;
  height: 150px;
  bottom: 630px;
  right: 5px;
}

#porda_img4_17{
  position: relative;
  width: 1500px;
  height: 300px;
  bottom: 630px;
  right: 5px; 
}

#porda_img4_1702{
  position: relative;
    width: 1097px;
    height: 279px;
    bottom: 631px;
    right: 5px; 
}

#porda_img4_17071{
  position: relative;
    width: 1097px;
    height: 279px;
    bottom: 631px;
    right:250px;
}

#porda_img4_17072{
  position: relative;
  width: 330px;
  height: 279px;
  bottom: 910px;
  left: 922px; 
}

#porda_img4_1708{
    position: relative;
    width: 1500px;
    height: 300px;
    bottom: 930px;
    right: 5px;
}

#porda_img5{
  position: relative;
  width: 809px;
  height: 97px;
  bottom: 630px;
  right: 5px;
}

#porda_img501{
  position: relative;
  width: 594px;
  bottom: 630px;
  height: 97px;
  right: 112px;
}

#porda_img5061{
  position: relative;
  width: 450px;
  bottom: 630px;
  height: 97px;
  right: 92px;
}

#porda_img5062{
  position: relative;
  width: 180px;
  height: 97px;
  bottom: 630px;
  left: 82px;
}

#porda_img5_15{
  position: relative;
  width: 594px;
  bottom: 630px;
  height: 150px;
  right: 112px;
}
#porda_img5_17{
  position: relative;
  width: 1500px;
  height: 300px;
  bottom: 630px;
  right: 5px;
}
#porda_img5_1701{
  position: relative;
    width: 1097px;
    height: 279px;
    bottom: 631px;
    right: 5px; 
}
#porda_img5_17061{
  position: relative;
    width: 1097px;
    height: 279px;
    bottom: 631px;
    right:250px;
}

#porda_img5_17062{
  position: relative;
  width: 330px;
  height: 279px;
  bottom: 910px;
  left: 922px; 
}

#porda_img5_1707{
    position: relative;
    width: 1500px;
    height: 300px;
    bottom: 930px;
    right: 5px;
}

#porda_img6{
  position: relative; 
  left: 563px; 
  height: 486px; 
  width: 416px; 
  bottom: 1574px;

}
#porda_img7{
  position: relative;
  bottom: 2179px;
  left: 357px;
  height: 486px;
}
#porda_img8{
  position: relative;
  bottom: 1574px;
  left: 358px;
  height: 486px;
}
#porda_img9{
  position: relative;
  bottom: 2060px;
  left: 736px;
  height: 486px;
}
.side_porda{
  position: relative;
  width: 67px;
  height: 96px;;
}
#porda_img10{
  right: 1px;
  top: 4px;
  height: 102px;
}
#porda_img11{
  right: 71px;
  top: 105px;
  height: 102px;
}
#porda_img12{
  right: 143px;
  top: 206px;
  height: 102px;
}
#porda_img13{
  right: 214px;
  top: 301px;
  height: 102px;
}
#porda_img14{
  right: 286px;
  top: 391px;
  height: 93px;
}

#side_porda_main{
  position: relative;
  bottom: 2550px;
  left: 978px;
}

#head_div{
  background-image: linear-gradient(#a04207, #a4470d);
  position: relative;
  bottom: 524px;
  width: 1374PX;
  height: 86px;
  right: 128px;
}

#head_div_15{
  background-image: linear-gradient(#a04207, #a4470d);
  position: relative;
  bottom: 524px;
  width: 2023PX;
  height: 50px;
  right: 1100px;
}

#head_div_16{
  background-image: linear-gradient(#a04207, #a4470d);
  position: relative;
  bottom: 621px;
  width: 2023PX;
  height: 50px;
  right: 451px;
}
#spin_div{
  position: relative;
  right: 6px;
  bottom: 20px;
}

#spin_div_16{
  display: none;
}

#sm_spin_div{
  position: relative;
  right: 10px;
  bottom: 30px;
}

#sm_spin_div_15{
  display: none;
}

#side1{
  width: 34.9%;
  height: 486px;
  position: relative;
  left: 859px;
  bottom: 524px;
}

#side17{
  width: 34.9%;
  height: 553px;
  position: relative;
  left: 1174px;
  bottom: 1524px;
}
.odometer-value{
  font-size: 21px;
  font-weight: bold;
  position: relative;
  
}
.odometer_zoom{
  font-size: 40px;
  font-weight: bold;
  position: relative;
  padding: 6px;
}
#side_logo{
  position: relative;
  width: 50px;
  left: 16px;
  top: 18px;
}
#shimla1{
  font-weight: bold;
  font-size: 15px;
  position: relative;
  left: 86px;
  width: 60%;
  bottom: 23px;
}
#shimla2{
  color: #a7693d;
  position: relative;
  left: 100px;
  width: 60%;
  bottom: 44px;
}
#sub_side1{
  border: black 5px solid;
  background-color: #f0f7f7;
  position: relative;
  width: 282px;
  height: 88px;
  left: 85px;
  top: 13px;
}
#shimla_price_1{
  position: relative;
  width: 60%;
  left: 70px;
  bottom: 8px;
  color: blue;
  font-weight: bold;
  font-size: 41px;
}
#shimla_price_6{
  position: relative;
  width: 60%;
  left: 115px;
  color: blue;
  font-weight: bold;
  font-size: 30px;
  bottom: 32px;
}
#shimla_price_2{
  position: relative;
  width: 60%;
  left: 145px;
  bottom: 48px;
  color: blue;
  font-weight: bold;
  font-size: 27px;
}
.shimla_price_3{
  position: relative;
  width: 60%;
  left: 125px;
  bottom: 69px;
  color: #e93b55;
  font-weight: bold;
  font-size: 32px;
}
#shimla_price_4{
  position: relative;
  width: 60%;
  left: 114px;
  bottom: 80px;
  color: #b12448;
  font-weight: bold;
  font-size: 18px;
}
#shimla_price_5{
  position: relative;
  width: 60%;
  left: 107px;
  bottom: 95px;
  color: #b12448;
  font-weight: bold;
  font-size: 18px;
}
#shimla_price_7{
  position: relative;
  top: 100;
  bottom: 110px;
  left: 98px;
  color: blue;
  font-weight: bold;
  font-size: 16;
}

#shimla_price_8{
  position: relative;
  width: 60%;
  left: 136px;
  bottom: 128px;
  color: #b12448;
  font-weight: bold;
  font-size: 21px;
}

#sub_side2{
  position: relative;
  background-color: #f0f7f7;
  width: 81%;
  height: 300px;
  left: 68px;
  top: 40px;
  border: black solid 5px;
}
#gov{
  position: relative;
  bottom: 1168px;
}
#gov img{
  position: relative;
  width: 171px;
  top: 174px;
  height: 485px;
}

#rod1{
  position: relative;
  bottom: 1269px;
  left: 648px;
}

#rod102{
  position: relative;
  bottom: 1365px;
  left: 648px;
}

#rod103{
  position: relative;
  bottom: 1463px;
  left: 648px;
}

#rod104{
  position: relative;
  bottom: 1560px;
  left: 648px;
}

#rod105{
  position: relative;
  bottom: 1657px;
  left: 648px;
}

#rod106{
  position: relative;
  bottom: 1269px;
  left: 472px;
}

#rod107{
  position: relative;
  bottom: 1365px;
  left: 472px;
}

#rod108{
  position: relative;
  bottom: 1463px;
  left: 472px;
}

#rod109{
  position: relative;
  bottom: 1560px;
  left: 472px;
}
#rod110{
  position: relative;
  bottom: 1657px;
  left: 472px;
}
#rod15{
  position: relative;
  bottom: 1269px;
  left: 648px;
  display: none;
}

#rod1701 {
    position: relative;
    left: 760px;
    bottom: 1900px;
    width: 420px;
    height: 15px !important;
}

#rod1702 {
    position: relative;
    left: 760px;
    bottom: 1900px;
    width: 420px;
    height: 15px !important;
}

#rod1703 {
    position: relative;
    left: 760px;
    bottom: 1900px;
    width: 420px;
    height: 15px !important;
}

#rod1704 {
    position: relative;
    left: 760px;
    bottom: 1800px;
    width: 420px;
    height: 15px !important;
}

#rod1705 {
    position: relative;
    left: 760px;
    bottom: 1800px;
    width: 420px;
    height: 15px !important;
}

#rod1706 {
    position: relative;
    left: 470px;
    bottom: 1900px;
    width: 380px;
    height: 15px !important;
}

#rod1707 {
    position: relative;
    left: 470px;
    bottom: 1900px;
    width: 380px;
    height: 15px !important;
}

#rod1708 {
    position: relative;
    left: 470px;
    bottom: 1900px;
    width: 380px;
    height: 15px !important;
}

#rod1709 {
    position: relative;
    left: 470px;
    bottom: 1800px;
    width: 380px;
    height: 15px !important;
}

#rod1710 {
    position: relative;
    left: 470px;
    bottom: 1800px;
    width: 380px;
    height: 15px !important;
}

#section_1{
  display: none;
}
#section_2{
  display: none;
}
#section_3{
  display: none;
}
#section_4{
  display: none;
}
#section_5{
  position: relative;
  bottom: 1343px;
  left: 490px;
  display: none;
}
#section_6{
  /*display: none;*/
  position: relative;
}

#notes_text{
  position: absolute; 
  bottom: 60px; left: 0; 
  right: 0; 
  text-align: center; 
  padding: 0 60px; 
  font-size: 30px; 
  color: white; 
  text-shadow: 2px 2px 4px rgba(0,0,0,0.8); 
  z-index: 10;
}

#notes_text_other{
  position: absolute; 
  bottom: 70px; left: 0; 
  right: 0; 
  text-align: center; 
  padding: 0 60px; 
  font-size: 30px; 
  color: white; 
  text-shadow: 2px 2px 4px rgba(0,0,0,0.8); 
  z-index: 10;
}

#section_7{
  display: none;
}
#section_8{
  display: none;
}
#section_9{
  display: none;
}
#section_10{
  display: none;
}
#section_11{
  display: none;
}
#section_12{
  display: none;
}
#section_13{
  display: none;
}
#section_14{
  display: none;
}
#section_15{
  display: none;
}
#section_16{
  display: none;
}
#section_17{
  display: none;
}
#section_18{
  display: none;
}
#section_19{
  display: none;
}
#section_20{
  display: none;
}
#section_21{
  display: none;
}

#heading_text{
  position: relative;
  font-weight: bold;
  font-size: 40px;
  color: #f4fdff;
}

.odometer1 {
  text-align: center;
  display: inline-block;
  font-size: 21px;
  font-weight: bold;
}
.digit {
  
  display: inline-block;
  height: 1em;
  overflow: hidden;
}

.digit_17 {
  
  display: inline-block;
  height: 2em;
  overflow: hidden;
}

.digit:first-child {
  border-left: none;
}

.digit_17:first-child {
  border-left: none;
}
.digit-container {
  line-height:1em;
}

.digit-container_17 {
  line-height:2em;
}

.digit-container.digit-one {
  line-height: 1em;
  -webkit-animation: slide 10s infinite;
  animation: slide 10s infinite;
}

.digit-container_17.digit-one-17 {
  line-height: 2em;
  -webkit-animation: slide 10s infinite;
  animation: slide 10s infinite;
  font-size: 40px;
}

@-webkit-keyframes slide {
  0% {
    -webkit-transform: translateY(-100em);
  }
}

@keyframes slide {
  0% {
    transform: translateY(-100em);
  } 
}

#screenshot 
{
  width: 100%;
  height: 100%;
  position: relative;
  
}  
.dots {
  position: relative;
  width: 3px;
  height: 3px;
  z-index: 99999;
}

#dots_1 {
  bottom: 1320px;
  left: 898px;
}

#dots_2 {
  bottom: 1291px;
  left: 945px;
}
#dots_3 {
  bottom: 1258px;
  left: 884px;
}

#rod2{
  position: relative;
  bottom: 2071px;
  left: 170px;

}

#rod3{
  position: relative;
  bottom: 1994px;
  left: 170px;

}

#rod4{
  position: relative;
  bottom: 1917px;
  left: 170px;

}

#rod5{
  position: relative;
  bottom: 1846px;
  left: 170px;

}

#rod6{
  position: relative;
  bottom: 1775px;
  left: 170px;

}

#dots_4 {
  position: relative;
  bottom: 2146px;
  right: 568px;
}

#dots_5 {
  position: relative;
  bottom: 2116px;
  right: 627px;
}

#dots_6 {
  position: relative;
  bottom: 2085px;
  right: 583px;
}

#dots_7 {
  position: relative;
  bottom: 2146px;
  right: 421px;
}

#dots_8 {
  position: relative;
  bottom: 2084px;
  right: 426px;
}

#dots_9 {
  position: relative;
  bottom: 2023px;
  right: 657px;
}

#dots_10 {
  bottom: 2054px;
  right: 612px;
}

#dots_11 {
  position: relative;
  bottom: 1990px;
  right: 620px;
}

#dots_12 {
  position: relative;
    bottom: 2054px;
    right: 455px;
}

#dots_13 {
  position: relative;
    bottom: 1990px;
    right: 463px;
}

#dots_14 {
  position: relative;
    bottom: 1929px;
    right: 693px;
}

#dots_15 {
  position: relative;
    bottom: 1957px;
    right: 650px;
}

#dots_16 {
  position: relative;
    bottom: 1898px;
    right: 658px;
}

#dots_17 {
  position: relative;
    bottom: 1957px;
    right: 492px;
}

#dots_18 {
  position: relative;
    bottom: 1898px;
    right: 499px;
}

#dots_19 {
  position: relative;
  bottom: 1835px;
  right: 730px;
}

#dots_20 {
  position: relative;
  bottom: 1864px;
  right: 688px;
}

#dots_21 {
  position: relative;
  bottom: 1805px;
  right: 694px;
}

#dots_22 {
  position: relative;
  bottom: 1864px;
  right: 528px;
}

#dots_23 {
  position: relative;
  bottom: 1806px;
  right: 536px;
}

#dots_24 {
  position: relative;
  bottom: 1743px;
  right: 766px;
}

#dots_25 {
  position: relative;
  bottom: 1769px;
  right: 724px;
}

#dots_26 {
  position: relative;
  bottom: 1712px;
  right: 731px;
}

#dots_27 {
  position: relative;
  bottom: 1769px;
  right: 566px;
}

#dots_28 {
  position: relative;
  bottom: 1712px;
  right: 574px;
}

/*----------------------------------------------------sfgbhsdfgbsd--------------------------------------------*/
#copy_dots_4 {
  bottom: 2142px;
  right: 568px;
}

#copy_dots_5 {
  bottom: 2112px;
  right: 627px;
}

#copy_dots_6 {
  bottom: 2081px;
  right: 583px;
}

#copy_dots_7 {
  bottom: 2141px;
  right: 421px;
}

#copy_dots_8 {
  bottom: 2080px;
  right: 426px;
}

#copy_dots_9 {
  bottom: 2019px;
  right: 657px;
}

#copy_dots_10 {
  bottom: 2050px;
  right: 612px;
}

#copy_dots_11 {
  bottom: 1986px;
  right: 620px;
}

#copy_dots_12 {
    bottom: 2050px;
    right: 455px;
}

#copy_dots_13 {
    bottom: 1986px;
    right: 463px;
}

#copy_dots_14 {
    bottom: 1926px;
    right: 693px;
}

#copy_dots_15 {
    bottom: 1953px;
    right: 650px;
}

#copy_dots_16 {
    bottom: 1894px;
    right: 658px;
}

#copy_dots_17 {
    bottom: 1953px;
    right: 492px;
}

#copy_dots_18 {
    bottom: 1894px;
    right: 499px;
}

#copy_dots_19 {
  bottom: 1831px;
  right: 730px;
}

#copy_dots_20 {
  bottom: 1860px;
  right: 688px;
}

#copy_dots_21 {
  bottom: 1801px;
  right: 694px;
}

#copy_dots_22 {
  bottom: 1860px;
  right: 528px;
}

#copy_dots_23 {
  bottom: 1802px;
  right: 536px;
}

#copy_dots_24 {
  bottom: 1739px;
  right: 766px;
}

#copy_dots_25 {
  bottom: 1765px;
  right: 724px;
}

#copy_dots_26 {
  bottom: 1708px;
  right: 731px;
}

#copy_dots_27 {
  bottom: 1765px;
  right: 566px;
}

#copy_dots_28 {
  bottom: 1708px;
  right: 574px;
}

#copy_dots_29 {
  bottom: 2141px;
  right: 427px;
}

#copy_dots_30 {
  bottom: 2078px;
  right: 435px;
}

#copy_dots_31 {
  bottom: 2051px;
  right: 442px;
}

#copy_dots_32 {
  bottom: 1986px;
  right: 449px;
}

#copy_dots_33 {
  bottom: 1954px;
  right: 457px;
}

#copy_dots_34 {
  bottom: 1892px;
  right: 464px;
}

#copy_dots_35 {
  bottom: 1862px;
  right: 472px;
}

#copy_dots_36 {
  bottom: 1800px;
  right: 479px;
}

#copy_dots_37 {
  bottom: 1767px;
  right: 486px;
}

#copy_dots_38 {
  bottom: 1706px;
  right: 494px;
}

#copy_dots_39 {
  bottom: 2141px;
  right: 175px;
}

#copy_dots_40 {
  bottom: 2079px;
  right: 181px;
}

#copy_dots_41 {
  bottom: 2109px;
  right: 136px;
}

#copy_dots_42 {
  bottom: 2049px;
  right: 197px;
}

#copy_dots_43 {
  bottom: 1987px;
  right: 203px;
}

#copy_dots_44 {
  bottom: 1955px;
  right: 210px;
}

#copy_dots_45 {
  bottom: 1893px;
  right: 216px;
}

#copy_dots_46 {
  bottom: 1860px;
  right: 225px;
}

#copy_dots_47 {
  bottom: 1800px;
  right: 233px;
}

#copy_dots_48 {
  bottom: 1767px;
  right: 241px;}

#copy_dots_49 {
  bottom: 1707px;
  right: 248px;
}

#copy_dots_50 {
  bottom: 2021px;
  right: 201px;
}

#copy_dots_51 {
  bottom: 1923px;
  right: 210px;
}

#copy_dots_52 {
  bottom: 1829px;
  right: 216px;
}

#copy_dots_53 {
  bottom: 1735px;
  right: 224px;
}

/*--------------------------------------------------bfgbjdbgjk------------------------------------------------*/

#rod_5thPrice{    
  position: relative;
  bottom: 588px;
}

#dot_5th{
  position: relative;

}

#dot_first_price{
  position: relative;
  top: 24px;
}

.clock-card {
    display: inline-block;
    background: #000;
    border-radius: 12px;
    padding: 12px 18px;
    box-shadow: 0 0 15px white;
    display: none !important;
  }

  .clock {
    color: red;
    font-size: 30px;
    letter-spacing: 4px;
    text-align: center;
  }

  .ampm {
    font-size: 18px;
    margin-left: 8px;
    vertical-align: super;
  }

  #head_div {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    padding: 0px 0px;
  }

  /* LEFT */
  #head_clock {
    position: absolute;
    left: 20px;
  }

  /* CENTER */
  #head_title {
    justify-self: center;
    text-align: center;
  }

  /* RIGHT */
  #head_live {
    position: absolute;
    right: 20px;
    background: #ffffff;
    border-radius: 5px;
    padding: 5px 15px;
    color: #b10000;
    display: flex;
    align-items: center;
    gap: 6px;
  }

		</style>
	</head>
<body>  

	 <input type="hidden" name="base_url" id="base_url" value="<?=base_url()?>">
    <input type="hidden" name="current_url" id="current_url" value="<?=current_url();?>">