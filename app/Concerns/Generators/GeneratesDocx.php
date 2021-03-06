<?php

namespace App\Concerns\Generators;

use App\Models\Application\Application;
use App\Models\Application\File;

trait GeneratesDocx
{

    /**
     * @param Application $application
     * @return File
     */
    public function docx(Application $application)
    {
        $template = $this->getParsedTemplate($application);
        return $this->createFileFromTemplate($template, 'docx', $application);
    }
}