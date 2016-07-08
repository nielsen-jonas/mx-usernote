<?php

/**
 * @Entity @Table(name="users")
 **/
class User
{
	/** @Id @Column(type="integer") @GeneratedValue **/
	protected $user_id;

	/** @Column(type="string") **/
	protected $user_name;

	/** @Column(type="string") **/
	protected $user_pass;

	public function getId()
	{
		return $this->user_id;
	}

	public function getName()
	{
		return $this->user_name;
	}

	public function setName($name)
	{
		$this->user_name = $name;
	}

	public function getPass()
	{
		return $this->user_pass;
	}

	public function setPass($pass)
	{
		$this->user_pass = $pass;
	}
}