<?php
/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 09-03-16
 * Time: AM 12:52
 */

function btn_edit($uri)
{
	return anchor('bill/edit/' . $uri, '<i class="fa fa-lg fa-pencil"></i>');
}

function btn_view($uri)
{
	return "&nbsp; &nbsp;" . anchor('bill/view/' . $uri, '<i class="fa fa-lg fa-eye"></i>');
}

function btn_delete($uri)
{
	return anchor('bill/delete/' . $uri, '<i class="fa fa-lg fa-trash"></i>', array(
		'onclick' => "return confirm('Are you sure you want to delete this Record?');"
	));
}