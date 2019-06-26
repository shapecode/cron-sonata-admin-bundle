<?php

namespace Shapecode\Bundle\CronSonataAdminBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;

/**
 * Class CronjobAdmin
 *
 * @package Shapecode\Bundle\CronSonataAdminBundle\Admin
 * @author  Nikita Loges
 */
class CronjobAdmin extends AbstractAdmin
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
        $collection->remove('delete');
    }

    /**
     * @inheritdoc
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('command');
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
        $listMapper->addIdentifier('fullCommand', 'string', [
            'label' => 'cronjob.full_command',
        ]);
        $listMapper->add('number', 'int', [
            'label' => 'cronjob.number',
        ]);
        $listMapper->add('maxInstances', 'int', [
            'label' => 'cronjob.max_instances',
        ]);
        $listMapper->add('period', 'string', [
            'label' => 'cronjob.period',
        ]);
        $listMapper->add('lastUse', 'datetime', [
            'label'  => 'cronjob.last_use',
            'format' => 'd.m.Y H:i P',
        ]);
        $listMapper->add('nextRun', 'datetime', [
            'label'  => 'cronjob.next_run',
            'format' => 'd.m.Y H:i P',
        ]);
        $listMapper->add('enable', 'bool', [
            'label'    => 'cronjob.enable',
            'editable' => true,
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
        $showMapper->add('command', 'string', [
            'label' => 'cronjob.command',
        ]);
        $showMapper->add('arguments', 'string', [
            'label' => 'cronjob.arguments',
        ]);
        $showMapper->add('description', 'string', [
            'label' => 'cronjob.description',
        ]);
        $showMapper->add('number', 'int', [
            'label' => 'cronjob.number',
        ]);
        $showMapper->add('maxInstances', 'int', [
            'label' => 'cronjob.max_instances',
        ]);
        $showMapper->add('enable', 'boolean', [
            'label' => 'cronjob.enable',
        ]);
        $showMapper->add('period', 'string', [
            'label' => 'cronjob.period',
        ]);
        $showMapper->add('lastUse', 'datetime', [
            'label'  => 'cronjob.last_use',
            'format' => 'd.m.Y H:i P',
        ]);
        $showMapper->add('nextRun', 'datetime', [
            'label'  => 'cronjob.next_run',
            'format' => 'd.m.Y H:i P',
        ]);
    }
}
