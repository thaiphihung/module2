<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class Usertest extends TestCase
{
    use WithFaker;
    
    public function test_route_user(){
        $this->get('/login')->assertStatus(200);//kiem tra URL /user co ton tai voi method GET ko - xem tat ca
        // $this->get('/user/create')->assertStatus(200);//kiem tra URL /user/create co ton tai voi method GET ko - trang them moi
        // $this->post('/user')->assertStatus(200);//kiem tra URL /user co ton tai voi method POST ko - xu ly them moi
        // $this->get('/user/1')->assertStatus(200);//kiem tra URL /user/1 co ton tai voi method GET ko - trang xem chi tiet
        // $this->get('/user/1/edit')->assertStatus(200);//kiem tra URL /user/1/edit co ton tai voi method GET ko - trang chinh sua
        // $this->put('/user/1')->assertStatus(200);//kiem tra URL /user co ton tai voi method PUT ko - xu ly chinh sua
        // $this->delete('/user/1')->assertStatus(200);//kiem tra URL /user co ton tai voi method GET ko - xu ly xoa
    }
     /*
    Kiem tra chuc nang them moi dung factory
    - Tao factory ( TenModelFactory ) bang lenh: 
    php artisan make:factory UserFactory
    - Xem file duoc tao ra trong database/factories
    - Trong ham definition return ve mang la cac truong trong CSDL, bo qua cac truong cho phep NULL, hoac de nguyen
        return [
            'name' => fake()->name(),
        ];
    */
    public function test_create_user_by_factory()
    {
        $level = User::factory(User::class)->create();//goi factory de tao moi du lieu
        $this->assertNotNull($level);//kiem tra ket qua tra ve co NULL hay khong
    }
    /*
    Kiem tra chuc nang them moi dung fillable 
    - Xem laravel doc: Mass Assignment
    - https://laravel.com/docs/9.x/eloquent#mass-assignment
    Trong User model khai bao thuoc tinh fillable
    protected $fillable = ['title'];
    */
    public function test_create_user_by_fillable()
    {
        $level = new User();
        $data = [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
        $this->assertInstanceOf(User::class, $level->create($data));//kiem tra ket qua tra ve co phai la doi tuong User ko
    }
    //kiem tra chuc nang them moi item
    public function test_create_user()
    {
        $level = new User();
        $level->name = $this->faker->word;
        $level->email = $this->faker->word;
        $level->password = $this->faker->word;
        $this->assertTrue($level->save());//kiem tra ket qua tra ve co tra ve TRUE hay ko
    }
    //kiem tra chuc nang cap nhat item
    public function test_update_user()
    {
        $level = User::where('id','>',0)->first();//cap nhat ket qua dau tien
        $level->name = 'Updated';
        $this->assertTrue($level->save());//kiem tra ket qua tra ve co tra ve TRUE hay ko
    }
    //kiem tra chuc nang xoa item
    public function test_delete_user()
    {
        $level = User::where('id','>',0)->orderBy('id', 'desc')->first();//lay ket qua cuoi cung
        $this->assertTrue($level->delete());//kiem tra ket qua tra ve co tra ve TRUE hay ko
    }
}
