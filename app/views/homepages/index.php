<?php require_once APPROOT . '/views/includes/header.php'; ?>

<!-- Voor het centreren van de container gebruiken we het boorstrap grid -->
<div class="container">
    <div class="row mt-3">

        <div class="col-2"></div>

        <div class="col-8">

            <h3><?php echo $data['title']; ?></h3>

            <a href="<?= URLROOT; ?>/smartphones/index">Overzicht smartphones</a> |

            <a href="<?= URLROOT; ?>/sneakers/index">Overzicht sneakers</a>

            <a href="<?= URLROOT; ?>/horloges/index">Overzicht horloges</a>

            <a href="<?= URLROOT; ?>/torens/index">Overzicht Torens</a>

            <a href="<?= URLROOT; ?>/speakers/index">Overzicht Speakers</a>

           <a href="<?= URLROOT; ?>/zangeressen/index">Top 5 Zangeressen</a>

            <a href="<?= URLROOT; ?>/producten/index">Overzicht Producten</a>

            <a href="<?= URLROOT; ?>/vulkanen/index">Actiefste Vulkanen</a>

            

            

        </div>
        
        <div class="col-2"></div>
        
    </div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>