<?php
namespace BzSnd\NewsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class NewsAdmin extends Admin
{
   

    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title')
             ->add('content')
                ;
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
              ->add('title')
             ->add('content')
                ;

    }

    public function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('content')
                ;

    }
}