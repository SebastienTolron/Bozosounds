<?php

namespace BzSnd\AcceuilBundle\Menu;
use Knp\Menu\MenuFactory;
use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        

            $factory = new MenuFactory();
            $menu = $factory->createItem('My menu');
        
            $menu->addChild('Comments');

            // ArrayAccess
            $menu['Comments']->setUri('#comments');
            $menu['Comments']->addChild('My comments', array('uri' => '/my_comments'));

            // Countable
            echo count($menu); // returns 2

            // Iterator
            foreach ($menu as $child) {
              echo $child->getLabel();
                        }
            return $menu;
    }
}

?>