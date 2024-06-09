<article style="
    padding: 5px 20px;
    background: #eeeeee;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
">
    <h1><?= $profile->name; ?></h1>
    <p>
        Toca no <?= $profile->company; ?><br>
        <a title="Enviar um e-mail" href="mailto:<?= $profile->email; ?>">Clique aqui para enviar um e-mail</a>
    </p>
</article>