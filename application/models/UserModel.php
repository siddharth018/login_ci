<?php

class UserModel extends CI_Model
{
	public function get_user_details()
	{
		$query = $this->db->get('UserDetails');
		return $query->result();
	}
	public function insert_user()
	{
		 $data = array('Name' => $this->input->post('Name'),
		 'Email' => $this->input->post('Email'),
		 'Pwd' => $this->input->post('Pwd'),
		 );
		 return $this->db->insert('Users',$data);
	}
	public function userDetails_store()
	{
		 $data = array(
		 'Name' => $this->input->post('Name'),
		 'Email' => $this->input->post('Email'),
		 'Mobile' => $this->input->post('Mobile'),
		 'Email' => $this->input->post('Email'),
		 'Gender' => $this->input->post('Gender'),
		 'Status' => $this->input->post('Status'),
		);
		 return $this->db->insert('UserDetails',$data);
	}
	public function user_login_check($data)
	{
	          $condition = array('Email' =>$data['Email'] ,'Pwd' => $data['Pwd']);
                $this->db->select('*');
                $this->db->from('Users');
                $this->db->where($condition);
                $query = $this->db->get(); 
                return $query->num_rows();
	}
	public function userDeatilsList()
    {
            $this->db->select('*');
            $this->db->from('UserDetails');
            $query = $this->db->get(); 
            return $query->result(); 
    } 
     public function user_edit($id)
    {
            $condition = array('id' =>$id);
            $this->db->select('*');
            $this->db->from('UserDetails');
            $this->db->where($condition);
            $query = $this->db->get(); 
            return $query->result(); 
    }
    public function udpate_userDetails($id)
	{
		$data = array(
		 'Name' => $this->input->post('Name'),
		 'Email' => $this->input->post('Email'),
		 'Mobile' => $this->input->post('Mobile'),
		 'Email' => $this->input->post('Email'),
		 'Gender' => $this->input->post('Gender'),
		 'Status' => $this->input->post('Status'),
		);
		 if ($id == 0) {
		 	 return $this->db->insert('UserDetails',$data);
		 }
		 else {
		 	$this->db->where('id',$id);
		 	return $this->db->insert('UserDetails',$data);
		 }
	}

}