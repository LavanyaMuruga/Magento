<?php
namespace Embitel\Login\Controller\Index;

use Magento\Framework\App\Action\Context;
use Embitel\Login\Model\Employee;

class Save extends \Magento\Framework\App\Action\Action
{
    /**
     * @var Login
     */
    
    protected $_login;

    public function __construct(
        Context $context,
        Employee $login
    ) {
        $this->_login = $login;
        parent::__construct($context);
    }
         
    public function execute()
    {
        
        $get_data=$this->getRequest()->getParams();
        $data=[
            'emp_id'=> $get_data['emp_id'],
            'first_name' => $get_data['first_name'],
            'last_name' => $get_data['last_name'],
            'email' => $get_data['email'],
            'mobile_number' => $get_data['mobile_number'],
            'company_name' => $get_data['company_name'],
            'department' => $get_data['department'],
            'occupation' => $get_data['occupation'],
            'address' => $get_data['address'],
            'joining_date' => $get_data['joining_date'],
            'date_of_birth' => $get_data['date_of_birth']
        ];

        $login = $this->_login;
        $login->setData($data);
        $login->save();

        if ($login->getId()) {
            $this->messageManager->addSuccessMessage(__('Data Saved'));
        } else {
            $this->messageManager->addErrorMessage(__('Data not Saved'));
        }
    
        $resultRedirect =  $this->resultRedirectFactory->Create();
        $resultRedirect->setPath('login/index/showdata');
        return $resultRedirect;
    }
}
