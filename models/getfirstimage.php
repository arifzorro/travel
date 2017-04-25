<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class getfirstimage {

    public function get_first_image_url($data, $default_url = null) {

    /**
     * Matched with ...
     * ----------------
     *
     * [1]. `![alt text](IMAGE URL)`
     * [2]. `![alt text](IMAGE URL "optional title")`
     *
     * ... and the single-quoted version of them
     *
     */
    if(preg_match_all('#\!\[.*?\]\(([^\s]+?)( +([\'"]).*?\3)?\)#', $data, $matches)) {
        return $matches[1][0];
    }

    /**
     * Matched with ...
     * ----------------
     *
     * [1]. `<img src="IMAGE URL">`
     * [2]. `<img foo="bar" src="IMAGE URL">`
     * [3]. `<img src="IMAGE URL" foo="bar">`
     * [4]. `<img src="IMAGE URL"/>`
     * [5]. `<img foo="bar" src="IMAGE URL"/>`
     * [6]. `<img src="IMAGE URL" foo="bar"/>`
     * [7]. `<img src="IMAGE URL" />`
     * [8]. `<img foo="bar" src="IMAGE URL" />`
     * [9]. `<img src="IMAGE URL" foo="bar" />`
     *
     * ... and the uppercased version of them, and the single-quoted version of them
     *
     */
    if(preg_match_all('#<img .*?src=([\'"])([^\'"]+?)\1.*? *\/?>#i', $data, $matches)) {
        return $matches[2][0];
    }

    return $default_url; // Default image URL if nothing matched
}

//ini buat funsgi sendiri true false kalo ada gambar
public function is_image($data, $default_url = null) {

    /**
     * Matched with ...
     * ----------------
     *
     * [1]. `![alt text](IMAGE URL)`
     * [2]. `![alt text](IMAGE URL "optional title")`
     *
     * ... and the single-quoted version of them
     *
     */
    if(preg_match_all('#\!\[.*?\]\(([^\s]+?)( +([\'"]).*?\3)?\)#', $data, $matches)) {
        return true;
    }

    /**
     * Matched with ...
     * ----------------
     *
     * [1]. `<img src="IMAGE URL">`
     * [2]. `<img foo="bar" src="IMAGE URL">`
     * [3]. `<img src="IMAGE URL" foo="bar">`
     * [4]. `<img src="IMAGE URL"/>`
     * [5]. `<img foo="bar" src="IMAGE URL"/>`
     * [6]. `<img src="IMAGE URL" foo="bar"/>`
     * [7]. `<img src="IMAGE URL" />`
     * [8]. `<img foo="bar" src="IMAGE URL" />`
     * [9]. `<img src="IMAGE URL" foo="bar" />`
     *
     * ... and the uppercased version of them, and the single-quoted version of them
     *
     */
    if(preg_match_all('#<img .*?src=([\'"])([^\'"]+?)\1.*? *\/?>#i', $data, $matches)) {
        return true;
    }

    return false; // Default image URL if nothing matched
}

public function get_string_directory_url_image($content){ 
    $content =
        preg_replace('/_n[^>]*.jpg/', '_n.jpg', $content);
    return $content;
} 

public function remove_image_url_in_content($content){
//    $content =  parse_url($content);
    $content = preg_replace("/<img[^>]+\>/i", "", $content); 
    return $content;
}


}