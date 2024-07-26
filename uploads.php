<?php 
if(is_dir(__DIR__ . "/storage/uploads")){
    echo "UPLOADS ALREADY EXISTS!";
    return;
}
if(!mkdir(__DIR__ ."/storage/uploads", 0777, true)){
    echo "ERROR CREATING UPLOADS";
    return;
} else {
    echo "UPLOADS CREATED";
    return;
}