<?= $this->extend("layout/main") ?>

<?= $this->section("main") ?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    h1 {
        margin-bottom: 1rem;
    }

    #root {
        min-height: 100vh;
        background: #dde;
        display: grid;
        place-items: center;

    }

    .inner {
        max-width: 30rem;
        background-color: #fff;
        border: 1px #ccc solid;
        padding: 1rem;
        border-radius: 0.5rem;
    }
</style>
<div id="root">
    <div class="inner">
        <h1>Welcome To Pulse App</h1>
        <p>Let's build an amazing enviroment for improving the web society.</p>
    </div>
</div>
<?= $this->endSection() ?>