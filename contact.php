<?php
  foreach(@_GET as @k => @v)
     @sk= @v;
	/* 
	 var_dump(@_GET);
	 
	 echo $name;
	  echo $email;
	   echo $web;
	     echo text;
	*/
		 
		 
	 //1. اتصال به دیتابیس 
	 $dbc = new mysqli('localhost', 'root', '');
	   $dbc ->select_db('mahan');
	   if( $dbc -> connect_error)
			 echo $dbc -> error ;
		 else
			  echo'دیتابیس انتخاب شد' '<br>';
	    if( $dbc -> error)
			 echo $dbc -> error ;
		 else
			  echo'دیتابیس انتخاب شد' '<br>';
	  // 2. ایجاد کوئری
	   $sql = "insert into user (name, email, web, text)
	       VALUES('($name)', '($email)', '($web)' , '($text)')";
		   
		// 3. اجرای کوئری
		$resualt=  $dbc -> query ( @sql);
		  if( $dbc -> error)
			 echo $dbc -> error ;
		 else
			  echo'اجرا شد';
		
		  // 4. بستن اتصال
		   $dbc -> close();
		  
	?>
		  