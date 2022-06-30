<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {   #function tampil data sub menu berdasarkan tabel user dan user_sub_menu
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM  `user_sub_menu` JOIN `user_menu`
                  ON    `user_sub_menu`.`menu_id` = `user_menu`.`id` ";

        return $this->db->query($query)->result_array();
    }
}
