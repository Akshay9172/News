<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    $adminPermissions = [
    //         'home',
    //         'create-news','store-news','news-list',
    //         'languages','create-languages',
    //         'add-category','show-category','delete-category',
    //         'contact-us','contact-uss','show-contactus','delete-contactus',
    //    ];

        $adminPermissions = User::adminDefaultPermissions();
         $role = Role::whereName('admin')->first();

        //create User
         $user = new User();
         $user->first_name= "Super";
         $user->last_name= "Admin";
         $user->email= "admin@gmail.com";
         $user->password= bcrypt("12345678");
         $user->mobile= "1234567890";
         $user->slug= Str::slug("Super Admin");
         $user->save();

         //Assign Role & Permission
         $user->assignRole("admin");
         $user->givePermissionTo($adminPermissions);

    }
}
