<?php
session_start();
require './db_connect.php';
require './utils.php';

if (isset($_POST['key'])) {
    try {
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($_POST['key'] == "get_users") {
        $start = $_POST['start'];
        $limit = $_POST['limit'];

        
            $sql = "SELECT users.id, users.username, users.created_at, users.status FROM users limit $start,$limit";
            $users = executer($sql);
            if(count($users) >0){
                $response ="";
                foreach ($users as $user) {
                    $response .= '
                <tr id="row-'.$user['id'].'">
                <td><img src="../../img/profiles/';
// get avatar
                $sql = "SELECT url FROM images WHERE userid = ".$user['id']."";
                    $images= executer($sql);

                    if(count($images) > 0){
                        $response .= $images[0]['url'].'" class="avatar" alt="Avatar">';
                    }else{
                        $response .= 'user.jpg" class="avatar" alt="Avatar">';
                    }

                    $response .= '</td><td>'.$user['username'].'</td>';
                    $response.='<td>'.$user['created_at'].'</td>';
// get roles

                    $sql = "SELECT role FROM roles WHERE userid = ".$user['id']."";
                    $roles= executer($sql);
                    $response .='<td>';
                    for ($i=0; $i < count($roles); $i++) { 
                        if($i>0){
                            $response .= ', '.$roles[$i]['role'];
                        }else{

                            $response .=$roles[$i]['role'];
                        }
                    }
                   
                    $response .= '</td>';
                    $response .= '<td>'.$user['status'].'</td>';
                    $response .= '
                    <td>
                        <a href="#setingsModal" class="settings" title="Settings" data-userid="'.$user['id'].'" data-toggle="modal" data-target="#settingsModal"><i class="material-icons">&#xE8B8;</i></a>
                        <a href="#deleteModal" class="delete" 
                        onclick="Users.deleteUser('.$user['id'].')"
                        title="Delete" data-toggle="modal"><i class="material-icons">&#xE872;</i></a>
                    </td>
                    </tr>
                    ';
                    
                }
                exit($response);
            }else{
                exit("no_more");
            }
            
        
    }elseif(($_POST['key'] == "add_user")){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $admin = $_POST['admin'];
        $username = $_POST['username'];
        $sql = "SELECT * FROM users WHERE email = '$email' OR username='$username'";
        $users = executer($sql);
        if(count($users)>0){
            exit('exist');
        }else{
            $sql = "INSERT INTO users (username,firstname,lastname,email) VALUES ('$username','$firstname','$lastname','$email')";
            if(noResultQuery($sql) == 'done'){
                $sql = "SELECT * FROM users WHERE email='$email'";
                $users = executer($sql);
                $userid= $users[0][id];
                $sql = "INSERT INTO roles (userid, role) VALUES ($userid, 'user')";
                if(noResultQuery($sql) == 'done'){
                    $sql = "INSERT INTO socialnetwork (userid, facebook, instagram, youtube, googleplus, twitter) VALUES ($userid, null, null, null, null, null)";
                    if(noResultQuery($sql) == 'done'){
                        if($admin == 1){
                            $sql = "INSERT INTO roles (userid, role) VALUES ($userid, 'admin')";
                            $result= noResultQuery($sql);
                        }
                            exit('user_added');

                    }

                }
            }else{
                exit('failed');
            }
        }
    }

    } 
        catch (PDOException $e) {
        echo $e->getMessage();
        }
}