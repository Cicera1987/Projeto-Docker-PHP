<h1 class="text-info">Alterando Cliente</h1>
<form class="form" action="?controller=client&action=updateClientAction&id=<?=$client['idClient']?>" method="post" enctype='multipart/form-data'>
    <div class="mb-3 mt-3">
        <label class="form-label text-info">Nome</label>
        <input name="name" class="form-control" type="text" value="<?=$client['name']?>">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label text-info">Email</label>
        <input name="email" class="form-control" type="email" value="<?=$client['email']?>">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label text-info">Telefone</label>
        <input name="phone" class="form-control" type="text" value="<?=$client['phone']?>">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label text-info">Endereço</label>
        <input name="address" class="form-control" type="text" value="<?=$client['address']?>">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label text-info">foto</label>
        <input name="photo" class="form-control" type="file">
</div>
<div>
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
</div>
<br>    
        <input class="btn btn-info text-white" type="submit" value="Enviar">
</form>