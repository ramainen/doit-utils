<?phpclass ContactformController{	function show()	{		print d()->view();	}	function send()	{		if(d()->validate('contactform#send')){			$emails = explode(',', d()->Option->email);			foreach ($emails as $email){				$email = trim($email);				d()->Mail->to($email);				d()->Mail->subject('Письмо с сайта');				d()->Mail->message(d()->contactform_mail_tpl());								if(isset($_FILES["file"]) && $_FILES["file"]["tmp_name"]!=''){					d()->Mail->attach($_FILES["file"]);				}				d()->Mail->send();			}						if(AJAX){				print 'document.location.href="/thankyou";';				}else{				header('Location: /thankyou');				exit();			}					}		if(AJAX){			d()->reload();			}			}} 	 