<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class PageController extends Controller
{
    public function show($id = null)
    {
        // if ($id === null) {
        //     return 'Страница show';
        // }
        // return $id;
        
        //return view('test');
        $name = 'Иван';
    $surname = 'Иванов';
    return view('pages.show', [
        'name' => $name, 
        'surname' => $surname
    ]);

    }
    public function showAll()
    {
        return 'Страница showAll';
    }
}
?>