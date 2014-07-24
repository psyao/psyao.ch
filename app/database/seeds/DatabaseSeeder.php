<?php

class DatabaseSeeder extends Seeder
{
    /**
     * @var array
     */
    protected $tables = [
        'companies',
        'jobs',
        'institutes',
        'courses',
        'skills'
    ];

    /**
     * @var array
     */
    protected $seeders = [
        'CompaniesTableSeeder',
        'JobsTableSeeder',
        'InstitutesTableSeeder',
        'CoursesTableSeeder',
        'SkillsTableSeeder'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->cleanDatabase();

        foreach ($this->seeders as $seedClass)
        {
            $this->call($seedClass);
        }
    }

    /**
     *
     */
    private function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        foreach ($this->tables as $table)
        {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
