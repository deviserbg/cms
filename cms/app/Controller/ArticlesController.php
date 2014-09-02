<?php

/*
 * Copyright 2014 Stefan Stefanov <deviserbg@gmail.com>.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Description of ArticlesController
 *
 * @author Stefan Stefanov <deviserbg@gmail.com>
 */
class ArticlesController extends AppController {
    public $name = "Articles";
    public $uses = array("Article", "ArticleImage");
     public $components = array('RequestHandler');
    
    public function index() {
//        debug("In Article");
    }
    
    public function view($slug) {
        $article = $this->Article->findBySlug($slug);
        
        if (empty($article)) {
            $this->redirect("/");
        }
        $this->set("article", $article);
    }
    
    public function load() {
        
        $path = ROOT . DS . APP_DIR . DS . WEBROOT_DIR . DS.  'images' .DS. 'photos' .DS. 'large' .DS. '*.jpg';
        $files = glob( $path);
        
        $data = array();
        foreach($files as $f){
                $data[] = array(
                        'thumb' => str_replace('large', 'thumbs', $f),
                        'large' => $f
                );
        }
        
        return new CakeResponse(array('data' => json_encode($data),
                                      'type' => 'json'));
    }
}
