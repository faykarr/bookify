<?php
namespace App\Events;

use CodeIgniter\Events\Events;

class BaruAnggotaEvent extends Events
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
}
