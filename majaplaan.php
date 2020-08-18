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
            <a href="./korrus4.php"><input type="button" value="4. KORRUS"></a>
            <br><br>
            <a href="./korrus3.php"><input type="button" value="3. KORRUS"></a>
            <br><br>
            <a href="./korrus2.php"><input type="button" value="2. KORRUS"></a>
            <br><br>
            <a href="./korrus1.php"><input type="button" value="1. KORRUS"></a>
            <br><br>
            <a href="./majaplaan.php"><input type="button" class="current_floor" value="0 KORRUS"></a>
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
            <body class="body-plan">
                <img src="./img/0_korrus.jpg" alt="0. Korrus" usemap="#Map" />
                <map name="Map" id="Map">
                    <area alt="003" title="" href="#" shape="poly" coords="1170,170,1373,173,1371,341,1171,334" />
                    <area alt="004" title="" href="#" shape="poly" coords="1390,169,1535,169,1529,340,1386,340" />
                    <area alt="005" title="" href="#" shape="poly" coords="1544,168,1688,170,1689,337,1542,340" />
                    <area alt="006" title="" href="#" shape="poly" coords="1702,171,1867,167,1860,342,1698,340" />
                    <area alt="007" title="" href="#" shape="poly" coords="1251,432,1634,425,1637,584,1498,711,1235,728" />
                    <area alt="011" title="" href="#" shape="poly" coords="700,826,1365,829,1084,1039,874,1039" />
                    <area alt="014" title="" href="#" shape="poly" coords="556,553,663,554,665,678,557,671" />
                    <area alt="015" title="" href="#" shape="poly" coords="489,420,664,419,665,538,485,542" />
                    <area alt="016" title="" href="#" shape="poly" coords="495,291,665,288,666,406,492,407" />
                    <area alt="017" title="" href="#" shape="poly" coords="500,160,666,160,666,280,500,280" />
                    <area alt="020" title="" href="#" shape="poly" coords="760,142,1010,142,1010,410,760,410" />
                </map>
                <div class="hover_bkgr_fricc">
                    <span class="helper"></span>
                    <div>
                        <div class="popupCloseButton" style="color:black;">&times;</div>
                        <p class="roomInfo" style="color:black;">
                            <?php
                            while($rows = mysqli_fetch_assoc($result003))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result004))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result005))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result006))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result007))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result011))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result014))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result015))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result016))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result017))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result020))
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
    