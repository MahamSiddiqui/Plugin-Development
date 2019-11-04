<?php
/*
Plugin Name: My First Plugin
Description: This is my first plugin! its redirectly open the post without showing "view link" and "visit link" option.
Author: Maham Javed
version: 1.0
*/
function mfp_plugin(){
    if(!is_admin()) {
     echo "This is my First plugin.";
    
     }
}
//call the function
mfp_plugin();
