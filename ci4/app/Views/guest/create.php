<h2><?= esc($title) ?></h2>
<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post" style="text-align: left;">
    <?= csrf_field() ?>

    <label for="name">Name: </label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br><br>

    <label for="website">Website: </label>
    <input type="input" name="website" value="<?= set_value('website') ?>">
    <br><br>

    <label for="email">Email: </label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br><br>

    <label for="comment">Comment: </label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br><br>

    <input type="submit" name="submit" value="Create guest entry">
</form>

<a href="http://apcwebprog.csf.ph/~jgcajayon/lab3/ci4/public/Main">Go Back to Main page</a><br>
<a href="http://apcwebprog.csf.ph/~jgcajayon/lab3/ci4/public/guest">Check others' comments here</a><br>
