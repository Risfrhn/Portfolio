<?php

namespace App\View\Components\component\input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class var1 extends Component
{
    public ?string $label = null;
    public ?bool $readonly = false;
    public ?string $type = null;
    public ?string $placeholder = null;
    public ?string $model = null;

    public function __construct( ?string $label, ?bool $readonly, ?string $type, ?string $placeholder, ?string $model) {
        $this->label = $label;
        $this->readonly = $readonly;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->model = $model;
    }
    
    public function render(): View|Closure|string
    {
        return view('components.component.input.var1');
    }
}
