<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';
	
	public function beforeFilter() {
	    parent::beforeFilter();
		
		$this->loadModel('PageContent');
				
	    $this->Auth->allow();
		$this->loadModel('Banner');
	
		$mobile_detect = false;
		
		if($this->RequestHandler->isMobile()) {
			$mobile_detect = true;
		}
		
		$newsletter = $this->PageContent->find('first', array('conditions'=>array('PageContent.category'=>22), 'order'=>array('PageContent.id' => 'DESC')));
		
		$this->set(compact('mobile_detect', 'newsletter'));
	}

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();
	
	public function index(){
		$title_for_layout = "home";
		$banners = $this->Banner->getBannerCategory(1);
		$goal = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>25)));
		$partners = $this->PageContent->find('all', array('conditions'=>array('PageContent.category'=>16)));
		
		$this->set(compact('title_for_layout', 'banners', 'partners', 'goal'));
	}
	
	public function about_us(){
		$title_for_layout = "About Us";
		$content = $this->PageContent->find('all', array('conditions'=>array('PageContent.category'=>1)));
		$this->set(compact('title_for_layout', 'content'));
	}
	
	// public function projects(){
// 		$title_for_layout = "Projects";
// 		$content = $this->PageContent->find('all', array('conditions'=>array('PageContent.category'=>7)));
// 		$parent = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>7)));
// 		$projects = $this->PageContent->find('all', array('conditions'=>array('PageContent.category'=>10), 'limit'=>5));
// 		$goal = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>25)));
// 		$this->set(compact('title_for_layout', 'content', 'projects', 'parent', 'goal'));
// 	}
	
	public function projects($id=null){
		$title_for_layout = "Projects";
		
		$this->loadModel('ProjectCategory');
		$this->loadModel('News');
		$read = null;
		$news = null;
		$current_category = null;
		
		$project_categories = $this->ProjectCategory->find('all');
		
		if($id){
			$current_category = $id;
			$project = $this->PageContent->find('first', array('conditions'=>array('PageContent.slug'=>$id)));
		}else{
			$project = $this->PageContent->find('first', array('conditions'=>array('PageContent.category'=>10)));
			$current_category = $project['PageContent']['slug'];
		}
		
		$this->paginate = array('conditions'=>array('News.category'=>1), 'order'=>array('News.news_date' => 'DESC'), 'limit' => 6);
		$this->News->recursive = 0;
		$news = $this->paginate('News');
		
		$projects = $this->PageContent->find('all', array('conditions'=>array('PageContent.category'=>10, 'PageContent.hide'=>0)));
		
		$this->set(compact('title_for_layout', 'content', 'project', 'projects', 'project_categories', 'current_category', 'news'));
	}
	
	public function goal(){
		$title_for_layout = "Goal";
		$this->loadModel('News');
		$parent = $this->PageContent->find('first', array('conditions'=>array('PageContent.id'=>25)));
		$goal = $this->PageContent->find('all', array('conditions'=>array('PageContent.category'=>25)));
		
		$this->paginate = array('conditions'=>array('News.category'=>2), 'order'=>array('News.news_date' => 'DESC'), 'limit' => 6);
		$this->News->recursive = 0;
		$news = $this->paginate('News');
		
		$projects = $this->PageContent->find('all', array('conditions'=>array('PageContent.category'=>10, 'PageContent.hide'=>0)));
		$this->set(compact('title_for_layout', 'parent', 'goal', 'news', 'projects'));
	}
	
	public function saf_news($id=null){
		$title_for_layout = "SAF News";
		$this->loadModel('News');
		$read = null;
		$this->paginate = array('conditions'=>array('News.category'=>1), 'order'=>array('News.news_date' => 'DESC'), 'limit' => 8);
		$this->News->recursive = 0;
		$news = $this->paginate('News');
		
		if($id){
			$read = true;
			$news = $this->News->find('first', array('conditions'=>array('News.slug'=>$id)));
		}
		
		$this->set(compact('title_for_layout', 'news', 'read'));
	}
	
	public function goal_news($id=null){
		$title_for_layout = "GOAL News";
		$this->loadModel('News');
		$read = null;
		$this->paginate = array('conditions'=>array('News.category'=>2), 'order'=>array('News.news_date' => 'DESC'), 'limit' => 8);
		$this->News->recursive = 0;
		$news = $this->paginate('News');
		
		if($id){
			$read = true;
			$news = $this->News->find('first', array('conditions'=>array('News.slug'=>$id)));
		}
		
		$this->set(compact('title_for_layout', 'news', 'read'));
	}
	
	public function contact_us(){
		$title_for_layout = "Contact us";
		$banner = $this->Banner->find('first', array('conditions'=>array('Banner.id'=>3)));
		$contacts = $this->PageContent->find('all', array('conditions'=>array('PageContent.category'=>17)));
		$this->set(compact('title_for_layout', 'contacts', 'banner'));
	}
	
	public function process(){

		$this->layout = 'blank';

		if(!empty($this->request->data)):
			
		$email = new CakeEmail('smtp');
		//$email->from(array($this->request->data['Contact']['email'] => $this->request->data['Contact']['name']));
		
		$email->to('Daniel@safghana.org');
		$email->cc(array('Hanni@safghana.org', 'AliceAn2@stlghana.com'));
		$email->subject('SAF - '.$this->request->data['Contact']['subject']);
		$email->replyTo($this->request->data['Contact']['email']);
		$email->sender('no-reply@safghana.com', 'SAF');
		$email->emailFormat('html');
		$email->template('contact');
		$email->viewVars(array(
	                'name' => $this->request->data['Contact']['name'],
	                'email' => $this->request->data['Contact']['email'],
					'subject' => $this->request->data['Contact']['subject'],
					'message' => $this->request->data['Contact']['message']
				)
			);

			if($email->send()):
				echo '<div class="alert-box primary">Thank you for contacting SAF<a href="" class="close">&times;</a></div>';
			else:
            	echo '<div class="alert-box alert">email error<a href="" class="close">&times;</a></div>';
			endif;
    else:
         $this->flash('Form field cannot be empty<a href="" class="close">&times;</a>', 'default', array('class' => 'alert-box alert'));
	endif;

	}
	
