<?php include 'header.php'; ?>


<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">

        <!--Start Dashboard Content-->
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <div class="card-title">Add Authors</div>
                        <hr>

                        <form action="../includes/submission.inc.php" method="POST">
                            <div class="form-group">
                                <label for="input-1">Name</label>
                                <input type="text" name="author" class="form-control" id="input-1"
                                    placeholder="Enter Author Name" required>
                            </div>
                            <div class="form-group">
                                <label for="input-2">Biography</label>
                                <textarea type="text" name="bio" class="form-control" style="min-height:150px;"
                                    placeholder="Enter biography" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="save_author" class="btn btn-light px-5"><i
                                        class="icon-check"></i>
                                    Save Author</button>
                            </div>
                        </form>
                        <?php if (isset($_SESSION['msg'])): ?>
                            <h4 class="color-success text-center" style="color: #c9f7c9;"><i class="icon-check"></i>
                                <?= $_SESSION['msg'] ?>
                            </h4>
                        <?php endif; unset($_SESSION['msg']); ?>

                    </div>

                </div>
            </div>

        </div><!--End Row-->

        <!--End Dashboard Content-->

        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->

    </div>
    <!-- End container-fluid-->

</div><!--End content-wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->
<?php include 'footer.php'; ?>