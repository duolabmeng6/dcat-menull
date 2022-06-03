<?php

namespace Ll\Menull;

use Dcat\Admin\Extend\Setting as Form;

class Setting extends Form
{
    public function title()
    {
        return $this->trans('menull.title');
    }

    public function form()
    {
    }
}
