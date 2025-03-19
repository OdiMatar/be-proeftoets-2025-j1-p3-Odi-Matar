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
                        <th>Locatie</th>
                        <th>Hoogte (m)</th>
                        <th>Aantal Verdiepingen</th>
                        <th>Jaar Voltooid</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['torens'] as $toren) : ?>
                        <tr>
                            <td><?= htmlspecialchars($toren->Naam); ?></td>
                            <td><?= htmlspecialchars($toren->Locatie); ?></td>
                            <td><?= htmlspecialchars($toren->Hoogte); ?></td>
                            <td><?= htmlspecialchars($toren->AantalVerdiepingen); ?></td>
                            <td><?= (int)$toren->JaarVoltooid; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="<?= URLROOT; ?>/homepages/index" class="btn btn-primary">Homepagina</a>
        </div>
    </div>
    <!-- Einde tabel -->

<?php require APPROOT . '/views/includes/footer.php'; ?>
