<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <h3><?= $data['title']; ?></h3>
        </div>
    </div>

    <!-- Begin tabel -->
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Nettowaarde (in miljoenen)</th>
                        <th>Land</th>
                        <th>Mobiel</th>
                        <th>Leeftijd</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['zangeressen'] as $zangeres) : ?>
                        <tr>
                            <td><?= htmlspecialchars($zangeres->Naam); ?></td>
                            <td><?= number_format($zangeres->Nettowaarde, 0, ',', '.'); ?> M</td>
                            <td><?= htmlspecialchars($zangeres->Land); ?></td>
                            <td><?= htmlspecialchars($zangeres->Mobiel); ?></td>
                            <td><?= (int)$zangeres->Leeftijd; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="<?= URLROOT; ?>/homepages/index" class="btn btn-primary">Homepagina</a>
        </div>
    </div>
    <!-- Einde tabel -->

<?php require APPROOT . '/views/includes/footer.php'; ?>
