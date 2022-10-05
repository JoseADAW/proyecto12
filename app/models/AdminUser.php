<?php

class AdminUser
{
    private $db;

    public function __construct()
    {
        $this->db = Mysqldb::getInstance()->getDatabase();
    }

    public function createAdminUser($data)
    {
        $response = false;

        if (! $this->existsEmail($data['email'])){

            $passwords = hash_hmac('sha512', $data['password'], ENCRIPTKEY);

            $sql = 'INSERT INTO admins(name,email,password,status,deleted,login_at,created_at,updated_ad,daleted_at) VALUES (:name,:email,:password,:status,:deleted,:login_at,:created_at,:updated_ad,:daleted_at)'

                $params = [
                    ':name' => $data['name'],
                    ':email' => $data['email'],
                    ':password' => $data['password'],
                    ':status' => $data['status'],
                    ':deleted' => $data['deleted'],
                    ':login_at' => $data['login_at'],
                    ':created_at' => $data['created_at'],
                    ':updated_ad' => $data['updated_ad'],
                    ':daleted_at' => $data['daleted_at'],
                ];

            $query = $this->db->prepare($sql);
            $response = $query->execute($params);
        }
        return $response;
    }

    public function existsEmail($email)
    {
        $sql = 'SELECT * FROM admins WHERE email=:email';
        $query = $this->db->prepare($sql);
        $query->bindParam('email', $email, PDO::PARAM_STR);
        $query->execute();
    }
}