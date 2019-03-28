<div class="row">
    <?php
    /**
     * @var Person_entity $person
     */
    foreach ($persons as $person): ?>
        <div class="col-3 person-wrapper">

            <div class="img-wrapper">
                <?= image($person->getImage(),
                    'alt="image of ' . $person->getName() . '" data-id="' . $person->getId() . '"') ?>
            </div>
            <div class="score-wrapper score-wrapper-<?= $person->getId(); ?>" data-id="<?= $person->getId(); ?>">
                <?php
                $numbers = str_split($person->getScore());
                foreach ($numbers as $number):?>
                    <span><?= $number ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
