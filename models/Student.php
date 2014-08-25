<?php

class Student extends Eloquent
{
    public $timestamps = false;
    protected $fillable = array('name','cell');
}