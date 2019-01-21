<?php
header('Access-Control-Allow-Origin: *'); 

    include('simple_html_dom.php');
 
// get DOM from URL or file
// $html = file_get_html('https://opoka.org.pl/liturgia/');
$data = [];


function fillData($day, $link)
{
    global $data;
    $html = file_get_html($link);
    
foreach($html->find('div.data') as $r)
    $data[$day]["date"] = $r->plaintext;
foreach($html->find('div.weekday_name') as $r)
    $data[$day]["weekday_name"] = $r->plaintext;
foreach($html->find('div.rok_lit') as $r)
    $data[$day]["liturgy_year"] = $r->plaintext;
foreach($html->find('div.period_name') as $r)
    $data[$day]["period_name"] = $r->plaintext;
foreach($html->find('div.dwa div.czyt1 div.siglum') as $r)
    $data[$day]["reading_one"] = $r->plaintext;
foreach($html->find('div.dwa div.czyt1 div') as $r) 
    $data[$day]["reading_one_text"] = $r->innertext;
foreach($html->find('div.dwa div.psalm div.siglum') as $r)
    $data[$day]["psalm"] = $r->plaintext;
foreach($html->find('div.dwa div.psalm div') as $r)
    $data[$day]["psalm_text"] = $r->innertext;
foreach($html->find('div.dwa div.werset div') as $r)
    $data[$day]["before_gospel"] = $r->innertext;
foreach($html->find('div.dwa div.ewangelia div.siglum') as $r)
    $data[$day]["gospel"] = $r->plaintext;
foreach($html->find('div.dwa div.ewangelia div') as $r)
    $data[$day]["gospel_text"] = $r->innertext;
foreach($html->find('div.jeden div.patroni') as $r)
    $data[$day]["patronas"] = $r->plaintext;
foreach($html->find('div.kolor_szat div.dwa') as $r)
    $data[$day]["robe"] = substr($r->outertext, 16, -8) . "";

    switch ($data[$day]["robe"]) {
        case "pink":
            $data[$day]["robe"] = "różowy";
            break;
        case "magenta":
            $data[$day]["robe"] = "fioletowy";
            break;
        case "red":
            $data[$day]["robe"] = "czerwony";
            break;
        case "white":
            $data[$day]["robe"] = "biały";
            break;
        case "green":
            $data[$day]["robe"] = "zielony";
            break;
    }

}

fillData("today", "https://opoka.org.pl/liturgia/");
fillData("tomorrow", "https://opoka.org.pl/liturgia/tomorrow/");
fillData("sunday", "https://opoka.org.pl/liturgia/sunday/");
fillData("yesterday", "https://opoka.org.pl/liturgia/yesterday/");



    echo json_encode($data);
    // echo $data["reading_one_text"];

?>