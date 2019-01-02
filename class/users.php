<?php
session_start();
class users{
	public $host = "localhost";
	public $username = "sammy";
	public $pass = "Pkp82@82";
	public $db_name = "exam";
	public $conn;
	public $data;
	public $cat;
	public $qus;
	public $x;
	public function __construct()
	{
		$this->conn = new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if($this->conn->connect_errno){
			die("DataBase Connection failed".$this->conn->connect_errno);
		}
	} 

	public function exists_email($data){
		$x = $this->conn->query($data);
		$x->fetch_array(MYSQLI_ASSOC);
		if($x->num_rows==0)
		{
			return false;
		}	
		else{
			return true;
		}
		
	}
	public function signup($data)
	{
		$this->conn->query($data);
		return true;
	}
	public function url($url)
	{
		header("Location: $url");
	}
	public function signin($email,$pass)
	{
		$query = $this->conn->query("select email,pass from signup where email = '$email' and pass = '$pass' ");
		$query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows>0)
		{
			$_SESSION['email'] = $email;
			return true;
		}	
		else
		{
			return false;
		}
	}

	public function users_profile($email)
	{
		$query = $this->conn->query("select * from signup where email = '$email' ");
		$row = $query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows>0)
		{
			$this->data[] = $row;
		}	
		
		return $this->data;
	}

	public function cat_shows()
	{
		$query = $this->conn->query("select * from category");
		while($row = $query->fetch_array(MYSQLI_ASSOC)){
		
			$this->cat[] = $row;
		
		}
		return $this->cat;
	}

	public function qus_show($qus)
	{
		$query = $this->conn->query("select * from questions where cat_id = '$qus' ");
		while($row = $query->fetch_array(MYSQLI_ASSOC)){
		
			$this->qus[] = $row;
		
		}
		return $this->qus;
	}
	public function answer($data)
	{
		//print_r($data);
		$right=0;
		$wrong=0;
		$no_answer=0;
		$query = $this->conn->query("select id,ans from questions where cat_id ='".$_SESSION['cat']."' ");
		while($qust = $query->fetch_array(MYSQLI_ASSOC)){
		
			if($qust['ans'] == $_POST[$qust['id']])
				{
					$right++;
				}
			
			elseif($_POST[$qust['id']]==4)
			{
				$no_answer++;
			}
			else
			{
				$wrong++;
			}
		}
		$array = array();
		$array['right']=$right;
		$array['wrong']=$wrong;
		$array['no attempt']=$no_answer;
		return $array;
	}

	public function update_users_profile($data,$n,$p,$i)
	{
		$this->conn->query("update signup set pass = '$p',name = '$n', tmp_name = '$i' where email = '$data' ");

	}
}

?>
