<?php
//connection to the database
$mysqli = mysqli_connect('localhost', 'root', '', 'majajuht') or die('could not connect to database');
if (!$mysqli) {
    die('Could not connect: ' . mysqli_error($mysqli));
}

mysqli_select_db($mysqli,"majajuht");

$sql="select * , ruum.ruum_nr from isikud inner join ruum on isikud.ruum_id=ruum.ruum_id";
$result = mysqli_query($mysqli,$sql);


//KORRUS 0

//ruum 003 töötajad
$query003 = "$sql where ruum.ruum_nr=003;";
$result003 = mysqli_query($mysqli, $query003);

//ruum 004 töötajad
$query004 = "$sql where ruum.ruum_nr=004;";
$result004 = mysqli_query($mysqli, $query004);

//ruum 005 töötajad
$query005 = "$sql where ruum.ruum_nr=005;";
$result005 = mysqli_query($mysqli, $query005);

//ruum 006 töötajad
$query006 = "$sql where ruum.ruum_nr=006;";
$result006 = mysqli_query($mysqli, $query006);

//ruum 007 töötajad
$query007 = "$sql where ruum.ruum_nr=007;";
$result007 = mysqli_query($mysqli, $query007);

//ruum 011 töötajad
$query011 = "$sql where ruum.ruum_nr=011;";
$result011 = mysqli_query($mysqli, $query011);

//ruum 014 töötajad
$query014 = "$sql where ruum.ruum_nr=014;";
$result014 = mysqli_query($mysqli, $query014);

//ruum 015 töötajad
$query015 = "$sql where ruum.ruum_nr=015;";
$result015 = mysqli_query($mysqli, $query015);

//ruum 016 töötajad
$query016 = "$sql where ruum.ruum_nr=016;";
$result016 = mysqli_query($mysqli, $query016);

//ruum 017 töötajad
$query017 = "$sql where ruum.ruum_nr=017;";
$result017 = mysqli_query($mysqli, $query017);

//ruum 020 töötajad
$query020 = "$sql where ruum.ruum_nr=020;";
$result020 = mysqli_query($mysqli, $query020);

 //KORRUS 1
//ruum 102 töötajad
$query102 = "$sql where ruum.ruum_nr=102;";
$result102 = mysqli_query($mysqli, $query102);

//ruum 104 töötajad
$query104 = "$sql where ruum.ruum_nr=104;";
$result104 = mysqli_query($mysqli, $query104);

//ruum 105 töötajad
$query105 = "$sql where ruum.ruum_nr=105;";
$result105 = mysqli_query($mysqli, $query105);

//ruum 109 töötajad
$query109 = "$sql where ruum.ruum_nr=109;";
$result109 = mysqli_query($mysqli, $query109);

//ruum 110 töötajad
$query110 = "$sql where ruum.ruum_nr=110;";
$result110 = mysqli_query($mysqli, $query110);

//ruum 117 töötajad
$query117 = "$sql where ruum.ruum_nr=117;";
$result117 = mysqli_query($mysqli, $query117);

//ruum 118 töötajad
$query118 = "$sql where ruum.ruum_nr=118;";
$result118 = mysqli_query($mysqli, $query118);

//ruum 119 töötajad
$query119 = "$sql where ruum.ruum_nr=119;";
$result119 = mysqli_query($mysqli, $query119);

//KORRUS 2

//ruum 203 töötajad
$query203 = "$sql where ruum.ruum_nr=203;";
$result203 = mysqli_query($mysqli, $query203);

//ruum 208 töötajad
$query208 = "$sql where ruum.ruum_nr=208;";
$result208 = mysqli_query($mysqli, $query208);

//ruum 209 töötajad
$query209 = "$sql where ruum.ruum_nr=209;";
$result209 = mysqli_query($mysqli, $query209);

//ruum 210 töötajad
$query210 = "$sql where ruum.ruum_nr=210;";
$result210 = mysqli_query($mysqli, $query210);

//ruum 218 töötajad
$query218 = "$sql where ruum.ruum_nr=218;";
$result218 = mysqli_query($mysqli, $query218);

//ruum 220 töötajad
$query220 = "$sql where ruum.ruum_nr=220;";
$result220 = mysqli_query($mysqli, $query220);

//ruum 222 töötajad
$query222 = "$sql where ruum.ruum_nr=222;";
$result222 = mysqli_query($mysqli, $query222);

//ruum 223 töötajad
$query223 = "$sql where ruum.ruum_nr=223;";
$result223 = mysqli_query($mysqli, $query223);

//KORRUS 3

//ruum 302 töötajad
$query302 = "$sql where ruum.ruum_nr=302;";
$result302 = mysqli_query($mysqli, $query302);

//ruum 303 töötajad
$query303 = "$sql where ruum.ruum_nr=303;";
$result303 = mysqli_query($mysqli, $query303);

//ruum 304 töötajad
$query304 = "$sql where ruum.ruum_nr=304;";
$result304 = mysqli_query($mysqli, $query304);

