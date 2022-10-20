<html>
  <head>
    <title>Display records</title>
    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
  </head>
 
  <body>
<?php
foreach($data as $dati){
  ?>
  <h2><?= $dati['titolo'] ?></h2>
  
<?php }
   ?>

</table>
</body>
</html>
<!--<table width="600" border="0" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>id</th>
    <th>pubblicato</th>
    <th>stato</th>
    <th>titolo</th>
    <th>contenuto</th>
    <th>contenuto2</th>
    <th>contenuto3</th>
    <th>contenuto4</th>
    <th>contenuto5</th>
    <th>immagine</th>
    <th>immagine_thumb</th>
    <th>data_creazione</th>
    <th>data_pubblicazione</th>
    <th>data_scadenza</th>
    <th>data_ultima_modifica</th>
    <th>id_utente_creazione</th>
    <th>id_utente_ultima_modifica</th>
  </tr> 


 
    /*foreach($data as $row)
    {
        echo "<tr>";
        echo "<td>".$row->id."</td>";
        echo "<td>".$row->pubblicato."</td>";
        echo "<td>".$row->stato."</td>";
        echo "<td>".$row->titolo."</td>";
        echo "<td>".$row->contenuto."</td>";
        echo "<td>".$row->contenuto2."</td>";
        echo "<td>".$row->contenuto3."</td>";
        echo "<td>".$row->contenuto4."</td>";
        echo "<td>".$row->contenuto5."</td>";
        echo "<td>".$row->immagine."</td>";
        echo "<td>".$row->immagine_thumb."</td>";
        echo "<td>".$row->data_creazione."</td>";
        echo "<td>".$row->data_pubblicazione."</td>";
        echo "<td>".$row->data_scadenza."</td>";
        echo "<td>".$row->data_ultima_modifica."</td>";
        echo "<td>".$row->id_utente_creazione."</td>";
        echo "<td>".$row->id_utente_ultima_modifica."</td>";
      echo "</tr>";
      }*/
    
</table>
</body>
</html>