<?php
/*
	UserCake Version: 1.4
	http://usercake.com
	
	Developed by: Adam Davis
*/


class User 
{
	public $user_active = 0;
	private $clean_email;
	public $status = false;
	private $clean_password;
	private $clean_username;
	private $unclean_username;
	public $sql_failure = false;
	public $mail_failure = false;
	public $email_taken = false;
	public $username_taken = false;
	public $activation_token = 0;
	public $fname ;
	public $lname ;
	public $gender;
	
	function __construct($user,$pass,$email,$fname,$lname,$gender)
	{
		//Used for display only
		$this->unclean_username = $user;
		
		
		//Sanitize
		$this->clean_email = sanitize($email);
		$this->clean_password = trim($pass);
		$this->clean_username = sanitize($user);
		$this->fname = sanitize($fname);
		$this->lname = trim($lname);
		$this->gender = sanitize($gender);
		
		if(usernameExists($this->clean_username))
		{
			$this->username_taken = true;
		}
		else if(emailExists($this->clean_email))
		{
			$this->email_taken = true;
		}
		else
		{
			//No problems have been found.
			$this->status = true;
		}
	}
	
	public function userCakeAddUser()
	{
		global $db,$emailActivation,$websiteUrl,$db_table_prefix,$email,$lname, $fname, $gender;
	//echo $email.$fname.$lname;
	//exit;
		//Prevent this function being called if there were construction errors
		if($this->status)
		{
			//Construct a secure hash for the plain text password
			$secure_pass = generateHash($this->clean_password);
			
			//Construct a unique activation token
			$this->activation_token = generateActivationToken();
	
			//Do we need to send out an activation email?
			if($emailActivation)
			{
				//User must activate their account first
				$this->user_active = 0;
			
				$mail = new userCakeMail();
			
				//Build the activation message
				$activation_message = lang("ACTIVATION_MESSAGE",array($websiteUrl,$this->activation_token));
				
				//Define more if you want to build larger structures
				$hooks = array(
					"searchStrs" => array("#ACTIVATION-MESSAGE","#ACTIVATION-KEY","#USERNAME#"),
					"subjectStrs" => array($activation_message,$this->activation_token,$this->unclean_username)
				);
				
				/* Build the template - Optional, you can just use the sendMail function 
				Instead to pass a message. */
				if(!$mail->newTemplateMsg("new-registration.txt",$hooks))
				{
					$this->mail_failure = true;
				}
				else
				{
					//Send the mail. Specify users email here and subject. 
					//SendMail can have a third parementer for message if you do not wish to build a template.
					
					if(!$mail->sendMail($this->clean_email,"New User"))
					{
						$this->mail_failure = true;
					}
				}
			}
			else
			{
				//Instant account activation
				$this->user_active = 1;
			}	
	
	
			if(!$this->mail_failure)
			{
					//Insert the user into the database providing no errors have been found.
				echo	$sql = "INSERT INTO `".$db_table_prefix."Users` (
							`Username`,
							`Username_Clean`,
							`Password`,
							`Email`,
							`ActivationToken`,
							`LastActivationRequest`,
							`LostPasswordRequest`, 
							`Active`,
							`Group_ID`,
							`SignUpDate`,
							`LastSignIn`,
							`Fname`,
							`Lname`,
							`Gender`
							)
					 		VALUES (
							'".$db->sql_escape($this->unclean_username)."',
							'".$db->sql_escape($this->clean_username)."',
							'".$secure_pass."',
							'".$db->sql_escape($this->clean_email)."',
							'".$this->activation_token."',
							'".time()."',
							'0',
							'".$this->user_active."',
							'1',
							'".time()."',
							'0',
							'".$fname."',
														'".$lname."',
																					'".$gender."'
							)";
					 
				return $db->sql_query($sql);
			}
		}
	}
}

?>