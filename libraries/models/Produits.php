<?php
require_once 'libraries/Database.php';
require_once 'libraries/models/Model.php';

class Produits extends Model
{
    protected $pdo;
    protected $table = "products";
}