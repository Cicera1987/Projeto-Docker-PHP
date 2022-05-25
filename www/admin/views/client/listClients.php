<h1 class="text-info">Lista de Clientes</h1>

<table class="table">
    <tr>
        <th class="text-info">ID Cliente</th>
        <th class="text-info">Nome</th>
        <th class="text-info">Telefone</th>
        <th class="text-info">E-mail</th>
        <th class="text-info">Endereço</th>
        <th class="text-info">Imagens</th>
        <th class="text-info" colspan="2">Ações</th>
    </tr>
    <?php
        foreach($arrayClients as $client){
    ?>

        <tr>
            <td>
                <?=$client['idClient']?>
            </td>
            <td>
                <?=$client['name']?>
            </td>
            <td>
                <?=$client['phone']?>
            </td>
            <td>
                <?=$client['email']?>
            </td>
            <td>
                <?=$client['address']?>
            </td>
            <td>
                <?php
                if (is_file("assets/img/clients/{$client['idClient']}.jpg")){
                    echo "
                    <img
                        src='assets/img/clients/{$client['idClient']}.jpg'
                        style='max-width: 100px; max-heigth: 100px'
                    >
                    ";
                    
                }else{
                    echo 'Sem imagem';
                }
                
                ?>
            </td>
            <td>
                <a href="?controller=client&action=updateClient&id=<?=$client['idClient']?>" class="btn btn-warning text-white"><strong>Alterar</strong></a>
            </td>
            <td>
                <a href="?controller=client&action=deleteClient&id=<?=$client['idClient']?>" class="btn btn-danger"><strong>Excluir</strong></a>
            </td>
        </tr>

    <?php
        }
    ?>
</table>