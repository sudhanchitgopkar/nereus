#### Important: External documentation is provided in greater detail in the Nereus User Guide linked [here](https://drive.google.com/file/d/1s3Uh9NkVMwUVAlL7vkM8sTrgbgiHB56t/view). Please reference this, as it walks through the Nereus installation process in greater detail. 

## The Entry Point

As conventional with web projects, index.html is the entry point for Nereus. It points to the Nereus home page, which provides users with an initial look at the application, can allow existing users to manage their profile (i.e. log in, log out, and browse matches), and allows new users to register.
This index.html file can be accessed in a variety of ways. To view the file statically without using a local server, the index.html file may simply be opened from the downloaded Nereus source code. Note that using this approach will not allow users to register, log in, or use any server-side functionality of the application as it does not involve the use of a local server. **As such, this method is not recommended.** The recommended method of entering the application through the index.html file is simply by accessing the Nereus URL on your localhost. Steps on doing this are listed below in section 2.

## Starting Nereus
### Downloading XAMPP
As Nereus is built using HTML, CSS (+ Bootstrap), JavaScript, MySQL, and PHP, XAMPP should be used to build and run Nereus (though other stacks may also be used). Begin by ensuring that a working version of XAMPP (Version 7.3.33 - 8.0.13) is downloaded and functional on your machine. This tutorial utilizes XAMPP Version 8.0.13 (the latest stable release), though many steps will be the same for previous versions of XAMPP. XAMPP can be downloaded from the official [downloads page](https://www.apachefriends.org/download.html) for Linux, Windows, and OSX. Upon opening XAMPP, the following screen should appear:
**Screenshots provided in Nereus User Guide linked above.**
### Managing XAMPP Servers
Begin by booting up your local Apache Web Server, ProFTDP, and MySQL database within XAMPP. All of these servers are required to run Nereus. To do this, navigate to the ”Manage Servers” tab within your XAMPP dashboard. Start all of the servers using the bottom left button, ”Start All.” Once all servers have been started, the dshboard should look as follows:
**Screenshots provided in Nereus User Guide linked above.**
### Copying Source Files
Once all local servers have begun running, Nereus source code will need to be copied from the open-source [GitHub Repository](https://github.com/sudhanchitgopkar/nereus). This may be done in one of two ways: (1) Using Git or (2) by downloading a ZIP file of the source code.
#### Using Git
With a working Git installation, open your command line and type the following command into the directory in which you’d like the source code to be copied:
```$ git clone git@github.com:sudhanchitgopkar/nereus.git```
The source code will now exist in the directory you’re currently within inside of a sub directory called Nereus.
#### ZIP Download
If you prefer to download source code without using Git, access the GitHub Repository. From here, click on the green ”Code” dropdown in the top right hand corner. The screen should look as follows:
**Screenshots provided in Nereus User Guide linked above.**
Click the ”Download ZIP” button. The Nereus ZIP file should now be in your downloads. Unzip the file and move it to a directory of your choosing.
#### Copying into htdocs
Now that the source code exists on your local machine, it will need to be copied into XAMPP’s htdocs directory. To access the file path for this directory, navigate to the ”Welcome” page of the XAMPP dashboard. Click on the ”Open Application Folder” button in the bottom right to have the application folder open. You should see a list of folders and files used by XAMPP, as follows:
**Screenshots provided in Nereus User Guide linked above.**
From here, click on the htdocs folder. Copy your newly downloaded Nereus source code folder into
htdocs.
### Opening Nereus
To open Nereus, simply open your localhost. To do this using XAMPP, press the ”Go to Applica- tion” button on the XAMPP homepage. Replace the current URL with the following URL: ```localhost/nereus```.
Note, this URL may change depending on the port your localhost is running on. Nereus should open up to the index.html page with full functionality. If all goes well, you should see the following screen:
**Screenshots provided in Nereus User Guide linked above.**
Importantly, you’ll need to set up Nereus’ databases before you get started. These steps are also laid out verbatim in the submitted final documentation. If you’ve followed that in its entirety, **you do not need to repeat these steps**. If you haven’t set up your databases yet, though, begin by navigating to you localhost’s PHPMyAdmin, and find your SQL execution prompt.
Enter the following command to create your database.
```sql
CREATE TABLE nereus;
```
Then create your database tables with the following three commands, in order.
```sql
CREATE TABLE accountInfo (username VARCHAR(30) NOT NULL , password VARCHAR(30) NOT NULL , email VARCHAR(320) NOT NULL , PRIMARY KEY (username));
```
```sql
CREATE TABLE profileInfo (
    firstName varchar(10) NOT NULL UNIQUE,
    lastName varchar(15) NOT NULL,
	bio varchar(150) NOT NULL,
	age int NOT NULL,
	jobTitle varchar(15) NOT NULL,
	sex varchar(15) NOT NULL,
	lookingForSex varchar(15) NOT NULL,
    relationType varchar(15) NOT NULL,
	instagram varchar(60) NOT NULL,
	twitter varchar(150) NOT NULL,
	spotify varchar(150) NOT NULL,
    username varchar(50),
    FOREIGN KEY (username) REFERENCES accountInfo(username)
);
```
```sql
CREATE TABLE questionsInfo (
    one int NOT NULL,
    two int NOT NULL,
    three int NOT NULL,
    four int NOT NULL,
    five int NOT NULL,
    username varchar(50),
 	FOREIGN KEY (username) REFERENCES accountInfo(username)
);
```
Finally, seed your databases with the following three commands, **in order**.
```sql
INSERT INTO accountInfo VALUES ('sabamerchant', 'myPasswo@rd', 'saba@gmail.com'), ('venus', 'password@12','venus@gmail.com'), ('lod', 'passw%rd','lod@gmail.com'), ('sudhan', 'p@$$w0rd','dude@gmail.com'), ('joanne', 'thisPassW%rd','joanne@gmail.com'), ('jeffery', 'myP@$$w0rd','jeffery@gmail.com');
```
```sql
NSERT INTO profileInfo VALUES ('Saba','Merchant','Looking for a good time', '21', 'student', 'Female', 'Male','Serious','https://www.instagram.com/saba_merchant123/',' https://twitter.com/SabaMerchant6',' https://open.spotify.com/user/fhk5k0ei207rdsw76iv5kggaz?si=f44bfd8b52194d3b','sabamerchant'), ('Venusly','Yang','8 feet tall CS Major','21','barista','Female','Male','Serious','https://www.instagram.com/venusly.y/','https://twitter.com/','https://open.spotify.com/','venus'), ('Elodie','Collier','I love to dance and tell funny jokes', '21', 'Tutor', 'Other', 'Female','Friends','https://www.instagram.com/elodiecollier/','https://twitter.com/elodiecollier','https://open.spotify.com/','lod'),('Sudhan','Chitgopkar','color and font boy', '20', 'Intern', 'Male', 'Male','Fling',' https://www.instagram.com/not.sudhan/','https://twitter.com/','https://open.spotify.com/user/sudhan.chitgopkar?si=92f9aeb83e5f40ee','sudhan'),('Joanne','Vafi','Night Owl', '20', 'Coder', 'Female', 'Male','Fling',' https://www.instagram.com/','https://twitter.com/','https://open.spotify.com/','joanne'),('Jeffery','John','Fish Caretaker at its finest', '21', 'Coder', 'Male', 'Female','Friends','https://www.instagram.com/','https://twitter.com/','https://open.spotify.com/','jeffery');
```
```sql
INSERT INTO questionsInfo VALUES ('1','2','1','2','2','sabamerchant'), ('1','2','1','2','2','venus'), ('1','1','2','2','2','sudhan'), ('2','2','2','2','2','lod'), ('1','1','1','1','1','joanne'), ('2','1','2','1','2','jeffery');
```
## Functionality
Nereus has a variety of functionality including:
<ol>
  <li>Account Functionality</li>
	1.Registering for an account
	2. Logging into existing accounts
	3. Logging out without closing sessions manually
	4. Saving login sessions
  <li>Profile Management</li>
	1. Creating a new dating profile 
	2. Editing a created dating profile
  <li>Matching Users</li>
	1. Algorithmic matching of compatible users
	2. Browsing user database
	3. Connecting with matched users via social media
	4. Changing top match based on profile edits
  <li>Application Security</li>
	1. Input validation of all fields
	2. Password strength validation
	3. Javascript + PHP regex checking
</ol>
## Supported Browsers/OS
Nereus has been tested on, and has full functionality for the following systems:
<ol>
  <li>Mac OS Monterey (ARM) (12.0.1)</li>
  <li>Mac OS Big Sur (x86) (11.1)</li>
  <li>Windows 11 (64 bit)</li>
  <li>Arch Linux (x86) (2021.11.01)</li>
</ol>
Nereus also has full functionality for the following browsers:
<ol>
  <li>Chrome: Version 96.0.4664.55 (Official Build) (arm64)</li>
  <li>Chrome: Version 96.0.4664.55 (Official Build) (x86 64)</li>
  <li>Windows 11 (64 bit)</li>
  <li>Safari: 15.1 (17612.2.9.1.20)</li>
</ol>
## Libraries/Frameworks Used
Nereus is built using HTML5, CSS3, MySQL, PHP, and vanilla JavaScript. The only framework used is [Bootstrap 5](https://getbootstrap.com/), on top of CSS3, which provides a set of classes specially designed for responsive, mobile-first design.
## Code
No starter code was used for this project. All source code, files, and images are open-source and available at this project’s [GitHub Repository](https://github.com/sudhanchitgopkar/nereus).
