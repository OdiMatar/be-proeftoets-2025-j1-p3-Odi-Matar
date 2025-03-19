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
                        <th>Batterijduur (uur)</th>
                        <th>Waterbestendigheid</th>
                        <th>Connectiviteit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['speakers'] as $speaker) : ?>
                        <tr>
                            <td><?= htmlspecialchars($speaker->Naam); ?></td>
                            <td><?= htmlspecialchars($speaker->Batterijduur); ?></td>
                            <td><?= htmlspecialchars($speaker->Waterbestendigheid); ?></td>
                            <td><?= htmlspecialchars($speaker->Connectiviteit); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="<?= URLROOT; ?>/homepages/index" class="btn btn-primary">Homepagina</a>
        </div>
    </div>
    <!-- Einde tabel -->

<?php require APPROOT . '/views/includes/footer.php'; ?>
