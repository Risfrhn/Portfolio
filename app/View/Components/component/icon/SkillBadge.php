<?php

namespace App\View\Components\Component\Icon;

use Illuminate\View\Component;

class SkillBadge extends Component
{
    public $image;
    public $nameTool;
    public $levels;
    public $labelLevel;
    public $levelBar;
    public $level;

    public function __construct($image = null, $nameTool = null, $levels = null)
    {
        $this->image = $image;
        $this->nameTool = $nameTool;
        $this->levels = $levels;
        $this->labelLevel = $this->getLabelLevel($levels);
        $this->level = "{$levels}/4";
        $this->levelBar = (string) (($levels/4)*100) . '%';
    }

    public function getLabelLevel($levels) : string
    {
        return match((int)$levels){
            1 => 'beginner',
            2 => 'intermediate',
            3 => 'advanced',
            4 => 'expert',
            default => 'unknown'
        };
    }

    public function render()
    {
        return view('components.component.icon.skill-badge');
    }
}
