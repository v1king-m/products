<?php

namespace v1m\ProdBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->setChildrenAttributes(array('class' => 'nav'));
        $menu->addChild('Продукты', array('route' => 'prod'));
        $menu->addChild('Продукты', array('route' => 'prod'));
        $menu->addChild('Добавить продукт', array('route' => 'prod_new', 'attributes' => array('class' => 'dropdown')));
        $menu->addChild('Категории', array('route' => 'cat'));
        $menu->addChild('Добавить категорию', array('route' => 'cat_new', 'attributes' => array('class' => 'dropdown')));

        // access services from the container!
        // $em = $this->container->get('doctrine')->getManager();
        // findMostRecent and Blog are just imaginary examples
        // $product = $em->getRepository('v1mProdBundle:Product')->findMostRecent();

        // $menu->addChild('Последний продукт', array(
            // 'route' => 'prod_show',
            // 'routeParameters' => array('id' => $product->getId())
        // ));

        // create another menu item
        // $menu->addChild('About Me', array('route' => 'about'));
        // you can also add sub level's to your menu's as follows
        // $menu['About Me']->addChild('Edit profile', array('route' => 'edit_profile'));

        // ... add more children

        return $menu;
    }
}
