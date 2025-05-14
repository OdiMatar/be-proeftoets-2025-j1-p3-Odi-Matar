<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row mb-3">
        <div class="col-3"></div>
        <div class="col-6 text-warning">        
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-3"></div>
    </div>

    <!-- Begin formulier -->
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <form action="<?= URLROOT; ?>/zangeressen/create" method="post" novalidate>
                <div class="mb-3">
                    <label for="naam" class="form-label">Naam</label>
                    <input name="naam" type="text" class="form-control" id="naam" required>
                </div>
                <div class="mb-3">
                    <label for="nettowaarde" class="form-label">Nettowaarde (in miljoenen)</label>
                    <input name="nettowaarde" type="number" step="1" class="form-control" id="nettowaarde" required>
                </div>
                <div class="mb-3">
                    <label for="land" class="form-label">Land</label>
                    <input name="land" type="text" class="form-control" id="land" required>
                </div>
                <div class="mb-3">
                    <label for="mobiel" class="form-label">Mobiel</label>
                    <input name="mobiel" type="tel" class="form-control" id="mobiel" required placeholder="+31 6 1234 5678" pattern="\+31 6 \d{4} \d{4}">
                </div>
                <div class="mb-3">
                    <label for="leeftijd" class="form-label">Leeftijd</label>
                    <input name="leeftijd" type="number" class="form-control" id="leeftijd" required>
                </div>

                <button type="submit" class="btn btn-primary">Verstuur</button>
            </form>

            <a href="<?= URLROOT; ?>/homepages/index" class="d-block mt-3">
                <i class="bi bi-arrow-left"></i> Terug
            </a>
        </div>
        <div class="col-3"></div>
    </div>
    <!-- Einde formulier -->

</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>
