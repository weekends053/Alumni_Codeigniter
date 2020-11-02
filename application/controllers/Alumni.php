<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Alumni_Model','AM');
		$this->load->helper('url');
	}

	//เรียกใช้หน้า index
	//localhost/Alumni/index.php/Alumni/index
	public function index()
	{
		$this->load->view('index');
	}

	//เรียกใช้หน้า Register
	//localhost/Alumni/index.php/Alumni/Register
	public function Register()
	{
		$this->load->view('view_Register');
	}
	//ฟังก์ชั่นเพิ่มข้อมูล จากหน้า Register ลงฐานข้อมูล
	public function insert_Register(){
		$result = array(
			'Std_ID' => $this->input->post("Std_ID"),
			'Name_LastName' => $this->input->post("Name_LastName"),
			'ID_Card' => $this->input->post("ID_Card"),
			'Date_Of_Birth'=> $this->input->post("Date_Of_Birth"),
			'Sex'=> $this->input->post("Sex"),
			'Address'=> $this->input->post("Address"),
			'Tel'=> $this->input->post("Tel"),
			'E_mail'=> $this->input->post("E_mail"),
			'Facebook'=> $this->input->post("Facebook"),
			'Instagram'=> $this->input->post("Instagram"),
		);

		$result1 = array(	
			'Std_ID'=> $this->input->post("Std_ID"),
			'Name_LastName'=> $this->input->post("Name_LastName"),
			'End_Year'=> $this->input->post("End_Year"),
		);

		$result2 = array(
			'Std_ID'=> $this->input->post("Std_ID"),
			'Company_Name'=> $this->input->post("Company_Name"),
			'Company_Address'=> $this->input->post("Company_Address"),
			'Profession'=> $this->input->post("Profession"),
			'Rank'=> $this->input->post("Rank"),
			'Company_Tel'=> $this->input->post("Company_Tel"),
		);

		$result3 = array(
			'Std_ID' => $this->input->post("Std_ID"),
			'Username'=> $this->input->post("Username"),
			'Password'=> $this->input->post("Password"),
			'Re_Password'=> $this->input->post("Re_Password"),
		);
		
		

		if($this->input->post("Name_LastName")!= "" && $this->input->post("Std_ID")!== ""){
			$this->AM->insert_Register($result);
			$this->AM->insert_Educational($result1);
			$this->AM->insert_Work($result2);
			$this->AM->insert_Login($result3);
			$this->load->view('index');
		}else {
			echo "ไม่สามารถเพิ่มข้อมูลได้ค่ะ !";
		}

	}
	//เรียกใช้งานหน้า Login
	//localhost/Alumni/index.php/Alumni/Login
	public function Login()
	{
		$this->load->view('view_Login');
	}
	public function Home()
	{
		$this->load->view('view_Home');
	}
	//ฟังก์ชั่น Check Login
	public function Check_Login()
	{

        if ($this->input->post('login')) {
            $Username = $this->input->post('Username');
            $Password = $this->input->post('Password');
            $check = $this->AM->Check_Login($Username, $Password);

            if ($check['message'] == true) {
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);
                $this->load->view('View_Home');
            } else {



                // echo '<script>alert("Region already added");</script>'
				echo"<script language=\"JavaScript\">";
    			echo"alert('คุณกรอกรหัสผ่านไม่ถูกต้องหรือกรุณาสมัครสมาชิกก่อนค่ะ !')";
				echo	"</script>";
				$this->load->view('index');
            }
        }
	}
	//เรียกใช้งานหน้า View_Search
	public function Search()
	{
		$this->load->view('view_Search');
	}
	//เรียกใช้งานหน้า view_Enter_std_ID
	public function Enter_ID()
	{
		$this->load->view('view_Enter_std_ID');
	}
	//ฟังก์ชั่นค้นหาจากรหัสนักศึกษา
	public function search_StdID()
	{	
	
		$Std_ID = $this->input->get('Std_ID');
		
		if($Std_ID == "")
		{
			echo"<script language=\"JavaScript\">";
    		echo"alert('ไม่พบข้อมูลที่คุณค้นหาค่ะ !')";
			echo	"</script>";
			$this->load->view('view_Enter_std_ID');
		}
		else
		{
		$result['AM'] = $this->AM->Search_Std_ID($Std_ID);
		$this->load->view('view_StdID',$result);
		}
	}
	//เรียกใช้งานหน้า view_Enter_std_Name
	public function Enter_Name()
	{
		$this->load->view('view_Enter_std_Name');
		
	}
	//ฟังก์ชั่นค้นหาจากชื่อนักศึกษา
	public function search_Name()
	{
		$Name_LastName = $this->input->get('Name_LastName');

		if($Name_LastName == "")
		{
			echo"<script language=\"JavaScript\">";
    		echo"alert('ไม่พบข้อมูลที่คุณค้นหาค่ะ !')";
			echo	"</script>";
			$this->load->view('view_Enter_std_Name');
		}
		else
		{
		$result['AM'] = $this->AM->Search_Name($Name_LastName);
		$this->load->view('view_StdName',$result);
		}
	}
	//เรียกใช้งานหน้า view_Enter_std_YearEnd
	public function Enter_Year()
	{
		$this->load->view('view_Enter_std_YearEnd');
		
	}
	//ฟังก์ชั่นค้นหาจากปีที่จบ
	public function search_Year()
	{
		$End_Year = $this->input->get('End_Year');

		if($End_Year == "")
		{
			echo"<script language=\"JavaScript\">";
    		echo"alert('ไม่พบข้อมูลที่คุณค้นหาค่ะ !')";
			echo	"</script>";
			$this->load->view('view_Enter_std_YearEnd');
		}
		else
		{
		$result['AM'] = $this->AM->Search_Year($End_Year);
		$this->load->view('view_StdYear',$result);
		}
	}
	//ฟังก์ชั่นจอยตารางทั้งหมด นำมาแสดงหน้า profile
	public function Profile()
	{
		$Std_ID =  $this->session->userdata('Std_ID');
		$result['AM'] = $this->AM->Profile($Std_ID);
		$this->load->view('view_Profile',$result);
		
	}
	//เรียกใช้งานหน้า Edit
	public function Edit()
	{
		$Std_ID =  $this->session->userdata('Std_ID');
		$result['AM'] = $this->AM->Profile($Std_ID);
		$this->load->view('view_Edit',$result);
		
	}
	//ฟังก์ชั่นแก้ไข
	public function edit_Profile()
	{
		$data = array(
			'Std_ID' => $this->input->post("Std_ID"),
			'Name_LastName' => $this->input->post("Name_LastName"),
			'Date_Of_Birth'=> $this->input->post("Date_Of_Birth"),
			'Address'=> $this->input->post("Address"),
			'Tel'=> $this->input->post("Tel"),
			'E_mail'=> $this->input->post("E_mail"),
			'Facebook'=> $this->input->post("Facebook"),
			'Instagram'=> $this->input->post("Instagram"),
		);

		$data1 = array(
			'Std_ID' => $this->input->post("Std_ID"),
			'End_Year'=> $this->input->post("End_Year"),
		);

		$data2 = array(
			'Std_ID' => $this->input->post("Std_ID"),
			'Company_Name'=> $this->input->post("Company_Name"),
			'Company_Address'=> $this->input->post("Company_Address"),
			'Profession'=> $this->input->post("Profession"),
			'Rank'=> $this->input->post("Rank"),
			'Company_Tel'=> $this->input->post("Company_Tel"),
		);

			$this->AM->Update_Register($data);
			$this->AM->Update_Educational($data1);
			$this->AM->Update_Work($data2);
			$Std_ID =  $this->session->userdata('Std_ID');
			$result1['AM'] = $this->AM->Profile($Std_ID);
			$this->load->view('view_Profile', $result1);
		
	}
	
	public function Logout()
    {
        $this->session->sess_destroy();
        // $this->session->unset_userdata($data);
    
        $this->load->view('index');
	}

	public function view_other()
    {
        $result['AM'] = $this->AM->select_other();  
		$this->load->view('view_other',$result);
    }


}
