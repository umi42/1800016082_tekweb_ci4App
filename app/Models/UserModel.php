<?php namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = 'data';
	public function getUser($id = false)
	{
	 if ($id === false)
	 {
	  return $this->findAll();
	 }
	 return $this->getWhere(['user_id' => $id]);
	}

		public function saveUser($data)
	{
		$query = $this->db->table($this->table)
		->insert($data);
		return $query;
	}

		
		public function updateUser($data, $id)
		{
		 return $this->db->table('$this->table')->update($data,array('user_id => $id'));
		return $query;
		}

		public function deleteUser($id)
		{
		$query = $this->db->table($this->table)->delete(array('user_id' => $id));
	}
}