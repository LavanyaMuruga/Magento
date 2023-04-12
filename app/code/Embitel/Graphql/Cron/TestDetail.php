<?php

namespace Embitel\Graphql\Cron;

class TestDetail
{
    public function execute()
    {
        //creating a mycsv.csv file
        $current_date=date("dMY_his");
        $name_of_file='customer_' .$current_date.'.csv';
        
        
        $file_data=array(
            'firstname'=>'Lavanya',
            'lastname'=>'Murugan',
            'email'=>'lavanya@gamil.com',
            'telephone'=>'1234567890'
        );

        file_put_contents('/var/www/html/magento2/var/export/' .$name_of_file,$file_data);
    }
}
?>