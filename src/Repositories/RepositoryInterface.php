<?php

namespace App\Repositories;

interface RepostitoryInterface
{
    public function getAll();
    public function store(array $attributes);
    public function delete($id);
}
