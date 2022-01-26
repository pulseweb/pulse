<?= $this->extend("layout/main") ?>

<?= $this->section("main") ?>
<title>sdfsd</title>
<link rel="stylesheet" href="style/index.css">
<div id="root">
    <div class="inner">
        <h1><?= ENV::SITE_TITLE ?> maintenance</h1>
        <p>The site in not available now. Please Come back later...</p>
    </div>
</div>
<script>
    document.title = "<?= ENV::SITE_TITLE ?> maintenance"
</script>
<?= $this->endSection() ?>