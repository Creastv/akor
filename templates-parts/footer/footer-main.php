<?php 
$maenuOne = get_field('menus', 'options');
$menuTwo = get_field('menus_two', 'options');
$menuTree = get_field('menus_tree', 'options');

?>

<div class="f__menus">
    <div class="f__menus__wraper">
        <?php if($maenuOne) { ?>
        <div class="f__menus__col">
            <?php if($maenuOne['title_one']) { ?>
            <p><?php echo $maenuOne['title_one']; ?></p>
            <?php } else { ?>
            <span class="space"></span>
            <?php } ?>
            <?php echo $maenuOne['menu']; ?>
        </div>
        <?php } ?>

        <?php if($menuTwo) { ?>
        <div class="f__menus__col">
            <?php if($menuTwo['title']) { ?>
            <p><?php echo $menuTwo['title']; ?></p>
            <?php } else { ?>
            <span class="space"></span>
            <?php } ?>
            <?php echo $menuTwo['menu']; ?>
        </div>
        <?php } ?>

        <?php if($menuTree) { ?>
        <div class="f__menus__col">
            <?php if($menuTree['title']) { ?>
            <p><?php echo $menuTree['title']; ?></p>
            <?php } else { ?>
            <span class="space"></span>
            <?php } ?>
            <?php echo $menuTree['menu']; ?>
        </div>
        <?php } ?>
    </div>
</div>
