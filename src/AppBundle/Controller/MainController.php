<?php
/**
 * Created by PhpStorm.
 * User: moi
 * Date: 09/12/2016
 * Time: 12:07
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction() {
        return $this->render('main/homepage.html.twig');
    }
}