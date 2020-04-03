<?php

use Illuminate\Database\Seeder;

class DonViHanhChinhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\XaPhuong::class)->create([
            'name' => 'Phú Xuân',
            'quanhuyen_id' => function () {
                return factory(App\QuanHuyen::class)->create([
                    'name' => 'Phú Vang',
                    'tinhthanh_id' => function () {
                        return factory(App\TinhThanh::class)->create([
                            'name' => 'Thừa Thiên Huế'
                        ])->id;
                    }
                ])->id;
            }
        ]);
    }
}
