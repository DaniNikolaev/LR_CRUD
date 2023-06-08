<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/header.php";
?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/LR_CRUDS/brigade">Бригады</a></li>
            <li class="breadcrumb-item active" aria-current="page">Новая бригада</li>
        </ol>
    </nav>
    <h1>Добавить бригаду</h1>
<?php if(isset($data[0]['errors'])): ?>
    <div class="alert alert-danger" role="alert" >
        <ul>
            <?php foreach ($data[0]['errors'] as $error): ?>
                <li><?=$error?></li>
            <?php endforeach;?>
        </ul>
    </div>
<?php endif?>
    <form class="row row-cols-lg-auto g-3 align-items-center "   name="addBrigade" method="post" action="/LR_CRUDS/brigade/add" >
        <div class="col-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Название бригады" name ="setBrigadeName"  maxlength="60" title="Название бригады">
                <input type="number" class="form-control" placeholder="Численность бригады" name ="setBrigadeQuantity"  maxlength="60" title="Численность бригады">
                <input type="number" class="form-control" placeholder="Стоимость бригады" name ="setBrigadePrice"  maxlength="60" title="Стоимость бригады">
            </div>
        </div>
        <div class="col-12"><button  class="btn btn-primary" type="submit">Отправить</button>	</div>
    </form>
    </div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/footer.php"?>