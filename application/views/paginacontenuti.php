<html>
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Mostra dati</title>
  </head>
 
  <body>
    <?php   
        $nome = "";
        if (!$this->input->get('idsp')) {
            $data = $this->Crud_model->get_singolo_valore(9999999);
            $nome = $data['titolo'];
            
        } else {
            $idspec = $this->input->get('idsp');
            $data = $this->Crud_model->get_singolo_valore($idspec);
            $nome = $data['titolo'];
        }
        ?>

    <button onclick="change()">ciao</button>
    <?php
    ?>

    <select id="valueSelect" class="js-example-basic-single" name="state" >
        <?php
        
        foreach($pagine as $dati){
        ?>
            <option><?= $dati['titolo'] ?></option>
        <?php 
        }
        ?>    
    </select>

    <div>
        <h2 id="result"></h2>
    </div>

    <script>
        const selectElem = document.getElementById('valueSelect');
        const resultElem = document.getElementById('result');
        var indice = "";

        window.onload=function(){

            localStorage.setItem("result", $('#resultElem').val());

            selectElem.addEventListener("change", () =>{
            var indice = selectElem.selectedIndex;
            location.href = base_url + 'crud/paginacontenuti?idsp=' + indice;
            var index = $("#valueSelect option:selected").text();
            resultElem.textContent = `${index}`;
            location.href = base_url + 'crud/paginacontenuti?idsp=' + indice;
            })
        }
        var base_url = 'http://localhost/example/';

        function change() {
                        location.href = base_url + 'crud/paginacontenuti?idsp=' + indice;
                    }
                    console.log(indice);
    </script>
    </body>
</html>