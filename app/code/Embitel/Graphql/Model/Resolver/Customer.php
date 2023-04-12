<?php
declare(strict_types=1);
namespace Embitel\Graphql\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class Customer implements ResolverInterface
{
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ){
        $customers = [
            [
                'firstname'=>"Lavanya77",
                'lastname'=>"Murugan",
                'email'=>"lavanya@gmail.com",
                'telephone'=>"1324263823",
                'city'=>"Banglore",
                'state'=>"Karnataka",
                'country'=>"India"
            ],
            [
                'firstname'=>"Lavanya778",
                'lastname'=>"Murugan",
                'email'=>"lavanya@gmail.com",
                'telephone'=>"1324263823",
                'city'=>"Banglore",
                'state'=>"Karnataka",
                'country'=>"India"
            ],
            [
                'firstname'=>"Lavanya88",
                'lastname'=>"Murugan",
                'email'=>"lavanya@gmail.com",
                'telephone'=>"1324263823",
                'city'=>"Banglore",
                'state'=>"Karnataka",
                'country'=>"India"
            ]
 ];
 return[
                'total_count'=> count($customers),
                'items'=> $customers
            ];
    }
}
?>
