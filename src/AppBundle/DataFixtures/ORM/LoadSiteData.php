<?php
//namespace SiteBundle\DataFixtures\ORM;
//use Doctrine\Common\DataFixtures\FixtureInterface;
//use Doctrine\Common\Persistence\ObjectManager;
//use Symfony\Component\DependencyInjection\ContainerAwareInterface;
//use Symfony\Component\DependencyInjection\ContainerInterface;
//use AppBundle\Entity\User;
//class LoadSiteData implements FixtureInterface, ContainerAwareInterface
//{
//    /**
//     * @var ContainerInterface
//     */
//    private $container;
//    public function setContainer(ContainerInterface $container = null)
//    {
//        $this->container = $container;
//    }
//    /**
//     * Creates a user and returns it.
//     *
//     * @param string  $username
//     * @param string  $nom
//     * @param string  $prenom
//     * @param string  $password
//     * @param string  $email
//     * @param Boolean $active
//     *
//     * @return \AppBundle\Entity\User
//     */
//    public function createUser($username, $nom, $prenom, $password, $email, $sex, $active)
//    {
////        $dir='/home/imie/public_html/filRouge/web/images/users/';
//        $user = new User();
//        $user->setUsername($username);
//        $user->setNom($nom);
//        $user->setPrenom($prenom);
////        $date = new \DateTime($birthday);
////        $user->setBirthday($date);
//        $user->setPlainPassword($password);
//        $user->setEmail($email);
//        $user->setSex($sex);
//        $user->setEnabled((Boolean) $active);
//        return $user;
//    }
//    public function load(ObjectManager $manager)
//    {
//        // Create super admins
//        $nicoSupAdmin=$this->createUser('nico', 'Nico', 'Hertz', 'nico', 'hertznico@gmail.com','m', true);
//        $nicoSupAdmin->setRoles(array('ROLE_ANIMATEUR', 'ROLE_ADMIN'));
//        $manager->persist($nicoSupAdmin);
//        //create a moderator
//        $moderator=$this->createUser('animateur', 'anim', 'anim', 123, 'mod@a.fr','f', true);
//        $moderator->setRoles(array('ROLE_ANIMATEUR'));
//        $manager->persist($moderator);
//        //create a user
//        $user=$this->createUser('user', 'user', 'user', 123, 'user@a.fr','f', true);
//        $manager->persist($user);
//        //create a series
//        // $series= new Series();
//        $manager->flush();
//    }
//}