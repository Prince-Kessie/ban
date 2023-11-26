<?php
function fetchAuthors($conn){
    $sql_fetch_tags = mysqli_query($conn, "SELECT * FROM `author` ORDER BY `author`.`name` ASC");
    if ($sql_fetch_tags -> num_rows > 0) {
        # code...
        foreach ($sql_fetch_tags as $key => $val) {
            # code...
            echo '
            <tr>
                <th scope="row">'.$val['authorId'].'</th>
                <td>'.$val['name'].'</td>
                <td><a href=""><i class="fa fa-trash"></i></a></td>
            </tr>

        ';
        }
        
    }

}
function fetchTags($conn){
    $sql_fetch_tags = mysqli_query($conn, "SELECT * FROM `tag` ORDER BY `tag`.`name` ASC");
    if ($sql_fetch_tags -> num_rows > 0) {
        # code...
        foreach ($sql_fetch_tags as $key => $val) {
            # code...
            echo '
            <tr>
                <th scope="row">'.$val['tagId'].'</th>
                <td>'.$val['name'].'</td>
                <td><a href=""><i class="fa fa-trash"></i></a></td>
            </tr>

        ';
        }
        
    }

}






