<?php

namespace App\AppMain\Config;

class AppConst
{
    const DOMAIN_ADMIN = 'http://localhost:8080';
    const DOMAIN_FRONTEND = 'http://localhost:3000';
    const CODE_EXCEPTION_MESSAGE = 99999;

    const UPLOAD_CONFIG_NAME = "upload";
    const UPLOAD_CONFIG_PATH = "/uploads/";

    const PAGE_LIMIT = NULL;

    const ROLES = [
        0 => 'admin',
        1 => 'lecture',
        2 => 'student',
    ];
}
