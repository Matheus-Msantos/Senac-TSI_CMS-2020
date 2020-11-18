<?php

/*
* Plugin name: plug-in com menu
* Plugin URI: https://github.com/Matheus-Msantos/senac-tsi_cms
* Description: Este é um plug-in que mostra como tarbalhar com o menu
* Version: 0.0.1
* Author: Matheus Melo
* Author URI: https://github.com/Matheus-Msantos
* License: CC BY
*/

add_action( 'admin_menu', 'menu_do_meu_plugin');

function menu_do_meu_plugin () {
   
    add_menu_page (
        'Configurações do Meu Plug-in',
        'Meu Plug-in', 
        'administrador',
        'meu-plugin-config',
        'abre_configuracoes',
        'dashicons-admin-generic'
    );
  
    /*
    add_submenu_page (
        'options-general.php',
        'Configurações do Meu Plug-in',
        'Meu Plug-in', 
        'administrador',
        'meu-plugin-config',
        'abre_configuracoes'

    );
    */
}

function abre_configuracoes () {
    require 'plugin_com_menu_tpl.php';
}