// 	public function download($file_name = null, $file_dir = null) {
//         $this->autoRender = false;
//         $this->layout = 'ajax';
//
// 		if(!$file_dir){
// 			$file_dir = 'downloads';
// 		}
//
//         if(!$file_name) {
//             $this->Session->setFlash('You have not specified a file to download');
//             //$this->redirect(array('action' => 'index'));
//         }
//
//         $file = $file_name;
//
//         if($file) {
//             header("Content-Description: File Transfer");
//             header("Content-Type: application/octet-stream");
//             header("Content-Disposition: attachment; filename=".$file);
//             header("Content-Transfer-Encoding: binary");
//             header("Expires: 0");
//             header("Content-Length: " . filesize(WWW_ROOT .'files' . DS . $file_dir . DS . $file));
//             header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
//             header("Pragma: public");
//             readfile(WWW_ROOT .'files' . DS . $file_dir . DS . $file);
//         } else {
//             $this->Session->setFlash('The file you are trying to download does not exist, please try again');
//             //$this->redirect(array('action' => 'index'));
//         }
// 	}
	
	public function download($file_name = null, $file_dir = null){
        $this->layout = 'blank';
		
		if(!$file_dir){
			$file_dir = 'downloads';
		}
		

        if(!$file_name) {
            $this->Session->setFlash('You have not specified a file to download');
            //$this->redirect(array('action' => 'index'));
        }

        $file = $file_name;

        if($file) {
		    $this->response->file(WWW_ROOT .'files' . DS . $file_dir . DS . $file);
		    $this->response->header('Content-Disposition', 'inline');
		    return $this->response;
        } else {
            $this->Session->setFlash('The file you are trying to view does not exist, please try again');
            //$this->redirect(array('action' => 'index'));
        }
	    
	}
	
	public function search(){
		$this->layout = 'ajax';
		$this->loadModel('PageContent');
		
		if($this->request->is('post')){
			$keywords = $this->request->data['query'];
			$num_of_rows = 0;
			
			//All misc search results
			$all_results = $this->PageContent->find('all', array('conditions'=>array('NOT'=>array(), 'OR'=>array("PageContent.title LIKE" =>"%$keywords%", "PageContent.content LIKE" =>"%$keywords%")), 'group' => array('PageContent.id'), 'limit'=>6));
			
			$num_of_rows = $this->PageContent->find('count', array('conditions'=>array('NOT'=>array(), 'OR'=>array("PageContent.title LIKE" =>"%$keywords%", "PageContent.content LIKE" =>"%$keywords%")), 'group' => array('PageContent.id')));
						
			$all_search = array('misc'=>$all_results);
										
			//Merging search results
			$search_results = array_merge($all_search);
					
		}else{
			$search_results = null;
		}
								
		$this->set(compact('search_results', 'keywords', 'num_of_rows'));
	}
	
	public function ajax_search(){
		$this->layout = 'ajax';
		$this->loadModel('PageContent');
		
		if($this->request->is('post')){
			$keywords = $this->request->data['query'];
			$num_of_rows = 0;
			
			//All misc search results
			$all_results = $this->PageContent->find('all', array('conditions'=>array('NOT'=>array(), 'OR'=>array("PageContent.title LIKE" =>"%$keywords%", "PageContent.content LIKE" =>"%$keywords%")), 'group' => array('PageContent.id')));
			
			$num_of_rows = $this->PageContent->find('count', array('conditions'=>array('NOT'=>array(), 'OR'=>array("PageContent.title LIKE" =>"%$keywords%", "PageContent.content LIKE" =>"%$keywords%")), 'group' => array('PageContent.id')));
						
			$all_search = array('misc'=>$all_results);
										
			//Merging search results
			$search_results = array_merge($all_search);
					
		}else{
			$search_results = null;
		}
								
		$this->set(compact('search_results', 'keywords', 'num_of_rows'));
	}
	
	public function more_search($keywords=null){
		$title_for_layout = "Search";
		$this->loadModel('PageContent');
		
		if($keywords){			
			$num_of_rows = 0;
			
			//All misc search results
			$all_results = $this->PageContent->find('all', array('conditions'=>array('NOT'=>array(), 'OR'=>array("PageContent.title LIKE" =>"%$keywords%", "PageContent.content LIKE" =>"%$keywords%")), 'group' => array('PageContent.id')));
			
			$num_of_rows = $this->PageContent->find('count', array('conditions'=>array('NOT'=>array(), 'OR'=>array("PageContent.title LIKE" =>"%$keywords%", "PageContent.content LIKE" =>"%$keywords%")), 'group' => array('PageContent.id')));
						
			$all_search = array('misc'=>$all_results);
										
			//Merging search results
			$search_results = array_merge($all_search);
			
		}elseif($this->request->is('post')){
			$keywords = $this->request->data['query'];
			
			$num_of_rows = 0;
			
			//All misc search results
			$all_results = $this->PageContent->find('all', array('conditions'=>array('NOT'=>array(), 'OR'=>array("PageContent.title LIKE" =>"%$keywords%", "PageContent.content LIKE" =>"%$keywords%")), 'group' => array('PageContent.id')));
			
			$num_of_rows = $this->PageContent->find('count', array('conditions'=>array('NOT'=>array(), 'OR'=>array("PageContent.title LIKE" =>"%$keywords%", "PageContent.content LIKE" =>"%$keywords%")), 'group' => array('PageContent.id')));
						
			$all_search = array('misc'=>$all_results);
										
			//Merging search results
			$search_results = array_merge($all_search);
					
		}else{
			$search_results = null;
		}
								
		$this->set(compact('title_for_layout', 'search_results', 'keywords', 'num_of_rows'));
	}
}
