<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\UserModel;

class Pages extends BaseController
{
    // Shared data avoids repeating the same student details in multiple methods.
    private function sharedData(string $title, string $activePage): array
    {
        return [
            'title'      => $title,
            'activePage' => $activePage,
            'name'       => 'Jian Edward A. Acob',
            'section'    => 'TW32',
            'course'     => 'IT0049 - Web System Technologies',
        ];
    }

    public function index(): string
    {
        // countAllResults() keeps both dashboard totals synchronized with MySQL.
        $data = $this->sharedData('Dashboard', 'home');
        $data['customerCount'] = (new CustomerModel())->countAllResults();
        $data['userCount'] = (new UserModel())->countAllResults();

        return view('pages/home', $data);
    }

    public function about(): string
    {
        // activePage lets the shared navigation highlight the current page.
        return view('pages/about', $this->sharedData('About', 'about'));
    }
}
