<?php
Namespace Datatable;

return array(
		'service_manager' => array(
			'invokables' => array(
				'Datatable\Service\Datatables' => 'Datatable\Service\Datatables'
      )
    ),
    // Doctrine config
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Model\Entity' => __NAMESPACE__ . '_driver'
                )
            )
        )
    )		
);