<?php
	/**
	 * 
	 */
	class User 
	{

		/* PROPRIETE DE CONNECTION A LA BASE DE DONNEES */

		public $id_user;
		public $uname;
		public $upname;
		public $email;
		public $logname;
		public $type_user;
		public $pword;
		public $photo;
		public $phone;

		public $error='';
		public $db;
		
		function __construct($pdo )
		{
			$this->db=$pdo;
			$this->initialiser();
			
		}
/**
		 * METGHODE DE MANIPULATION DES TEXTES
 */
		function initialiser()
		{
			$this->id_user="";
			$this->uname="";
			$this->upname="";
			$this->email="";
			$this->logname="";
			$this->type_user="";
			$this->pword="";
			$this->phone="";
			$this->photo="";
			
		}

		function crypt_pwd($chaine){
			/* $chaine = $this->pword; */
			$chaine = md5($chaine);
			$chaine = hash('sha256', $chaine);
			return $chaine; 
		}
	public	function sanitize($texte){
			$chaine = htmlentities($texte);
			$chaine = addslashes($chaine);
			return $chaine;
		}

		function fetch_user()
		{

		}
		function connect_user($email,$pword,$remember_me)
		{
			$pword=$this->sanitize($pword);
			$pword=$this->crypt_pwd($pword);
		
			$email=$this->sanitize($email);
			/* echo"$pword et son email est $email"; */
			$req=$this->db->prepare("SELECT * FROM user WHERE (email=? AND pword=?)");
			try{
				
				$req->execute([$email,$pword]);
			
				$nb_lign = 0;
				$nb_lign = $req->rowCount();
				$curr_user = $req->fetch(PDO::FETCH_OBJ);			
				
				if ($nb_lign > 0)
				{						
					$_SESSION['id_user']=$curr_user->id_user;
					$_SESSION['uname']=$curr_user->uname;
					$_SESSION['upname']=$curr_user->upname;
					$_SESSION['email']=$curr_user->email;
					$_SESSION['logname']=$curr_user->logname;
					$_SESSION['type_user']=$curr_user->type_user;
					$_SESSION['pword']=$curr_user->pword;  
					$_SESSION['phone']=$curr_user->phone; 
					$_SESSION['photo']=$curr_user->photo; 
				 /* temps connexion */
                    $_SESSION["temp_de_connexion"]=time();
                /* temps connexion */
					$this->save_connexion($curr_user->id_user);
					return true;
				
				}
				else
				{
					echo"<script>alert('aucun element')</script>";
					return false;
				}
			} catch (PDOException $e) {
				echo $e->getmessage();
			}
			
		
		}
//----Enregistrer la connexion dans la table connexion
		function save_connexion($id_user)
		{
			/* detecter le navigateur */
				$user_agent = $_SERVER['HTTP_USER_AGENT'];
				$browser= "Inconnu";
				$browser_array = array( '/mobile/i'    => 'Handheld Browser',
						'/msie/i'      => 'Internet Explorer',
						'/trident/i'   => 'Internet Explorer',
						'/firefox/i'   => 'Firefox',
						'/safari/i'    => 'Safari',
						'/chrome/i'    => 'Chrome',
						'/edg/i'      => 'Edge',
						'/opera/i'     => 'Opera',
						'/netscape/i'  => 'Netscape',
						'/maxthon/i'   => 'Maxthon',
						'/konqueror/i' => 'Konqueror'
				);
				foreach ($browser_array as $regexx => $value)
				if (preg_match($regexx, $user_agent))
					$browser = $value;
				

			/* Fin detecter le navigateur */

			/* detecter le systeme d'exploitation */
				$os_platform  = "Inconnu";
				$os_array     = array(  '/windows nt 10/i'      =>  'Windows 10',
						'/windows nt 6.3/i'     =>  'Windows 8.1',
						'/windows nt 6.2/i'     =>  'Windows 8',
						'/windows nt 6.1/i'     =>  'Windows 7',
						'/windows nt 6.0/i'     =>  'Windows Vista',
						'/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
						'/windows nt 5.1/i'     =>  'Windows XP',
						'/windows xp/i'         =>  'Windows XP',
						'/windows nt 5.0/i'     =>  'Windows 2000',
						'/windows me/i'         =>  'Windows ME',
						 '/win98/i'              =>  'Windows 98',
						'/win95/i'              =>  'Windows 95',
						'/win16/i'              =>  'Windows 3.11',
						'/macintosh|mac os x/i' =>  'Mac OS X',
						'/mac_powerpc/i'        =>  'Mac OS 9',
						'/linux/i'              =>  'Linux',
						'/ubuntu/i'             =>  'Ubuntu',
						'/iphone/i'             =>  'iPhone',
						'/ipod/i'               =>  'iPod',
						'/ipad/i'               =>  'iPad',
						'/android/i'            =>  'Android',
						'/blackberry/i'         =>  'BlackBerry',
						'/webos/i'              =>  'Mobile'
				);
				foreach ($os_array as $regex => $value)
				if (preg_match($regex, $user_agent))
					$os_platform = $value;
			/* Fin detecter le systeme d'exploitation */

			/* insertion des informations dans la table connexion */
				$insert=$this->db->prepare("INSERT INTO connexion(id_user,cdate,se,navigateur) value(?,NOW(),?,?)");
				$succes=false;
				$cdate=date("d/m/y",time());
				try
				{
					$succes=$insert->execute([$id_user,$os_platform,$browser]);
					if($succes!=false)
					{
							return true;
					}
					else
					{
						return false;
					}
				}
				catch(PDOException $e)
				{
					$this->error=$e->getmessage();
					return false;
				}
				
			/* Fin insertion des informations dans la table connexion */
		}
//---- Fin enregistrement de connexion

		function add_user($uname,$upname,$email,$logname,$type_user,$pword,$phone,$photo)
		{
			$this->uname=$this->sanitize($uname);
			$this->upname=$this->sanitize($upname);
			$this->email=$this->sanitize($email);
			$this->logname=$this->sanitize($logname);
			$this->type_user=$this->sanitize($type_user);
			$pword=$this->sanitize($pword);
			$this->phone=$this->sanitize($phone);
			$this->photo=$this->sanitize($photo);
			$this->pword=$this->crypt_pwd($pword);

			/* 
			$req = $db->prepare("CALL insert_tokens(? ,?, ?, NOW(), ?)"); */
			$req=$this->db->prepare("CALL insert_user(?,?,?,?,?,?,?,?)");

			$succes=false;
			try
			{
				$succes=$req->execute([$this->uname,$this->upname,$this->email,$this->phone,$this->logname,$this->type_user,$this->pword,$this->photo]);
				if($succes!=false)
					{
						return true;
					}
				else
					{
						return false;
					}
			}
			catch(PDOException $e)
			{
				$this->error=$e->getmessage();
				return false;
			}
		}

		function update_user($uname,$up_name,$email,$logname,$pword,$phone,$photo,$id_user)
		{
			$this->uname=$this->sanitize($uname);
			$this->upname=$this->sanitize($up_name);
			$this->email=$this->sanitize($email);
			$this->logname=$this->sanitize($logname);
		
			$pword=$this->sanitize($pword);
			$this->phone=$this->sanitize($phone);
			$this->photo=$this->sanitize($photo);
			$this->pword=$this->crypt_pwd($pword);
			$this->id_user=$this->sanitize($id_user);
			$succes=false;
			
			$req=$this->db->prepare("UPDATE user SET uname=? upname=? email=? logname=?  pword=? phone=? photo=? WHERE id_user=?");
			try
			{
				$succes=$req->execute([$this->uname,$this->upname,$this->email,$this->logname,$this->pword,$this->phone,$this->photo,$this->id_user]);
				if($succes!=false)
				{
					return true;
				}
				else
				{
					return false;
				}	 
			 }
			 catch(PDOException $e)
			 {
				 $this->error=$e->getmessage();
				 return false;
			 }
		}
		function delete_user($id_user)
		{
			$r=$this->db->prepare("DELETE FROM user WHERE id_user=?");
			$req=$r->execute([$id_user]);

		}
		

		
	}
?>