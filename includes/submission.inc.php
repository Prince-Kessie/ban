<?php
include_once 'conn.inc.php';

if (isset($_POST['login'])) {
    # code...
    loginFunction($conn);
}

if (isset($_POST['save_author'])) {
    # code...
    SaveAuthorFunction($conn);
}
if (isset($_POST['save_tag'])) {
    # code...
    SaveTagFunction($conn);
}
if (isset($_POST['save_blog'])) {
    saveBlogFunction($conn);
}
function loginFunction($conn)
{
    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $password = $_POST['password'];

        $sql_query = mysqli_query($conn, "SELECT * FROM adminUser WHERE username = '$user' AND password='$password'");
        if ($sql_query->num_rows > 0) {
            # code...
            $_SESSION['user'] = $user;
            header('location: ../admin');
        } else {

            session_start();
            $_SESSION['error'] = 'Wrong Credentials';
            header('location: ../admin/login/');

        }

    } else {
        echo "error here";
    }
}
function SaveAuthorFunction($conn)
{
    if (isset($_POST['save_author'])) {
        $authorId = uniqid('ID-');
        $author = $_POST['author'];
        $bio = mysqli_real_escape_string($conn, $_POST['bio']);
        $save_author = mysqli_query($conn, "INSERT INTO `author` (`authorId`, `name`, `biography`) 
        VALUES ('$authorId', '$author', '$bio')");
        if ($save_author) {
            session_start();
            $_SESSION['msg'] = 'Author saved successfully';
            header('location: ../admin/add_author');
        } else {
            session_start();
            $_SESSION['msg'] = 'Author Saving failed';
            header('location: ../admin/add_author');
        }
    } else {
        session_start();
        $_SESSION['msg'] = 'Failed to save author';
        header('location: ../admin/add_author');
    }
}
function SaveTagFunction($conn)
{
    if (isset($_POST['save_tag'])) {
        $tagId = uniqid('ID-');
        $tag = $_POST['tag'];
        $save_tag = mysqli_query($conn, "INSERT INTO `tag` (`tagId`, `name`, `date_created`) 
        VALUES ('$tagId', '$tag ', NOW())");
        if ($save_tag) {
            session_start();
            $_SESSION['msg'] = 'Tag saved successfully';
            header('location: ../admin/add_tag');
        } else {
            session_start();
            $_SESSION['msg'] = 'Tag Saving failed';
            header('location: ../admin/add_tag');
        }
    } else {
        session_start();
        $_SESSION['msg'] = 'Failed to save Tag';
        header('location: ../admin/add_tag');
    }
}


function SaveBlogFunction($conn)
{
    if (isset($_POST['save_blog'])) {

        // Capturing data from the form
        $blogId = uniqid('Bl-');
        $title = $_POST['title'];
        $tagId = $_POST['tagId'];
        $authorId = $_POST['authorId'];
        $description = mysqli_real_escape_string($conn, $_POST['description']);

        // For Saving one Image
        $filename = $_FILES["img"]["name"];
        $tempname = $_FILES["img"]["tmp_name"];
        $folder = "../admin/uploads/" . $filename;

        // Saving into the blog table 
        $sql = mysqli_query($conn, "INSERT INTO `blog` (`blogId`, `authorId`, `title`, `img`, `description`, `date_created`) 
                VALUES ('$blogId', '$authorId', '$title', '$filename', '$description', NOW())");

        if (move_uploaded_file($tempname, $folder)) {
            // This line is to upload the image into our upload folder 
            move_uploaded_file($tempname, $folder);

            // This line is to generate unique Ids
            $blogTagId = uniqid('BT-');

            // Saving into the blog tags tables
            $sql_tag = mysqli_query($conn, "INSERT INTO `blog_tag` (`blogTagsId`, `blogId`, `tagId`) VALUES ('$blogTagId', '$blogId', '$tagId')");

            if ($sql_tag) {

                //  This code is for uploading and saving multiple Images to the folder and database
                $uploadFolder = '../admin/uploads/other_imgs/';
                foreach ($_FILES['pics']['tmp_name'] as $key => $image) {
                    $imageTmpName = $_FILES['pics']['tmp_name'][$key];
                    $imageName = $_FILES['pics']['name'][$key];
                    $blogImagesId = uniqid('Bi-');

                    // save to database
                    $save_image = mysqli_query($conn, "INSERT INTO `blogimages` (`blogImagesId`, `blogId`, `filename`) 
                                  VALUES ('$blogImagesId', '$blogId', '$imageName')");

                    if ($save_image) {
                        move_uploaded_file($imageTmpName, $uploadFolder . $imageName);
                    }
                }

                session_start();
                $_SESSION['msg'] = 'Blog saved successfully';
                header('location: ../admin/add_blog');

            }
            else {
                // error_reporting(-1);
                session_start();
                $_SESSION['msg'] = 'Failed at blog tags';
                header('location: ../admin/add_blog');
            }

        }
        else {
            session_start();
            $_SESSION['msg'] = 'Failed at blog saving';
            header('location: ../admin/add_blog');
        }


    } 
    else {
        session_start();
        $_SESSION['msg'] = 'Save blog button not clicked';
        header('location: ../admin/add_blog');
    }

}