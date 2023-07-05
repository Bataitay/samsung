<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class FridgeExport implements FromCollection
{
    public function collection()
    {
        return User::all();
    }
}
