<?php
$atuty1 = get_field( 'atut_1' );
$atuty2 = get_field( 'atut_2' );
$atuty3 = get_field( 'atut_3' );
$atuty4 = get_field( 'atut_4' );
?>

<div class="atuty">
    <div class="atuty__wrap">
        <div class="col">
            <h2 class="atut-title"><span>o</span> inwestycji</h2>
        </div>
        <div class="col">
            <div class="atuty__items">
                <?php if($atuty1) : ?>
                <div class="item">
                    <?php echo $atuty1['numer'] ? '<p>' . $atuty1['numer'] . '</p>' : false; ?>
                    <br>
                    <?php echo $atuty1['opis'] ? '<span>' . $atuty1['opis'] . '</span>' : false; ?>
                </div>
                <?php endif; ?>
                <?php if($atuty2) : ?>
                <div class="item">
                    <?php echo $atuty2['numer'] ? '<p>' . $atuty2['numer'] . '</p>' : false; ?>
                    <?php echo $atuty2['opis'] ? '<span>' . $atuty2['opis'] . '</span>' : false; ?>
                </div>
                <?php endif; ?>
                <?php if($atuty3) : ?>
                <div class="item">
                    <?php echo $atuty3['numer'] ? '<p>' . $atuty3['numer'] . '</p>' : false; ?>
                    <?php echo $atuty3['opis'] ? '<span>' . $atuty3['opis'] . '</span>' : false; ?>
                </div>
                <?php endif; ?>
                <?php if($atuty4) : ?>
                <div class="item">
                    <?php echo $atuty4['numer'] ? '<p>' . $atuty4['numer'] . '</p>' : false; ?>
                    <?php echo $atuty4['opis'] ? '<span>' . $atuty4['opis'] . '</span>' : false; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>