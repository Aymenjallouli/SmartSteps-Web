<?php

namespace App\Form;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class StringToFileTransformer implements DataTransformerInterface
{
    public function transform($data): mixed
    {
        if (is_string($data)) {
            // If the data is a string, assume it's a file path
            return new UploadedFile($data, null, null, null, null, true);
        }

        return $data; // Return the original data if it's not a string
    }

    public function reverseTransform($data): mixed
    {
        if ($data instanceof UploadedFile) {
            return $data->getPathname(); // Return the file path
        }

        return $data; // Return the original data if it's not an UploadedFile
    }
}