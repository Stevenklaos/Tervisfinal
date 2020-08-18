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
            <a href="./majaplaan.php"><input type="button" value="0 KORRUS"></a>
            <br><br>
            <a href="./korruskelder.php"><input type="button" class="current_floor" value="Keldrikorrus"></a>
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
                <img src="./img/k_korrus.jpg" alt="" usemap="#Map" />
                <map name="Map" id="Map">
                    <area alt="-10" title="" href="#" shape="poly" coords="561,42,892,42,892,314,825,309,827,166,563,159" />
                    <area alt="-13" title="" href="#" shape="poly" coords="979,129,1182,129,1180,294,983,303" />
                    <area alt="-17" title="" href="#" shape="poly" coords="1195,134,1345,131,1342,240,1197,245" />
                    <area alt="-18" title="" href="#" shape="poly" coords="1354,125,1498,127,1501,290,1354,296" />
                    <area alt="-19" title="" href="#" shape="poly" coords="1515,124,1573,127,1574,298,1517,308" />
                    <area alt="-20" title="" href="#" shape="poly" coords="1584,124,1682,124,1669,371,1588,377" />
                    <area alt="-28" title="" href="#" shape="poly" coords="1038,393,1183,394,1182,640,1039,632" />
                </map>
                <div class="hover_bkgr_fricc">
                    <span class="helper"></span>
                    <div>
                        <div class="popupCloseButton">&times;</div>
                        <p class="roomInfo">
                            <?php
                                while($rows = mysqli_fetch_assoc($result_10))
                                {
                                    echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                                }
                                while($rows = mysqli_fetch_assoc($result_13))
                                {
                                    echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                                }
                                while($rows = mysqli_fetch_assoc($result_17))
                                {
                                    echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                                }
                                while($rows = mysqli_fetch_assoc($result_18))
                                {
                                    echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                                }
                                while($rows = mysqli_fetch_assoc($result_19))
                                {
                                    echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                                }
                                while($rows = mysqli_fetch_assoc($result_20))
                                {
                                    echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                                }
                                while($rows = mysqli_fetch_assoc($result_28))
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
    