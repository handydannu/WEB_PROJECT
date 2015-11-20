<html>
    <head>
        <title>INDEX FOR CRAWLER</title>
    </head>
    <body>
    <hr>
    <h1>Coral's Data Crawler</h1>
    <hr>
    <h4>Select data source :
    <br/>
    <br/>
    <table>
<?php

            include_once('simple_html_dom.php');

            $url = 'http://www.marinedepot.com/md_educationcenter_species.html';
            $html = file_get_html($url);

            $temp =array();
            $a = 'Select a Coral';
            $i = -1;
            $b = -1;
            foreach($html->find('select[id=jumpMenu] option') as $e)
                    {
                        if($e->plaintext == $a)
                        {
                            $a = 'write';
                        }
                        elseif($a == 'write')
                        {
                            $temp[$i++]['name'] = $e->plaintext;
                            $temp[$b++]['link'] = 'http://www.marinedepot.com/'.$e->value;
                        }
                    }

?>      <tr>
            <td>
                <h3 align="center">Marinedepot.com source</h3><br/>
                <form method='post' action='mdcrawler.php'>
                    <select name="coral" size="10px">
                            <option selected>Available Coral's Data from Marinedepot server : </option>
                            <?php
                                foreach ($temp as $key => $value) {
                            ?>

                            <option value="<?php echo $value['link'];?>"><?php echo $value['name'];?></option>

                            <?php
                                 }
                            ?>
                    </select><br/>
                    <button type="submit">Get Data</button>
                </form>
            </td>
            <td>
                <h1>&nbsp&nbsp&nbsp&nbsp</h1>
            </td>

<?php

    include_once('simple_html_dom.php');

            $url2 = 'http://www.aquariumdomain.com/indexMarineCorals.php';
            $html2 = file_get_html($url2);

            $temp =array();
            $a = 'Select a Coral';
            $i = -1;
            $b = -1;
            foreach($html2->find('table[width=688] td span a') as $e){
                    $temp[$i++]['name'] = $e->plaintext;
                    $temp[$b++]['link'] = str_replace(' ','%20','http://www.aquariumdomain.com'.$e->href);

            }

        ?>
                <td>
                <h3 align="center">aquariumdomain.com source</h3><br/>
                <form method='post' action='aquariumscript.php'>
                    <select name="coral" size="10x">
                            <option selected>Available Coral's Data from Aquariumdomain server : </option>
                    <?php
                    foreach ($temp as $key => $value) {
                        ?>

                            <option value="<?php echo $value['link'];?>"><?php echo $value['name'];?></option>

                    <?php
                        }
                    ?>
                    </select><br/>
                    <button type="submit">Get Data</button>
                </form>
                </td>
                </tr>    
        </table>
        <hr>
        <p align="center"><font size="0.5"><a href="http://moccadev.com" target="_blank">By WHS</a>&nbsp &copy 2014</font></p>
    </body>
</html>