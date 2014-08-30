<?php
namespace Craft;

class SproutLogService extends BaseApplicationComponent
{
	/**
	 * Output a log message to the plugin log file
	 * 
	 * @param  string $message Message
	 * @return Outputs message in craft/storage/runtime/logs/sproutlog.log file
	 */
	public function log($message = '')
	{
		SproutLogPlugin::log($message);
	}
}
