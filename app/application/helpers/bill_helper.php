<?php
/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 09-03-16
 * Time: AM 12:52
 */

function btn_edit($uri)
{
	return anchor($uri, '<i class="icon-edit"></i>');
}

function btn_delete($uri)
{
	return anchor($uri, '<i class="icon-remove"></i>', array(
		'onclick' => "return confirm('Are you sure you want to delete this Record?');"
	));
}