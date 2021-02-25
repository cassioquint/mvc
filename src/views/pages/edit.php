<?php $render('header'); ?>

<h2>Editar Usuário</h2>

<form action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar" method="POST">
   <p><label for="nome">Nome</label><br>
   <input type="text" name="nome" autocomplete="off" value="<?=$usuario['nome'];?>"></p>

   <p><label for="email">Email</label><br>
   <input type="email" name="email" value="<?=$usuario['email'];?>"></p>

   <p><input type="submit" value="Salvar"></p>
</form>

<?php $render('footer'); ?>