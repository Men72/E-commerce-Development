<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $commands = [
            ['name' => 'php artisan make:controller ProjectController', 'file' => 'app/Http/Controllers/ProjectController.php', 'purpose' => 'Creates a controller'],
            ['name' => 'php artisan make:model Item -m', 'file' => 'app/Models/Item.php & database/migrations', 'purpose' => 'Creates model and migration'],
            ['name' => 'php artisan make:resource ItemResource', 'file' => 'app/Http/Resources/ItemResource.php', 'purpose' => 'API resource wrapper'],
        ];

        return view('artisan_report', compact('commands'));
    }
}
