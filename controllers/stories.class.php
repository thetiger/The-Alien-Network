<?php
// @author     Jonathon Maguire, www.coderlite.com, www.thealiennetwork.co.uk
// @coder      Jonathon Maguire, jonathonmaguire@gmail.com
// @version    4.0
// @file		stories.class.php


if(!defined('IN_ROOT')) { die(DOMAIN); }

class stories {
	
	public static $sql;
	public static $data;
	public static $info;
	public static $check;
	public static $id;
	public static $uniqueid;
	public static $link;
	public static $time;
	public static $data2;
	public static $comments;
	public static $likes;
    public static $num;
	
	
	public static function front4pinned(){
		
		self::$sql = db::query("SELECT `cat`,`uniqueid`,`title`,`post` FROM `alien_stories` WHERE `pinned` = '1' ORDER BY `date` DESC LIMIT 4");
		
		self::$info = '';
		
		if(db::nRows(self::$sql) > 0){
			
			while(self::$data = db::fetch(self::$sql)){
			self::$info .= '<h4 class="pull-left"><span class="glyphicon glyphicon-th-list"></span> '.substr(self::$data['title'], 0, 25).'</h4>
<p class="pull-left">'.strip_tags(substr(self::$data['post'], 0, 85), '').'   
</p>
<a class="links pull-right" href="story/'.strip_tags(substr(self::$data['cat'], 0, 85), '').'/'.trim(str_replace('?/', '', strip_tags(self::$data['title']))).'/
'.strip_tags(substr(self::$data['uniqueid'], 0, 85), '').'">Read More</a>';	
				
			}
			
		}
        		else
			{
				self::$info = 'No results';
			}

		return self::$info;
	
}

