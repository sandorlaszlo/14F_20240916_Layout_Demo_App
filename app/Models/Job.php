<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    private static $listOfJobs = [
        [
            'id' => 1,
            'title' => 'director',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur deserunt accusantium recusandae cumque excepturi quam nemo, consequuntur ipsa nostrum illum cupiditate, corporis deleniti pariatur voluptate quae. Similique officia ipsa nemo.',
            'location' => 'New york'
        ],
        [
            'id' => 2,
            'title' => 'programmer',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur deserunt accusantium recusandae cumque excepturi quam nemo, consequuntur ipsa nostrum illum cupiditate, corporis deleniti pariatur voluptate quae. Similique officia ipsa nemo.',
            'location' => 'At home'
        ],
        [
            'id' => 3,
            'title' => 'project manager',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur deserunt accusantium recusandae cumque excepturi quam nemo, consequuntur ipsa nostrum illum cupiditate, corporis deleniti pariatur voluptate quae. Similique officia ipsa nemo.',
            'location' => 'London'
        ]
    ];

    public static function all() {
        return self::$listOfJobs;
    }

    public static function find($id) {
        // foreach (self::$listOfJobs as $job) {
        //     if ($job['id'] == $id)
        //         return $job;
        // }
        // return null;
        return Arr::first(self::$listOfJobs, function ($job) use ($id) {
            return $job['id'] == $id;
        });
    }
}