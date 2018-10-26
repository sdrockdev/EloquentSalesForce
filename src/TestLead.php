<?php

namespace Lester\EloquentSalesForce;

class TestLead extends Model
{
	protected $table = 'Lead';
	
	public function tasks()
	{
		return $this->hasMany(TestTask::class, 'WhoId');
	}
}