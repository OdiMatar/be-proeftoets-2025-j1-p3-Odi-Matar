<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>

    <!-- begin tabel -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Merk</th>
                        <th>Model</th>
                        <th>Type</th>
                        <th>Prijs</th>
                        <th>Acties</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['sneakers'] as $sneaker) : ?>
                        <tr>
                            <td><?= $sneaker->Merk; ?></td>
                            <td><?= $sneaker->Model; ?></td>
                            <td><?= $sneaker->Type; ?></td>
                            <td>€<?= number_format($sneaker->Prijs, 2, ',', '.'); ?></td>
                            <td>
                                <a href="<?= URLROOT; ?>/sneakers/delete/<?= $sneaker->Id; ?>" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Weet je zeker dat je deze sneaker wilt verwijderen?');">Verwijder</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="<?= URLROOT; ?>/sneakers/create" class="btn btn-success">Nieuwe Sneaker</a>
            <a href="<?= URLROOT; ?>/homepages/index" class="btn btn-primary">Homepagina</a>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- eind tabel -->
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>
