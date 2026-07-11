<!DOCTYPE html>
<html>  
<head>
  <meta charset="utf-8">
  <title>Lottery Price</title>
  <meta name="generator" content="BCL easyConverter SDK 5.0.210">
  <style type="text/css">
  
    body {
        margin-top: 0px;
        margin-left: 0px;
    }

    #left_logo{
      width: 15%;
    }
    #header_text{
      text-align: center;
      font-size: 30px;
      font-family: serif;
    }
    #div_last{
        border: solid;
    }

    #div1{
        text-align: center;
        font-size: 20px;
        font-family: serif;
        font-weight: bold;
    }

    #div2{
        text-align: center;
        font-family: serif;
        font-size: 45px; 
        font-weight: bold; 
        color: #cc0000;
    }

    #div3{
        text-align: center;
        font-size: 13px;
       font-family: serif;
       font-weight: bold;
    }

    #div4{
        text-align: center;
        font-size: 13px;
       font-family: serif;
    }

    #div5{
        text-align: center;
        font-size: 35px;
        font-family: serif;
        font-weight: bold;
        color: #0000FF;
    }

    #div6{
        text-align: center;
        font-size: 20px;
        font-family: serif;
        font-weight: bold;
        color: #228B22;
    }

    #div7{
        text-align: center;
        font-size: 18px;
        font-family: serif;
        font-weight: bold;
    }

    #div8{
        text-align: center;
        font-size: 13px;
        font-family: serif;
        font-weight: bold;
    }

    #div9{
        text-align: center;
        font-size: 15px;
        font-family: serif;
        font-weight: bold; 
    }
    
    .column {
      float: left;
    }
    .left, .right {
      width: 25%;
    }
    
    .middle {
      width: 50%;
    }
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
  </style>
