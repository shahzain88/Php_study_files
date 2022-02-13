<!-- class in php  -->


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Learn OOP</title>
 </head>
 <body>

 	<h1>OOP php</h1>
 	<p>There are three access modifier in Class in php </p>
 	<ul>
 		<li>public : you can access this property OUT side the Class</li>
 		<li>private : you can only access this property IN side the Class. Even IF the class is inherated(extend) </li>
 		<li>protected : you can onlu access this IN side the Class. you can't access this OUT sidethe class. but if inherated(extend) then you can use it in that particiler Class.</li>
 	</ul>
 	<br>
 	<br>
 	<br>
 	<br>
 	<h2>Simple User Class</h2>


 	<?php 

 		$count = 0;

 		Class SimpleUser{


 			// can access in inherated class and in side the class
 			protected $user_id;
	 		protected $user_name;

 			// can access from anywhere
 			public $count_id;
 			public function __construct($name,$id){
 				$this->user_name = $name;
 				$this->count_id = $id;
 				$this->user_id = $this->id_gen($this->count_id);


 			}
 			public function get_name(){
 				return "{$this->user_name}";
 			}
 			public function get_id(){
 				return "{$this->user_id}";
 			}

 			// can access in inherated class and in side the class
 			private function id_gen($count_id){
 				$this->count_id = ++$count_id ;
 				global $count;
 				++$count;
 				return $this->count_id;
 			}


 		}

 	 ?>

 	 <?php 

 	 $user1 = new SimpleUser("kaito",$count);
 	 $user2 = new SimpleUser("tom",$count);
 	 $user3 = new SimpleUser("lot",$count);



 	  ?>

 	  <h4><?php echo  "name: {$user1->get_name()} id: {$user1->get_id()}"?></h4>
 	  <h4><?php echo  "name: {$user2->get_name()} id: {$user2->get_id()}"?></h4>
 	  <h4><?php echo  "name: {$user3->get_name()} id: {$user3->get_id()}"?></h4>

 
 </body>
 </html>