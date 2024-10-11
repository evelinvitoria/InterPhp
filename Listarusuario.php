<h1>Listar Usuário</h1>

<?php 
    $sql = "SELECT * FROM usuario";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<th>#</th>";
        print "<th>nome</th>";
        print "<th>email</th>";
        print "<th>Ações</th>";
        print"</tr>";
       while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$row->email."</td>";
        print"<td>
            <button onclick=\"location.href='?editar&id=".$row->id."'\" class='btn btn-success'>Editar</button>
            <button class='btn btn-danger'>Excluir</button>
        </td>";
        print "</tr>";
       }
    }else{
        print "<p class=''alert alert-denger'>Não encontrou resultados!</p>";
    }
?>