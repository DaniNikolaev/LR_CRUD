<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/header.php"?>
<h1>Список похорон</h1>
<table class="table table-hover table-responsive">
    <thead>
    <tr>
        <th>id</th>
        <th>Имя усопшего</th>
        <th>Дата погребения</th>
        <th>Участок</th>
        <th>Поминальный зал</th>
        <th>Бригада</th>
        <th>Стиль памятника</th>
        <th colspan="2"></th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($items)): ?>
        <?php foreach ($items as $funeral): ?>
            <tr>
                <th><?= intval($funeral->id) ?></th>
                <td><?= htmlspecialchars($funeral->getFuneralName()) ?></td>
                <td><?= htmlspecialchars($funeral->getFuneralDate()) ?></td>
                <td><?= htmlspecialchars($funeral->getPlotNumber()) ?></td>
                <td><?= htmlspecialchars($funeral->getHallName()) ?></td>
                <td><?= htmlspecialchars($funeral->getBrigadeName()) ?></td>
                <td><?= htmlspecialchars($funeral->getMonumentStyle()) ?></td>
                <td><a class="btn btn-primary" type="button" id="edit" href="/LR_CRUDS/funeral/<?= intval($funeral->id) ?>/edit">Редактировать</a>
                </td>
                <td><a class="btn btn-danger delete" type="button" id="delete" href="/LR_CRUDS/funeral/<?= intval($funeral->id) ?>/delete">Удалить</a>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
<a class="btn btn-primary" type="button"  href="/LR_CRUDS/funeral/add">Добавить</a></div>
</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/footer.php"?>
