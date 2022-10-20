<html>
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Mostra dati</title>
    <style>
     
    </style>
  </head>
 
  <body>
  <script>
        var base_url = 'http://localhost/example/';

        function change() {
                            location.href = base_url + 'crud/paginacontenuti?idsp=9';
                            //console.log('' + "ciao");
                            //$("#cambio").html('');
                        }
    </script>
    <?php   
        $nome = "";
        if (!$this->input->get('idsp')) {
            $data = $this->Crud_model->get_singolo_valore(9999999);
            $nome = $data['titolo'];
            
        } else {
            $idspec = $this->input->get('idsp');
            $data = $this->Crud_model->get_singolo_valore($idspec);
            $nome = $data['titolo'];
            var_dump($idspec);
        }
        
        ?>   


    <div>
        <h2><?= $nome ?></h2>
    </div>

    <button onclick="change()">ciao</button>
    <?php
    ?>

    <select class="js-example-basic-single" name="state">
    <?php
    
    foreach($pagine as $dati){
    ?>
        <option><?= $dati['titolo'] ?></option>
    <?php 
    }
    ?>
        
    </select>
    </body>
</html>