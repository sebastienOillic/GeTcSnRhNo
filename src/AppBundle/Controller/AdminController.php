<?php
namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Util\UserManipulator;




class AdminController extends Controller
{

    public function indexAction()
    {
        $this->denyAccessUnlessGranted('ROLE_RESPONSABLE', null, 'Unauthorized to access this page!');
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();
        return $this->render('AppBundle:Admin:admin.html.twig', array('users' => $users,));

    }


    public function promoteAction($username)
    {
        $this->denyAccessUnlessGranted('ROLE_RESPONSABLE', null, 'Unauthorized to access this page!');
        $userManager = $this->get('fos_user.user_manager');
        $userManipulator = new UserManipulator($userManager);

        $user = $userManipulator->addRole($username, 'ROLE_REFERENT');
        $users = $userManager->findUsers();
        return $this->render('AppBundle:Admin:admin.html.twig', array('users' => $users,));


    }

    public function demoteAction($username)
    {
        $this->denyAccessUnlessGranted('ROLE_RESPONSABLE', null, 'Unauthorized to access this page!');
        $userManager = $this->get('fos_user.user_manager');
        $userManipulator = new UserManipulator($userManager);

        $user = $userManipulator->removeRole($username, 'ROLE_REFERENT');
        $users = $userManager->findUsers();
        return $this->render('AppBundle:Admin:admin.html.twig', array('users' => $users,));


    }

}
