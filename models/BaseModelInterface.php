<?php

namespace app\models;


interface BaseModelInterface
{
    public static function tableName(): string;

    public function getAll();

    public function getOne();
}