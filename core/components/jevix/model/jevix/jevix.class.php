<?php

require 'jevix.core.php';

class Jevix extends JevixCore{
	function __construct(modX &$modx,array $config = array()) {
		$this->modx =& $modx;

		$corePath = $this->modx->getOption('jevix.core_path',$config,$this->modx->getOption('core_path').'components/jevix/');
		$assetsUrl = $this->modx->getOption('jevix.assets_url',$config,$this->modx->getOption('assets_url').'components/jevix/');
		$connectorUrl = $assetsUrl.'connector.php';

		$this->config = array_merge(array(
			//'assetsUrl' => $assetsUrl,
			//'cssUrl' => $assetsUrl.'css/',
			//'jsUrl' => $assetsUrl.'js/',
			//'imagesUrl' => $assetsUrl.'images/',

			//'connectorUrl' => $connectorUrl,

			'corePath' => $corePath,
			'modelPath' => $corePath.'model/',
			//'chunksPath' => $corePath.'elements/chunks/',
			//'chunkSuffix' => '.chunk.tpl',
			'snippetsPath' => $corePath.'elements/snippets/',
			'processorsPath' => $corePath.'processors/',
		),$config);

		//$this->modx->addPackage('jevix',$this->config['modelPath']);
		$this->modx->lexicon->load('jevix:default');
		$this->setParams();
	}

	/**
	 * Initializes Jevix into different contexts.
	 *
	 * @access public
	 * @param string $ctx The context to load. Defaults to web.
	 */
	public function initialize($ctx = 'web') {
		switch ($ctx) {
			case 'mgr':
				if (!$this->modx->loadClass('jevix.request.JevixControllerRequest',$this->config['modelPath'],true,true)) {
					return 'Could not load controller request handler.';
				}
				$this->request = new JevixControllerRequest($this);
				return $this->request->handleRequest();
			break;
			case 'connector':
				if (!$this->modx->loadClass('jevix.request.JevixConnectorRequest',$this->config['modelPath'],true,true)) {
					return 'Could not load connector request handler.';
				}
				$this->request = new JevixConnectorRequest($this);
				return $this->request->handle();
			break;
			default:
				/* if you wanted to do any generic frontend stuff here.
				 * For example, if you have a lot of snippets but common code
				 * in them all at the beginning, you could put it here and just
				 * call $jevix->initialize($modx->context->get('key'));
				 * which would run this.
				 */
			break;
		}
	}
	
	
	function isJson($string) {
		json_decode($string);
		return (json_last_error() == JSON_ERROR_NONE);
	}

	function setParams() {
		// Allowed tags
		if (isset($this->config['cfgAllowTags'])) {
			$this->setParam('cfgAllowTags',explode(',',$this->config['cfgAllowTags']));
			unset($this->config['cfgAllowTags']);
		}
		
		// Other settings
		foreach ($this->config as $k => $v) {
			if (strpos($k, 'cfg') === false) {continue;}
			
			if (!method_exists($this, $k)) {
				$this->modx->log(modX::LOG_LEVEL_ERROR, 'Error on Jevix init. There is no method '.$k);
			}
			
			// Flags
			if (is_bool($v) === true) {
				$this->setParam($k,$v);
			}
			// Simple methods
			else if (!$this->isJSON($v)) {
				$value = explode(',', $v);
				$this->setParam($k,$value);
			}
			// Advanced methods
			else if ($k == 'cfgAllowTagParams' || $k == 'cfgSetTagParamsRequired') {
				$value = json_decode($v, true);
				foreach ($value as $k2 => $v2) {
					try {$this->$k($k2,$v2);}
					catch (Exception $ex) {$this->modx->log(modX::LOG_LEVEL_ERROR, $ex);}
				} 
			}
			else if ($k == 'cfgSetAutoReplace') {
				$value = json_decode($v, true);
				if (count($value) != 2) {continue;}
				try {$this->cfgSetAutoReplace($value[0], $value[1]);}
				catch(Exception $ex) {$this->modx->log(modX::LOG_LEVEL_ERROR, $ex);}
			}
			else if ($k == 'cfgSetTagChilds') {
				$value = json_decode($v, true);
				foreach ($value as $tmp) {
					try {$this->cfgSetTagChilds($tmp[0], $tmp[1], $tmp[2], $tmp[3]);}
					catch(Exception $ex) {$this->modx->log(modX::LOG_LEVEL_ERROR, $ex);}
				}
			}
			else if ($k == 'cfgSetTagParamDefault') {
				$value = json_decode($v, true);
				foreach ($value as $tmp) {
					try {$this->cfgSetTagParamDefault($tmp[0], $tmp[1], $tmp[2], $tmp[3]);}
					catch(Exception $ex) {$this->modx->log(modX::LOG_LEVEL_ERROR, $ex);}
				}
			}
			// Other methods
			else {
				$value = json_decode($v, true);
				$this->setParam($k,$value);
			}
		}
	}

	function setParam($param, $value) {
		try {
			$this->$param($value);
		}
		catch(Exception $ex) {
			$this->modx->log(modX::LOG_LEVEL_ERROR, $ex);
		}
	}
	
}