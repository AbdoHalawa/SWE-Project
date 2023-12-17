

-- Table for Teachers
CREATE TABLE Teachers (
    TeacherID INT PRIMARY KEY,
    TeacherName VARCHAR(50),
    Gender VARCHAR(10),
    DateOfBirth DATE,
    PhoneNumber VARCHAR(15),
    JoiningDate DATE,
    Experience INT,
    Email VARCHAR(100), -- Added Email field
    Password VARCHAR(255),
    TeacherType VARCHAR(20) -- 'Normal' or 'Head'
);
-- Table for Subjects
CREATE TABLE Subjects (
    SubjectID INT PRIMARY KEY,
    SubjectName VARCHAR(50),
    TeacherID INT,
    FOREIGN KEY (TeacherID) REFERENCES Teachers(TeacherID)
)ENGINE=InnoDB;

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
CREATE TABLE Parents (
    ParentID INT PRIMARY KEY,
    ParentName VARCHAR(50),
    Email VARCHAR(100), -- Added Email field
    Password VARCHAR(255)
);
-- Table for Students
CREATE TABLE Students (
    StudentID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Gender VARCHAR(10),
    DateOfBirth DATE,
    Religion VARCHAR(50),
    Grade ENUM('10', '11', '12'), -- Using ENUM for valid grades
    ClassID INT, -- Foreign key referencing Classes
    AdmissionID INT,
    ParentID INT, -- Foreign key referencing Parents
    PhoneNumber VARCHAR(15),
    Email VARCHAR(100),
    Password VARCHAR(255),
    FOREIGN KEY (ClassID) REFERENCES Classes(ClassID),
    FOREIGN KEY (ParentID) REFERENCES Parents(ParentID),
    UNIQUE (AdmissionID)
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
    Due DATE,
    Amount2 DECIMAL(10, 2),
    Due2 DATE,
    PaymentStatus BOOLEAN,
    PaymentStatus2 BOOLEAN, -- True if paid, False if not paid
    PRIMARY KEY (StudentID),
    FOREIGN KEY (StudentID) REFERENCES Students(StudentID)

);

CREATE TABLE Assignments (
    AssignmentID INT PRIMARY KEY,
    Title VARCHAR(100),
    SubjectID INT,
    Content TEXT,
    FileUpload VARCHAR(255), 
    UploadDate DATE,
    Deadline DATE,
    TeacherID INT,
    Grade ENUM('10', '11', '12'),
    ClassID INT,
    FOREIGN KEY (SubjectID) REFERENCES Subjects(SubjectID),
    FOREIGN KEY (TeacherID) REFERENCES Teachers(TeacherID),
    FOREIGN KEY (ClassID) REFERENCES Classes(ClassID)


) ENGINE=InnoDB;