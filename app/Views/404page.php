<?= $this->extend("layout/main") ?>

<?= $this->section("main") ?>
<link rel="stylesheet" href="style/index.css">
<div id="root">
    <div class="inner">
        <h1>404 Page Not Found</h1>
        <p>This page might be unavailable, temporarily moved or you might mistakenly used an incorrect link.</p>
        <div class="home-button">
            <a href="/">Go Home</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>