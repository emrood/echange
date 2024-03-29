<?php

use Faker\Factory;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;
use App\Permission;

class AdminSeeder extends DatabaseSeeder
{

    public function run()
    {

        //Admin profile
        $admin = User::where('email','=','emmanuelroodly@hotmail.com')->first();

        if($admin == null){
            $admin = new User();
            $admin->email = 'emmanuelroodly@hotmail.com';
            $admin->name = 'Noel Emmanuel Roodly';
            $admin->password = bcrypt("gotechhaiti123");
            $admin->save();
        }


        if($admin->profile == null){
            $profile = new \App\Profile();
            $profile->user_id = $admin->id;
            $profile->save();
        }

        //Ludovic profile
        $ludovic = User::where('email','=','ludoviclatortue@gmail.com')->first();

        if($ludovic == null){
            $ludovic = new User();
            $ludovic->email = 'ludoviclatortue@gmail.com';
            $ludovic->name = 'Ludovic Latortue';
            $ludovic->password = bcrypt("password123");
            $ludovic->save();
        }


        if($ludovic->profile == null){
            $profile = new \App\Profile();
            $profile->user_id = $ludovic->id;
            $profile->save();
        }

        $user = User::where('email','=','user@user.com')->first();
        if($user == null) {
            $user = new User();
            $user->email = 'user@user.com';
            $user->name = 'User';
            $user->password = bcrypt("password123");
            $user->save();
        }


        if($user->profile == null){
            $profile = new \App\Profile();
            $profile->user_id = $user->id;
            $profile->save();
        }

        //Creating Roles
        $admin_role = Role::firstOrcreate(['name' => 'admin']);
        $cachier_role = Role::firstOrcreate(['name' => 'cashier']);
        $permission = Permission::firstOrcreate(['name' => 'All Permission']);

        if(!$admin->hasRole('admin')){
            $admin->assignRole('admin');
            $admin_role->givePermissionTo($permission);
        }

        if(!$ludovic->hasRole('admin')){
            $ludovic->assignRole('admin');
            $admin_role->givePermissionTo($permission);
        }

        if(!$user->hasRole('cashier')){
            $user->assignRole('cashier');
        }

        //Assigning default permissions to Admin
        $blog_add = Permission::firstOrCreate([
            'name' => 'add-blog'
        ]);
        $blog_view = Permission::firstOrCreate([
            'name' => 'view-blog'
        ]);
        $blog_edit = Permission::firstOrCreate([
            'name' => 'edit-blog'
        ]);
        $blog_delete = Permission::firstOrCreate([
            'name' => 'delete-blog'
        ]);

        if(!$admin->hasPermission($blog_add)){
            $admin_role->givePermissionTo($blog_add);
        }

        if(!$admin->hasPermission($blog_view)) {
            $admin_role->givePermissionTo($blog_view);
        }

        if(!$admin->hasPermission($blog_edit)) {
            $admin_role->givePermissionTo($blog_edit);
        }

        if(!$admin->hasPermission($blog_delete)) {
            $admin_role->givePermissionTo($blog_delete);
        }

        $blog_category_add = Permission::firstOrCreate([
            'name' => 'add-blog-category'
        ]);
        $blog_category_view = Permission::firstOrCreate([
            'name' => 'view-blog-category'
        ]);
        $blog_category_edit = Permission::firstOrCreate([
            'name' => 'edit-blog-category'
        ]);
        $blog_category_delete = Permission::firstOrCreate([
            'name' => 'delete-blog-category'
        ]);

        if(!$admin->hasPermission($blog_category_add)) {
            $admin_role->givePermissionTo($blog_category_add);
        }
        if(!$admin->hasPermission($blog_category_view)) {
            $admin_role->givePermissionTo($blog_category_view);
        }
        if(!$admin->hasPermission($blog_category_edit)) {
            $admin_role->givePermissionTo($blog_category_edit);
        }
        if(!$admin->hasPermission($blog_category_delete)) {
            $admin_role->givePermissionTo($blog_category_delete);
        }

        $this->command->info('Admin User created with username emmanuelroodly@@hotmail.com');
    }

}