<?php
namespace admin;
class PlanetController extends \PlanetsController
{

    public function index()
    {
        $columns = [
            'id',
            'planet',
            'star',
            'sector',
            'level',
            'biome',
            'x',
            'y',
            'version',
            'os',
            'comment',
            'image',
            'user',
        ];
        return \View::make('admin.view', [
            'title' => \Lang::get('admin.planets.title'),
            'contentTitle' => \Lang::get('admin.planets.contentTitle'),
            'columns' => $columns,
           // 'data' => $data,

        ]);
    }
}
