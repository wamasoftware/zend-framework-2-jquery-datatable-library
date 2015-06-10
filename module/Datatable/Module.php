<?php
/**
 * @author Samier Sompura <samier.sompura@wamasoftware.com>
 * @link http://www.wamasoftware.com
 */

namespace Datatable;

class Module
{
	public function getAutoloaderConfig()
	{
		return array(
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
					__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
							),
					),		
		);
	}
	
	public function getConfig()
	{
		return include __DIR__ . '/config/module.config.php';
	}
}