	public static function getstoriesforindex($cat){
		
			self::$sql = db::query("SELECT `cat`,`uniqueid`,`title`,`post` FROM `alien_stories` WHERE `cat` = '".db::mss($cat)."' ORDER BY `date` DESC");
		
		self::$info = '';
		
		if(db::nRows(self::$sql) > 0){
			
			while(self::$data = db::fetch(self::$sql)){
			self::$info .= '<h4 class="text-left"><span class="glyphicon glyphicon-th-list"></span> '.substr(self::$data['title'], 0, 25).'</h4>
<p class="text-left">'.strip_tags(substr(self::$data['post'], 0, 85), '').'
<br><a class="links pull-right" href="story/'.strip_tags(substr(self::$data['cat'], 0, 85), '').'/'.trim(str_replace('?/', '',
strip_tags(self::$data['title']))).'/'.strip_tags(substr(self::$data['uniqueid'], 0, 85), '').'">Read More</a>
</p>
<hr style="width:60px; height:1px; background-color:#FFF; opacity:0.2;">';	
				
			}
			
		}
		return self::$info;
		
	}
	
	public static function getliveselected(){
		
		self::$sql = db::query("SELECT * FROM `alien_stories` WHERE `flag` = '1' AND `status` = '1' ORDER BY `date` DESC LIMIT 1");
		
			if(db::nRows(self::$sql) > 0){
			
			while(self::$data = db::fetch(self::$sql)){
			self::$info .= '<h3 class="textcenter redtext"> '.substr(self::$data['title'], 0, 55).'</h3>
<p>'.self::$data['post'].'</p>
<h4><a class="links pull-right" href="story/'.strip_tags(substr(self::$data['cat'], 0, 85), '').'/'.trim(str_replace('?/', '', strip_tags(self::$data['title']))).'/'.strip_tags(substr(self::$data['uniqueid'], 0, 85), '').'">Read More</a></h4>';	
				
			}
			
		}
		return self::$info;
		
	}
	
		public static function getliveselectedvideo(){
		
		self::$sql = db::query("SELECT * FROM `alien_stories` WHERE `flag` = '1' AND `status` = '1' ORDER BY `date` DESC LIMIT 1");
		self::$info = '';
		
			if(db::nRows(self::$sql) == 1){
			
			while(self::$data = db::fetch(self::$sql)){
				
			echo self::$data['videoid'];
				
			}
			
		}
		else
			{
				self::$info = 'No results';
			}
		
	}
	
	public static function grabpostforfirst($key){
		
		self::$info = '';
		
		self::$sql = db::query("SELECT * FROM `alien_stories` WHERE `uniqueid` = '".$key."'");
		
		if(db::nRows(self::$sql) > 0){
			
			while(self::$data = db::fetch(self::$sql)){
				
				self::$info .= self::$data['post'];
				
			}
			
			return self::$info;
		}
		
	}
	
		public static function grabvideoforfirst($key){
		
		self::$info = '';
		
		self::$sql = db::query("SELECT `videoid` FROM `alien_stories` WHERE `uniqueid` = '".$key."'");
		
		if(db::nRows(self::$sql) > 0){
			
			while(self::$data = db::fetch(self::$sql)){
				
				self::$info .= self::$data['videoid'];
				
			}

		}
            else
            {
                self::$info .= 'dX3k_QDnzHE';
            }
            
            return self::$info;
            
            
            
	}
	
		public static function grabusernameforstory($key){
		
		self::$info = '';
		
		self::$sql = db::query("SELECT `owner` FROM `alien_stories` WHERE `uniqueid` = '".$key."'");
		
		if(db::nRows(self::$sql) > 0){
			
			while(self::$data = db::fetch(self::$sql)){
				
				self::$info .= self::$data['owner'];
				
			}

		}
            
            return self::$info;
            
            
            
	}
    
    		public static function grabpostforstory($key){
		
		self::$info = '';
		
		self::$sql = db::query("SELECT `username`,`post` FROM `alien_comments` WHERE `storyid` = '".$key."' ORDER BY `id` DESC LIMIT 20");
		
		if(db::nRows(self::$sql) > 0){
            
            self::$num = 0;
			
			while(self::$data = db::fetch(self::$sql)){
                
                self::$num++;
                
				if(self::$num == 1){
                    
				self::$info .= '<div class="item active">
<div style="width:90%; height:100%; text-align:justify; margin-left:60px;">
<h3 class="bluetext text-center">'.self::$data['username'].'</h3>
<p class="text-center">
'.self::$data['post'].'
</p>
</div>

  </div>';
				
			}
                if(self::$num > 1){
				self::$info .= '<div class="item">
<div style="width:90%; height:100%; text-align:justify; margin-left:60px;">
<h3 class="bluetext text-center">'.self::$data['username'].'</h3>
<p class="text-center">
'.self::$data['post'].'
</p>
</div>

  </div>';
				
			}

		}
            
	}
                     else
            {
                self::$info .= ' <div class="item active">
<div style="width:90%; height:100%; text-align:justify; margin-left:60px;">
<h3 class="bluetext text-center">...its lonely here...</h3>
<p class="text-center">
Why not make a post on this story and be the first to comment on it.
</p>
</div>

  </div>';
            }
                return self::$info;
	
	
}

