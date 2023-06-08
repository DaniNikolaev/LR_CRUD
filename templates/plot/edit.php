<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/header.php";
?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/LR_CRUDS/plot">Участки</a></li>
            <li class="breadcrumb-item active" aria-current="page">Редактирование участка <?=$data[1]["currentItem"]->getPlotNumber()?></li>
        </ol>
    </nav>
    <h1>Редактировать участок</h1>
<?php if(isset($data[2]["errors"])): ?>
    <div class="alert alert-danger" role="alert" >
        <ul>
            <?php foreach ($data[2]["errors"] as $error): ?>
                <li><?=$error?></li>
            <?php endforeach;?>
        </ul>
    </div>
<?php endif?>
    <form class="row row-cols-lg-auto g-3 align-items-center" name="editPlot" method="post"  action ="/LR_CRUDS/plot/<?= intval($data[1]["currentItem"]->id) ?>/edit" >
        <div class="col-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Участок" name ="setPlotNumber"  maxlength="3" title="Номер участка"
                       value="<?=intval($data[1]["currentItem"]->getPlotNumber())?>">
            </div>
        </div>
        <div class="col-12">
            <div class="input-group">
                <select class="form-select" aria-label="Кладбища" name="setPlotNecropolis" title="Название кладбища">
                    <?php if(isset($data[0]["allNecropolises"])): ?>
                        <?php foreach ($data[0]["allNecropolises"] as $necropolis): ?>
                            <?php if ($data[1]["currentItem"]->id_necropolis ==  intval($necropolis->id)): ?>
                                <option value="<?= intval($necropolis->id) ?>" selected><?=htmlspecialchars($necropolis->getNecropolisName())?></option>
                            <?php else:?>
                                <option value="<?= intval($necropolis->id) ?>" ><?=htmlspecialchars($necropolis->getNecropolisName())?></option>
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