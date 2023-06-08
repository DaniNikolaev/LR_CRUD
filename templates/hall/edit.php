<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/header.php"; ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/LR_CRUDS/hall">Залы</a></li>
            <li class="breadcrumb-item active" aria-current="page">Редактирование зала <?=$data[0]["currentItem"]->getHallName()?></li>
        </ol>
    </nav>
    <h1>Редактировать зал</h1>
<?php if(isset($data[1]["errors"])): ?>
    <div class="alert alert-danger" role="alert" >
        <ul>
            <?php foreach ($data[1]["errors"] as $error): ?>
                <li><?=$error?></li>
            <?php endforeach;?>
        </ul>
    </div>
<?php endif?>
    <form class="row row-cols-lg-auto g-3 align-items-center "   name="editHall" method="post"  action ="/LR_CRUDS/hall/<?= intval($data[0]["currentItem"]->id) ?>/edit" >
        <div class="col-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Название зала" name ="setHallName"  maxlength="60"
                       value="<?=htmlspecialchars($data[0]["currentItem"]->getHallName())?>" title="Название зала">
                <input type="number" class="form-control" placeholder="Стоимость зала" name ="setHallPrice"  maxlength="60"
                       value="<?=htmlspecialchars($data[0]["currentItem"]->getHallPrice())?>" title="Стоимость зала">
                <input type="number" class="form-control" placeholder="Вместимость зала" name ="setHallCapacity"  maxlength="60"
                       value="<?=htmlspecialchars($data[0]["currentItem"]->getHallCapacity())?>" title="Вместимость зала">
            </div>
        </div>
        <div class="col-12"><button  class="btn btn-primary" type="submit">Отправить</button>	</div>
    </form>
    </div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/footer.php"?>