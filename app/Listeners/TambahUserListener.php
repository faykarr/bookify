<?php
namespace App\Listeners;

use App\Models\UserModel; // Sesuaikan dengan path dan nama model yang benar
use App\Events\BaruAnggotaEvent;
use Myth\Auth\Password;

class TambahUserListener
{
    public static function handle(BaruAnggotaEvent $event)
    {
        $dataAnggota = $event->data;

        // Buat data user dari data anggota
        $userModel = new UserModel(); // Gantilah dengan nama model yang sesuai
        $userData = [
            'email' => $dataAnggota['email'], // Sesuaikan dengan field yang sesuai
            'username' => $dataAnggota['username'], // Sesuaikan dengan field yang sesuai
            'password_hash' => Password::hash($dataAnggota['password']), // Sesuaikan dengan field yang sesuai
            'role' => 'anggota', // Atur role sesuai kebutuhan
            'active' => 1, // Atur status aktif sesuai kebutuhan
            'force_pass_reset' => 0, // Sesuaikan dengan field yang sesuai
            'created_at' => date('Y-m-d H:i:s'), // Sesuaikan dengan field yang sesuai
            'updated_at' => date('Y-m-d H:i:s'), // Sesuaikan dengan field yang sesuai
        ];

        $userModel->insert($userData);
    }
}
