/** CREATE DATABASE note; **/

CREATE TABLE note.users (
	user_id		INT(11)			UNSIGNED NOT NULL AUTO_INCREMENT,
	user_name	VARCHAR(255)	NOT NULL,
	user_pass	VARCHAR(255)	NOT NULL,
	
	PRIMARY KEY (user_id)
);

CREATE TABLE note.notes (
	note_id		INT(11)			UNSIGNED NOT NULL AUTO_INCREMENT,
	note_user	INT(11)			UNSIGNED NOT NULL,
	note_note	TEXT			NOT NULL,
	note_date	DATETIME		NOT NULL,

	PRIMARY KEY (note_id),
	FOREIGN KEY (note_user)
		REFERENCES users (user_id)
);