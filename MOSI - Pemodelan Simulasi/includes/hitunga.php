  <hr>
  <p>Rumus menghitung a : </p>
                <img src ="images/rumusa.jpg" width="600px" height="150px" />
                <br><br><br><table>
  <tr>
    <th></th>
    <th></th>
    <th>(<?php echo $sigma1y; ?>)</th>
    <th></th>
    <th>(<?php echo $nilaib; ?>)</th>
    <th>(<?php echo $sigmax; ?>)</th>
  </tr>
  <tr>
    <td>a</td>
    <td>=</td>
    <td>---------------</td>
    <td>-</td>
    <td colspan="2">--------</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>(<?php echo $sigman; ?>)</td>
    <td></td>
    <td colspan="2">(<?php echo $sigman; ?>)</td>
  </tr>
</table>
<br><br>
<h4> Nilai a = <?php echo $nilaia; ?></h4>

<hr>
<p>Rumus menghitung y : </p>
<img src ="images/rumusy.jpg" width="400px" height="150px" /><br>
<form method="POST" action="#">
  
</form>

<?php

  $nilainya = round(@(1 / (($nilaia) + ($nilaib))),5);
?>
<h4>Nilai Y = <?php echo $nilainya; ?>