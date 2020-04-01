<?php echo "string";
require_once 'core/init.php';
if (session::exists('success')) {
	echo "<h3>";
	echo session::flash('success');
	echo "</h3>";
}else{
	echo "wtf php";
}


echo '<a href="registerfirst.html"> register</a>';







/*$user=db::getInstance()->query("SELECT studentname from student WHERE studentname=?", array('Hichem'));*/

/*$where=array('studentname','=',"Hichemd ");
db::getInstance()->get('student',$where);
$user=db::getInstance();
if (!$user->count()) {
	echo '<br>Sorry invalid user name';
	
}else{
	echo  '<br>Welcome ',$user->first()->studentname,'<br>';
}
 foreach ($user->results() as $user) {
 	echo $user->studentname, '<br>';
 	# code...
 }*/


?>


