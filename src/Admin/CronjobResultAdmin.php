<?php

namespace Shapecode\Bundle\CronSonataAdminBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;

/**
 * Class CronjobResultAdmin
 *
 * @package Shapecode\Bundle\CronSonataAdminBundle\Admin
 * @author  Nikita Loges
 */
class CronjobResultAdmin extends AbstractAdmin
{

    /** @var string */
    protected $translationDomain = 'shapecode_cron_sonata_admin';

    /**
     * @inheritdoc
     */
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('create');
        $collection->remove('edit');
    }

    /**
     * @inheritdoc
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('cronJob');
        $datagridMapper->add('statusCode');
    }

    /**
     * @inheritdoc
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        unset($this->listModes['mosaic']);

        $listMapper->addIdentifier('id', 'int', [
            'label' => 'cronjob.id',

        ]);
        $listMapper->addIdentifier('cronJob', null, [
            'label' => 'cronjob.cronjob',

        ]);
        $listMapper->add('statusCode', 'int', [
            'label' => 'cronjob.status_code',

        ]);
        $listMapper->add('runAt', 'datetime', [
            'label'  => 'cronjob.run_at',
            'format' => 'd.m.Y H:i P',
        ]);

        $listMapper->add('runTime', 'int', [
            'label' => 'cronjob.run_time',
        ]);

        // You may also specify the actions you want to be displayed in the list
        $listMapper->add('_action', null, [
            'label'   => 'cronjob.action',
            'actions' => [
                'show' => [],
            ],
        ]);
    }

    /**
     * @inheritdoc
     */
    public function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('id', 'int', [
            'label' => 'cronjob.id',
        ]);
        $showMapper->add('cronJob', null, [
            'label' => 'cronjob.cronjob',
        ]);
        $showMapper->add('statusCode', 'int', [
            'label' => 'cronjob.status_code',
        ]);
        $showMapper->add('runAt', 'datetime', [
            'label'  => 'cronjob.run_at',
            'format' => 'd.m.Y H:i P',
        ]);
        $showMapper->add('runTime', 'int', [
            'label' => 'cronjob.run_time',
        ]);
        $showMapper->add('output', 'string', [
            'label' => 'cronjob.output',
        ]);
    }
}
