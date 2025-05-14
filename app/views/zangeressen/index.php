<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 text-primary">        
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row mt-3 mb-3">
        <div class="col-1"></div>
        <div class="col-10">        
            <a href="<?= URLROOT; ?>/zangeressen/create" class="btn btn-warning">Nieuwe zangeres</a>
        </div>
        <div class="col-1"></div>
    </div>

    <!-- Begin tabel -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Nettowaarde</th>
                        <th>Land</th>
                        <th>Mobiel</th>
                        <th>Leeftijd</th>
                        <th>Actie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['zangeressen'] as $zangeres): ?>
                        <tr>
                            <td><?= htmlspecialchars($zangeres->Naam); ?></td>
                            <td><?= htmlspecialchars($zangeres->Nettowaarde); ?></td>
                            <td><?= htmlspecialchars($zangeres->Land); ?></td>
                            <td><?= htmlspecialchars($zangeres->Mobiel); ?></td>
                            <td><?= htmlspecialchars($zangeres->Leeftijd); ?></td>
                            <td>
                                <a href="<?= URLROOT; ?>/zangeressen/delete/<?= $zangeres->Id; ?>" onclick="return confirm('Weet je zeker dat je deze zangeres wilt verwijderen?');">
                                    <i class="bi bi-trash3-fill text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="<?= URLROOT; ?>/homepages/index"><i class="bi bi-arrow-left"></i> Terug</a>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- Einde tabel -->

</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>
