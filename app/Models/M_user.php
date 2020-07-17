<?php namespace App\Models;
use CodeIgniter\Model;

class M_user extends Model
{
	public function get_data($email, $password)
	{
		return $this->db->table('data')
		->where(array('user_email' => $email, 'user_pass' => $password))
		->get()->getRowArray();
	}
		public function get_user($id = false)
	{
		if ($id === false) {
			return $this->findAll();
		}

		return $this->getWhere(['id_us' => $id]);
	}
	//--------------------------------------------------------------------

}
