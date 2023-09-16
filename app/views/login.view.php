<?php if(message()): ?>
    <div><?=message('',true)?></div>
<?php endif; ?>

<div>
    login page
    
<form method="post" novalidate>
    
    <label for="email" >email</label>
    <input value="<?= set_value('email')?>" type="email" name="email">
    <?php if(!empty($errors['email'])):?>
        <small><?=$errors['email']?></small>
    <?php endif;?>

    <label for="password">password</label>
    <input value="<?= set_value('password')?>" type="password" name="password">
    <?php if(!empty($errors['password'])):?>
        <small><?=$errors['password']?></small>
    <?php endif;?>
    <input type="submit" value="login">
</form>
</div>