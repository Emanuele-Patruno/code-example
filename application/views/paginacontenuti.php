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
        if (!$this->input->get('idsp')) {
            $data = $this->Crud_model->get_singolo_valore(9999999);
            
        } else {
            $idspec = $this->input->get('idsp');
            $data = $this->Crud_model->get_singolo_valore($idspec);
        }
        var_dump($data);
        ?>   


    <div>
        <h2 id="cambio"><?= $data['titolo'] ?></h2>
    </div>

    

    <button onclick="change()">ciao</button>
    

    
    </body>
</html>