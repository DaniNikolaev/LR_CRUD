<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/header.php";
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/LR_CRUDS/funeral">Похороны</a></li>
        <li class="breadcrumb-item active" aria-current="page">Новые похороны</li>
    </ol>
</nav>
<h1>Добавить похороны</h1>
<?php if(isset($data[4]['errors'])): ?>
    <div class="alert alert-danger" role="alert" >
        <ul>
            <?php foreach ($data[4]['errors'] as $error): ?>
                <li><?=$error?></li>
            <?php endforeach;?>
        </ul>
    </div>
<?php endif?>
<form class="row row-cols-lg-auto g-3 align-items-center " name="addFuneral" method="post" action="/LR_CRUDS/funeral/add" >
    <div class="col-12">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Имя усопшего" name ="setFuneralName"  maxlength="60" title="Имя усопшего">
            <input type="text" class="form-control" placeholder="Дата погребения" name ="setFuneralDate"  maxlength="60" title="Дата погребения">
            <select class="form-select" aria-label="Участок" name="setFuneralPlot" title="Участок">
                <?php if(isset($data[0]["allPlots"])):?>
                    <?php foreach ($data[0]["allPlots"] as $plot):?>
                        <option value="<?= intval($plot->id) ?>"><?=htmlspecialchars($plot->getPlotNumber().",".$plot->getNecropolisName()." кладбище")?></option>
                    <?php endforeach;?>
                <?php endif;?>
            </select>
            <select class="form-select" aria-label="Зал" name="setFuneralHall" title="Зал">
                <?php if(isset($data[1]["allHalls"])):?>
                    <?php foreach ($data[1]["allHalls"] as $hall):?>
                        <option value="<?= intval($hall->id) ?>"><?=htmlspecialchars($hall->getHallName().",".$hall->getHallPrice().",".$hall->getHallCapacity())?></option>
                    <?php endforeach;?>
                <?php endif;?>
            </select>
            <select class="form-select" aria-label="Бригада" name="setFuneralBrigade" title="Бригада">
                <?php if(isset($data[2]["allBrigades"])):?>
                    <?php foreach ($data[2]["allBrigades"] as $brigade):?>
                        <option value="<?= intval($brigade->id) ?>"><?=htmlspecialchars($brigade->getBrigadeName().",".$brigade->getBrigadePrice().",".$brigade->getBrigadeQuantity())?></option>
                    <?php endforeach;?>
                <?php endif;?>
            </select>
            <select class="form-select" aria-label="Памятник" name="setFuneralMonument" title="Памятник">
                <?php if(isset($data[3]["allMonuments"])):?>
                    <?php foreach ($data[3]["allMonuments"] as $monument):?>
                        <option value="<?= intval($monument->id) ?>"><?=htmlspecialchars($monument->getMonumentStyle().",".$monument->getMonumentPrice())?></option>
                    <?php endforeach;?>
                <?php endif;?>
            </select>
        </div>
    </div>
    <div class="col-12"><button  class="btn btn-primary" type="submit">Добавить</button>	</div>
</form>
</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/footer.php"?>