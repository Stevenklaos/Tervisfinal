<?php
include_once('connection.php');
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
            <a href="./korrus4.php"><input type="button" class="current_floor" value="4. KORRUS"></a>
            <br><br>
            <a href="./korrus3.php"><input type="button" value="3. KORRUS"></a>
            <br><br>
            <a href="./korrus2.php"><input type="button" value="2. KORRUS"></a>
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
                <img src="./img/4_korrus.jpg" alt="" usemap="#Map" />
                <map name="Map" id="Map">
                    <area alt="403" title="" href="#" shape="poly" coords="1295,84,1419,84,1433,199,1292,202" />
                    <area alt="404" title="" href="#" shape="poly" coords="1504,87,1860,87,1794,213,1509,208" />
                    <area alt="405" title="" href="#" shape="poly" coords="1506,309,1698,308,1530,447,1351,434" />
                    <area alt="406" title="" href="#" shape="poly" coords="1343,443,1513,459,1391,559,1226,544" />
                    <area alt="407" title="" href="#" shape="poly" coords="1219,550,1380,570,1116,808,957,639,1129,626" />
                    <area alt="408" title="" href="#" shape="poly" coords="856,506,1023,511,1117,619,939,606" />
                    <area alt="409" title="" href="#" shape="poly" coords="681,311,861,307,1014,496,841,493" />
                    <area alt="411" title="" href="#" shape="poly" coords="527,87,837,94,829,208,598,210" />
                    <area alt="415" title="" href="#" shape="poly" coords="973,88,1163,87,1131,241,992,238" />
                </map>
                <div class="hover_bkgr_fricc">
                    <span class="helper"></span>
                    <div>
                        <div class="popupCloseButton">&times;</div>
                        <p class="roomInfo">
                            <?php
                            while($rows = mysqli_fetch_assoc($result403))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result404))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result405))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result406))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result407))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result408))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result409))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result411))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result415))
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
    