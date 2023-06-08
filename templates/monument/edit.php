<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/header.php";
?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/LR_CRUDS/monument">Памятники</a></li>
            <li class="breadcrumb-item active" aria-current="page">Редактирование памятника <?=$data[0]["currentItem"]->getMonumentStyle()?></li>
        </ol>
    </nav>
    <h1>Редактировать памятник</h1>
<?php if(isset($data[1]["errors"])): ?>
    <div class="alert alert-danger" role="alert" >
        <ul>
            <?php foreach ($data[1]["errors"] as $error): ?>
                <li><?=$error?></li>
            <?php endforeach;?>
        </ul>
    </div>
<?php endif?>
    <form class="row row-cols-lg-auto g-3 align-items-center "   name="editMonument" method="post"  action ="/LR_CRUDS/monument/<?= intval($data[0]["currentItem"]->id) ?>/edit" >
        <div class="col-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Стиль памятника" name ="setMonumentStyle"  maxlength="60"
                       value="<?=htmlspecialchars($data[0]["currentItem"]->getMonumentStyle())?>" title="Стиль памятника">
                <input type="text" class="form-control" placeholder="Цена памятника" name ="setMonumentPrice"  maxlength="60"
                       value="<?=htmlspecialchars($data[0]["currentItem"]->getMonumentPrice())?>" title="Цена памятника">
            </div>
        </div>
        <div class="col-12"><button  class="btn btn-primary" type="submit">Отправить</button>	</div>
    </form>
    </div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/footer.php"?>