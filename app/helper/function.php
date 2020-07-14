<?php
<<<<<<< HEAD

function ShowErrors($errors, $name){
    if($errors->has($name)){
        echo '<div class="alert alert-danger" role="alert">';
        echo '<strong>'.$errors->first($name).'</strong>';
        echo '</div>';
    }
=======
function ShowError($errors, $name){
    if($errors->has($name))
    return '
    <div class="alert alert-danger" role="alert">
    <strong>'.$errors->first($name).'</strong>
    </div>
    ';
>>>>>>> admin/user
}