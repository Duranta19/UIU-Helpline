-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 07:41 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiu_helpline`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `name` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `c_password` varchar(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `photo_loc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`name`, `username`, `password`, `c_password`, `userid`, `photo_loc`) VALUES
('Abed Jafry', '1111', '1111 ', '1111 ', 9, '322367347_3388298991451074_6373095566054615742_n.jpg'),
('Rifat Bin Hossain', '2222', '2222 ', '2222 ', 10, '141078528_2871901206391110_7153248256735891190_n.jpg'),
('Abu Sayem Md. Siam', '3333', '3333 ', '3333 ', 11, '322708703_529364625818504_5577429218721606500_n.jpg'),
('Musfiqur Rahman', '4444', '4444 ', '4444 ', 12, '283146395_1983003795239722_6840636792543765938_n.jpg'),
('Hasibul Rajib', '5555', '5555 ', '5555 ', 13, '342169929_806977821036098_1948018168400563413_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE `book_details` (
  `b_title` varchar(1000) NOT NULL,
  `b_pdf` varchar(500) NOT NULL,
  `b_img` varchar(500) NOT NULL,
  `b_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_details`
--

INSERT INTO `book_details` (`b_title`, `b_pdf`, `b_img`, `b_no`) VALUES
('BoyleStad  Solution 11th ed', 'BoyleStad  Solution Manual 11th ed.pdf', '00639-SOLUTIONS (1).jpg', 15),
('Anton-Calculus-Early-10th', 'Anton-Calculus-Early-Transcendentals-10th-solutions-ISM.pdf', 'cal.jfif', 16),
('Boyce,DiPrima.Elementary', 'Boyce,DiPrima.ElementaryDifferentialEquations.pdf', 'download (1).jfif', 17),
('Digital Logic And Computer', 'Digital Logic And Computer Design By M. Morris Mano (2nd Edition).pdf', '4bfc08562_181484.jpg', 18),
('heat-and-thermodynamics', 'heat-and-thermodynamics-by-brijlal-n-subrahmanyam-www-euelibrary-com.pdf', '51VLscpChLL.jpg', 19),
('fundamentals-of-electric', 'fundamentals-of-electric-circuits-4th-ed-c-alexander-m-sadiku-mcgraw-hill-2009-ww.pdf', 'download (2).jfif', 20),
('Schaums Laplace Transform', '205552.jpg', '205552.jpg', 21),
('Introduction to theory ', 'tcbook-u.pdf', '515u8TZAIlL.jpg', 22),
('Contemporary Linear Algebra', '(Solution Manual) Contemporary Linear Algebra by Howard Anton, Robert C. Busby.pdf', 'ABAAAfu18AI-0.jpg', 23),
('Design and Analysis', 'Book.pdf', 'download (3).jfif', 24),
('Logic Programming', 'Logic Programming by Frank Pfenning.pdf', '5144YWKZH9L._SX360_BO1,204,203,200_.jpg', 25),
('Coding and Cryptography', 'Coding and Cryptography.pdf', 'product_pages.jfif', 26);

-- --------------------------------------------------------

--
-- Table structure for table `community_post`
--

CREATE TABLE `community_post` (
  `id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_details` text NOT NULL,
  `post_by` int(11) DEFAULT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `community_post`
--

INSERT INTO `community_post` (`id`, `post_title`, `post_details`, `post_by`, `date`) VALUES
(12, 'How to withdraw a course.', 'The deadline is over now can i withdraw a course now??', 9, '2023-04-30 21:58:31.752176'),
(13, 'Section selection time ', 'Is the section selection deadline over now?', 10, '2023-05-01 13:51:31.359310'),
(14, 'Course Advising', 'I am new admitted and I would like to know If I miss to take any course or related section what should I can do? Do I take any section and any course later? ', 13, '2023-05-01 19:46:21.705728'),
(15, 'Shuttle service', 'Is there any shuttle service provided in city ??', 11, '2023-05-01 19:50:59.454974'),
(16, 'Library open issue', 'As there is no makeup class tomorrow, will the library or study room be open or available tomorrow?? Can someone enlighten me about this ASAP?', 10, '2023-05-01 19:57:40.306129'),
(17, 'Credit transfer', 'Can anyone please help me with the procedure for credit transfer? \r\nCompleted credit: 90(after this trimester), dept. of CSE', 9, '2023-05-01 20:00:28.405175'),
(18, 'Course withdraw', 'Is the time for course withdraw is over??', 12, '2023-05-01 20:07:40.066725'),
(19, 'Registration time ', 'Is there any possibility to extend the time of registration?', 13, '2023-05-01 20:11:04.252125'),
(20, 'Installment deadline', 'can anyone tell me the deadline of the 4th installment??', 9, '2023-05-01 20:27:40.456103');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `id` int(11) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_title` varchar(20) NOT NULL,
  `course_des` text NOT NULL,
  `prerequisite` varchar(10) NOT NULL,
  `offered_trimester` varchar(3) NOT NULL,
  `img` varchar(500) NOT NULL,
  `credit_hour` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`id`, `course_code`, `course_title`, `course_des`, `prerequisite`, `offered_trimester`, `img`, `credit_hour`) VALUES
(4, 'CSE 425', 'Microprocessor ', 'Introduction to 8-bit, 16-bit, and 32-bit microprocessors: architecture, addressing modes, instruction set, interrupts, multi-tasking and virtual\r\nmemory; Memory interface; Bus interface; Arithmetic coprocessor; interfacing: programmable\r\nperipheral interface, programmable timer, serial\r\ncommunication interface, programmable interrupt controller, direct memory access, keyboard\r\nand display interface, Integrating microprocessor\r\nwith interfacing chips; Microcontroller: Introduction to microcontrollers (i.e. 8051), How to Program an 8-bit Microcontroller using C and assembly language, Introduction to Embedded System,\r\nEmbedded Systems programming.', 'Electric C', '6th', 'download.jfif', '3.0'),
(5, 'EEE 2113', 'Electrical Circuits', 'Fundamental electrical concepts and measuring\r\nunits, D.C. voltages, current, resistance and\r\npower, laws of electrical circuits and methods of\r\nnetwork analysis, principles of D.C. measuring\r\napparatus, laws of magnetic fields and methods\r\nof solving simple magnetic circuits. Alternating\r\ncurrent, Instantaneous and RMS current, voltage\r\nand power, average power combinations of R, L\r\n& C circuits, Phasor, representation of sinusoidal\r\nquantities', '', '5th', 'images.jfif', '3.0'),
(6, ' MATH 1151', 'Fundamental Calculus', 'Function: domain and range of a function, Translation, reflection, compression and stretches of a\r\nfunction; Even and odd functions; Inverse functions; One to One and many to one functions;\r\nFamily of exponential, logarithmic, sine and cosine functions; Limit, continuity and differentiability; Tangent line; Derivative and chain rule;\r\nAn overview of area problem; Newton’s antiderivative method in finding area; Indefinite integral, fundamental theorem of calculus; Definite\r\nintegral; Area between two curves, arc length', '', '3rd', '111901526X.jpg', '3.0'),
(7, ' CSE 3411', 'System Analysis and ', 'System Study: concept of system and system\r\nstudy, system organogram, system development\r\nlife cycle, different types of system, skills of\r\nsystem analyst; Information Gathering: types\r\nof information, sources of information, information gathering tools and their competitive analysis; Guidelines to conduct information gathering\r\ntools; Feasibility Study: statement of constraints,\r\ntypes of feasibility for IT products, determining\r\nbest candidate system, SWOT analysis, cash flow\r\nand NPV analysis, feasibility Report; System Design: structured and object oriented design using\r\nUML; DFD, use case, sequence diagram.', '', '8th', 'download (4).jfif', '3.0'),
(8, 'CSE 4531', ' Computer Security', 'Fundamental concepts: confidentiality, integrity\r\nand availability, assurance, authenticity and\r\nanonymity; threats and attacks, security principles; Encryption, symmetric and asymmetric\r\nkey encryption; Security: OS access control, Web\r\nand mobile application security, software security,\r\nhardware security, memory protection, data base\r\nsecurity; Security Attacks: malware, DDos, Trojan and backdoors, buffer overflow, social engineering.\r\n', 'CSE 323', '12t', 'USD-Cyber-Cybersecurity-vs-Information-Security-vs-Network-Security-_2.jpeg', '3.0'),
(9, 'CSE 3521', 'Database Management ', 'Concepts of database systems; Data Models:\r\nEntity-Relationship model, Relational model;\r\nQuery Languages: SQL, Relational algebra, Constraints, View; Security and Integrity Management; Functional dependencies and normalization; Indexing: primary and secondary indexes,\r\nB+ trees; Hashing: Static and Dynamic hashing,\r\nCollision Problem in Hashing; Transaction management; Recovery: RAID Different levels; File\r\nstorage management.', '', '7th', 'Database-Management-System.jpg', '3.0'),
(10, ' CSE 4165', 'Web Programming', 'Web architecture and HTTP: History and architecture of the World Wide Web, overview of the\r\nHyper Text Transfer Protocol, other related protocols; Hyper Text Markup Language: The concept of markup, overview of HTML ( table, form,\r\nframe, window, link etc.); Cascading Style Sheets:\r\nOverview of CSS (selectors, different CSS properties and values); Client side scripting: Variables, data types, control structure, functions,\r\nDocument Object Model (DOM), event handlers,\r\nproperties, methods, cookies; Server side scripting: Concepts, variables, data types, control\r\nstructure, functions, objects, regular expressions,\r\nmails, cookies, sessions and a related web framework; Database: Content generation, data exchange; Layered or Multi-tier Architecture for\r\nWeb Applications; MVC; Content Management\r\nSystem.\r\n', 'CSE 118', '9th', 'seo-web-design-concept-web-programming-on-digital-background-H117MD.jpg', '3.0'),
(11, 'CSE 3711', 'Computer Networks', 'Introduction to Computer Networks; Network\r\nEdge, Network Core ; Layering architecture:\r\nTCP/IP and OSI Reference Models; Circuit\r\nSwitching and Packet Switching; Hubs, Routers,\r\nand Switches; Application layer services: Web,\r\nHTTP, FTP, SMTP, DNS architecture; Introduction to transport layer: UDP,TCP; Principles\r\nof Reliable data transfer; TCP Congestion and\r\nFlow control; Routing and forwarding, DHCP,\r\nNAT, Fragmentation; Routing algorithms; Autonomous Systems; Link layer services; MAC\r\nProtocols; Link layer addressing; Ethernet; ARP;\r\nWireless links and network characteristics; Wi-Fi:\r\nIEEE 802.11 Wireless LANs.', 'CSE 315', '8th', '627e650f22a9a52cd54085be_Computer networking.jpg', '3.0'),
(12, ' CSE 2233', 'Theory of Computatio', 'Finite Automata: Deterministic finite automata,\r\nNon-deterministic finite automata, equivalence\r\nand conversion of deterministic and nondeterministic finite automata, pushdown automata. Context free language, context frees\r\ngrammar. Turing machines: basic machines,\r\nconfiguration, computing with turning machine,\r\ncombining turning machines.\r\n', '', '6th', 'download (5).jfif', '3.0'),
(13, ' CSE 3421', 'Software Engineering', 'Basic Concepts: software, software engineering, recent trends and challenges; Process Models: waterfall, incremental, iterative; Requirements Engineering: software requirements specification, system requirements specification, stakeholder requirements specification; Architecture:\r\nmonolithic architecture, service-oriented architecture, micro-service architecture, model-viewcontroller pattern and variants, system design;\r\nServices Computing: application programming\r\ninterface, web services, cloud services, representational state transfer, JavaScript object notation,\r\nsimple object access protocol; User Interface Design: web and mobile platform, wireframe model,\r\nmethods and tools; ', 'CSE 311', '9th', 'download (6).jfif', '3.0'),
(16, ' CSE 2118', 'Advanced Object Orie', 'Laboratory work based on advanced topics in Object Oriented Programming with a project work.', 'CSE 116', '4th', 'download.png', '1.0'),
(17, 'MATH 2205', 'Probability and Stat', 'Frequency distribution; Mean, median, mode and\r\nother measures of central tendency; Standard deviation and other measures of dispersion; Moments, skewness and kurtosis, correlation and regression analysis; Elementary probability theory\r\nand discontinuous probability distribution, e.g.,\r\nbinomial, Poisson and negative binomial; Continuous probability distributions, e.g. normal and\r\nexponential; Characteristics of distributions; Elementary sampling theory; Estimation of parameter, Hypothesis testing.\r\n', 'MATH 151', '6th', '1604310994662.jfif', '3.0'),
(18, 'CSE 2217', 'Data Structure and A', 'Methods for the design of efficient algorithms:\r\ndivide and conquer, greedy methods, dynamic\r\nprogramming; Graph algorithms: MST algorithms, shortest path algorithms, maximum flow\r\nand maximum bipartite matching; Advanced\r\ndata Structures: balanced binary search trees\r\n(AVL trees, red-black trees, splay trees), skip\r\nlists, advanced heaps (Fibonacci heaps, binomial heaps); Hashing; String matching algorithms; NP-completeness; NP-hard and NPcomplete problems; Coping with hardness: backtracking, branch and bound, approximation algorithms.\r\n', 'CSE 213', '6th', 'download (7).jfif', '3.0');

-- --------------------------------------------------------

--
-- Table structure for table `course_review`
--

CREATE TABLE `course_review` (
  `course_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `review` text NOT NULL,
  `difficulty_level` int(2) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `review_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_review`
--

INSERT INTO `course_review` (`course_id`, `user_id`, `review`, `difficulty_level`, `date`, `review_id`) VALUES
(5, 5, 'Its an interesting course. I enjoyed the course throughout the semester.', 3, '0000-00-00 00:00:00.000000', 1),
(17, 5, '', 4, '0000-00-00 00:00:00.000000', 2),
(4, 5, '', 3, '0000-00-00 00:00:00.000000', 3),
(10, 5, '', 2, '0000-00-00 00:00:00.000000', 4),
(13, 5, 'Its an useful course for CSE students. Students will learn a great deal from this course.', 3, '0000-00-00 00:00:00.000000', 5),
(7, 5, '', 2, '0000-00-00 00:00:00.000000', 6),
(11, 5, '', 4, '0000-00-00 00:00:00.000000', 7),
(9, 5, '', 3, '0000-00-00 00:00:00.000000', 8),
(8, 5, '', 3, '0000-00-00 00:00:00.000000', 9),
(6, 5, '', 5, '0000-00-00 00:00:00.000000', 10),
(12, 5, '', 3, '0000-00-00 00:00:00.000000', 11),
(16, 5, '', 4, '0000-00-00 00:00:00.000000', 12),
(18, 5, 'By learning this course, you will get a comprehensive grasp of stack, queue, binary tree, graph and BST structures and algorithms, as well as their applications. By the end of this course, you will be able to understand and implement stack, queue and binary tree, use binary trees to solve problems such Huffman encoding, understand and implement the graph structure as well as related algorithms such BFS, DFS and PFS, understand and implement AVL tree.', 3, '0000-00-00 00:00:00.000000', 13);

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_by` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`id`, `comment`, `comment_by`, `post_id`, `date`) VALUES
(13, 'Contact with department.', 1, 12, '0000-00-00 00:00:00.000000'),
(14, 'Contact with department.', 1, 12, '0000-00-00 00:00:00.000000'),
(15, 'Contact with department.', 1, 12, '0000-00-00 00:00:00.000000'),
(16, 'contact with department', 1, 12, '0000-00-00 00:00:00.000000'),
(17, 'contact with Monir sir.', 9, 12, '0000-00-00 00:00:00.000000'),
(18, 'Contact with the department office.', 10, 12, '0000-00-00 00:00:00.000000'),
(19, 'Yes the time of the section selection is over.', 11, 13, '0000-00-00 00:00:00.000000'),
(20, 'Yes', 12, 13, '0000-00-00 00:00:00.000000'),
(21, 'If you will start your first trimester then you don not have to worry about the course section selection process, it will be automatically appointed to you. If you are 2nd or higher trimester then log in to your ucam and contact with your Advisor/Mentor.', 9, 14, '0000-00-00 00:00:00.000000'),
(22, 'Yes. Contact with the admission office.', 12, 15, '0000-00-00 00:00:00.000000'),
(23, 'Yes\r\n', 10, 15, '0000-00-00 00:00:00.000000'),
(24, 'Yes available.\r\n', 9, 16, '0000-00-00 00:00:00.000000'),
(25, 'Contact with the admission office.', 11, 17, '0000-00-00 00:00:00.000000'),
(26, 'Yes its over 3 days ago\r\n', 9, 18, '0000-00-00 00:00:00.000000'),
(27, 'You can register even after the deadline.For that you would need a written approval i.e application from the Registrar Sir, then submitting it to your respective Department Head will work.', 9, 19, '0000-00-00 00:00:00.000000'),
(28, 'It is over now.', 10, 20, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `questionans`
--

CREATE TABLE `questionans` (
  `id` int(11) NOT NULL,
  `quesAns` varchar(500) NOT NULL,
  `ansBy` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `ansFile` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionans`
--

INSERT INTO `questionans` (`id`, `quesAns`, `ansBy`, `question_id`, `date`, `ansFile`) VALUES
(14, 'Here is the solution.', 9, 24, '2023-04-30 21:47:47', '341864984_1294580458158519_7657922241346516250_n.jpg'),
(15, 'Here is your solution.', 12, 27, '2023-05-01 00:55:53', '340721841_185058297733753_3079249103807309529_n.jpg'),
(16, 'Here it is.', 12, 26, '2023-05-01 01:00:10', 'electronics answer.png'),
(17, 'Here is the code:\r\n#include<iostream>\r\nusing namespace std;\r\n\r\nint main()\r\n{\r\n    int n,num,rev=0,digit;\r\n\r\n    cout<<\"Enter a number :\";\r\n    cin>>num;\r\n    n=num;\r\n\r\n    while(num>0)\r\n    {\r\n        digit=num%10;\r\n        rev=rev*10+digit;\r\n        num=num/10;\r\n    }\r\n\r\n    if(n==rev)\r\n    {\r\n         cout<<\"The number is palindrome\";\r\n    }\r\n\r\n    else\r\n      {\r\n        cout<<\"The number is not palindrome\";\r\n      }\r\n\r\n    return 0;\r\n}\r\n', 9, 25, '2023-05-01 01:02:45', ''),
(18, 'Here is your answer:\r\nRefactoring means improving the design of the existing code without changing its functionality.\r\nBad coding practices: Long method class, duplicate code, bad cohesion, bad coupling, complex/unreadable code.', 10, 28, '2023-05-01 12:09:57', ''),
(19, 'Here is your problem answer. I am adding the cpp file.', 10, 29, '2023-05-01 12:18:10', '2 (4).cpp');

-- --------------------------------------------------------

--
-- Table structure for table `questionbank1`
--

CREATE TABLE `questionbank1` (
  `id` int(11) NOT NULL,
  `question_title1` varchar(100) NOT NULL,
  `question_file1` varchar(500) NOT NULL,
  `question_by` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionbank1`
--

INSERT INTO `questionbank1` (`id`, `question_title1`, `question_file1`, `question_by`, `date`) VALUES
(8, 'Mid micro question', 'Mid micro question.pdf', 9, '2023-04-30 21:51:40'),
(9, 'Software Engineering question', 'Mid_Term_Question_223_CSE3421_B_TG.pdf', 10, '2023-05-01 12:21:47'),
(10, 'Software Engineering Fall 2022 mid term question', 'Mid_Term_Question_223_CSE3421_B_TG.pdf', 10, '2023-05-01 12:37:24'),
(11, 'Electronics Mid Fall 2022 Question', 'EEE2123_fall_22_MID-4.pdf', 9, '2023-05-01 18:13:37'),
(12, 'Computer Architecture Mid Term Question Summer 2022', 'CA-Summer-22-MID.pdf', 13, '2023-05-01 18:22:46'),
(13, 'System Analysis and Design Mid Question', 'Mid_Question_CSE 3411_Summer 2022.pdf', 10, '2023-05-01 19:20:29'),
(14, 'Electronics assignment Spring 2023', 'Assignment-1 (5).pdf', 9, '2023-05-01 19:27:50'),
(15, 'Data Structure and Algorithm II Mid Question Summer 22', 'Data_ii_Mid_q.pdf', 9, '2023-05-01 19:37:00'),
(16, 'Data Structure and Algorithm II Lab Assignment', '222 CSI 228 (A) assignment 02.docx (3).pdf', 9, '2023-05-01 19:38:18'),
(17, 'Software Engineering CT Question Spring 23', 'CSE 3421 Section B CT 2 Question.pdf', 9, '2023-05-01 19:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `questionbanklist`
--

CREATE TABLE `questionbanklist` (
  `id` int(11) NOT NULL,
  `question_title` varchar(100) NOT NULL,
  `question_details` varchar(500) NOT NULL,
  `question_file` varchar(300) NOT NULL,
  `question_by` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionbanklist`
--

INSERT INTO `questionbanklist` (`id`, `question_title`, `question_details`, `question_file`, `question_by`, `date`) VALUES
(24, 'Micro assignment problem', 'I am having a problem in my micro assignment. Someone please solve it.', 'Micro Assignment.pdf', 9, '2023-04-30 21:44:21'),
(25, 'Data Structure and Algorithm (II) assignment problem', 'I am facing a problem in no 2....can anyone solve this?', '222 CSI 228 (A) assignment 01.docx (1).pdf', 10, '2023-05-01 00:43:46'),
(26, 'Electronics assignment problem', 'I am stuck on no 2. If anyone can solve this it would be helpful for me.', 'Assignment-1 (4).pdf', 10, '2023-05-01 00:48:04'),
(27, 'Software Engineering assignment problem', 'I did not find the critical path in no 1 problem, someone please solve this.', 'SE Home Assignment Spring 2023.pdf', 11, '2023-05-01 00:53:06'),
(28, 'Code Refactoring', 'What is Refactoring? What are the bad coding practices that are improved by Refactoring?', '', 12, '2023-05-01 12:05:54'),
(29, 'Data Structure and Algorithm assignment problem', 'Can anyone solve the the no 2 problem??', '222 CSI 228 (A) assignment 03.docx (5).pdf', 13, '2023-05-01 12:16:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `book_details`
--
ALTER TABLE `book_details`
  ADD PRIMARY KEY (`b_no`);

--
-- Indexes for table `community_post`
--
ALTER TABLE `community_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_review`
--
ALTER TABLE `course_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionans`
--
ALTER TABLE `questionans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionbank1`
--
ALTER TABLE `questionbank1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionbanklist`
--
ALTER TABLE `questionbanklist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `book_details`
--
ALTER TABLE `book_details`
  MODIFY `b_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `community_post`
--
ALTER TABLE `community_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `course_review`
--
ALTER TABLE `course_review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `questionans`
--
ALTER TABLE `questionans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questionbank1`
--
ALTER TABLE `questionbank1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `questionbanklist`
--
ALTER TABLE `questionbanklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
