<!-- view/member/form.php -->
<?php
$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);

// Set form action
if ($uri[1] === 'edit') {
    $title = '編輯聯絡人';
    $form_action = "http://localhost/pdomvc/index.php/music/edit?id=" . $_GET['id'];
} else {
    $title = '新增聯絡人';
    $form_action = "http://localhost/pdomvc/index.php/music/create";
}

$valName = isset($music['name']) ? $music['name'] : '';
$valPhone = isset($music['phone']) ? $music['phone'] : '';
$valEname = isset($music['ename']) ? $music['ename'] : '';
$valEmail = isset($music['email']) ? $music['email'] : '';
$valId = isset($music['id']) ? $music['id'] : '';
?>

<?php ob_start() ?>
    <h1><?= $title ?></h1>

    <form action="<?= $form_action ?>" method="post">
        <?php if ($valId): ?>
            <input type="hidden" name="id" value="<?= $valId ?>">
        <?php endif ?>

        <div class="form-group">
            <label for="name">姓名</label>
            <input name="name" type="text" value="<?= $valName ?>" class="form-control" id="name" placeholder="Name Penyanyi atau Artis">
        </div>

        <div class="form-group">
            <label for="phone">電話</label>
            <input name="phone" type="text" value="<?= $valPhone ?>" class="form-control" id="phone" placeholder="Phone Lagu">
        </div>

        <div class="form-group">
            <label for="ename">英文名</label>
            <input name="ename" type="text" value="<?= $valEname ?>" class="form-control" id="ename" placeholder="Ename">
        </div>    
		
		<div class="form-group">
            <label for="email">電子信箱</label>
            <input name="email" type="text" value="<?= $valEmail ?>" class="form-control" id="email" placeholder="電子信箱">
        </div>

        <button class="btn btn-primary" type="submit">確認</button>
    </form>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>