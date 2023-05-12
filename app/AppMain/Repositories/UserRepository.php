<?php

namespace App\AppMain\Repositories;

class UserRepostory extends BaseRepository
{
    public function getModel()
    {
        return User::class;
    }
}
