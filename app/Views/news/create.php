<h2><?= esc($title) ?></h2>

<?= session()->getFlashData('error') ?>
<?= validation_list_errors() ?>

<form action="/news" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" value="<?= set_value('title') ?>" />
    <br />

    <label for="body">Body</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br />

    <input type="submit" nam="submit" value="Create news item" />

</form>