<html>
    <head>
        <title>Marine depot corals crawler</title>
    </head>
    <body>
<?php    
    error_reporting(E_ERROR);
    if (isset($_POST['coral']) && !empty($_POST['coral'])) {

         include_once('simple_html_dom.php');
            $html = file_get_html($_POST['coral']);

            $temp = array();

            $data = array();

            // get data

                foreach($html->find('table[class=species_item] td[class=image] img') as $e){
                    $temp[] = $e->src;
                }
                foreach($html->find('table[class=species_item] td[class=caption] a') as $e){
                    $data[] = array('Name' => trim(preg_replace('/\s+/', ' ', $e->plaintext)), 'link' => 'http://www.marinedepot.com/'.$e->href);
                }

            for ($i=0; $i < count($temp) ; $i++) {
                $data[$i]['Image'] = $temp[$i];
            }

            // get anoter link

            $temp2 = array();
            $deskripsi = array();

                foreach ($data as $key => $value) {
                    $link = file_get_html($value['link']);
                    foreach ($link->find('div[class=SpeciesDB3-SpecieDescription]') as $des) {
                       $temp2[] = trim(preg_replace('/\s+/', ' ', $des->plaintext));
                    }
                    // deskrisi find
                    foreach ($link->find('span[id=ctl00__pageBody_lblNotes]') as $e) {
                       $deskripsi[] = trim(preg_replace('/\s+/', ' ', $e->plaintext));
                    }
                }

            for ($i=0; $i < count($deskripsi) ; $i++) {
                $data[$i]['Deskripsi'] = $deskripsi[$i];
            }



                $trim = array_map('trim', $temp2);
                $exp = array();
                for ($i=0; $i < count($trim); $i++) {
                    $exp[] = array_map('trim',explode(':', $trim[$i]));
                }

            // parsing word

            $exlcuded_words = array( 'Diet','Behavior','Water parameters','Care','Size','Origin','Color','Type of hard coral','Feeding','Lighting','Water flow');
            $replace = array_fill_keys($exlcuded_words,'');

            $data_dump = array();
            $data_mentah = array();

                for ($i=0; $i < count($exp); $i++) {
                     for ($k=0; $k < count($exp[$i]) ; $k++) {
                        $data_dump[$i] = array(
                            '0' => '',
                            '1' => '',
                            '2' => '',
                            '3' => '',
                            '4' => '',
                            '5' => '',
                            '6' => '',
                            '7' => '',
                            '8' => '',
                            '9' => '',
                            '10' => '',
                            );
                    }
                }

            for ($i=0; $i < count($exp); $i++) {
                for ($k=0; $k < count($exp[$i]) ; $k++) {
                    $data_dump[$i];
                    if(strpos($exp[$i][$k], 'Diet') !== false)
                    {
                        $data_dump[$i]['0'] = str_replace(array_keys($replace),$replace,$exp[$i][$k+1]);
                   }

                    if(strpos($exp[$i][$k], 'Behavior') !== false)
                    {
                        $data_dump[$i]['1'] = str_replace(array_keys($replace),$replace,$exp[$i][$k+1]);
                   }


                   if(strpos($exp[$i][$k], 'Water parameters') !== false)
                    {
                        $data_dump[$i]['2'] = str_replace(array_keys($replace),$replace,$exp[$i][$k+1]);
                   }


                   if(strpos($exp[$i][$k], 'Care') !== false)
                    {
                        $data_dump[$i]['3'] = str_replace(array_keys($replace),$replace,$exp[$i][$k+1]);
                   }

                   if(strpos($exp[$i][$k], 'Size') !== false)
                    {
                        $data_dump[$i]['4'] = str_replace(array_keys($replace),$replace,$exp[$i][$k+1]);
                   }


                   if(strpos($exp[$i][$k], 'Origin') !== false)
                    {
                        $data_dump[$i]['5'] = str_replace(array_keys($replace),$replace,$exp[$i][$k+1]);
                   }


                   if(strpos($exp[$i][$k], 'Color') !== false)
                    {
                        $data_dump[$i]['6'] = str_replace(array_keys($replace),$replace,$exp[$i][$k+1]);
                   }


                   if(strpos($exp[$i][$k], 'Type of hard coral') !== false)
                    {
                        $data_dump[$i]['7'] = str_replace(array_keys($replace),$replace,$exp[$i][$k+1]);
                   }


                   if(strpos($exp[$i][$k], 'Feeding') !== false)
                    {
                        $data_dump[$i]['8'] = str_replace(array_keys($replace),$replace,$exp[$i][$k+1]);
                   }


                   if(strpos($exp[$i][$k], 'Lighting') !== false)
                    {
                        $data_dump[$i]['9'] = str_replace(array_keys($replace),$replace,$exp[$i][$k+1]);
                   }


                   if(strpos($exp[$i][$k], 'Water flow') !== false)
                    {
                        $data_dump[$i]['10'] = str_replace(array_keys($replace),$replace,$exp[$i][$k+1]);
                   }

                 // $data_dump[$i][$k] = str_replace(array_keys($replace),$replace,$exp[$i][$k]);

                }
            }

            // semua data di masukan kedalam array

            for ($i=0; $i < count($data_dump); $i++) {

                $data[$i]['Diet']  = $data_dump[$i][0];
                $data[$i]['Behavior']  = $data_dump[$i][1];
                $data[$i]['WaterParameters']  = $data_dump[$i][2];
                $data[$i]['Care']  = $data_dump[$i][3];
                $data[$i]['Size']  = $data_dump[$i][4];
                $data[$i]['Origin']  = $data_dump[$i][5];
                $data[$i]['Color']  = $data_dump[$i][6];
                $data[$i]['Typeofhardcoral']  = $data_dump[$i][7];
                $data[$i]['Feeding']  = $data_dump[$i][8];
                $data[$i]['Lighting']  = $data_dump[$i][9];
                $data[$i]['WaterFlow']  = $data_dump[$i][10];
            }

                echo '<pre>';
                print_r($data);
                echo '</pre>';
    }

?>
    
    <hr>
    <b><a href="index.php">Back to index</a></b>
    </body>
</html>