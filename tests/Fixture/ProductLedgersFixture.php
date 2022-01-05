<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductLedgersFixture
 */
class ProductLedgersFixture extends TestFixture
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
                'date' => '2021-12-31',
                'product_code' => 'Lorem ipsum dolor ',
                'in_out' => 'L',
                'quantity' => 1,
                'amount' => 1,
                'created' => '2021-12-31 03:10:52',
                'modified' => '2021-12-31 03:10:52',
            ],
        ];
        parent::init();
    }
}
