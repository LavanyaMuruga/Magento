<?php
namespace Embitel\Graphql\Model;

use Magento\Customer\Model\GroupFactory;
use Magento\Customer\Model\ResourceModel\Group\Collection;
class CustomService implements \Embitel\Graphql\Api\CustomInterface
{
 protected $_collection;
 protected $_groupFactory;
 public function __construct(
 Collection $collection,
 GroupFactory $groupFactory
 ) {
 $this->_collection = $collection;
 $this->_groupFactory = $groupFactory;
 }

 /**
     * get Name
     *
     * @return array
     */
 public function getData()
 {
 $data= [
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
    ]];
 return $data;
 }
 

 /**
     * Get name
     * @param string[] $data
     *
     * @return array
     */
 public function createCustomerGroup($data)
 {
 try{
    $customerGroup = $this->_groupFactory->create();
    $customerGroup->setData($data);
    $customerGroup->save();
    $customerData = $this->_collection->getData();
    return $customerData;
 }
 catch (\Exception $er){
 echo $er;
 }
 }
}

?>





