<?php include 'header.php'; ?>

<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <div class="card-title">Add Blogs</div>
                        <hr>

                        <form action="../includes/submission.inc.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="input-1">Title</label>
                                <input type="text" class="form-control" name="title" id="input-1"
                                 placeholder="Enter Title" required>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-1">Attach Tag</label>
                                        <select class="form-control" name="tagId" id="">

                                            <?php 
                                                $sql = mysqli_query($conn, "SELECT * FROM tag");
                                                if($sql -> num_rows > 0):
                                                    foreach ($sql as $key => $val) { 
                                            ?>
                                                    <option value="<?= $val['tagId'] ?>"><?= $val['name'] ?></option>
                                            <?php
                                                }
                                            endif;
                                            ?>
                                            
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-1">Author</label>
                                        <select class="form-control" name="authorId" id="">
                                        <?php 
                                                $author = mysqli_query($conn, "SELECT * FROM author");
                                                if($author -> num_rows > 0):
                                                    foreach ($author as $key => $author) { 
                                            ?>
                                                    <option value="<?= $author['authorId'] ?>"><?= $author['name'] ?></option>
                                            <?php
                                                }
                                            endif;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Main Image</label>
                                        <input type="file" class="form-control file" name="img" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Other Images</label>
                                        <input type="file" class="form-control file" name="pics[]" placeholder="Insert image" multiple>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input-3">Description</label>
                                <textarea type="text" name="description" class="form-control" style="min-height:500px;"
                                    placeholder="Enter biography" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-light px-5" name="save_blog">
                                    <i class="icon-lock"></i>
                                    Save
                                </button>
                            </div>
                        </form>
                        <?php if (isset($_SESSION['msg'])): ?>
                            <h4 class="color-success text-center" style="color: #c9f7c9;"><i class="icon-check"></i>
                                <?= $_SESSION['msg'] ?>
                            </h4>
                        <?php endif;
                        unset($_SESSION['msg']); ?>
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