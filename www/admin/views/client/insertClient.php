<h1 class="text-info">Inserindo Cliente</h1>
<form class="form" action="?controller=client&action=insertClientAction" method="post" enctype='multipart/form-data'>
    <div class="mb-3 mt-3">
        <label class="form-label text-dark">Nome</label>
        <input name="name" class="form-control" type="text">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label text-dark">Email</label>
        <input name="email" class="form-control" type="email">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label text-dark">Telefone</label>
        <input name="phone" class="form-control" type="text">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label text-dark">Endereço</label>
        <input name="address" class="form-control" type="text">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label text-dark">foto</label>
    <input name="photo" class="form-control" type="file">
</div>
    <div class="mb-3 mt-3">
        <input class="btn btn-info text-white" type="submit" value="Enviar">
    </div>
</form>