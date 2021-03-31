<?php

namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\FlexibleDataTransferObject;

class TestData extends FlexibleDataTransferObject
{

    /**
     * @var string
     */
    public $name;

    /**
     * @var ?string
     */
    public $last_name;


    /**
     * @var \App\User[];
     */
    public $users;


}