//ruum 305 töötajad
$query305 = "$sql where ruum.ruum_nr=305;";
$result305 = mysqli_query($mysqli, $query305);

//ruum 306 töötajad
$query306 = "$sql where ruum.ruum_nr=306;";
$result306 = mysqli_query($mysqli, $query306);

//ruum 307 töötajad
$query307 = "$sql where ruum.ruum_nr=307;";
$result307 = mysqli_query($mysqli, $query307);

//ruum 308 töötajad
$query308 = "$sql where ruum.ruum_nr=308;";
$result308 = mysqli_query($mysqli, $query308);

//ruum 311 töötajad
$query311 = "$sql where ruum.ruum_nr=311;";
$result311 = mysqli_query($mysqli, $query311);

//ruum 312 töötajad
$query312 = "$sql where ruum.ruum_nr=312;";
$result312 = mysqli_query($mysqli, $query312);

//ruum 313 töötajad
$query313 = "$sql where ruum.ruum_nr=313;";
$result313 = mysqli_query($mysqli, $query313);

//ruum 314 töötajad
$query314 = "$sql where ruum.ruum_nr=314;";
$result314 = mysqli_query($mysqli, $query314);

//ruum 322 töötajad
$query322 = "$sql where ruum.ruum_nr=322;";
$result322 = mysqli_query($mysqli, $query322);

//ruum 323 töötajad
$query323 = "$sql where ruum.ruum_nr=323;";
$result323 = mysqli_query($mysqli, $query323);

//ruum 324 töötajad
$query324 = "$sql where ruum.ruum_nr=324;";
$result324 = mysqli_query($mysqli, $query324);

//ruum 325 töötajad
$query325 = "$sql where ruum.ruum_nr=325;";
$result325 = mysqli_query($mysqli, $query325);

//ruum 326 töötajad
$query326 = "$sql where ruum.ruum_nr=326;";
$result326 = mysqli_query($mysqli, $query326);

//ruum 327 töötajad
$query327 = "$sql where ruum.ruum_nr=327;";
$result327 = mysqli_query($mysqli, $query327);

//ruum 328 töötajad
$query328 = "$sql where ruum.ruum_nr=328;";
$result328 = mysqli_query($mysqli, $query328);

//ruum 329 töötajad
$query329 = "$sql where ruum.ruum_nr=329;";
$result329 = mysqli_query($mysqli, $query329);


//KORRUS 4

//ruum 403 töötajad
$query403 = "$sql where ruum.ruum_nr=403;";
$result403 = mysqli_query($mysqli, $query403);

//ruum 404 töötajad
$query404 = "$sql where ruum.ruum_nr=404;";
$result404 = mysqli_query($mysqli, $query404);

//ruum 405 töötajad
$query405 = "$sql where ruum.ruum_nr=405;";
$result405 = mysqli_query($mysqli, $query405);

//ruum 406 töötajad
$query406 = "$sql where ruum.ruum_nr=406;";
$result406 = mysqli_query($mysqli, $query406);

//ruum 407 töötajad
$query407 = "$sql where ruum.ruum_nr=407;";
$result407 = mysqli_query($mysqli, $query407);

//ruum 408 töötajad
$query408 = "$sql where ruum.ruum_nr=408;";
$result408 = mysqli_query($mysqli, $query408);

//ruum 409 töötajad
$query409 = "$sql where ruum.ruum_nr=409;";
$result409 = mysqli_query($mysqli, $query409);

//ruum 411 töötajad
$query411 = "$sql where ruum.ruum_nr=411;";
$result411 = mysqli_query($mysqli, $query411);

//ruum 415 töötajad
$query415 = "$sql where ruum.ruum_nr=415;";
$result415 = mysqli_query($mysqli, $query415);


//keldri korrus

//ruum -10 töötajad
$query_10 = "$sql where ruum.ruum_nr=-10;";
$result_10 = mysqli_query($mysqli, $query_10);

//ruum -13 töötajad
$query_13 = "$sql where ruum.ruum_nr=-13;";
$result_13 = mysqli_query($mysqli, $query_13);

//ruum -17 töötajad
$query_17 = "$sql where ruum.ruum_nr=-17;";
$result_17 = mysqli_query($mysqli, $query_17);

//ruum -18 töötajad
$query_18 = "$sql where ruum.ruum_nr=-18;";
$result_18 = mysqli_query($mysqli, $query_18);

//ruum -19 töötajad
$query_19 = "$sql where ruum.ruum_nr=-19;";
$result_19 = mysqli_query($mysqli, $query_19);

//ruum -20 töötajad
$query_20 = "$sql where ruum.ruum_nr=-20;";
$result_20 = mysqli_query($mysqli, $query_20);

//ruum -28 töötajad
$query_28 = "$sql where ruum.ruum_nr=-28;";
$result_28 = mysqli_query($mysqli, $query_28);