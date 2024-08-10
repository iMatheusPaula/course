<form name="post" action="./" method="<?= $form->method; ?>" enctype="multipart/form-data">
    <p style="margin-bottom: 10px; text-align: right"><a href="./" title="Atualizar">Atualizar</a></p>
    <div class="col2">
        <input type="date" name="birthday" value="<?= $form->birthday ?>"/>
    </div>
    <button>Enviar Agora!</button>
</form>