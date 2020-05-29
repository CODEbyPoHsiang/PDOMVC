<!-- view/member/list.php -->
<?php $title = '首頁'?>

<?php ob_start() ?>
<div class="container">
    <div class="pull-right">
        <a href="/index.php/member/create" class="btn btn-default pull-right" style="border-Radius: 0px;"><span class="glyphicon glyphicon-plus"></span> 新增聯絡人</a>
    </div>
    <br />
    <br />
    <br />
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <table class="table table-striped  table-hover">
                <tr class="info">
                    <th width="15%">姓名</th>
                    <th width="15%">電話</th>
                    <th width="25%">電子信箱</th>
                    <th width="40%">地址</th>
                    <th width="40%">檢視</th>
                    <th width="10%">操作</th>
                    <th width="10%">動作</th>
                </tr>
                <?php foreach ($member as $row) : ?>
                    <tr>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['address'] ?></td>
                        <td><a href="/index.php/member/info?id=<?= $row['id'] ?>" class="btn btn-success btn " style="border-Radius: 0px;">檢視</a></td>
                        <td><a href="/index.php/member/edit?id=<?= $row['id'] ?>" class="btn btn-warning btn " style="border-Radius: 0px;"><span class="glyphicon glyphicon-edit"></span> 編輯</a></td>
                        <td><a href="/index.php/member/delete?id=<?= $row['id'] ?>" onclick="return confirm('確定要刪除此筆資料?')" class="btn btn-danger btn " style="border-Radius: 0px;"> <span class="glyphicon glyphicon-trash"></span> 刪除</a></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
    <br>
    <?php $isi = ob_get_clean() ?>

    <?php include 'view/template.php' ?>