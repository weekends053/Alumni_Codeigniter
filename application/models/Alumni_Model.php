<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Alumni_Model extends CI_Model {
		function __construct(){
            parent::__construct();
        }
        //คำสั่ง Insert ข้อมูลต่างๆลงตาราง
        function insert_Register($result){
			$this->db->insert('register',$result);
        }
        function insert_Educational($result2){
            $this->db->insert('data_educational',$result2);
        }
        function insert_Work($result3){
            $this->db->insert('data_work',$result3);
        }
        function insert_Login($result4){
            $this->db->insert('login',$result4);
        }
       
        //คำสั่ง Check Login
        function Check_Login($Username,$Password){
            $this->db->where('Username', $Username);
            $this->db->where('Password', $Password);
            $result = $this->db->get('login');
            $message = '';
    
            if ($result->num_rows() > 0) {
                $message = true;
    
                // $this->load->view('list');
    
            } else {
                $message = false;
            }
            $data = array(
                "message" => $message, "data" => $result->result()
    
            );
            return $data;
        }
        //คำสั่งค้นหาจากรหัสนักศึกษา
        function Search_Std_ID($Std_ID){
           
            $result = $this->db->query("SELECT * FROM `data_educational` WHERE `Std_ID` = $Std_ID"); 
            return $result;
            
        }
        //คำสั่งค้นหาจากชื่อนักศึกษา
        function Search_Name($Name_LastName){
            $result = $this->db->query("SELECT * FROM `data_educational` WHERE `Name_LastName` LIKE '%$Name_LastName%'");
            return $result;
        }
         //คำสั่งค้นหาจากปีที่จบ
         function Search_Year($End_Year){
            $result = $this->db->query("SELECT * FROM `data_educational` WHERE `End_Year` = $End_Year");
            return $result;
        }
        //คำสั่งjoin ตารางที่STD_ID เหมือนกันจากนั้นจะดึงข้อมูลทั้งหมด
        function Profile($Std_ID){
            $this->db->select('*');
            $this->db->from('register');
            $this->db->join('data_educational', 'data_educational.Std_ID = register.Std_ID', 'left');
            $this->db->join('data_work', 'data_work.Std_ID = register.Std_ID', 'left');
            $this->db->where('register.Std_ID', $Std_ID);
            
            $query = $this->db->get();
            return $query->result();
            }
        //คำสั่ง Edit
        function Update_Register($data)
        {
            $Std_ID =  $this->session->userdata('Std_ID');
            $this->db->where('Std_ID', $Std_ID);
            $this->db->update('register', $data);
        }
        function Update_Educational($data)
        {
            $Std_ID =  $this->session->userdata('Std_ID');
            $this->db->where('Std_ID', $Std_ID);
            $this->db->update('data_educational', $data);
        }
        function Update_Work($data)
        {
            $Std_ID =  $this->session->userdata('Std_ID');
            $this->db->where('Std_ID', $Std_ID);
            $this->db->update('data_work', $data);
        }
        function select_other()
        {
    
            $this->db->select('Std_ID,Name_LastName,ID_Card,Date_Of_Birth,Sex,Address,Tel,E_mail,Facebook,Instagram');
			$result = $this->db->get('register');     
			return $result;
        }
}