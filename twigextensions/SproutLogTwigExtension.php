<?php
namespace Craft;

class SproutLogTwigExtension extends \Twig_Extension
{
	public function getName()
	{
		return 'Sprout Log';
	}

	/**
	 * Returns a list of functions to add to the existing list.
	 *
	 * @return array An array of functions
	 */
	public function getFunctions()
	{
		return array(
			'log' => new \Twig_Function_Function('\Craft\craft()->sproutLog->log'),
		);
	}
}
