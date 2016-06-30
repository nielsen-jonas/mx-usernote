<?php

/**
 * @Entity @Table(name="notes")
 **/
class Note
{
	/** @Id @Column(type="integer") @GeneratedValue **/
	protected $id;

	/**
	 * @ManyToOne(targetEntity="User")
	 * @JoinColumn(name="user", referencedColumnName="id")
	 **/
	protected $user;

	/** @Column(type="text") **/
	protected $note;

	/** @Column(type="datetime") **/
	protected $date;

	function getId()
	{
		return $this->id;
	}

	function getUser()
	{
		return $this->user;
	}

	function setUser($user)
	{
		$this->user = $user;
	}

	function getNote()
	{
		return $this->note;
	}

	function setNote($note)
	{
		$this->note = $note;
	}

	function getDate()
	{
		return $this->date;
	}

	function setDate($date)
	{
		$this->date = $date;
	}
}