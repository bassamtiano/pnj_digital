<?php

	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;

	class Login extends Eloquent implements UserInterface, RemindableInterface {

		protected $table = "mahasiswa";

		protected $guarded = array('nim');

		protected $hidden = "password";


	}