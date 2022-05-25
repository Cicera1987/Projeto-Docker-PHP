<h1 class="text-info">Lista de Clientes</h1>

<table class="table">
    <tr>
        <th class="text-info">ID Cliente</th>
        <th class="text-info">Nome</th>
        <th class="text-info">Telefone</th>
        <th class="text-info">E-mail</th>
        <th class="text-info">Endereço</th>
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
        </tr>

    <?php
        }
    ?>
</table>