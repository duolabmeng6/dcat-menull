<?php

namespace Ll\Menull\Repositories;

use Dcat\Admin\Repositories\EloquentRepository;

class Menull extends EloquentRepository
{
    public function __construct($modelOrRelations = [])
    {
        $this->eloquentClass = \Ll\Menull\Models\Menull::class;

        parent::__construct($modelOrRelations);
    }
}
