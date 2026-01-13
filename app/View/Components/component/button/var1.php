<?php

namespace App\View\Components\component\button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class var1 extends Component
{
    public ?string $label;
    public ?string $action;
    public ?string $href;
    public ?string $submit;
    public function __construct(?string $label = null, ?string $action = null, ?string $href = null, ?string $submit = null)
    {
        $this->label = $label;
        $this->action = $action;
        $this->href = $href;
        $this->submit = $submit;
    }
    
    public function render(): View|Closure|string
    {
        return view('components.component.button.var1');
    }
}
