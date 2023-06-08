<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/header.php"; ?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/LR_CRUDS/funeral">Похороны</a></li>
        <li class="breadcrumb-item active" aria-current="page">Редактирование похорон <?=$data[4]["currentItem"]->getFuneralName()?></li>
    </ol>
</nav>
<h1>Редактировать похороны</h1>
<?php if(isset($data[5]["errors"])): ?>
    <div class="alert alert-danger" role="alert" >
        <ul>
            <?php foreach ($data[5]["errors"] as $error): ?>
                <li><?=$error?></li>
            <?php endforeach;?>
        </ul>
    </div>
<?php endif?>
<form class="row row-cols-lg-auto g-3 align-items-center "   name="editFuneral" method="post"  action ="/LR_CRUDS/funeral/<?= intval($data[4]["currentItem"]->id) ?>/edit" >
    <div class="col-12">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Имя усопшего" name ="setFuneralName"  maxlength="60"
                   value="<?=htmlspecialchars($data[4]["currentItem"]->getFuneralName())?>" title="Имя усопшего">
            <input type="text" class="form-control" placeholder="Дата погребения" name ="setFuneralDate"  maxlength="60"
                   value="<?=htmlspecialchars($data[4]["currentItem"]->getFuneralDate())?>" title="Дата погребения">
        </div>
    </div>
    <div class="col-12">
        <div class="input-group">
            <select class="form-select" aria-label="Участки" name="setFuneralPlot" title="Номер участка">
                <?php if(isset($data[0]["allPlots"])): ?>
                    <?php foreach ($data[0]["allPlots"] as $plot): ?>
                        <?php if ($data[4]["currentItem"]->id_plot ==  intval($plot->id)): ?>
                            <option value="<?= intval($plot->id) ?>" selected><?=htmlspecialchars($plot->getPlotNumber().",".$plot->getNecropolisName()." кладбище")?></option>
                        <?php else:?>
                            <option value="<?= intval($plot->id) ?>" ><?=htmlspecialchars($plot->getPlotNumber().",".$plot->getNecropolisName()." кладбище")?></option>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endif;?>
            </select>
        </div>
    </div>
    <div class="col-12">
        <div class="input-group">
            <select class="form-select" aria-label="Залы" name="setFuneralHall" title="Название зала">
                <?php if(isset($data[1]["allHalls"])): ?>
                    <?php foreach ($data[1]["allHalls"] as $hall): ?>
                        <?php if ($data[4]["currentItem"]->id_hall ==  intval($hall->id)): ?>
                            <option value="<?= intval($hall->id) ?>" selected><?=htmlspecialchars($hall->getHallName().",".$hall->getHallPrice().",".$hall->getHallCapacity())?></option>
                        <?php else:?>
                            <option value="<?= intval($hall->id) ?>" ><?=htmlspecialchars($hall->getHallName().",".$hall->getHallPrice().",".$hall->getHallCapacity())?></option>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endif;?>
            </select>
        </div>
    </div>
    <div class="col-12">
        <div class="input-group">
            <select class="form-select" aria-label="Бригады" name="setFuneralBrigade" title="Название бригады">
                <?php if(isset($data[2]["allBrigades"])): ?>
                    <?php foreach ($data[2]["allBrigades"] as $brigade): ?>
                        <?php if ($data[4]["currentItem"]->id_brigade ==  intval($brigade->id)): ?>
                            <option value="<?= intval($brigade->id) ?>" selected><?=htmlspecialchars($brigade->getBrigadeName().",".$brigade->getBrigadePrice().",".$brigade->getBrigadeQuantity())?></option>
                        <?php else:?>
                            <option value="<?= intval($brigade->id) ?>" ><?=htmlspecialchars($brigade->getBrigadeName().",".$brigade->getBrigadePrice().",".$brigade->getBrigadeQuantity())?></option>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endif;?>
            </select>
        </div>
    </div>
    <div class="col-12">
        <div class="input-group">
            <select class="form-select" aria-label="Памятники" name="setFuneralMonument" title="Стиль памятника">
                <?php if(isset($data[3]["allMonuments"])): ?>
                    <?php foreach ($data[3]["allMonuments"] as $monument): ?>
                        <?php if ($data[4]["currentItem"]->id_monument ==  intval($monument->id)): ?>
                            <option value="<?= intval($monument->id) ?>" selected><?=htmlspecialchars($monument->getMonumentStyle().",".$monument->getMonumentPrice())?></option>
                        <?php else:?>
                            <option value="<?= intval($monument->id) ?>" ><?=htmlspecialchars($monument->getMonumentStyle().",".$monument->getMonumentPrice())?></option>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endif;?>
            </select>
        </div>
    </div>
    <div class="col-12"><button  class="btn btn-primary" type="submit">Отправить</button>	</div>
</form>
</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/footer.php"?>