</head>
<body>
    <table border="0" width="100%" height="100%" style="padding-bottom: 15px;">  
        <tr>  
            <td><img src="<?=base_url('webroot/user/images/logo_lottery_1.png')?>" id="left_logo"> </td>
            <td align="center">
                <table>
                    <tr>
                        <td>
                            <span id="header_text" style="font-weight: bold;">Altaf Lottery</span>
                        </td>
                        

                    </tr>

                    <tr>
                        <td>
                            <span style="font-size: 22px; font-weight: bold;">RESULT <?=$result_pdf->time_t." ".  $result_pdf->date_1 ?></span>
                        </td>
                    </tr>

                </table>
            </td>  
            <td><img src="<?=base_url('webroot/user/images/logo_lottery_1.png')?>" id="left_logo"></td>             
        </tr>   
    </table> 

    <div id="div_last" align="center">
        <div class="row" style="margin-top: 15px; margin-left: 20px; margin-right: 20px;">
          <div class="column left" style = "text-align: left; font-size: 15px; font-weight: bold"><?=$result_pdf->time_t?></div>
          <div class="column middle" style = "text-align: center;"><span id="div1">Altaf Lottery</span></div>
          <div class="column right" style = "text-align: right; font-size: 15px; font-weight: bold"><?=$result_pdf->time_t?></div>
        </div>
        <div align="center"><span id="div2" >ROYAL TIGER</span></div>
        <div align="center" style="padding-top: - 10px; padding-bottom: 10px"><span id="div3"><?=$result_pdf->title?></span></div>
        <div align="center"><span id="div4"><?=$result_pdf->drow_number?> Draw held on  <?=$result_pdf->date_1 ?>   Price ₹6/-</span></div>
        <div align="center" style="padding-top: 10px; padding-bottom: 10px;"><span id="div5">1st Prize 1 Crore/- <?=$result_pdf->first_price?></span></div>    
        <div align="center"><span id="div1">Cons.Prize   ₹   10000/-&ensp;
            <?php
                $first_price1=$result_pdf->first_price;
                
                $slug1=trim($first_price1);
                $slug1=str_replace(" ",'',$slug1);
                $slug1=preg_replace('/[^A-Za-z0-9\-]/', '', $slug1);

                echo $first_price2=substr($slug1, -5);

            ?> (REAMINING ALL SERIALS)</span></div>
        <div align="center" style="padding-top:  10px; padding-bottom:  10px;"><span id="div6">2nd Prize ₹7000/-</span></div>
        <?php 
            $secondPrice = $result_pdf->sce_price;
            $slug2=trim($secondPrice);
            $slug2=str_replace(" ",'',$slug2);
            $slug2=preg_replace('/[^A-Za-z0-9\-]/', '', $slug2);
            $k=0;
            $second_price_1="";
            for($i=0;$i<10;$i++){ 
                for($j=0;$j<5;$j++){
                    $second_price_1=$second_price_1.$slug2[$k];
                    $k++;
                }
                $second_price_1=$second_price_1. "&nbsp;&nbsp;&nbsp;";
            }
        ?>
        
        <div align="center"><span id="div9"><?=$second_price_1?></span></div>
        <div align="center" style="padding-top:  10px; padding-bottom:   10px;"><span id="div6">3rd Prize ₹2500/-</span></div>
        <?php 
            $thirdPrice = $result_pdf->third_price;
            $slug3=trim($thirdPrice);
            $slug3=str_replace(" ",'',$slug3);
            $slug3=preg_replace('/[^A-Za-z0-9\-]/', '', $slug3);
            $k=0;
            $third_price_1="";
            for($i=0;$i<10;$i++){ 
                for($j=0;$j<4;$j++){
                    $third_price_1=$third_price_1.$slug3[$k];
                    $k++;
                }
                $third_price_1=$third_price_1. "&nbsp;&nbsp;&nbsp;";
            }
        ?>
        <div align="center"><span id="div9"><?=$third_price_1?></span></div>
        <div align="center" style="padding-top:   10px; padding-bottom:   10px;"><span id="div6">4th Prize ₹1500/-</span></div>
        <?php 
            $fourthPrice = $result_pdf->for_price;
            $slug4=trim($fourthPrice);
            $slug4=str_replace(" ",'',$slug4);
            $slug4=preg_replace('/[^A-Za-z0-9\-]/', '', $slug4);
            $k=0;
            $fourth_price_1="";
            for($i=0;$i<10;$i++){ 
                for($j=0;$j<4;$j++){
                    $fourth_price_1=$fourth_price_1.$slug4[$k];
                    $k++;
                }
                $fourth_price_1=$fourth_price_1. "&nbsp;&nbsp;&nbsp;";
            }
        ?>
        <div align="center"><span id="div9"><?=$fourth_price_1?></span></div>

        <div align="center" style="padding-top:   10px; padding-bottom:   10px;"><span id="div6">5th Prize ₹800</span></div>
        <?php
            $fifth_price=$result_pdf->five_price;
            $slug1=trim($fifth_price);
            $slug1=str_replace(" ",'',$slug1);
            $slug1=preg_replace('/[^A-Za-z0-9\-]/', '', $slug1);
            $fifth_price1=str_split($slug1);
            $k=0;
            $fifth_price_1="";
            for($i=0;$i<10;$i++){

                for($j=0;$j<4;$j++){
                    $fifth_price_1=$fifth_price_1."".$fifth_price1[$k];
                    $k++;
                }
                $fifth_price_1=$fifth_price_1. "&nbsp;&nbsp;&nbsp;";
                
            }
            $fifth_price_2="";
            for($i=0;$i<10;$i++){

                for($j=0;$j<4;$j++){
                    $fifth_price_2=$fifth_price_2.$fifth_price1[$k];
                    $k++;
                }
                $fifth_price_2=$fifth_price_2. "&nbsp;&nbsp;&nbsp;";
                
            }
            $fifth_price_3="";
            for($i=0;$i<10;$i++){

                for($j=0;$j<4;$j++){
                    $fifth_price_3=$fifth_price_3.$fifth_price1[$k];
                    $k++;
                }
                $fifth_price_3=$fifth_price_3. "&nbsp;&nbsp;&nbsp;";
                
            }

            $fifth_price_4="";
            for($i=0;$i<10;$i++){

                for($j=0;$j<4;$j++){
                    $fifth_price_4=$fifth_price_4.$fifth_price1[$k];
                    $k++;
                }
                $fifth_price_4=$fifth_price_4. "&nbsp;&nbsp;&nbsp;";
                
            }

            $fifth_price_5="";
            for($i=0;$i<10;$i++){

                for($j=0;$j<4;$j++){
                    $fifth_price_5=$fifth_price_5.$fifth_price1[$k];
                    $k++;
                }
                $fifth_price_5=$fifth_price_5. "&nbsp;&nbsp;&nbsp;";
                
            }
            $fifth_price_6="";
            for($i=0;$i<10;$i++){

                for($j=0;$j<4;$j++){
                    $fifth_price_6=$fifth_price_6.$fifth_price1[$k];
                    $k++;
                }
                $fifth_price_6=$fifth_price_6. "&nbsp;&nbsp;&nbsp;";
                
            }

            $fifth_price_7="";
            for($i=0;$i<10;$i++){

                for($j=0;$j<4;$j++){
                    $fifth_price_7=$fifth_price_7.$fifth_price1[$k];
                    $k++;
                }
                $fifth_price_7=$fifth_price_7. "&nbsp;&nbsp;&nbsp;";
                
            }

            $fifth_price_8="";
            for($i=0;$i<10;$i++){

                for($j=0;$j<4;$j++){
                    $fifth_price_8=$fifth_price_8.$fifth_price1[$k];
                    $k++;
                }
                $fifth_price_8=$fifth_price_8. "&nbsp;&nbsp;&nbsp;";
                
            }

            $fifth_price_9="";
            for($i=0;$i<10;$i++){

                for($j=0;$j<4;$j++){
                    $fifth_price_9=$fifth_price_9.$fifth_price1[$k];
                    $k++;
                }
                $fifth_price_9=$fifth_price_9. "&nbsp;&nbsp;&nbsp;";
                
            }

            $fifth_price_10="";
            for($i=0;$i<10;$i++){

                for($j=0;$j<4;$j++){
                    $fifth_price_10=$fifth_price_10.$fifth_price1[$k];
                    $k++;
                }
                $fifth_price_10=$fifth_price_10. "&nbsp;&nbsp;&nbsp;";
                
            }

        ?>

        <div align="center" style="padding-bottom: 5px"><span id="div9"><?=$fifth_price_1?></span></div>
        <div align="center" style="padding-bottom: 5px"><span id="div9"><?=$fifth_price_2?></span></div>
        <div align="center" style="padding-bottom: 5px"><span id="div9"><?=$fifth_price_3?></span></div>
        <div align="center" style="padding-bottom: 5px"><span id="div9"><?=$fifth_price_4?></span></div>
        <div align="center" style="padding-bottom: 5px"><span id="div9"><?=$fifth_price_5?></span></div>
        <div align="center" style="padding-bottom: 5px"><span id="div9"><?=$fifth_price_6?></span></div>
        <div align="center" style="padding-bottom: 5px"><span id="div9"><?=$fifth_price_7?></span></div>
        <div align="center" style="padding-bottom: 5px"><span id="div9"><?=$fifth_price_8?></span></div>
        <div align="center" style="padding-bottom: 5px"><span id="div9"><?=$fifth_price_9?></span></div>
        <div align="center" style="padding-bottom: 15px" ><span id="div9"><?=$fifth_price_10?></span></div>

    </div>

    <div align="center">
        <div align="center" style="padding-top: 15px; padding-bottom: 8px;"><span id="div7">ISSUED BY:THE DIRECTOR Altaf Lottery</span></div>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <div align="center" style="padding-top: 8px; padding-bottom: 10px;"><span id="div8"> <?=$result_pdf->time_t." Result ".  $result_pdf->date_1 ?></span></div>
    </div>
</body>
</html>