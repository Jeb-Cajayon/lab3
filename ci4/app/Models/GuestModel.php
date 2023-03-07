<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'myguests';

    protected $allowedFields = ['name','website','email','comment'];

    public function getGuest()
    {
        return $this->findAll();
    }
}