<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class TablerateImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function mapping(): array
    {
        return [
            'name'  => 'B1',
            'email' => 'B2',
        ];
    }
    
    public function model(array $row)
    {
        return new User([
            'name' => $row['name'],
            'email' => $row['email'],
        ]);
    }
}
