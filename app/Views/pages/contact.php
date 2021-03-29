<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Contact</h2>
            <?php foreach ($alamat as $a) : ?>
                <ul>
                    <li><?= isset($a['tipe']); ?></li>
                    <li><?= isset($a['alamat']); ?></li>
                    <li><?= isset($a['kota']); ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>