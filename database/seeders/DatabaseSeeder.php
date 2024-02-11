<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\Status;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Project::factory(5)->create();

        \App\Models\User::create([
            'name' => 'Leon Bale',
            'userType' => 'bdc',
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        Status::create([
            'status' => 'approved',
            'year' => 2016,
            'active' => 0
        ]);

        Status::create([
            'status' => 'approved',
            'year' => 2017,
            'active' => 0
        ]);

        Status::create([
            'status' => 'bdc_initializing',
            'year' => 2023,
            'active' => 1
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // year_2016::create([
        //     'project' => 'Project One',
        //     'aipRefCode' => '345-3499-001',
        //     'activityDesc' => 'Description Here...',
        //     'impOffice' => 'Implementation Offfice Here...',
        //     'startDate' => Carbon::parse('2016-01-01'),
        //     'endDate' => Carbon::parse('2016-12-01'),
        //     'expectedOutput' => 'Expected Output here...',
        //     'fundingServices' => 934,
        //     'personalServices' => 4453,
        //     'maint' => 3433,
        //     'capitalOutlay' => 55555,
        //     'total' => 667
        // ]);

        // year_2016::create([
        //     'project' => 'Project Two',
        //     'aipRefCode' => '666-3499-001',
        //     'activityDesc' => 'Description Here...',
        //     'impOffice' => 'Implementation Offfice Here...',
        //     'startDate' => Carbon::parse('2016-01-01'),
        //     'endDate' => Carbon::parse('2016-12-25'),
        //     'expectedOutput' => 'Expected Output here...',
        //     'fundingServices' => 934,
        //     'personalServices' => 4453,
        //     'maint' => 3433,
        //     'capitalOutlay' => 55555,
        //     'total' => 999
        // ]);
    }
}
