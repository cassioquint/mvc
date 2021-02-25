<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>

<form action="<?=$base;?>/novo" method="POST">
   <p><label for="nome">Nome</label><br>
   <input type="text" name="nome" autocomplete="off"></p>

   <p><label for="email">Email</label><br>
   <input type="email" name="email"></p>

   <p><input type="submit" value="Adicionar"></p>
</form>

<?php $render('footer'); ?>