<!-- view/member/form.php -->
<?php
$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);

// Set form action
if ($uri[1] === 'edit') {
    $title = '編輯聯絡人';
    $form_action = "/index.php/member/edit?id=" . $_GET['id'];
} else {
    $title = '新增聯絡人';
    $form_action = "/index.php/member/create";
}

$valName = isset($member['name']) ? $member['name'] : '';
$valEname = isset($member['ename']) ? $member['ename'] : '';
$valPhone = isset($member['phone']) ? $member['phone'] : '';
$valEmail = isset($member['email']) ? $member['email'] : '';
$valSex = isset($member['sex']) ? $member['sex'] : '';
$valCity = isset($member['city']) ? $member['city'] : '';
$valTownship = isset($member['township']) ? $member['township'] : '';
$valPostcode = isset($member['postcode']) ? $member['postcode'] : '';
$valAddress = isset($member['address']) ? $member['address'] : '';
$valNotes = isset($member['notes']) ? $member['notes'] : '';
$valId = isset($member['id']) ? $member['id'] : '';
?>


<?php ob_start() ?>
<h3><?= $title ?></h3>
<hr>
<form action="<?= $form_action ?>" method="post">
    <div class="row">

        <?php if ($valId) : ?>
            <input type="hidden" name="id" value="<?= $valId ?>">
        <?php endif ?>

        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="name">中文姓名</label>
                    <input name="name" type="text" value="<?= $valName ?>" class="form-control" id="name" placeholder="請輸入姓名">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="phone">英文姓名</label>
                    <input name="phone" type="text" value="<?= $valEname ?>" class="form-control" id="phone" placeholder="請輸入電話">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <div class="form-group">
                    <label for="phone">電話</label>
                    <input name="phone" type="text" value="<?= $valPhone ?>" class="form-control" id="phone" placeholder="請輸入電話">
                </div>
            </div>
            <div class="col-xs-4">
                <div class="form-group">
                    <label for="email">電子信箱</label>
                    <input name="email" type="text" value="<?= $valEmail ?>" class="form-control" id="email">
                </div>
            </div>
            <div class="col-xs-4">
                <div class="form-group">
                    <label for="sex"">性別</label>
                    <input name=" sex" type="text" value="<?= $valSex ?>" class="form-control" id="sex">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <div class="form-group">
                    <label for="city">居住城市</label>
                    <input name=" city" type="text" value="<?= $valCity ?>" class="form-control" id="city">
                </div>
            </div>
            <div class="col-xs-4">
                <div class="form-group">
                    <label for="township"">鄉鎮市區</label>
                    <input name=" township" type="text" value="<?= $valTownship ?>" class="form-control" id="township">
                </div>
            </div>
            <div class="col-xs-4">
                <div class="form-group">
                    <label for="postcode"">郵遞區號</label>
                    <input name=" postcode" type="text" value="<?= $valPostcode ?>" class="form-control" id="postcode">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label for="address">詳細地址</label>
                    <input name=" address" type="text" value="<?= $valAddress ?>" class="form-control" id="address">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label for="notes"">備註</label>
                    <input name=" notes" type="text" value="<?= $valNotes ?>" class="form-control" id="notes">
                </div>
            </div>
        </div>
        <button class="btn btn-info" onclick="history.go(-1)" type="button">返回</button>
        <div class="pull-right">
            <button class="btn btn-primary" type="submit">確認</button> </div>
</form>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>