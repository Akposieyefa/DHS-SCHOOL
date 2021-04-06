<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['type' => 'current_session', 'description' => '2021-2022'],
            ['type' => 'system_title', 'description' => 'CJIA'],
            ['type' => 'system_name', 'description' => 'Daarul Hadeethis Salafiyya'],
            ['type' => 'term_ends', 'description' => '7/10/2021'],
            ['type' => 'term_begins', 'description' => '7/10/2021'],
            ['type' => 'phone', 'description' => '08100788859'],
            ['type' => 'address', 'description' => 'Kaduna State'],
            ['type' => 'system_email', 'description' => 'nhs@gmail.com'],
            ['type' => 'alt_email', 'description' => 'nhs@gmail.com'],
            ['type' => 'email_host', 'description' => 'nhs@gmail.com'],
            ['type' => 'email_pass', 'description' => 'password'],
            ['type' => 'lock_exam', 'description' => 0],
            ['type' => 'logo', 'description' => ''],
            ['type' => 'next_term_fees_j', 'description' => '20000'],
            ['type' => 'next_term_fees_pn', 'description' => '25000'],
            ['type' => 'next_term_fees_p', 'description' => '25000'],
            ['type' => 'next_term_fees_n', 'description' => '25600'],
            ['type' => 'next_term_fees_s', 'description' => '15600'],
            ['type' => 'next_term_fees_c', 'description' => '1600'],
        ];

        DB::table('settings')->insert($data);

    }
}
