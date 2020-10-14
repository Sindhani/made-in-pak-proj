<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolesController extends Controller
{
      public function role()
      {


        //   $user = User::all()->first();
        //    $user->assignRole('writer');
        //    $user->assignPermission('read_article');
        //   $permissionNames = $user->getPermissionNames();
        //   dd($permissionNames);
        $v=User::find(5)->with('permissions')->get();
       dd($v);
       dd(Permission::all()->pluck('name'));
        $users = User::role('Admin')->get('name');
        $user = User::role('Seller')->get();
        $user = User::role('Buyer')->get();
        $role1 = Role::create(['name' => 'Admin','guard_name'=>'web']);
        $role2 = Role::create(['name' => 'Seller','guard_name'=>'web']);
        $role3 = Role::create(['name' => 'Buyer','guard_name'=>'web']);
        $permission1 = Permission::create(['name' => 'Add Product','guard_name'=>'web']);
        $permission2 = Permission::create(['name' => 'Delete Product','guard_name'=>'web']);
        $permission3 = Permission::create(['name' => 'Update Product','guard_name'=>'web']);
        $permission4 = Permission::create(['name' => 'Show Product','guard_name'=>'web']);
        $permission5 = Permission::create(['name' => 'Sell Product','guard_name'=>'web']);
         $role1->givePermissionTo([$permission1,$permission2,$permission3]);
         $role2->givePermissionTo([$permission4,$permission5]);
         $role3->givePermissionTo([$permission4]);

             $user3 = User::find(3);
        $user3->assignRole($role3);
        $user2 = User::find(5);
        $user2->assignRole($role2);
           $user1 = User::find(4);
            $user1->assignRole($role1);
            //  $user2 = User::all()->second();
            //  $user2->assignRole($role2);

        return "hello";
      }

}
