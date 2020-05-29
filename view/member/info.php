<!-- view/member/info.php -->
<?php $title = '個人資料' ?>
<?php ob_start() ?>
<h3>個人資料</h3>
<hr>
<dl>
    <dt>中文姓名 : <?= $member['name'] ?></dt>
    <dt>電話 : <?= $member['phone'] ?></dt>
    <dt>英文姓名 : <?= $member['ename'] ?></dt>
    <dt>電子信箱 : <?= $member['email'] ?></dt>
    <dt>性別 : <?= $member['sex'] ?></dt>
    <dt>居住城市 : <?= $member['city'] ?></dt>
    <dt>鄉鎮市區 : <?= $member['township'] ?></dt>
    <dt>郵遞區號 : <?= $member['postcode'] ?></dt>
    <dt>詳細地址 : <?= $member['address'] ?></dt>
    <dt>備註 : <?= $member['notes'] ?></dt>
</dl>
<hr>
<button class="btn btn-info" onclick="history.go(-1)" type="button">返回</button>
<?php $isi = ob_get_clean() ?>
<?php include 'view/template.php' ?>