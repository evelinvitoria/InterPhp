<h1>Listar Usuário</h1>

<?php 
    $sql = "SELECT * FROM usuario";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table>";
       while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$row->email."</td>";
         print "</tr>";
       }
    }else{
        print "<p class=''alert alert-denger'>Não encontrou resultados!</p>";
    }
?>