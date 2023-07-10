<?php
class User{
    protected string $name;
    protected string $email;
    public $role = 2; 

    const ROLE_ADMIN = 1;
    const ROLE_USER = 2;
    public function __construct($name,$email,$role){
       $this ->name = $name;
       $this->email = $email;
       $this->role = $role;
    }
    public function getInfo(){
        return [
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role == self::ROLE_ADMIN ? 'admin' : 'user'
        ];
    }
    public function isAdmin(){
        return $this->role == self::ROLE_ADMIN ? 'là admin' : 'là người bình thường';
    }
    public function setName($name){
        $this-> name = $name;
    }
    public function setEmail($email){
        $this -> email = $email;
    }
    public function setRole($role){
        $this -> role = $role;
    }

}
$user = new User('Hùng', 'denkk1996@gmail.com', User::ROLE_ADMIN);
$user->setName('Hùng');
$user->setEmail('denkk1996@gmail.com');
$user->setRole(User::ROLE_USER);

print_r($user->getInfo()); 
echo $user->isAdmin();
?>