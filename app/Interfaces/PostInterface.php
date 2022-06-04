<?php

namespace App\Interfaces;


interface PostInterface
{
    public function getAll();

    public function getById($id);

    public function create(array $attributes);
}