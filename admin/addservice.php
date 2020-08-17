<?php require_once 'header.php';?>
<?php
use App\classes\Services;
use App\classes\Session;
?>
<div class="row">
    <div class="col-md-8 col-xs-12">
        <h3 style="display: inline-block;margin-right: 25px;">Add Services</h3>
        <span style="color: green;font-size: 20px;"><?= Session::get('failInsert')?></span>
        <span style="color: green;font-size: 20px;"><?= Session::get('successInsert')?></span>
    </div>
</div>
<hr>
<style>
    label{
        font-width: 500;
        font-size: 14px;
    }
</style>
<div class="row">
    <div class="col-md-12 col-lg-6">
        <form action="insert.php" method="post">

            <div class="form-group">
                <label for="">Titile : </label>
                <input type="text" name="title" placeholder="title " class="form-control">
                <span style="color: red"><?= Session::get('emptyTitle')?></span>
            </div>
            <div class="form-group">
                <label for="">Icon : </label>
                <input type="text" name="icon" placeholder="icon " class="form-control">
                <span style="color: red"><?= Session::get('emptyIcon')?></span>
            </div>
            <div class="form-group">
                <label for="">Description : </label>
                <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                <span style="color: red"><?= Session::get('emptyDes')?></span>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="status" id="gridRadios1" value="1">
                            <label class="form-check-label" for="gridRadios1">
                                Active
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="0">
                            <label class="form-check-label" for="gridRadios2">
                                Inactive
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="from-group">
                <input type="submit" value="Save" name="service-btn" class="btn-block btn btn-info">
            </div>
        </form>
    </div>
</div>
<?php
Session::unsetSession('emptyTitle');
Session::unsetSession('emptyIcon');
Session::unsetSession('emptyDes');
Session::unsetSession('successInsert');
Session::unsetSession('failInsert');
?>
<?php require_once 'footer.php';?>
