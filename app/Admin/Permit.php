<?php

Admin::model('App\Permit')->title('')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([

	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', 'Name'),
		FormItem::text('slug', 'Slug'),
	]);
	return $form;
});