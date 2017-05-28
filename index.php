<?php
use Collection\Repositories\UserRepository as UserRepository;
use Collection\Filters\AuthFilter as AuthFilter;
require_once 'app/start.php';

$filter = new AuthFilter();
