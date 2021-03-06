<?php

class UserTableSeeder extends Seeder
{
    public function run()
{
    
    /**
     * Creates syper Admin
     */

    $user = new User();
    $user->email='anastasiya.ups@gmail';
    $user->password =Hash::make('12345678');
    $user->username='Anastasiya';
    $user->isAdmin=true;
    $user->isActive=true;
    $user->activationCode='';
    $user->remember_token=self::generateRandomSrting(100);
    $user->save();
/**
 * Creates users
 */
    $count = rand(1,10);
    for ($i=0; $i <$count; $i++) {
        $user = new User();
        $user->email='user_'.$i.'@mysite.dev';
        $user->password =Hash::make('12345678');
       $user->username='user_'.$i;
     $user->isAdmin=false;
        $user->isActive=rand(0,1);
        $user->activationCode='';
        $user->remember_token=self::generateRandomSrting(100);
        $user->save();
    }

}

    /**
     * Generate random string
     *
     * @param int $length
     * @return string
     */
    private function generateRandomSrting($length=10){
        $characters='123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
        $charactersLength=strlen($characters);
        $randomString='';
        for ($i=0;$i<$length; $i++){
            $randomString.=$characters[rand(0, $charactersLength-1)];
        }
        return $randomString;
    }
}