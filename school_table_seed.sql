CREATE TABLE `schools` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `school_name` VARCHAR(100) NOT NULL,
  `contact_person` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `num_students` INT NOT NULL CHECK (num_students >= 0),
  `status` ENUM('Active', 'Inactive') DEFAULT 'Active',
  PRIMARY KEY (`id`)
);

-- Sample Data
INSERT INTO `schools` (`school_name`, `contact_person`, `email`, `num_students`, `status`) VALUES
('Springfield High', 'Lisa Simpson', 'lisa@springfield.edu', 1200, 'Active'),
('Riverdale Academy', 'Archie Andrews', 'archie@riverdale.org', 950, 'Inactive'),
('Hogwarts School', 'Albus Dumbledore', 'dumbledore@hogwarts.ac.uk', 500, 'Active');
