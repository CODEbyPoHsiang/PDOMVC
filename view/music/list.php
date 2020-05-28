<!-- view/member/list.php -->
<?php $title = '首頁'
?>

<?php ob_start() ?>
<div class="container">
    <div class="pull-right">
        <a href="http://localhost/pdomvc/index.php/music/create" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> 新增聯絡人</a>
    </div>
    <br />
    <br />
    <br />
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
        <div class="table table-striped table-hover">
            <table class="table">
                <tr class="info">
                    <th>姓名</th>
                    <th>電話</th>
                    <th>電子信箱</th>
                    <th>地址</th>
                    <th>詳細</th>
                    <th>操作</th>
                    <th>動作</th>
                </tr>
                <?php foreach ($music as $row) : ?>
                    <tr>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['ename'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><a href="http://localhost/pdomvc/index.php/music/info?id=<?= $row['id'] ?>" class="btn btn-success btn-xs" style="border-Radius: 0px;" >檢視</a></td>
                        <td><a href="http://localhost/pdomvc/index.php/music/edit?id=<?= $row['id'] ?>" class="btn btn-warning btn-xs" style="border-Radius: 0px;" ><span class="glyphicon glyphicon-edit"></span> 編輯</a></td>
                        <td><a href="http://localhost/pdomvc/index.php/music/delete?id=<?= $row['id'] ?>" onclick="return confirm('確定要刪除此筆資料?')" class="btn btn-danger btn-xs" style="border-Radius: 0px;"> <span class="glyphicon glyphicon-trash"></span> 刪除</a></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
        </div>
        <br>
        <?php $isi = ob_get_clean() ?>

        <?php include 'view/template.php' ?>