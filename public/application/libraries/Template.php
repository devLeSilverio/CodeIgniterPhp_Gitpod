<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Template{
	function show($view,$data=array()){
        $CI = & get_instance();
        //carrega o conteudo da header
        $CI->load->view("template/header",$data);
        //carrega o conteudo da pagina (main)  
        $CI->load->view("template/main",$data);  
        //carrega o rodape 
        $CI->load->view("template/footer",$data);
        //carrega os scripts e fecha a pagina 
        $CI->load->view("template/scripts",$data);  



	} 
}

?>
