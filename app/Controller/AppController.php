<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
    public $components = array(
        'Flash',
        'Session',
        'RequestHandler',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'posts',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'display',
                'home'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish',
                    'fields' => array('username' => 'email')
                )
            ),
          //  'authorize' => array('Posts.add') // Added this line
        )
    );


    public function beforeFilter() {
        $role = 'guest';

        if($this->Auth->user('id')){
            $role = $this->Auth->user('role');
        }
        
        if(!$this->isAuthorized($role)){
            $this->dd("No tiene Acceso a este modulo");
        };

    }
    public function isAuthorized($role) {
        return true; //cambiar esto

        $current_url = strtolower($this->here);
       // $this->dd($current_url);
        if ($role === 'admin'){
            return true;
        }

        $permisos = $this->accessData($role);
        //$this->dd(in_array($current_url, $permisos));
        
       if(in_array($current_url, $permisos)){
            return true;
       }else{
            return false;
       };
         
    }

    public function accessData($role){
        $basics = [
            '/cakephp/',
            '/cakephp/users/login',
            '/cakephp/users/logout',
            '/cakephp/users/add',
        ];

        $accsessData = [
            'author'=>[
                '/cakephp/posts',
                '/cakephp/posts/add',
                '/cakephp/posts/view',
                '/cakephp/posts/message',
                '/cakephp/users',
                '/cakephp/users/add'
            ],
            'guest'=>[
                '/cakephp/posts/view',
                '/cakephp/posts/index',
                '/cakephp/posts/message',
            ]
        ];

        return array_merge($accsessData[$role], $basics);
    }
    public function dd($values, $second = null){
        debug($values, $second);
        die();
    }
}
