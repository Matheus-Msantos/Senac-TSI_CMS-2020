<?php

/*
* Plugin name: Meu primeiro plug-in
* Plugin URI: https://github.com/Matheus-Msantos/senac-tsi_cms
* Description: Este meu primeiro plug-in
* Version: 0.0.1
* Author: Matheus Melo
* Author URI: https://github.com/Matheus-Msantos
* License: CC BY
*/

add_filter('login_errors', 'altera_msg_login');

function altera_msg_login() {
    return 'Credenciais inválidas!';
}