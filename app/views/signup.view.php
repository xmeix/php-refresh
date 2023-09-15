<form method="post" novalidate>
    <label for="username" >username</label>
    <input value="<?= set_value('username')?>" type="text" name="username">
    <label for="password">password</label>
    <input value="<?= set_value('password')?>" type="password" name="password">
    <input type="submit" value="signup">
</form>