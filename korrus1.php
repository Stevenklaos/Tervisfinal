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
            //teisalda paren klikk
            // document.addEventListener('contextmenu', event => event.preventDefault());
            //enter refresh time in "minutes:seconds" Minutes should range from 0 to inifinity. Seconds should range from 0 to 59
            var limit="00:59"
            
            if (document.images){
            var parselimit=limit.split(":")
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
            beginrefresh();
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
            <a href="./korrus1.php"><input type="button" class="current_floor" value="1. KORRUS"></a>
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
    <html>
    <body>
        <img src="./img/1_korrus.jpg" alt="" usemap="#Map" />

        <map name="Map" id="Map">
            <area alt="102/1" id="101" title="" href="#" shape="poly" coords="1150,50,1200,50,1200,120,1150,120" />
            <area alt="102/2" id="102" title="" href="#" shape="poly" coords="1200,50,1250,50,1250,120,1200,120" />
            <area alt="102/3" id="103" title="" href="#" shape="poly" coords="1250,50,1300,50,1300,120,1250,120" />
            <area alt="102/4" id="100 title="" href="#" shape="poly" coords="1300,50,1350,50,1350,120,1300,120" />
            <area alt="104" id="104" title="" href="#" shape="poly" coords="1367,50,1864,50,1512,450,1371,444" />
            <area alt="105" id="105" title="" href="#" shape="poly" coords="1206,362,1361,363,1357,444,1208,444" />
            <area alt="109" id="109" title="" href="#" shape="poly" coords="1037,609,1335,606,1073,831,1040,831" />
            <area alt="110" id="110" title="" href="#" shape="poly" coords="680,600,1025,600,1026,824,860,825" />
            <area alt="117" id="117" title="" href="#" shape="poly" coords="451,323,631,325,634,449,542,452,450,349" />
            <area alt="118" id="118" title="" href="#" shape="poly" coords="457,187,632,191,639,308,452,309" />
            <area alt="119" id="119" title="" href="#" shape="poly" coords="458,48,634,47,636,172,458,175" />
        </map>
        <div class="hover_bkgr_fricc">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">&times;</div>
                <p class="roomInfo">
                    <?php
                        while($rows = mysqli_fetch_assoc($result102))
                        {
                             echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                        }
                        while($rows = mysqli_fetch_assoc($result104))
                        {
                            echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                        }
                        while($rows = mysqli_fetch_assoc($result105))
                        {
                            echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                        }
                        while($rows = mysqli_fetch_assoc($result109))
                        {
                            echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                        }
                        while($rows = mysqli_fetch_assoc($result110))
                        {
                            echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                        }
                        while($rows = mysqli_fetch_assoc($result117))
                        {
                            echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                        }
                        while($rows = mysqli_fetch_assoc($result118))
                        {
                            echo 'Ruum '.$rows['ruum_nr'].' '.$rows['isikud_eesnimi'].' '.$rows['isikud_perenimi'].', Tel.nr '.$rows['telefoninr_id'].'<br>';
                        }
                        while($rows = mysqli_fetch_assoc($result119))
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