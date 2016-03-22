<?php

Admin::model('App\Option')->title('Общие настройки')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('name')->label('Товар'),
		Column::string('value')->label('Value'),

		Column::datetime('created_at')->label('Создан')->format('d.m.Y'),
	]);

	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', 'Name'),
		FormItem::text('slug', 'Slug'),
		FormItem::text('value', 'Value'),
	]);
	return $form;
});