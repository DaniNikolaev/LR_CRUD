<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/header.php"; ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/LR_CRUDS/plot">Участки</a></li>
            <li class="breadcrumb-item active" aria-current="page">Новый участок</li>
        </ol>
    </nav>
    <h1>Добавить участок</h1>
<?php if(isset($data[1]['errors'])): ?>
    <div class="alert alert-danger" role="alert" >
        <ul>
            <?php foreach ($data[1]['errors'] as $error): ?>
                <li><?=$error?></li>
            <?php endforeach;?>
        </ul>
    </div>
<?php endif?>

    <form class="row row-cols-lg-auto g-3 align-items-center " name="addPlot" method="post" action="/LR_CRUDS/plot/add" >
        <div class="col-4">
            <div class="input-group">
                <input type="number" class="form-control" placeholder="Номер участка" name ="setPlotNumber"  maxlength="60" title="Номер участка">
            </div>
        </div>
        <div class="col-4">
            <div class="input-group">
                <select class="form-select" aria-label="Кладбище" name="setPlotNecropolis" title="Кладбище">
                    <?php if(isset($data[0]["allNecropolises"])):?>
                        <?php foreach ($data[0]["allNecropolises"] as $necropolis):?>
                            <option value="<?= intval($necropolis->id) ?>"><?=htmlspecialchars($necropolis->getNecropolisName())?></option>
                        <?php endforeach;?>
                    <?php endif;?>
                </select>
            </div>
        </div>
        <div class="col-12"><button  class="btn btn-primary" type="submit">Добавить</button>	</div>
    </form>
<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/footer.php"?>