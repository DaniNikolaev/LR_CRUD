<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/header.php"?>
<h1>Список памятников</h1>
<table class="table table-hover table-responsive">
    <thead>
    <tr>
        <th>id</th>
        <th>Стиль памятника</th>
        <th>Цена памятника</th>
        <th colspan="2"></th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($items)): ?>
        <?php foreach ($items as $monument): ?>
            <tr>
                <th><?= intval($monument->id) ?></th>
                <td><?= htmlspecialchars($monument->getMonumentStyle()) ?></td>
                <td><?= htmlspecialchars($monument->getMonumentPrice()) ?></td>
                <td><a class="btn btn-primary" type="button" id="edit" href="/LR_CRUDS/monument/<?= intval($monument->id) ?>/edit">Редактировать</a>
                </td>
                <td><a class="btn btn-danger delete" type="button" id="delete" href="/LR_CRUDS/monument/<?= intval($monument->id) ?>/delete">Удалить</a>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
<a class="btn btn-primary" type="button"  href="/LR_CRUDS/monument/add">Добавить</a></div>
</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/footer.php"?>
