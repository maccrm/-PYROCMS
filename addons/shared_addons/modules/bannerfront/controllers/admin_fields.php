<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_fields extends Admin_Controller
{
protected $section = 'fields';

public function _construct() {
    parent::__construct();
    $this->lang->load('bannerfront');
    
    
}
public function index() {
    $extra['title']="Campos del slider";
    $extra['buttons'] = array(
    array(
        'label'     => lang('global:edit'),
        'url'       => 'admin/bannerfront/fields/edit/-assign_id-'
    ),
    array(
        'label'     => lang('global:delete'),
        'url'       => 'admin/bannerfront/fields/delete/-assign_id-',
        'confirm'   => true,
    )
);
     
    $this->streams->cp->assignments_table('banner_del_home', 'banner_del_home',  null,  null, true,$extra);
    
}
public function add_field() {
    $extra['title']="agregar campo al slider";
    $this->streams->cp->field_form('banner_del_home','banner_del_home', 'new', 'admin/bannerfront/fields/index', null, array(), true,$extra);
}


public function edit($id) {    
      $extra['title']="agregar campo al slider";
    $this->streams->cp->field_form('banner_del_home','banner_del_home', 'edit', 'admin/bannerfront/fields/index', $id, array(), true,$extra);
}

public function delete($id) {          
    $this->streams->cp->teardown_assignment_field($id, true);
    redirect('admin/bannerfront/fields/index');
}


}
