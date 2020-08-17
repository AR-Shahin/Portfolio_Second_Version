<?php require_once 'header.php';?>
<?php
use App\classes\Session;
use App\classes\Services;
?>
<div class="row">
    <div class="col-12">
        <h3 style="display: inline-block;">Manage Services</h3>
        <span style="color: green;font-size: 16px;margin-right: 25px;"><?= Session::get('deleteService')?></span>
        <span style="color: green;font-size: 16px;margin-right: 25px;"><?= Session::get('updateService')?></span>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12">
        <table class="display table table-bordered table-striped table-hover" id="dynamic-table">
            <thead>
            <tr>
                <th>SL</th>
                <th>Title</th>
                <th>Icon</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $ob = Services::displayAllServices();
            $i = 0;
            while ($row = mysqli_fetch_assoc($ob)){
                ?>
                <tr>
                    <td><?= ++$i?></td>
                    <td><?= $row['title']?></td>
                    <td><?= $row['icon']?></td>
                    <td><?= $row['status'] == 1 ? '<span class="badge badge-pill badge-success">Active</span>' : '<span class="badge badge-pill badge-danger">Inactive</span>' ?></td>
                    <td class="text-center">
                        <?php
                        if($row['status'] == 1) { ?>
                            <a href="status.php?id=<?= $row['id']?>&manageservice&inactive" class="btn btn-sm btn-success"><i class="fa  fa-hand-o-down"></i> Inactive</a>
                        <?php  }else{ ?>
                            <a href="status.php?id=<?= $row['id']?>&manageservice&active" class="btn btn-sm btn-warning"><i class="fa  fa-hand-o-up"></i> Active</a>
                        <?php } ?>
                        <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#id<?= $row['id']?>"><i class="fa fa-eye"></i> View</a>
                        <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#updateid<?= $row['id']?>"><i class="fa fa-pencil-square-o"></i> Edit</a>
                        <a href="delete.php?id=<?= $row['id']?>&manageservice" class="btn btn-sm btn-danger"onclick="return confirm('Are you sure ?')"><i class="fa fa-trash-o"></i> Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- VIEW POST Modal -->
<?php
$allData = Services::displayAllServices();
while ($row = mysqli_fetch_assoc($allData)){ ?>
    <div class="modal fade " id="id<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" style="overflow: hidden">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Title : <?= $row['title']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-hover" style="overflow:hidden;">
                        <tr>
                            <th>Icon</th>
                            <td><?= $row['icon']?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><?= $row['status'] == 1 ? '<span class="badge badge-pill badge-success">Active</span>' : '<span class="badge badge-pill badge-danger">Inactive</span>' ?></td>
                        </tr>
                        <tr>
                            <th>Content</th>
                            <td><?= $row['description']?></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>


<!-- UPDATE POST Modal -->
<?php
$allData = Services::displayAllServices();
while ($row = mysqli_fetch_assoc($allData)){ ?>
    <div class="modal fade " id="updateid<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" style="overflow: hidden">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Title : <?= $row['title']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="update.php" method="post">
                    <div class="modal-body">
                        <table class="table table-bordered table-hover" style="overflow:hidden;">
                            <tr>
                                <th>Title</th>
                                <td><input type="text" name="title" class="form-control" value="<?= $row['title']?>"></td>
                            </tr>
                            <tr>
                                <th>Icon</th>
                                <td><input type="text"  name="icon" class="form-control" value="<?= $row['icon']?>">
                                    <input type="hidden" name="id" class="form-control" value="<?= $row['id']?>">
                                </td>
                            </tr>
                            <tr>
                                <th>Content</th>
                                <td>
                                    <textarea name="description" id="" cols="30" rows="5" class="form-control"><?= $row['description']?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="update-service-btn" value="Update" class=" btn-block btn btn-success">
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php
Session::unsetSession('deleteService');
Session::unsetSession('updateService');
?>
<?php require_once 'footer.php';?>
