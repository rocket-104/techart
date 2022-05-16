<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<div>
<?php if (!empty($arResult)): ?>
    <?php foreach ($arResult as $item): ?>
        <div class="menu">
            <a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
            <?php if (!empty($item['subitems'])): ?>
                <div class="submenu">
                <ul>
                    <?php foreach ($item['subitems'] as $subitem): ?>
                        <li>
                            <a href="<?= $subitem['LINK']; ?>"><?= $subitem['TEXT'] ?? ''; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
</div>

<?endif?>
