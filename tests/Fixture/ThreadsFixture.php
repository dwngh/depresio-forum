<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ThreadsFixture
 */
class ThreadsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'created' => '2022-02-23 14:37:09',
                'archived' => 1,
            ],
        ];
        parent::init();
    }
}
