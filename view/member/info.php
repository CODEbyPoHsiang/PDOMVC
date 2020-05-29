<!-- view/member/info.php -->
<?php $title = '個人資料' ?>



<?php ob_start() ?>
<h1><?= $member['name'] ?></h1>

<dl>
    <dt>姓名 : </dt>
    <dd><?= $member['name'] ?></dd>
    <dt>電話 : </dt>
    <dd><?= $member['phone'] ?></dd>
    <dt>name 英文名 : </dt>
    <dd><?= $member['ename'] ?></dd>
    <dt>信箱 : </dt>
    <dd><?= $member['email'] ?></dd>
</dl>
<?php $isi = ob_get_clean() ?>
<?php include 'view/template.php' ?>