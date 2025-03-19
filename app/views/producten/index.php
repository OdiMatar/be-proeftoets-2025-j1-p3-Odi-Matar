<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <h3><?= htmlspecialchars($data['title']); ?></h3>
        </div>
    </div>

    <!-- Begin tabel -->
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Beschrijving</th>
                        <th>Prijs (€)</th>
                        <th>Voorraad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['producten'] as $product) : ?>
                        <tr>
                            <td><?= htmlspecialchars($product->Naam); ?></td>
                            <td><?= htmlspecialchars($product->Beschrijving); ?></td>
                            <td>€<?= number_format($product->Prijs, 2, ',', '.'); ?></td>
                            <td><?= htmlspecialchars($product->Voorraad); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="<?= URLROOT; ?>/homepages/index" class="btn btn-primary">Homepagina</a>
        </div>
    </div>
    <!-- Einde tabel -->

<?php require APPROOT . '/views/includes/footer.php'; ?>
