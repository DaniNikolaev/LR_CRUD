<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/header.php"?>
<h1>Список залов</h1>
<table class="table table-hover table-responsive">
    <thead>
    <tr>
        <th>id</th>
        <th>Название зала</th>
        <th>Стоимость зала</th>
        <th>Вместимость зала</th>
        <th colspan="2"></th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($items)): ?>
        <?php foreach ($items as $hall): ?>
            <tr>
                <th><?= intval($hall->id) ?></th>
                <td><?= htmlspecialchars($hall->getHallName()) ?></td>
                <td><?= htmlspecialchars($hall->getHallPrice()) ?></td>
                <td><?= htmlspecialchars($hall->getHallCapacity()) ?></td>
                <td><a class="btn btn-primary" type="button" id="edit" href="/LR_CRUDS/hall/<?= intval($hall->id) ?>/edit">Редактировать</a>
                </td>
                <td><a class="btn btn-danger delete" type="button" id="delete" href="/LR_CRUDS/hall/<?= intval($hall->id) ?>/delete">Удалить</a>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
<a class="btn btn-primary" type="button"  href="/LR_CRUDS/hall/add">Добавить</a></div>
</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/footer.php"?>
