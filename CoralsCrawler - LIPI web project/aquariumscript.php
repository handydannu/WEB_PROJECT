<html>
    <head>
        <title>Aquariumdomain corals crawler</title>
    </head>
    <body>
<?php
error_reporting(E_ERROR);
if (isset($_POST['coral']) && !empty($_POST['coral'])) {

    include_once('simple_html_dom.php');
    $html = file_get_html($_POST['coral']);

    $data = array();
    $temp = array();
    $temp2 = array();
    $deskripsi = array();
    $des_temp = array();
    $text = '';

    $i = 1;

    foreach ($html->find('span[class=mainText] a') as $e) {
        if($i%2 == 0){
        $temp[0][] = 'http://www.aquariumdomain.com/'.$e->href;

    }
    $i++;
    }

    foreach ($html->find('span[class=mainText] a b') as $e) {
        $temp[1][] = $e->plaintext;
    }

     foreach ($html->find('span[class=mainText] a i') as $e) {
        $temp[2][] = $e->plaintext;
    }

    foreach ($html->find('span[class=mainText] a img') as $e) {
        $temp[3][] = 'http://www.aquariumdomain.com'.$e->src;
    }

for ($i=0; $i < count($temp[1]) ; $i++) {
        for ($b=0; $b < count($temp[$i]); $b++) {
            $data[$b]['name'] = $temp[1][$b];
            $data[$b]['alias'] = $temp[2][$b];
            $data[$b]['link'] = $temp[0][$b];
            $data[$b]['img'] = $temp[3][$b];
        }
}

$t = 0;
    foreach ($data as $key => $value) {
        $link = file_get_html($value['link']);
            foreach($link->find('table[cellpadding=3] tr') as $e){
                $temp2[$t][]  = trim(preg_replace('/\s+/', ' ', end(explode(':', $e->plaintext))));
            }
            foreach($link->find('span[class=mainText] p') as $e){
              $deskripsi[$t][] = $e->plaintext;
          }
          $t++;
    }

for ($i=0; $i < count($deskripsi) ; $i++) {
    $c = count($deskripsi[$i]);
    for ($k=0; $k < count($deskripsi[$i]) ; $k++) {
         unset($deskripsi[$i][$c-1]);
         unset($deskripsi[$i][$c-2]);
         unset($deskripsi[$i][$c-3]);
    }
}

for ($i=0; $i < count($temp2) ; $i++) {
    $c = count($temp2[$i]);
    for ($k=0; $k < count($temp2[$i]) ; $k++) {
         unset($temp2[$i][$c-1]);
        unset($temp2[$i][$c-2]);
    }
}

  for ($i=0; $i < count($deskripsi) ; $i++) {
    $text  = '';
    for ($k=0; $k < count($deskripsi[$i]) ; $k++) {
        $text .= '<p>'.$deskripsi[$i][$k].'</p>';
    }
    $des_temp[] = $text;
}

    $trim = array_map('trim', $des_temp);
    echo '<pre>';

    print_r($data);
    print_r($temp2);
    print_r($trim);
    echo '</pre>';
}

?>

    <hr>
    <b><a href="index.php">Back to index</a></b>
    </body>
</html>