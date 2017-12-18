<?php
//$opts = array(
//    'http' => array(
//        'method' => "GET",
//        'header' => "Accept-language: en\r\n" .
//        "Cookie: foo=bar\r\n"
//    )
//);
//$context = stream_context_create($opts);
// --------------- STEP : 1 ---------------------
$page = 4;
$get_url = 'http://www.show-anime.com/catalog/17/%E0%B8%AD%E0%B8%99%E0%B8%B4%E0%B9%80%E0%B8%A1%E0%B8%B0%E0%B8%AD%E0%B8%B1%E0%B8%9E%E0%B9%80%E0%B8%94%E0%B8%97%E0%B8%A5%E0%B9%88%E0%B8%B2%E0%B8%AA%E0%B8%B8%E0%B8%94.html&number=' . $page;
$html = file_get_contents($get_url);

$dom = new DOMDocument;
@$dom->loadHTML($html);
$links = $dom->getElementsByTagName('a');
$arr_href = array();
foreach ($links as $link) {
    array_push($arr_href, $link->getAttribute('href'));
}
$arr_uniq = array_unique($arr_href);
$arr_new = array();
foreach ($arr_uniq as $uniq) {
    $tmp = explode('/', $uniq);
    if (isset($tmp[3])) {
        $tmp_int = intval($tmp[3]);
        if ($tmp[2] == 'www.show-anime.com' && is_int($tmp_int) && $tmp_int != 0) {
            array_push($arr_new, $uniq);
        }
    }
}
//print('<pre>' . print_r($arr_new, true) . '</pre>');
// --------------- STEP : 2 ---------------------
$aa = true;
foreach ($arr_new as $tract) {
    echo $tract . '----------<br />';
    $tract_html = file_get_contents($tract);
    $dom2 = new DOMDocument;
    @$dom2->loadHTML($tract_html);
    $links2 = $dom2->getElementsByTagName('a');
    $arr2_href = array();
    foreach ($links2 as $link2) {
        $tmp2 = explode('/', $link2->getAttribute('href'));
        if (isset($tmp2[3])) {
            if ($tmp2[2] == 'www.show-anime.com' && $tmp2[3] == 'play') {
                array_push($arr2_href, $link2->getAttribute('href'));
            }
        }
    }
    print('<pre>' . print_r($arr2_href, true) . '</pre>');
}
?>



<!--<iframe height="480px" width="640px" allowfullscreen frameborder="0" scrolling="no" src="http://www.show-anime.com/embed/27257" ></iframe>-->