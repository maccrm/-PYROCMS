<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller
{
protected $section = 'slides';

public function _construct() {
    parent::__construct();
    $this->lang->load('bannerfront');
    
    
}
public function index() {
    $extra['title']="Slides";
    $extra['columns']= array('id', 'imagen_slider', 'texto_del_slider');
      $extra['buttons'] = array(
    array(
        'label'     => lang('global:edit'),
        'url'       => 'admin/bannerfront/edit/-entry_id-'
    ),
    array(
        'label'     => lang('global:delete'),
        'url'       => 'admin/bannerfront/delete/-entry_id-',
        'confirm'   => true,
    )
);
    $this->streams->cp->entries_table('banner_del_home','banner_del_home' , null, null, true,$extra);
    
}
public function create() {
    $extra['title']="Crear slide";
    $extra['return']='admin/bannerfront';
    $this->streams->cp->entry_form('banner_del_home', 'banner_del_home','new', null, true, $extra);
    
}

public function edit($id) {    
     $extra['title']="Editar slide";
    $extra['return']='admin/bannerfront';
    $this->streams->cp->entry_form('banner_del_home', 'banner_del_home','edit', $id, true, $extra);
}

public function delete($id) {          
    $this->streams->entries->delete_entry($id, 'banner_del_home', 'banner_del_home');
    redirect('admin/bannerfront');
}
}
