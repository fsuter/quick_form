<?php
namespace Vanilla\QuickForm;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Fabien Udriot <fabien.udriot@typo3.org>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
use TYPO3\CMS\Core\SingletonInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * A class to store the arguments being passed.
 */
class ArgumentRegistry implements SingletonInterface {

	/**
	 * @var $arguments
	 */
	protected $arguments = array();

	/**
	 * Gets a singleton instance of this class.
	 *
	 * @return \Vanilla\QuickForm\ArgumentRegistry
	 */
	static public function getInstance() {
		return GeneralUtility::makeInstance('Vanilla\QuickForm\ArgumentRegistry');
	}

	/**
	 * @return array
	 */
	public function get() {
		return $this->arguments;
	}

	/**
	 * @param array $arguments
	 * @return \Vanilla\QuickForm\ArgumentRegistry
	 */
	public function set($arguments) {
		$this->arguments = $arguments;
		return $this;
	}
}
