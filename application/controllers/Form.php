<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	public function signup()
	{
		$this->load->view('signup');
	}

	public function forgot()
	{
		$this->load->view('forgot');
	}

	public function success()  
    {  
		$this->load->view('success');  
    }  
	public function login_action()  
    {  
        // $this->load->helper('security');  
        // $this->load->library('form_validation');  
  
        // $this->form_validation->set_rules('email', 'Email:', 'required|trim');  
        // $this->form_validation->set_rules('pwd', 'Password:', 'required|trim');  
		?>
		<script>
			console.log(<?= $this->input->get('email') ?>);
			</script>
		<?php
        if ($this->input->get('email')=="admin@gmail.com" && $this->input->get('pwd')=="1234")   
        {  
            $data = array(  
                'email' => $this->input->get('email'),  
				'pwd'=>$this->input->get('pwd'),
                'currently_logged_in' => 1  
                );    
                    // $this->session->set_userdata($data);  
					$this->load->view('success');  
        }   
        else {  
			
			$this->load->view('login');  
        }  
    }  
	
	public function signup_validation()
	{
		if($this->load->view('signup')==TRUE)
		{
			// $data = array(  
            //     'firstname' => $this->input->get('first_name'),  
			// 	'secondname'=>$this->input->get('second_name'),
			// 	'email' => $this->input->get('email'),  
			// 	'pwd'=>$this->input->get('pwd'),
            //     'currently_logged_in' => 1  
            //     );   
			echo "successfully Registered please login";
			$this->load->view('login');
		}
		else{
			$this->load->view('signup');
		}
	}
	
}
