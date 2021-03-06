DROP TABLE IF EXISTS UserQuizzes;
DROP TABLE IF EXISTS QuestionOptions;
DROP TABLE IF EXISTS Questions;
DROP TABLE IF EXISTS Quiz;
DROP TABLE IF EXISTS Users;
CREATE TABLE Users(
	FirstName VARCHAR(255) NOT NULL,
	LastName VARCHAR(255) NOT NULL,
	Email VARCHAR(255) NOT NULL,
	Password VARCHAR(255) NOT NULL,
	PRIMARY KEY (email)
);

CREATE TABLE Quiz(
	ID INTEGER NOT NULL,
	Email VARCHAR(255) NOT NULL,
	Title VARCHAR(255) NOT NULL,
	CONSTRAINT FK_User FOREIGN KEY (Email) REFERENCES Users(Email),
	PRIMARY KEY (ID)
);

CREATE TABLE Questions(
	ID INTEGER NOT NULL,
	QuizID INTEGER NOT NULL,
	Description TEXT NOT NULL,
	Answer CHAR(1) NOT NULL,
	CONSTRAINT FK_Quiz FOREIGN KEY (QuizID) REFERENCES Quiz(ID),
	PRIMARY KEY (ID, QuizID)
);

CREATE TABLE QuestionOptions(
	ID INTEGER NOT NULL,
	QuizID INTEGER NOT NULL,
	QuestionID INTEGER NOT NULL,
	OptionDescription TEXT NOT NULL,
	CONSTRAINT FK_Question FOREIGN KEY (QuizID, QuestionID) REFERENCES Questions(ID, QuizID)
);

CREATE TABLE UserQuizzes(
	UserEmail VARCHAR(255) NOT NULL,
	QuizID INTEGER NOT NULL,
	Score INTEGER NOT NULL,
	Taken BOOLEAN NOT NULL,
	FOREIGN KEY (UserEmail) REFERENCES Users(Email),
	FOREIGN KEY (QuizID) REFERENCES Quiz(ID),
	PRIMARY KEY (UserEmail, QuizID)
);
