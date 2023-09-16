<form method="post" novalidate>
    <label for="email" >email</label>
    <input value="<?= set_value('email')?>" type="email" name="email">
    <label for="password">password</label>
    <input value="<?= set_value('password')?>" type="password" name="password">
    <input type="submit" value="signup">
</form>