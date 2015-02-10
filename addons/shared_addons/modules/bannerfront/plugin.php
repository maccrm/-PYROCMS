<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Plugin_bannerfront extends Plugin
{
	public $version = '1.0';

	public $name = array(
		'en'	=> 'banner front',
            'es'	=> 'banner front'
	);

	public $description = array(
		'en'	=> 'plugin for banners front module.',
            'es'	=> 'plugin para el modulo de banner front'
	);




	public function getsliders(){
            $params= array(
                'stream'=> 'banner_del_home',
                'namespace' => 'banner_del_home'
                
            );
		$q=$this->streams->entries->get_entries($params);
                
		
                    $results = array();
                    foreach ($q['entries'] as $e){
                        
                       $results[] =array(
                           
                           'thumb' => $e['thumb']['image'],
                           'image' => $e['imagen_slider']['image'],
                           'text' => $e['texto_del_slider'],
                           
                       );
                       
                    }
                    return $results;
                    
                
	}
        
        
       
        
}

/* End of file example.php */