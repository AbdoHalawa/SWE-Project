-- Table for Subjects
CREATE TABLE Subjects (
    SubjectID INT PRIMARY KEY,
    SubjectName VARCHAR(50)
);

-- Table for Teachers
CREATE TABLE Teachers (
    TeacherID INT PRIMARY KEY,
    TeacherName VARCHAR(50),
    Passowrd VARCHAR(255),
    TeacherType VARCHAR(20) -- 'Normal' or 'Head'
);

-- Table for Materials
CREATE TABLE Materials (
    MaterialID INT PRIMARY KEY,
    Title VARCHAR(100),
    Content TEXT,
    SubjectID INT,
    TeacherID INT,
    FOREIGN KEY (SubjectID) REFERENCES Subjects(SubjectID),
    FOREIGN KEY (TeacherID) REFERENCES Teachers(TeacherID)
) ENGINE=InnoDB;

-- Table for Classes
CREATE TABLE Classes (
    ClassID INT PRIMARY KEY,
    ClassName VARCHAR(20),
    Grade INT -- 10, 11, 12
);

-- Table for Students
CREATE TABLE Students (
    StudentID INT PRIMARY KEY,
    StudentName VARCHAR(50),
    Passowrd VARCHAR(255),
    Grade INT, -- 10, 11, 12
    ClassID INT, -- Foreign key referencing Classes
    FOREIGN KEY (ClassID) REFERENCES Classes(ClassID)
);

-- Table for Enrollment (connecting students with classes)
CREATE TABLE Enrollment (
    StudentID INT,
    ClassID INT,
    PRIMARY KEY (StudentID, ClassID),
    FOREIGN KEY (StudentID) REFERENCES Students(StudentID),
    FOREIGN KEY (ClassID) REFERENCES Classes(ClassID)
);

-- Table for Parents
CREATE TABLE Parents (
    ParentID INT PRIMARY KEY,
    ParentName VARCHAR(50),
    Passowrd VARCHAR(255),

);

-- Table for Grades
CREATE TABLE Grades (
    StudentID INT,
    ClassID INT,
    SubjectID INT,
    Grade INT,
    PRIMARY KEY (StudentID, ClassID, SubjectID),
    FOREIGN KEY (StudentID) REFERENCES Students(StudentID),
    FOREIGN KEY (ClassID) REFERENCES Classes(ClassID),
    FOREIGN KEY (SubjectID) REFERENCES Subjects(SubjectID)
);

-- Table for Fees
CREATE TABLE Fees (
    StudentID INT,
    Amount DECIMAL(10, 2),
    PaymentStatus BOOLEAN, -- True if paid, False if not paid
    PRIMARY KEY (StudentID),
    FOREIGN KEY (StudentID) REFERENCES Students(StudentID)
);
