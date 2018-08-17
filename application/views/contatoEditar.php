<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $completo; ?> </title>
    </head>
    <body>
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
        <h2>Editar Contato</h2>
        <?php echo form_open('contato/atualizar'); ?>
        <input type="hidden" name="id" id="id" value="<?php echo $contatoEditar[0]->id; ?>">
        <label>Nome</label>
        <input name="nome" type="text" value="<?php echo $contatoEditar[0]->nome; ?>" required/>
        <p></p>
        <label>e-mail</label>
        <input name="email" type="email" value="<?php echo $contatoEditar[0]->email; ?>" required/>
        <p></p>
        <input class="btn" type="submit" value="Salvar"/>
        <?php form_close(); ?>
        <p></p>
        <a href="<?php echo base_url() . 'contato'; ?>">cancelar</a>   
    </body>
</html>
