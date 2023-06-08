<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/header.php"?>
<h1>Список бригад</h1>
<table class="table table-hover table-responsive">
    <thead>
    <tr>
        <th>id</th>
        <th>Название бригады</th>
        <th>Численность бригады</th>
        <th>Стоимость бригады</th>
        <th colspan="2"></th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($items)): ?>
        <?php foreach ($items as $brigade): ?>
            <tr>
                <th><?= intval($brigade->id) ?></th>
                <td><?= htmlspecialchars($brigade->getBrigadeName()) ?></td>
                <td><?= htmlspecialchars($brigade->getBrigadeQuantity()) ?></td>
                <td><?= htmlspecialchars($brigade->getBrigadePrice()) ?></td>
                <td><a class="btn btn-primary" type="button" id="edit" href="/LR_CRUDS/brigade/<?= intval($brigade->id) ?>/edit">Редактировать</a>
                </td>
                <td><a class="btn btn-danger delete" type="button" id="delete" href="/LR_CRUDS/brigade/<?= intval($brigade->id) ?>/delete">Удалить</a>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
<a class="btn btn-primary" type="button"  href="/LR_CRUDS/brigade/add">Добавить</a></div>
</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/footer.php"?>
