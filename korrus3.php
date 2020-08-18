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
            <a href="./korrus3.php"><input type="button" class="current_floor" value="3. KORRUS"></a>
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
                <img src="./img/3_korrus.jpg" alt="" usemap="#Map" />
                <map name="Map" id="Map">
                    <area alt="302" title="" href="#" shape="poly" coords="1254,71,1336,67,1318,212,1255,210" />
                    <area alt="303" title="" href="#" shape="poly" coords="1325,175,1395,175,1401,237,1325,239" />
                    <area alt="304" title="" href="#" shape="poly" coords="1346,81,1452,81,1450,162,1347,165" />
                    <area alt="305" title="" href="#" shape="poly" coords="1465,80,1547,82,1547,211,1465,209" />
                    <area alt="306" title="" href="#" shape="poly" coords="1560,80,1631,79,1636,169,1561,166" />
                    <area alt="307" title="" href="#" shape="poly" coords="1595,176,1666,179,1667,235,1588,239" />
                    <area alt="308" title="" href="#" shape="poly" coords="1649,80,1888,78,1756,216,1649,164" />
                    <area alt="311" title="" href="#" shape="poly" coords="1414,393,1553,389,1431,500,1300,487" />
                    <area alt="312" title="" href="#" shape="poly" coords="1293,494,1421,506,1330,580,1203,569" />
                    <area alt="313" title="" href="#" shape="poly" coords="1192,578,1323,586,1121,758,1008,631,1129,634" />
                    <area alt="314" title="" href="#" shape="poly" coords="802,392,953,390,1112,623,994,616" />
                    <area alt="322" title="" href="#" shape="poly" coords="1075,80,1157,82,1160,213,1083,167" />
                    <area alt="323" title="" href="#" shape="poly" coords="1021,172,1093,179,1094,240,1018,237" />
                    <area alt="324" title="" href="#" shape="poly" coords="985,82,1064,79,1062,165,988,166" />
                    <area alt="325" title="" href="#" shape="poly" coords="898,79,973,79,974,211,899,210" />
                    <area alt="326" title="" href="#" shape="poly" coords="795,82,883,83,889,170,794,164" />
                    <area alt="327" title="" href="#" shape="poly" coords="777,176,848,180,852,234,777,237" />
                    <area alt="328" title="" href="#" shape="poly" coords="706,76,780,83,783,168,708,169" />
                    <area alt="329" title="" href="#" shape="poly" coords="548,79,693,81,694,213,647,216,541,93" />
                </map>
                <div class="hover_bkgr_fricc">
                    <span class="helper"></span>
                    <div>
                        <div class="popupCloseButton">&times;</div>
                        <p class="roomInfo">
                            <?php
                            while($rows = mysqli_fetch_assoc($result302))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result303))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result304))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result305))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result306))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result307))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result308))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result311))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result312))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result313))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result314))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result322))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result323))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result324))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result325))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result326))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }while($rows = mysqli_fetch_assoc($result327))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result328))
                            {
                                echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                            }
                            while($rows = mysqli_fetch_assoc($result329))
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
    