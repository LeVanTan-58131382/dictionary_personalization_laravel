<?php

use Illuminate\Database\Seeder;

class UnitKnowledgeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('unit_knowledge_types')->insert([
            ['id' => 1, 'name' => 'Tìm hiểu về thực vật'],
            ['id' => 2, 'name' => 'Tìm hiểu về giao thông'],
            ['id' => 3, 'name' => 'Tìm hiểu thế giới loài cá'],
            ['id' => 4, 'name' => 'Tìm hiểu thế giới loài chim'],
            ['id' => 5, 'name' => 'Tìm hiểu về cơ thể con người'],
            ['id' => 6, 'name' => 'Thám hiểm cổ kim'],

        ]);
    }
}
