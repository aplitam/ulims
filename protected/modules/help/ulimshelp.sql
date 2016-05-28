-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2016 at 11:58 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ulimshelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `category` char(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `link`, `content`, `category`) VALUES
(1, 'Introducing ULIMS', 'Overview , Modules, Getting Started , Introducing ULIMS', 'Introducing ULIMS ... DOST Unified Laboratory Information and Management System is a web based information system implemented last date that is used to administer the flow of requests in the different laboratories.', 'gs'),
(2, 'Entering the system', 'Log in , Getting Started , Entering the System', 'Entering the System ...Upon opening the system, each would be asked to login to be able to access the different modules (laboratory, cashiering, accounting and referral) of the system.', 'gs'),
(3, 'Users and User Roles', 'Admin, System Managers, System Users, Getting Started, Users and User Roles', 'The admin user oversees user management and overall operations in the system. This user is in-charged in setting up the system configurations (which is a prerequisite of the system) ....', 'gs'),
(4, 'Create Users', 'Users, Getting Started, How to Create Users', 'Note that in creating a user, you must be logged in as the system administrator... Go to Users...Click Create Users on the lower left corner of the page...Input the required fields for creating the user...Change the status to either active, not active, or banned....', 'gs'),
(5, 'Manage Users', 'Users, Getting Started, Delete Users, Update Users, View Users,How to Manage Users ', 'Note that in managing a user, you must be logged in as the system administrator...Go to Users...Click Manage Users on the lower left corner of the page...Click the view icon in order to view the details of a certain user...', 'gs'),
(6, 'Create Profile Fields', 'Profile Fields, Getting Started, Creating Profile Fields', 'How to create Profile Fields...Go to Users > Manage Profile fields...Click Create Profile Fields on the lower left corner of the page...\r\nInput the required fields for creating the user...Click Create...', 'gs'),
(7, 'Manage Profile Field', 'Profile Fields, Delete Profile Fields, Update Profile Fields, View Profile Fields,Getting Started, Manage Profile Fields', 'Hot tomanage profile fields...delete profile fields... update profile fields...view profile fields...Go to Users...Click Manage Profile Field on the lower left corner of the page...Click the view icon in order to view the details of a field...Click update icon in order to update a field...', 'gs'),
(8, 'Before Setting Things in the System Configurations', 'Config, Before Setting Things in the System Configurations, RSTL', 'System Configurations is only available for alteration to the system admin... alt tag of image...Go to Manage Users...Update the admin account...Set the RSTL dropdown to the correct value\r\n(rstl_id) depending on your location...', 'sc'),
(9, 'Set Laboratories', 'Config, Set Laboratories, Active Laboratories, Inactive Laboratories', 'set laboratories...Upon opening the system, each would be asked to login to be able to access the different modules (laboratory, cashiering, accounting and referral) of the system.', 'sc'),
(10, 'Inititalize Laboratories', 'Laboratories, Config, Initialize Laboratories, Request Reference Sample Codes', 'Before being able to create a request, each active laboratories must be initialized. Take note that you can only initialize active laboratories and the next Request Reference Sample Codes can be monitored per laboratory...\r\n', 'sc'),
(11, 'Assign Technical Managers', 'Managers , Technical Managers , Config', ' alt tag of image\r\n\r\n\r\n\r\n\r\n\r\nClick the Technical Managers Dropdown.. Under the managers column, click on the empty cell\r\nprovided for the manager...Select a user from the user dropdown... Click Save', 'sc'),
(12, 'Adding Discounts', 'Discounts, Student Discounts, In house Discounts, Adding Discounts, Config', 'Discount presets are allocated in the system. Select only those are applicable in your RSTL. Adding of new discounts is also possible... alt tag of image...Under the Laboratory in the System Configurations,\r\nselect the Discounts dropdown...Select a discount that is applicable in your RSTL...Click Active to activate one one the discounts\r\nin the discounts presets...\r\n', 'sc'),
(13, 'Add/ Create OR Series', 'OR Series, Create OR Series, Add OR Series, Config', 'Multiple OR Series can be added and used for different collection types. “OR Series” are specified under a Category. Categories are identified/given by the Collecting Officer (may vary)...', 'sc'),
(14, 'Add / Create OR Categories', 'OR Categories, Add OR Categories, Create OR Categories', 'How to add or create an OR Category...Beside the Add New OR Series button,\r\nclick the Manage O.R. Categories...Under the Manage O.R. Categories\r\nwhere a list of Categories are listed,...Click Add New O.R. Category...Input the name of the new O.R. category....', 'sc'),
(15, 'Add Bank Account', 'Accounts, Bank Account, Add Bank Account, Config, Payment', 'Bank account(s) can be specified in system which will appear on the Order of Payment form... Under the Cashiering, click the Bank\r\nAccounts dropdown...To edit Bank Accounts, click the\r\ncell under Account number...Input the Name of bank...Input the Account Number...Click Save...To add bank account, click\r\nAdd New Account ', 'sc'),
(16, 'OR Print Setup', 'OR, OR Print Setup, Config', 'Page Under Construction', 'sc'),
(17, 'Add / Change Signatories', 'Signatories, Config, Change Signatories', 'Signatories are specified to be used in several forms in the system...Under Personnel, then the dropdown Signatories,\r\nclick the cell which you would like to alter...Input the changes in Designation (if there’s any)\r\n...Select name from the dropdown Name...', 'sc'),
(18, 'Modify API Settings', 'API,API Settings, Config, Modify API Settings', 'How do you modify site settings under system configurations...Under Web Application, click the dropdown API Settings...Input URL, Version, Proxy URL, Proxy Port, Proxy User, Proxy Password, and other\r\nconfiguration needed in your API settings....', 'sc'),
(19, 'Modify Site Settings', 'Site, Site Settings, Config, Modify Site Settings, Change Logo, Sidebar Images, Dashboard', 'Change the settings for your site...Under the Agency/Laboratory section, input the necessary changes\r\n...Change the name and short name agency depending on your RSTL... Input the full name of your laboratory, its address, and contact number/s.', 'sc'),
(20, 'Modify Form Settings', 'Form, Form Settings, Modify Form Settings, File Format, Header Logo', 'Under Web Application, click the dropdown Form Settings...Input the necessary details like the Form Title, Form Number,\r\nForm revision number, Form revision Date, and other necessary details...\r\nChange File Format\r\n...Under Web Application, click the dropdown Form Settings\r\n...Locate the File Format option\r\n...Under the dropdown, select the format for your document\r\n... Make sure to save changes...', 'sc'),
(21, 'Truncate Test Data', 'Test Data, Truncate, Truncate Test Data', 'How to trucate test data... This option will truncate all existing data on the followig databases tables...Under Web Application, Click on the Test Data dropdown...Click Truncate...Click Ok', 'sc'),
(22, 'Manage Requests', 'Manage, Requests, Manage Requests,  View Requests, Update Requests', 'Learn how to manage your requests... Click manage requests link...To view a request, click on the view icon or the Request reference Number... To update/ change request details, click on the update icon', 'lm'),
(23, 'Create Requests', 'Requests, Create Requests', 'How to create a request in the laboratory module... On the side bar, click Requests...Click on the Create Request link on the lower left part of the page under the sidebar...Choose a laboratory from the given dropdown...', 'lm'),
(24, 'Cancel Request', 'Requests, Cancel Requests', 'Know how to cancel a request..... On the manage users page,click on the\r\nview icon in order to view the request details\r\n...Click the cancel request beside the \r\nrequest reference number\r\n...Input a reason for the cancellation of the\r\nrequest...', 'lm'),
(25, 'Manage Customers', 'Manage, Customers, Manage Customers, Delete Customers,  Update Customers, View Customers', 'On the sidebar, go to ...Click Manage Users on the lower left corner of the page\r\n... Click the view icon in order to view the details of a certain user...Click update icon in order to update a user... Click delete icon in order to delete a user...', 'lm'),
(26, 'Add Customers', 'Add Customers, Create Customers, Customers,', 'Go to Customers on the side navigation\r\n... Under the side navigation, click Create Customer\r\n... Input the necessary information...Choose the type, nature of business, and industry on the dropdown', 'lm'),
(27, 'Add Samples', 'Samples, Add Samples, Requests, Testing and Calibration Services', 'How to add Samples upon creating a request...On the manage request page, click on the view icon..Under the request details, click Add Samples.. If you’ll use an existing sample, search a Sample \r\nTemplate on the dropdown', 'lm'),
(28, 'Manage Sample Templates', 'Sample Templates, Manage Sample templates, Delete Sample Tempaltes, Update Sample templates, View Sample Templates', 'Be able to update, view, and delete sample templates...On the sidebar, go to Sample Templates...Click the view icon in order to view the details of a certain template...Click update icon in order to update a template...Click delete icon in order to delete a template', 'lm'),
(29, 'Create Sample Templates', 'Sample Templates, Create Sample templates, ', 'Create sample templates to be used in adding samples upon creating a request...On the sidebar, go to Sample Templates...Click the view icon in order to view the details of a certain template...Click update icon in order to update a template...Click delete icon in order to delete a template', 'lm'),
(30, 'Add Analyses', 'Analysis, Add Analyses', 'Be able to add or create analysis upon creating a request...Upon creating a request, you can \r\nimmediately click Add Analyses \r\nright under the request details\r\nand samples\r\n... Check a sample to analyze\r\n... Choose a test category for the analysis\r\n... Select the sample type\r\n...Select the test name for analysis', 'lm'),
(31, 'Add Package', 'Package, Add Package', 'Adding Package upon creating a request... A package can only be \r\nadded if a sample was \r\nalready added...Click the Add package beside the Add\r\nAnalysis button...Check a sample to analyze', 'lm'),
(32, 'Manage Package', 'Package, Manage Package', 'Be able to update, view, and delete packages... On the sidebar, go to Packages\r\n... Click the view icon in order to view the details of a certain package\r\n...Click update icon in order to update a package...', 'lm'),
(33, 'Create Package', 'Package, Create Package', 'Create packages that may be used and added upon creating a request...Go to Packages located at the side navigation...Locate and click the Create Package right under the side navigation... Input the package name and rate... Choose a test category...', 'lm'),
(34, 'Manage Tests', 'Tests , Manage Tests', 'Be able to view, update, and delete different tests that are used for your requests... On the sidebar, go to Tests/ Calibration..Click the view icon in order to view the details of a certain test...', 'lm'),
(35, 'Create Tests', 'Tests , Create Tests', 'Create different tests in your laboratories that are used for creating requests...1. Go to Test/ Calibration located at the side navigation...Locate and click the Create Test right under the side navigation...\r\n ', 'lm'),
(36, 'Manage Order of Payments', 'OP, Order of Payments, Manage order of Payments', 'Be able to view, update, and delete different order of payments for the different customers...', 'lm'),
(37, 'Create Order of Payment: Laboratory', 'OP, Order of Payments, Create order of Payments', 'Create order of payment for a certain customer...Go to Order of Payment located at the side navigation...Locate and click the Create Order of Payment right under the side navigation...Choose Collection type and Date...Choose the Customer registered in the dropdown menu...Select the Request made', 'lm'),
(38, 'Laboratory Reports', 'Reports, Laboratory, Laboratory Reports', 'Generate and access the reports in the laboratory module...This will provide to you the Accomplishment Report and Customer Statistics...Click the Accomplishment Report to view...', 'lm'),
(39, 'Create Receipt', 'Cashier, Receipt, Create Receipt', 'Go to the Receipt tab of the cashiering module.Click Create Receipt link found under Operations tab...Click Create when done...', 'cm'),
(40, 'Manage Receipt', 'Cashier, Receipt, Update Receipt, View Receipt', 'Go to the Receipt tab of the cashiering module. This will automatically lead you to Manage Receipt page...', 'cm'),
(41, 'Create Deposit', 'Cashier, Deposit, Create Deposit', 'Go to the Deposit tab of the cashiering module.Click Create Deposit link found under Operations tab... Note: User can also initialize End OR by checking the box \r\nbeside the Start OR drop down, just be sure that the series is still right.... Click Create when done.', 'cm'),
(42, 'Manage Deposit', 'Cashier, Deposit, Update Deposit, View Deposit, Delete Deposit', 'Go to the Deposit tab of the cashiering module.  This will automatically lead you to Manage Receipt page...', 'cm'),
(43, 'Cash Receipt Record', 'Cashier, Receipt, Record, Cash Receipt Record', 'Click Cash Receipt Record link found under Operations tab... Records of the cash receipts will be shown in the table.', 'cm'),
(44, 'Report of Collection & Deposits', 'Cashier, Collection, Report, Deposit, Report of Collection and Deposits', 'Click Report of Collection link found under Operations tab... Results and total of the collections will be shown in the table. You can print the table of collections by clicking the Print button...', 'cm'),
(45, 'Create Order of Payment: Cashiering', 'Cashier, OP, Order of Payments, Create Order of Payment', 'To create order of payment in cashier module...', 'cm'),
(46, 'Create Order of Payment: Accounting', 'Accounting, OP, Order of Payment, Create Order of Payment', 'Go to the Order of Payment tab of the cashiering module. Click Create Order of Payment link found under Operations tab... Transaction Num will be given after \r\ncreating the order of payment... Click Create when done...\r\n', 'am'),
(47, 'Manage Order of Payments', 'Accounting, OP, Order of Payment, Update Order of Payment, View Order of Payment, Delete Order of Payment', 'Go to the Order of Payment tab of the accounting module. Click the update icon to update the receipt....', 'am'),
(49, 'Cancel Receipt', 'Receipt, Cancel Receipt', 'Go to the Receipt tab of the cashiering module. This will automatically lead you to Manage Receipt page... Click the cancel button beside the receipt number... Click OK.\r\n', 'cm');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `category` char(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
