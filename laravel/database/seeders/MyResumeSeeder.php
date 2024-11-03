<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Resume;

class MyResumeSeeder extends Seeder
{
    public function run()
    {
        Resume::create([
            'name' => 'Christine Joy V. Estrada',
            'objective' => 'Collaborative junior UX designer specializing in front-end development.',
            'skills_design' => json_encode([
                '1' => 'Developed collateral such as display, marketing and packaging materials to support product branding strategies.',
                '2' => 'Completed full redesigns of existing websites to improve navigation and enhance visuals increasing search engine rankings by 30%.',
                '3' => 'Designed, implemented and monitored web pages, plugins and functionality for continuous improvement.',
            ]),
            'skills_problem_solving' => json_encode([
                '1' => 'Analyzed user feedback to influence future design updates, ameliorating user concerns and pain points during subsequent patch cycles.',
                '2' => 'Created and updated trend boards, investigated changing conditions and recommended strategic adoptions to capitalize on projected changes.',
                '3' => 'Collected, defined and translated user requirements into project designs and implementation plans.',
            ]),
            'skills_management' => json_encode([
                '1' => 'Owned more than 100 projects per year from initial research and conceptual design through testing and implementation phases.',
                '2' => 'Coordinated, created and scheduled content, designs and periodic updates to company website.',
                '3' => 'Worked with five teams to gather and define requirements, establish scopes and manage project milestones.',
            ]),
            'certifications' => json_encode([
                '1' => "2nd place quiz bee nutrition month in high school",
            ]),
            'address' => '058 J.P Rizal St, San Jose, Baliwag, Bulacan',
            'phone' => '09634238213',
            'email' => '202111184@btech.ph.education',
            'additional_skills' => json_encode([
                '1' => 'Drawing',
                '2' => 'Singing',
                '3' => 'Design',
                '4' => 'Communication',
                '5' => 'Time Management',
                '6' => 'Painting',
                '7' => 'Sketch',
                '8' => 'HTML & CSS',
            ]),
            'education' => json_encode([
                '1' => 'Marvel 7 Elementary School ',
                '2' => 'Marvel 7 National Highschool',
                '3' => 'Marvel 7 Senior Highschool',
                '4' => 'Bachelor of Science in Information Technology - 2024',
            ]),
        ]);
    }
}
