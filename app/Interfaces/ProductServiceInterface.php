<?php

namespace App\Interfaces;

interface ProductServiceInterface
{
    public function getListPaginate(array $query_params);

    public function getProduct(int $id);
}
