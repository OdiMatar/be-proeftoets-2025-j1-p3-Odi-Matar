<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <h3><?= htmlspecialchars($data['title']); ?></h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Hoogte (m)</th>
                        <th>Land</th>
                        <th>Laatste Uitbarsting</th>
                        <th>Slachtoffers</th>
                     
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['vulkanen'] as $vulkaan) : ?>
                        <tr>
                            <td><?= htmlspecialchars($vulkaan->Naam); ?></td>
                            <td><?= $vulkaan->Hoogte; ?></td>
                            <td><?= htmlspecialchars($vulkaan->Land); ?></td>
                            <td><?= htmlspecialchars($vulkaan->JaarLaatsteUitbarsting); ?></td>
                            <td><?= $vulkaan->AantalSlachtoffers; ?></td>
                    
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="<?= URLROOT; ?>/homepages/index" class="btn btn-primary">Homepagina</a>
        </div>
    </div>

<?php require APPROOT . '/views/includes/footer.php'; ?>

