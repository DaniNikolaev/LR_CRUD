<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/header.php"?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/LR_CRUDS/hall">Залы</a></li>
            <li class="breadcrumb-item active" aria-current="page">Новый зал</li>
        </ol>
    </nav>
    <h1>Добавить зал</h1>
<?php if(isset($data[0]['errors'])): ?>
    <div class="alert alert-danger" role="alert" >
        <ul>
            <?php foreach ($data[0]['errors'] as $error): ?>
                <li><?=$error?></li>
            <?php endforeach;?>
        </ul>
    </div>
<?php endif?>
    <form class="row row-cols-lg-auto g-3 align-items-center "   name="addHall" method="post" action="/LR_CRUDS/hall/add" >
        <div class="col-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Название зала" name ="setHallName"  maxlength="60" title="Название зала">
                <input type="number" class="form-control" placeholder="Стоимость зала" name ="setHallPrice"  maxlength="60" title="Стоимость зала">
                <input type="number" class="form-control" placeholder="Вместимость зала" name ="setHallCapacity"  maxlength="60" title="Вместимость зала">
            </div>
        </div>
        <div class="col-12"><button  class="btn btn-primary" type="submit">Добавить</button>	</div>
    </form>
    </div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/footer.php"?>