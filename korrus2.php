<?php
include_once('variables.php');
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="main.js"></script>
        <link rel="stylesheet" type="text/css" href="style2.css">
        <script>
        //enter refresh time in "minutes:seconds" Minutes should range from 0 to inifinity. Seconds should range from 0 to 59
        let limit="00:59"
        if (document.images){
            let parselimit=limit.split(":")
            parselimit=parselimit[0]*60+parselimit[1]*1
        }
        function beginrefresh(){
            if (!document.images)
                return
            if (parselimit==1)
                window.location.href="?"
            else{
                parselimit-=1
                curmin=Math.floor(parselimit/60)
                cursec=parselimit%60
            if (curmin!=0)
                curtime=curmin+" minutes and "+cursec+" seconds left until page refresh!"
            else
                curtime=cursec+" seconds left until page refresh!"
                window.status=curtime
                setTimeout("beginrefresh()",1000)
            }
        }
        //window.onload=beginrefresh
        </script>
    </head>
    <body>
        <div class="building-floors">
            <a href="./korrus4.php"><input type="button" value="4. KORRUS"></a>
            <br><br>
            <a href="./korrus3.php"><input type="button" value="3. KORRUS"></a>
            <br><br>
            <a href="./korrus2.php"><input type="button" class="current_floor" value="2. KORRUS"></a>
            <br><br>
            <a href="./korrus1.php"><input type="button"  value="1. KORRUS"></a>
            <br><br>
            <a href="./majaplaan.php"><input type="button" value="0 KORRUS"></a>
            <br><br>
            <a href="./korruskelder.php"><input type="button" value="Keldrikorrus"></a>
            <br><br>
            <input type="button" value="Töötajad" class="trigger_popup_fricc">
        </div>
        <div class="back-box">
            <a href="index.html"><input class="input-back" type="button" value="AVALEHT"></a>
        </div>
        <script language="javascript">
            beginrefresh();
        </script>
        <html>
            <body>
                <img src="./img/2_korrus.jpg" alt="" usemap="#Map" />
                <map name="Map" id="Map">
                    <area alt="203" title="" href="#" shape="poly" coords="1389,187,1663,195,1473,355,1391,358" />
                    <area alt="208" title="" href="#" shape="poly" coords="1136,454,1356,456,1196,592,1100,479" />
                    <area alt="209" title="" href="#" shape="poly" coords="1089,495,1189,604,1107,676,1010,561" />
                    <area alt="210" title="" href="#" shape="poly" coords="993,572,1093,680,989,771,891,657" />
                    <area alt="218" title="" href="#" shape="poly" coords="904,56,1019,57,1021,300,901,235" />
                    <area alt="220" title="" href="#" shape="poly" coords="775,56,889,55,887,239,777,236" />
                    <area alt="222" title="" href="#" shape="poly" coords="640,56,760,53,751,301,641,297" />
                    <area alt="223" title="" href="#" shape="poly" coords="506,52,626,51,627,300,580,299,500,210" />
                </map>
                <div class="hover_bkgr_fricc">
                    <span class="helper"></span>
                    <div>
                        <div class="popupCloseButton">&times;</div>
                        <p class="roomInfo">
                            <?php
                            while($rows = mysqli_fetch_assoc($result203))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result208))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result209))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result210))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result218))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result220))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result222))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result223))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </body>
        </html>
    </body>
</html>
    