public static function getstoriesforlive($cat){
		
			self::$sql = db::query("SELECT `cat`,`uniqueid`,`title`,`post` FROM `alien_stories` WHERE `cat` = '".db::mss($cat)."' ORDER BY `id` DESC LIMIT 4");
		
		self::$info = '';
		
		if(db::nRows(self::$sql) > 0){
			
			while(self::$data = db::fetch(self::$sql)){

			self::$info .= '<div class="col-md-3">
<h4 class="pull-left"><span class="glyphicon glyphicon-th-list"></span> '.substr(self::$data['title'], 0, 25).'</h4>
<p class="pull-left text-left">'.strip_tags(substr(self::$data['post'], 0, 85), '').'
<br><a class="links pull-right" href="story/'.strip_tags(substr(self::$data['cat'], 0, 85), '').'/'.trim(str_replace('?/', 
'', strip_tags(self::$data['title']))).'/'.strip_tags(substr(self::$data['uniqueid'], 0, 85), '').'">Read More</a></p>
<hr style="width:60px; height:1px; background-color:#FFF; opacity:0.2;">
</div>';
				
			}
			
		}
		return self::$info;
		
	}
    
        public static function getstorydesc($uniqueid){
        		date_default_timezone_set('Europe/London');
		$sql = db::query("SELECT * FROM `alien_stories` WHERE `uniqueid` = '".db::mss($uniqueid)."'");
			if(db::nRows($sql) > 0){
				self::$info = '';
				while(self::$data = db::fetch($sql)){
                    self::$info .= substr(strip_tags(self::$data['post']), 0, 200);
                }
        
        return self::$info;
    }
    }
    
    	public static function getstoryusername($id){

		self::$sql = db::query("SELECT * FROM `alien_stories` WHERE `uniqueid` = '".db::mss($id)."'");
			if(db::nRows(self::$sql) > 0){
				self::$info = '';
					while(self::$data = db::fetch(self::$sql)){
						self::$info .= self::$data['owner'];
					}

			return self::$info;
			}
	}
    
    public static function getstrlen($key){
        
        self::$info = '';
        
        self::$info = strlen($key);
        
        return self::$info;
        
    }
    
    	public static function getcats2(){
		self::$sql = db::query("SELECT * FROM `alien_categories`");
		self::$info = '';
		self::$info .= '<select class="form-control" id="storytitle" name="cat">';
			while(self::$data = db::fetch(self::$sql)){
			self::$info .= '<option name="'.self::$data['id'].'">'.self::$data['name'].'</option>';

			}
			self::$info .= '</select>';
			return self::$info;

	}
    
    	public static function addstory($title,$desc,$cat,$videoid,$video){
		$title = htmlentities($title);
		$desc = $desc;
		$cat = htmlentities($cat);
		$videoid = htmlentities($videoid);

		date_default_timezone_set('Europe/London');

		$uniqueid = self::storyidcreate();
		if($videoid == '1'){
				if(strlen($video) == "11"){
			self::$sql = db::query("INSERT INTO `alien_stories` (`uniqueid`, `owner`, `title`, `post`, `cat`, `date`, `likes`, `comment`, `video`, `videoid`) VALUES ('".db::mss($uniqueid)."', '".db::mss($_SESSION['username'])."', '".db::mss($title)."', '".db::mss($desc)."', '".db::mss($cat)."', '".time()."', '0', '0', '1', '".db::mss($video)."')");
		events::createdtopic($_SESSION['username']);
		}
		}
		else
		{
			if($videoid == '0'){
		self::$sql = db::query("INSERT INTO `alien_stories` (`uniqueid`, `owner`, `title`, `post`, `cat`, `date`, `likes`, `comment`, `video`, `videoid`) VALUES ('".db::mss($uniqueid)."', '".db::mss($_SESSION['username'])."', '".db::mss($title)."', '".db::mss($desc)."', '".db::mss($cat)."', '".time()."', '0', '0', '0', '')");
			events::createdtopic($_SESSION['username']);
			}
		}
		header('Location: story/'.strip_tags(substr($cat, 0, 85), '').'/'.trim(str_replace('?/', '', strip_tags($title))).'/'.strip_tags(substr($uniqueid, 0, 85), '').'');
		exit();
	}
    
    public static function storyidcreate(){
	if(isset($_SESSION['username'])){
	self::$id = md5(uniqid($_SESSION['username'], true));

	return self::$id;
	}
}
    
    	public static function addcomment($id,$post){

		date_default_timezone_set('Europe/London');
            
		if(isset($_SESSION['username']) && isset($_SESSION['hash'])){
            
			db::query("INSERT INTO `alien_comments` (`storyid`, `username`, `post`, `date`) VALUES ('".db::mss($id)."', '".db::mss($_SESSION['username'])."', '".db::mss($post)."', '".time()."')");
			events::postreply($_SESSION['username']);
			header('Location: ../home');
			exit();

		}
		return self::$info;
		}
    
}