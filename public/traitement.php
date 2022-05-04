<!--  TRAITEMENT DES DONNEES -->
    <?php
    global $user;
    global $logger;
        /* <!--  INSCRIPTION --> */
            $id_user='';
            $user_name ='';
            $user_pname='';
            $user_mail ='';
            $user_logname='';
            $user_type_user='';
            $user_pword ='';
            $user_phone='';
            $remember_me='';
            $tof='';
                if(isset($_POST["inscrire"]))
                {                              
                   $user_name = $_POST['uname'];
                   $user_pname = $_POST['upname'];
                   $user_mail = $_POST['email'];
                   $user_logname= $_POST['logname'];
                   $user_type_user = $_POST['type_user'];
                   $user_pword = $_POST['pword']; 
                   $user_phone = $_POST['phone'];
                   $tof=$_FILES['photo']['name'];
                    $file_tmp_name=$_FILES['photo']['tmp_name'];
                    
                  move_uploaded_file($file_tmp_name,'./../src/images/photo/'.$tof.'/');

                   //echo"".$user_name."------".$user_pname."------".$user_mail."------".$user_logname."------".$user_type_user."------".$user_pword ;

                   $inscrire=$user->add_user($user_name,$user_pname,$user_mail,$user_logname,$user_type_user, $user_pword,$user_phone,$tof); 
                  
                  // return;
                   if ($inscrire) 
                   {
                    
                       if ($user_type_user=='client') {
                            header('Location:index.php/#connexion');
                       } 
                       else {
                            header('Location:index.php/#inscription');
                       } 
                       
                       
                   } 
                   else 
                   {
                        echo "<script>alert('Information invalide');</script>";
                   }
                           
                }
               
           
        /* <!--  FININSCRIPTION --> */
        
        /* <!-- CONNEXION -->*/
            elseif (isset($_POST['connecter'])) 
            {
                $user_mail = $_POST['email'];
                $user_pword = $_POST['pword']; 
                $remember_me=false;
                if (isset($_POST['remember_me']) && !empty($_POST['remember_me'])) 
		        {
		    	    $remember_me=true;
                 }
                
                $connecter=$logger->connect_user($user_mail ,$user_pword,$remember_me);
                 if ($connecter) 
                {
                   

                    if ($user_type_user=='client') {
                         header('Location:user_board.php');
                    } 
                     else {
                        header('Location:user_board.php');
                     } 
               
               
                 } 
                 else 
                 {
                      echo "<script>alert('Information invalide');</script>";
                 }
               

            }
           
       
        /* <!--FIN CONNEXION --> */
        /* MODIFICATION DES INFOS USER */
            elseif (isset($_POST['modif_user'])) 
            {
                 
               if (!isset($_POST['uname'])) 
               {
                    $user_phone=$_SESSION['uname'];
               } 
               else
                {
                    $user_name = $_POST['uname'];
               }
               if (!isset($_POST['upname'])) 
               {
                    $user_phone=$_SESSION['upname'];
               } 
               else
                {
                    $user_pname =$_POST['upname'];
               }
                
               if (!isset($_POST['email'])) 
               {
                    $user_mail=$_SESSION['email'];
               } 
               else
                {
                    $user_mail =$_POST['email'];
               }
               
               if (!isset($_POST['logname'])) 
               {
                    $user_mail=$_SESSION['logname'];
               } 
               else
                {
                    $user_logname= $_POST['logname'];
               }
              
               if (!isset($_POST['logname'])) 
               {
                    $user_pword=$_SESSION['pword'];
               } 
               else
                {
                    $user_pword = $_POST['pword']; 
               }            
               
               if (!isset($_POST['phone'])) 
               {
                $user_phone=$_SESSION['phone'];
               } else
                {
                $user_phone = $_POST['phone'];
               }
               

               $id_user=$_SESSION['id_user'];

            if (isset($_POST['photo'])&& !empty($_POST['photo'])) 
            {
                
                $photo=$_FILES['photo']['name'];
                var_dump($photo.'ok');
               $file_tmp_name=$_FILES['photo']['tmp_name'];
           
                move_uploaded_file($file_tmp_name,'./../src/images/photo/'.$photo.'/');
            } 
            else 
            {
                $photo=$_SESSION['photo'];
                # code...
            } 
              
              $modifier=$user->update_user($user_name,$user_name,$user_mail,$user_logname,$user_pword,$user_phone,$photo,$id_user);
              if ($modifier) 
              {
                echo "<script>alert('bingo');</script>";            
              } 
              else 
              {
                   echo "<script>alert('oups');</script>";
              }
            }
        /* FIN MODIFICATION DES INFOS USER */
        /*  else
        {
             echo "<script>alert('formulaire non envoye');</script>";
        } */
       
    ?>           
        <!-- AJOUT  DE PROJETS -->
        <!-- AJOUT  DE PROJETS -->

<!--  TRAITEMENT DES DONNEES -->    