<?php

/*
 * This file is part of the FOSPropel1UserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\Propel1UserBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class FOSPropel1UserExtension extends Extension implements PrependExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $processor = new Processor();
        $configuration = new Configuration();

        $config = $processor->processConfiguration($configuration, $configs);

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
    }

    public function prepend(ContainerBuilder $container)
    {
        $container->prependExtensionConfig('fos_user', array(
            'db_driver' => 'custom',
            'user_class' => 'FOS\Propel1UserBundle\Model\User',
            'user_manager' => 'fos_propel1_user.user_manager',
            'group' => array(
                'group_class' => 'FOS\Propel1UserBundle\Model\Group',
                'group_manager' => 'fos_propel1_user.group_manager',
            ),
        ));
    }
}
