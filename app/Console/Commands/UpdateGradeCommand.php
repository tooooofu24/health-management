<?php

namespace App\Console\Commands;

use App\Models\Grade;
use Illuminate\Console\Command;

class UpdateGradeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'grade:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '学年を一つ繰り上げる';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $grades = Grade::all();
        foreach ($grades as $grade) {
            $grade->updateGrade();
        }
        $classes = $grades->pluck('class')->unique();
        foreach ($classes as $class) {
            $grade = new Grade;
            $grade->fill([
                'grade' => 1,
                'class' => $class,
            ])->save();
        }
        return 0;
    }
}
