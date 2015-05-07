<?php

class AdminController extends BaseController
{


    public function test()
    {
        $sectors = Sector::all();
        foreach ($sectors as $sector) {
            echo 'Id: ' . $sector->id . ', Name: ', $sector->name . ', Description: ' . $sector->description . '<br>';

            $stars = $sector->stars;
            foreach ($stars as $star) {
                echo '<p style="text-indent: 20px;">';
                echo 'Id: ' . $star->id . ', Name: ', $star->name . ', Description: ' . $star->description . '<br>';
                $planets = $star->planets;
                foreach ($planets as $planet) {
                    echo '<p style="text-indent: 40px;">';
                    echo 'Id: ' . $planet->id . ', Name: ' . $planet->planet . '<br>';

                    $author = $planet->author;
                    echo '<p style="text-indent: 60px;">';
                    echo 'Id: ' . $author->id . ', UserName: ' . $planet->username . '<br>';


                }

            }
            echo '<hr>';
        }


        /* $planets=Sector::find(21)->planets;

        foreach($planets as $planet)
         {
         echo 'Id: '.$planet->id. ', Name: '.$planet->planet. '<br>';
     }
        */


        return null;

    }
}
