<!-- view/member/info.php -->
<?php $title = '個人資料' ?>

<?php ob_start() ?>
    <h1><?= $music['name'] ?></h1>

    <dl>
        <dt>姓名 : </dt>
        <dd><?= $music['name'] ?></dd>
        <dt>電話  : </dt>
        <dd><?= $music['phone'] ?></dd>
        <dt>name 英文名 : </dt>
        <dd><?= $music['ename'] ?></dd>
		<dt>信箱 : </dt>
        <dd><?= $music['email'] ?></dd>
    </dl>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>