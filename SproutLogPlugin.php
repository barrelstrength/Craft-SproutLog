<?php
namespace Craft;

class SproutLogPlugin extends BasePlugin
{
	public function getName()
	{
		return Craft::t('Sprout Log');
	}

	public function getVersion()
	{
		return '1.0.0';
	}

	public function getDeveloper()
	{
		return 'Barrel Strength Design';
	}

	public function getDeveloperUrl()
	{
		return 'http://barrelstrengthdesign.com';
	}

	public function hasCpSection()
	{
		return false;
	}

	/**
	 * Register twig extension
	 */
	public function addTwigExtension()
	{
		Craft::import('plugins.sproutlog.twigextensions.SproutLogTwigExtension');
	   
		return new SproutLogTwigExtension();
	}
}
