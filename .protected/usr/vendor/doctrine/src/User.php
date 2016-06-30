<?php

/**
 * @Entity @Table(name="users")
 **/
class User
{
	/** @Id @Column(type="integer") @GeneratedValue **/
	protected $id;

	/** @Column(type="string") **/
	protected $name;

	/** @Column(type="string") **/
	protected $pass;

	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getPass()
	{
		return $this->pass;
	}

	public function setPass($pass)
	{
		$this->pass = $pass;
	}
}