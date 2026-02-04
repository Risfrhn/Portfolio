<?php

namespace App\View\Components\component\icon;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SkillBadge extends Component
{
    public $image;
    public $nameTool;
    public $levels;
    public $labelLevel;
    public $levelBar;
    public $level;

    /**
     * Create a new component instance.
     */
    public function __construct($image = null, $nameTool = null, $levels = 1)
    {
        $this->image = $image;
        $this->nameTool = $nameTool;
        $this->levels = $levels;
        $this->labelLevel = $this->getLabelLevelProperty();
        $this->level = $this->getLevelProperty();
        $this->levelBar = $this->getLevelBarProperty();
    }

    public function getLabelLevelProperty() : string
    {
        return match($this->levels){
            1 => 'beginner',
            2 => 'intermediate',
            3 => 'advanced',
            4 => 'expert',
            default => 'unknown'
        };
    }

    public function getLevelProperty() : string
    {
        return "{$this->levels}/4";
    }

    public function getLevelBarProperty() : string
    {
        return (string) (($this->levels/4)*100) . '%';
    }

    public function render(): View|Closure|string
    {
        return view('components.component.icon.skill-badge');
    }
}
