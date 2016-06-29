<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Application\Database\UsersTable;
use Application\Model\User;
// use Zend\Validator\EmailAddress;
class FreelancersController extends AbstractActionController
{
    public function indexAction()
    {

      return new ViewModel();
    }


    public function profileAction()
    {
      $data = array();

      $request = $this->getRequest();

    	$id = $request->getQuery("id");
    	//validation $id
      //$usersTable = new UsersTable("raphbixy_raph","webdevelopment4","raphbixy_xlb");
      $usersTable = new UsersTable("root","root","xlb");

      $users = $usersTable->getUserById($id);

    //  $userModel = new User($user["id"],$user["firstname"],$user["middlename"],$user["lastname"],$user["email"],$user["skills"]);
      foreach($users as $user){

        $userModel = new User($user["id"],$user["firstname"],$user["middlename"],$user["lastname"],$user["email"],$user["skills"]);

      }

      $data = $userModel->getAll_array();


    return new ViewModel($data);

    }

    public function responseAction(){
      $data = array();

      //$usersTable = new UsersTable("raphbixy_raph","webdevelopment4","raphbixy_xlb");
      $usersTable = new UsersTable("root","root","xlb");

      $users = $usersTable->getAllUsers();

        foreach($users as $user){

         $userModel = new User($user["id"],$user["firstname"],$user["middlename"],$user["lastname"],$user["email"],$user["skills"]);

         $data["users"][] = $userModel->getAll_array();

       }


      return new JsonModel($data);

    }


}
