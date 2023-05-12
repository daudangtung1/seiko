<?php

namespace App\AppMain\Services;

use App\AppMain\Repositories\UserRepostory;

class UserService
{
    protected $userRepostory;

    public function __construct(UserRepostory $userRepostory)
    {
        $this->userRepostory = $userRepostory;
    }
    public function index()
    {
        return $this->userRepostory->all();
    }
}
