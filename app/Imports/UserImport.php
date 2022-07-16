<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ToModel,WithHeadingRow
{

    public function model(array $row)
    {
        return new User([
            'username' => $row['username'],
            'name' => $row['name'],
            'email' => $row['email'],
            'password' => Hash::make("12345678"),
            'cdate' => Date("Y-m-d H:i:s"),
            'status' => 5,
            'flag' => 1,
            'flag2' => 1
        ]);
    }
}
