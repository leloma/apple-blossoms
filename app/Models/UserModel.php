<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{

    protected $table = 'tbl_users';
    protected $allowedFields = ['first_name', 'last_name', 'email', 'gender' ,'password', 'role'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];


    protected function beforeInsert(array $data){
        $data = $this->passwordHash($data);

        return $data;
        
    }

    protected function beforeUpdate(array $data){
        $data = $this->passwordHash($data);

        return $data;
        
    }


    protected function passwordHash(array $data){
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

            return $data;
        }
    }
}
    