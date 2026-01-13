<?php

namespace App\View\Components\component\icon;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class var2 extends Component
{
    public ?string $image = null;
    public ?string $nameTool = null;
    public ?int $levels = 1;
    public string $labelLevel;
    public string $level;
    public int $levelBar;
    public function __construct(?string $image = null, ?string $nameTool = null, ?int $levels = 1)
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

    public function getLevelBarProperty() : int
    {
        return (int) (($this->levels/4)*100);
    }

    public function render(): View|Closure|string
    {
        return view('components.component.icon.var2');
    }
}
