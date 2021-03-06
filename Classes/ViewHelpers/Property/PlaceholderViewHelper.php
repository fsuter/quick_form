<?php
namespace Vanilla\QuickForm\ViewHelpers\Property;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Fabien Udriot <fabien.udriot@typo3.org>
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
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Reflection\ObjectAccess;
use TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper;
use Fab\Vidi\Tca\Tca;

/**
 * View helper which returns a placeholder taken from the TCA.
 */
class PlaceholderViewHelper extends RenderViewHelper {

	/**
	 * Returns a placeholder taken from the TCA.
	 * The property is given by the context.
	 * @todo remove me as handled by {qf:form.additionalAttributes()}
	 *
	 * @return NULL|string
	 */
	public function render() {
		$dataType = $this->templateVariableContainer->get('dataType');
		$property = $this->templateVariableContainer->get('property');
		$fieldName = GeneralUtility::camelCaseToLowerCaseUnderscored($property);
		return Tca::table($dataType)->field($fieldName)->get('placeholder');
	}
}
