<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/header.php"?>
<h1>Список участков</h1>
<table class="table table-hover table-responsive">
    <thead>
    <tr>
        <th>id</th>
        <th>Номер участка</th>
        <th>Название кладбища</th>
        <th colspan="2"></th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($items)): ?>
        <?php foreach ($items as $plot): ?>
            <tr>
                <th><?= intval($plot->id) ?></th>
                <td><?= htmlspecialchars($plot->getPlotNumber()) ?></td>
                <td><?= htmlspecialchars($plot->getNecropolisName()) ?></td>
                <td><a class="btn btn-primary" type="button" id="edit" href="/LR_CRUDS/plot/<?= intval($plot->id) ?>/edit">Редактировать</a>
                </td>
                <td><a class="btn btn-danger delete" type="button" id="delete" href="/LR_CRUDS/plot/<?= intval($plot->id) ?>/delete">Удалить</a>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
<a class="btn btn-primary" type="button"  href="/LR_CRUDS/plot/add">Добавить</a></div>
</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/footer.php"?>
