<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/header.php"?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/LR_CRUDS/monument">Памятники</a></li>
            <li class="breadcrumb-item active" aria-current="page">Новый памятник</li>
        </ol>
    </nav>
    <h1>Добавить памятник</h1>
<?php if(isset($data[0]['errors'])): ?>
    <div class="alert alert-danger" role="alert" >
        <ul>
            <?php foreach ($data[0]['errors'] as $error): ?>
                <li><?=$error?></li>
            <?php endforeach;?>
        </ul>
    </div>
<?php endif?>
    <form class="row row-cols-lg-auto g-3 align-items-center "   name="addMonument" method="post" action="/LR_CRUDS/monument/add" >
        <div class="col-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Стиль памятника" name ="setMonumentStyle"  maxlength="60" title="Стиль памятника">
                <input type="number" class="form-control" placeholder="Цена памятника" name ="setMonumentPrice"  maxlength="60" title="Цена памятника">
            </div>
        </div>
        <div class="col-12"><button  class="btn btn-primary" type="submit">Добавить</button>	</div>
    </form>
    </div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] ."/LR_CRUDS/templates/inc/footer.php"?>