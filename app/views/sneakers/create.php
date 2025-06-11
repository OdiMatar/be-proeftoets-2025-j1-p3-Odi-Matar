<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3><?= $data['title']; ?></h3>

            <form action="<?= URLROOT; ?>/sneakers/create" method="post">
                <div class="form-group mb-2">
                    <label for="merk">Merk</label>
                    <input type="text" name="merk" id="merk" class="form-control" required>
                </div>

                <div class="form-group mb-2">
                    <label for="model">Model</label>
                    <input type="text" name="model" id="model" class="form-control" required>
                </div>

                <div class="form-group mb-2">
                    <label for="type">Type</label>
                    <input type="text" name="type" id="type" class="form-control" required>
                </div>

                <div class="form-group mb-4">
                    <label for="prijs">Prijs (€)</label>
                    <input type="number" name="prijs" id="prijs" class="form-control" step="0.01" min="0" required>
                </div>

                <button type="submit" class="btn btn-success">Toevoegen</button>
                <a href="<?= URLROOT; ?>/sneakers/index" class="btn btn-secondary">Annuleren</a>
            </form>
        </div>
        <div class="col-1"></div>
    </div>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>
