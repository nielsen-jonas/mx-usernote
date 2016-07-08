<?php

/**
 * @Entity @Table(name="notes")
 **/
class Note
{
	/** @Id @Column(type="integer") @GeneratedValue **/
	protected $note_id;

	/**
	 * @ManyToOne(targetEntity="User")
	 * @JoinColumn(name="note_user", referencedColumnName="user_id")
	 **/
	protected $note_user;

	/** @Column(type="text") **/
	protected $note_note;

	/** @Column(type="datetime") **/
	protected $note_date;

	function getId()
	{
		return $this->note_id;
	}

	function getUser()
	{
		return $this->note_user;
	}

	function setUser($user)
	{
		$this->note_user = $user;
	}

	function getNote()
	{
		return $this->note_note;
	}

	function setNote($note)
	{
		$this->note_note = $note;
	}

	function getDate()
	{
		return $this->note_date;
	}

	function setDate($date)
	{
		$this->note_date = $date;
	}
}