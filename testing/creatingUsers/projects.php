<?php 
$projecttitles = array('OpenCV C++ Program for Face Detection', 
	'Creating a PortScanner in C', 
	'Student Data Management in C++', 
	'OpenGL program for Simple Ball Game', 
	'Program to remotely Power On a PC over the internet using the Wake-on-LAN protocol.',
	'A Group chat application in Java', 
	'Generating Password and OTP in Java', 
	'Color game using Tkinter in Python',
	'Python Message Encode-Decode using Tkinter', 
	'Twitter Sentiment Analysis using Python', 
	'Image Classifier using CNN', 
	'Implementing Photomosaics', 
	'DNA to Protein in Python 3', 
	'Dynamic Hand Gesture Recognition using neural network', 
	'Effect of Noise in NN-Training', 
	'Static Code Checker for C++',
	'College Connect',
	'Empower Illiterate',
	'Remote Lab Assistance',
	'Project Approval System',
	'Online Course Registration',
	'Universal Database Viewer',
	'Sun Rise/Set Time Finder',
	'Automatic Youtube Playlist Downloader',
	'Aadhaar Thumb: A Platform to All Services',
	'Health services & Medical outcome monitoring',
	'Magical Hangouts: An Android Messaging App',
	'JamFree',
	'AI Therapist',
	'Get Your Logo',
	'Client Master',
	'A Game of Anagrams',
	'Breakout game in Python',
	'Games using Hand Gestures',
	' ');
$projectdes = array('This program uses the OpenCV library to detect faces in a live stream from webcam or in a video file stored in the local machine. This program detects faces in real time and tracks it. It uses pre-trained XML classifiers for the same. The classifiers used in this program have facial features trained in them. Different classifiers can be used to detect different objects.', 
	'Picture a bay where lots of private boats are docked. The location is called a seaport, literally a port at or on the sea. Everyone wanting to dock there, requesting landing services uses the same port. Seaports work with berth numbers assigned to individual boats. The port name and the berth number combine into the “who, what, and where” of boat identification.

The concept of ip address and port is similar. Here the sea_port_name is similar to the IP address while the latter matches with the network_port_no.

Ports are numbered for consistency and programming. The most commonly used and best known ports are those numbered 0 to 1023 dedicated for Internet use, but they can extend far higher for specialized purposes. Each port set or range is assigned specialized jobs or functions, and that’s generally all they do. Usually, all identical system services or functions use the same port numbers on the receiving servers and they remain consistent what-so-ever may be the situation.

When a criminal targets a house for a burglary, typically the first thing he or she checks is if there is an open window or door through which access to the home can be gained. Security technicians often use devices/softwares, known as port-scanners, that enable them to scan all the ports to audit computers for vulnerabilities. Any time there are open ports on one’s personal computer, there is potential for the loss of data, the occurrence of a virus, and at times, even complete system compromise.', 
	'Databases are being used in every aspect of our lives right now. Trillions of bytes of data are being stored in servers around the world. SQL is one of the most basic methods to use such a database. But have you ever thought about using C++ to maintain such a database. In this post, we will talk about implementing different views on a text file according to the type of user and edit accordingly.', 
	'OpenGL is a cross-language, cross-platform API for rendering 2D and 3D Vector Graphics. Using this, we can make a lot of design as well as animations. Below is a simple Game made using OpenGL.

Description : In this, a ball is moving starting from middle and goes to up-left in starting. But, then it collides with wall and changes direction but speed remain same. Consequently, it comes to downward direction where it should be catched on a rectangle (which is capable of moving in horizontal direction) in order to continue.',
	'Wake-on-LAN (WoL) is an Ethernet or token ring computer networking standard that allows a computer to be turned on or awakened by a network message.

The message is usually sent to the target computer by a program executed on a device connected to the same local area network, such as a smartphone.
It is also possible to initiate the message from another network by using subnet directed broadcasts or a WOL gateway service.
Equivalent terms include wake on WAN, remote wake-up, power on by LAN, power up by LAN, resume by LAN, resume on LAN and wake up on LAN.
Principle of operation

Wake-on-LAN (“WOL”) is implemented using a specially designed packet called a magic packet, which is sent to all computers in a network, among them the computer to be awakened.
The magic packet contains the MAC address of the destination computer, an identifying number built into each network interface card (“NIC”) or other ethernet device in a computer, that enables it to be uniquely recognized and addressed on a network.
Powered-down or turned off computers capable of Wake-on-LAN will contain network devices able to “listen” to incoming packets in low-power mode while the system is powered down.
If a magic packet is received that is directed to the device’s MAC address, the NIC signals the computer’s power supply or motherboard to initiate system wake-up, much in the same way as pressing the power button would do.
The magic packet is sent on the data link layer (layer 2 in the OSI model) and when sent, is broadcast to all attached devices on a given network, using the network broadcast address; the IP-address (layer 3 in the OSI model) is not used.', 
	'In this post, a group chat application using MulticastSocket (Java Platform SE 7) class is discussed. A MulticastSocket is a (UDP) DatagramSocket, with additional capabilities for joining “groups” of other multicast hosts on the internet.', 
	'You may go through Generate a One Time Password or Unique Identification URL article before this for better understanding.

Generating Password and OTP in Java
Many a times we forget our passwords and we opt for Forget password option and within no time we get a new password at our registered email-ID or phone no. to login our account. And every time we get a different password.
Sometime we access our bank accounts while shopping from an online store or many more ways, in order to verify our transition from the bank account they send us OTP(One Time Password) on our registered phone no. or our email-ID, within no time.',
	'TKinter is widely used for developing GUI applications. Along with applications, we can also use Tkinter GUI to develop games.

Let’s try to make a game using Tkinter. In this game player has to enter color of the word that appears on the screen and hence the score increases by one, the total time to play this game is 30 seconds. Colors used in this game are Red, Blue, Green, Pink, Black, Yellow, Orange, White, Purple and Brown. Interface will display name of different colors in different colors. Player has to identify the color and enter the correct color name to win the game.', 
	'Python offers multiple options for developing GUI (Graphical User Interface). Out of all the GUI methods, tkinter is most commonly used method. It is a standard Python interface to the Tk GUI toolkit shipped with Python. Python with tkinter outputs the fastest and easiest way to create the GUI applications.', 
	'This article covers the sentiment analysis of any topic by parsing the tweets fetched from Twitter using Python.

Twitter Sentiment Analysis using Python
What is sentiment analysis?
Sentiment Analysis is the process of ‘computationally’ determining whether a piece of writing is positive, negative or neutral. It’s also known as opinion mining, deriving the opinion or attitude of a speaker.

Why sentiment analysis?

Business: In marketing field companies use it to develop their strategies, to understand customers’ feelings towards products or brand, how people respond to their campaigns or product launches and why consumers don’t buy some
products.
Politics: In political field, it is used to keep track of political view, to detect consistency and inconsistency between statements and actions at the government level. It can be used to predict election results as well!
Public Actions: Sentiment analysis also is used to monitor and analyse social phenomena, for the spotting of potentially dangerous situations and determining the general mood of the blogosphere.', 
	'The article is about creating an Image classifier for identifying cat-vs-dogs using TFLearn in Python. The problem is here hosted on kaggle.

Machine Learning is now one of the most hot topics around the world. Well it can even be said as the new electricity in today’s world. But to be precise what is Machine Learning, well it’s just one way of teaching the machine by feeding the large amount of data. To know more about Machine learning and its algorithms you can refer to some links that is provided in the Reference sections of this article.

Today, we will create a Image Classifier of our own which can distinguish whether a given pic is of a dog or cat or something else depending upon your fed data. To achieve our goal, we will use one of the famous machine learning algorithms out there which is used for Image Classification i.e. Convolutional Neural Network(or CNN).
So basically what is CNN – as we know its an machine learning algorithm for machines to understand the features of image with a foresight and remember the features to guess whether the name of the new image feeded to the machine. Since its not an article explaining the CNN so i’ll add some links in the end if you guys are interested how CNN works and behaves.

So after going through all those links let us see how to create our very own cat-vs-dog image classifier. For the dataset we will use the kaggle dataset of cat-vs-dog:

train dataset- link
test dataset- link
Now after getting the data set we need to preprocess the data a bit and provide labels to each of the image given there during training the data set. To do so we can see that name of each image of training data set is either start with “cat” or “dog” so we will use that to our advantage then we use one hot encoder for machine to understand the labels(cat[1, 0] or dog[0, 1]).', 
	'A photomosaic is an image split into a grid of rectangles, with each replaced by another image that matches the target (the image you ultimately want to appear in the photomosaic). In other words, if you look at a photomosaic from a distance, you see the target image; but if you come closer, you will see that the image actually consists of many smaller images. This works because of the how the human eye works.

There are two kinds of mosaic, depending on how the matching is done. In the simpler kind, each part of the target image is averaged down to a single color. Each of the library images is also reduced to a single color. Each part of the target image is then replaced with one from the library where these colors are as similar as possible. In effect, the target image is reduced in resolution (by downsampling), and then each of the resulting pixels is replaced with an image whose average color matches that pixel.



In the more advanced kind of photographic mosaic, the target image is not downsampled, and the matching is done by comparing each pixel in the rectangle to the corresponding pixel from each library image. The rectangle in the target is then replaced with the library image that minimizes the total difference. This requires much more computation than the simple kind, but the results can be much better since the pixel-by-pixel matching can preserve the resolution of the target image.', 
	'Life depends on the ability of cells to store, retrieve, and translate genetic instructions.These instructions are needed to make and maintain living organisms. For a long time, it was not clear what molecules were able to copy and transmit genetic information. We now know that this information is carried by the dioxyribonucleic acid or DNA in all living things.
DNA: DNA is a discrete code physically present in almost every cell of an organism. We can think of DNA as a one dimensional string of characters with four characters to choose from. These characters are A, C, G, and T. They stand for the first letters with the four nucleotides used to construct DNA. The full names of these nucleotides are Adenine, Cytosine, Guanine, and Thymine. Each unique three character sequence of nucleotides, sometimes called a nucleotide triplet, corresponds to one amino acid. The sequence of amino acids is unique for each type of protein and all proteins are built from the same set of just 20 amino acids for all living things.

Instructions in the DNA are first transcribed into RNA and the RNA is then translated into proteins. We can think of DNA, when read as sequences of three letters, as a dictionary of life.', 
	'Hand gesture recognition system is used for interfacing between computer and human using hand gesture. We wish to make a windows-based application for live motion gesture recognition using webcam input in C++. This project is a combination of live motion detection and gesture identification. This application uses the webcam to detect gesture made by the user and perform basic operations accordingly. The user has to perform a particular gesture. The webcam captures this and identifies the gesture, recognizes it (against a set of known gestures) and performs the action corresponding to it. This application can be made to run in the background while the user runs other programs and applications. This is very useful for a hands-free approach. While it may not be of great use for browsing the web or writing a text document, it is useful in media player and while reading documents or files. A simple gesture could pause or play the movie or increase the volume even while sitting afar from the computer screen. One could easily scroll through an eBook or a presentation even while having lunch.

Various features of the code of the project are:

Can detect any kind of gesture which is provided in the database.
Eliminates the background so can be operated in a place where there is no much movement in the background
The movements of the head while performing the gesture are eliminated.', 
	'One of the interesting approaches to reducing overfitting in neural networks is to add noise to the inputs and activations before performing a gradient step. The key insight is that this noise injection prevents the learnt weights from being too delicately balanced to fit the data; some kind of robustness is necessary to fit noisy data.
Another interesting consequence of noisy data is that recent work shows that learning algorithms using noisy data may be better at protecting privacy of the data. Thus, there may be twin advantages to this approach. This project will involve understanding the backgroud in this topic, performing simulations to understand the behaviour and hopefully developing new theories.',
	'The biggest problem that students face when they join big corporates is difficulty in writing high quality code that these corporates demand. The prime reason for this difficulty is because their minds have been trained in college to just make things work somehow, even if it means using dirty hacks. To help coders in general and fellow college students in particular, building a tool which can run static code checks on a given code can help improve the quality of code to a great extend.',
	'College Connect is platform where everyone can share their pics or any other stuffs anonymously. Either it’s a pdf file, images or a status. We are on a mission to make people more open and share their knowledge with everyone. Basically, This is currently for college students but can be used by everyone on large scale when we are able to have a good server to run it. Android Studio.',
	'Our idea is to provide a framework for medium connecting people who are looking for work and those who are looking to hire workers. There are many illiterates who have good skill in carpentry,farming,driving..etc but unable to find work.Skilled people who are searching for work need to specify their skill and phone number on our platform.Those who want to hire can contact workers through the phone number. we can provide a platform for both hiree and hirer with the help of Android App or Web App.As illiterate people are unaware of internet they are instructed to go nearby helping centers like(meeseva,make in india,digital india or any) for registering.Phone number plays an important role because we are dealing with uneducated people. JAVA,XML,Apache HTTP Server, MySQL database — (Android App) ',
	'The idea is to provide a framework for students and instructor. The framework provides an instructor-friendly remote monitoring of lab, effective evaluation, and grading methodology. The system also provides a student-friendly remote login, software access, and problem resolution through effective help from the teacher. The framework can be easily implemented as a client–server in Java.',
	'Academic Project management is a major issue which is faced by many educational institutes, the main reason for this is there is no automated system followed in any institute. College management/staff gathers all the project reports and project sources from students and store them physically in some locations probably libraries. To overcome this practical problem and also to make the process easy we developed a secured intranet application which is useful for each. JSP, Servlet, AJAX, Netbean, gmail api.',
	'The idea is to automate the manual process of registration of courses. This system provides a number of functionalities pertaining to COURSE REGISTRATION for the students as well as faculty members. Registration for the course is possible only if the student has paid the fees, i.e, has a valid fee receipt number. Students can login, view, register, drop courses, whereas teachers can login, view the number of students registered for their course, add a new course they are planning to teach, drop a course they are planning to not teach anymore etc.

The entire system has been built using AngularJS framework.

Features
Students:
a) Can view/register/drop courses of their semester or previous semesters ( incase they have any backlogs and have to repeat the course)
b) Can view all the courses they have registered for at a given time

Faculty:
a) Can view the count and list of students registered for each course they teach
b) Can forward a request for the addition/removal of a course to the admin

Implementation:
Registration of courses is possible only after the payment of fees, hence the fee receipt number entered by the student is validated with the bank database.',
	'Introduction

The main object of this project is to provide the database in GUI oriented format through which we can retrieve information about the remote database and their tables for proper manipulation. GUI programming can be done in JAVA IDE.

Features

This Universal Persistent Viewer is a utility for database browsing. It provides an interface for viewing a database. We can browse a remote database also and change its contents even if the client side software is not available for the database.

One main important aspect of this project is SQL interpreter, which is used to execute queries by which the table can be modified. Queries can also be executed in this utility. The records can be added deleted and modified in a table. Records can be viewed with the specified condition. The final results are provided in a table format.  The project also includes the properties of database, which provide the functions, keywords, supporting functions, maximum functions whichever needed.



Software Required

Any Java basedIDE.
Any Database Management Software (Preferably MySQL).
Advanced Features

We will import and export the table across the Database.
Within the Database version dependency will be prevented. As it can convert Oracle’s version 10 to 11 version.
Across the Database transparency.
Data type difference can be managed easily.',
	'Introduction : The aim of project is to provide a web portal which helps in calculating sun set or sun time time for any location of world on any specified date. Let say we want to find sun set and sun rise time in Chandni Chowk, New Delhi, Delhi, India on 15 July 2017. Then using this web portal we can esily find it.

Programming Tools and Frameworks Used :

HTML
CSS
Javascript
JSON
jQuery
Materialize CSS
Google Maps API
Sunrise-Sunset API',
	'Introduction: It is Automation written to Java for downloading YouTube video Lectures(PLAYLIST). it can save time of students who do self learning from youtube videos. Following are some example video playlists.',
	'he main objective of this project is to bring all governmental services to an online portal in the form of Desktop Software as well as Online Website Portal.

ABSTRACT:



As today, technology is playing really an important role in modeling human life by providing various ways to many problems faced by us in real world. So, to accomplish these problems very accurately with efficiency, every branch of study provides ways and such our India’s Central Government is doing nowadays. Our Respected Prime Minister Sir is therefore leading a unique way of using this technology which will help rural as well as urban. Like starting Digital India, Startup India etc. acts which will in greater extent calling upon various creative minds forward to solve national level problems. So, in the same regard we here proposed a practical implementated idea of providing all services by one’s fingerprint or thumb print. This will include complete database linkage between various governmental services like Electricity Bill Payment, Water Bill Payment, Bank Services etc. just by tapping one’s thumb to small fingerprint reader sensor.
This solution will greatly solve government’s services to move more steps ahead in factor of speed, time and space. This solution mainly depends upon the biometric data provided by Indian citizens to Aadhaar’s Database. And, for that we named it as “Aadhaar Thumb: One Platform to all Services.”

TOOLS USED:

Netbeans 8.2
JDK 8
MySQL
WampServer
TOOLS REQUIRED:

Active Internet Connection
JDK 8
IDEA IMPLEMENTATION:

This idea just stuck in my mind when I saw recent orientation of all manual currency exchange to Digital Payment Solutions like PayTm Wallets, BHIM App etc. So, I thought of making one portal which helps citizens of Nation to pay and check statistics of basic bill Payment or Return Filling etc as shown in screen shots attached with this mail directly from theirs home, just scanning their fingerprint to login to portal as shown in Login Page attached in Screen Shots. Here, I had taken and chosen Fingerprint authentication because this unique identification helps to make difference between two humans and too here, the database has been developed in such a way that it can be implemented directly with Original Database and helps to impart feature of Portability and ease of use.
Also, this idea when implemented over the nation between the testing of citizens will really give fruitful results and surely help Government to use different manual registration, payments, etc things over Digital Channel i.e. Internet (A Wide Tool for Connectivity).',
	'Problem Statement (Introduction):
Health systems in India are grappling with the effects of existing communicable and noncommunicable means to cater to the needs of the people. Lack of adequate progress on these underlying social determinants of health has been acknowledged as a glaring failure of public health.

Our main motto to take up this problem is to cater to each and every need of the patient as well as monitor his/her health from the time he/she first visits the hospital till he/she totally recovers.
Additional attention and adequate support to ensure faster recovery is not possible as there is no proper communication channel/link between the doctor and the patient after the check-up.
Due to insufficient data obtained in the form of feedback the government is unable to do the necessary improvements required in this field.
According to the statistics, feedback from merely 5-10% of the patients is collected monthly from any of the government aided medical centers.
The course of medication prescribed to patients is not monitored.
The staff is not monitored in terms of their behavior and supportiveness towards the needs of the patients.
Proposed Features:

Maintaining records of the patient for future use
Giving them reminders
Monitoring prescriptions given to the patients
Changing the prescription according to the availability of the medicines in the inventory to provide low-cost health services
Taking feedbacks over certain interval(through the algorithm we came up with) to keep track of patient’s health and report it to doctor
It will not only help us monitor the health services provided to the people but will, in turn, gain the trust of the people visiting these health centers.It will also encourage people to use medical facilities when required.



Stage: Proof of concept done.

Research: We have tried to solve the problem by going to its root cause, we went to few hospitals near by and approached staff and patients, and asked them about the problems and difficulties they face while taking or giving feedback. And why most of the time people don’t give feedback. We got the most common response as the procedure is big, so they skip it.
Algorithm: We have devised an algorithm to take feedback in easiest possible way. Java',
	'The main idea in creating this app is to protect user’s confidential data such as passwords, bank accno, pin no and so on. There will be a situation in that we have to transfer one of the above sensitive data to some other trusted persons. We can’t assume that our data will be kept secret as long. Someone can open that trusted person’s mobile and may look the messages. So there is vulnerability in losing our sensitive data. To avoid such situation, this app provides useful features. Users can send their sensitive data through this app. This app will encode those data into a format and send it to the respective person’s message notification. The message will be in the default messaging inbox but it will be in encoded form. Even if someone tries to open the messaging app they may not be able to read the actual data or message. To decode that message they have to see that message with the help of this app. The messages which are composed by this app are called “Magical messages”.
	ANDROID-STUDIO IDE (1.0.2)
SDK having API level -21(minversion)
JAVA 7 and above',
	'Introduction: Traffic Management is an issue which impacts us almost daily. Use of technology and real time analysis can actually lead to a smooth traffic management. The common reason for traffic congestion is due to poor traffic prioritisation.
While the number of vehicles are increasing at a fast pace, the infrastructure in the cities are not being able to match this growth. Our solution to this problem can be used for many urban cities where traffic jams during rush hours are becoming a routine affair, especially in the internal sectors where long queues of vehicles can be seen stranded. Therefore, we have tried to address the problem with the help of our project wherein the focus would be to minimise the vehicular congestion. We have achieved this with the help of image processing that can be obtained from surveillance cameras and eventually to deploy a feedback mechanism in the working of the traffic lights where the density of the traffic would also be factored in the decision making process.

OBJECTIVE: The Objective of our hack is to design a robust and efficient system to solve the traffic jam issues in urban areas.

PROBLEM with Present System: The present system uses traffic signals which are based on timer ICs to control traffic. Suppose an intersection of four roads in which three roads have varying traffic and one road is empty. The present system will just show a green light for the empty road on its turn for 2-3 mins. and in meantime, the traffic on the other roads will go on increasing and thus lead to traffic jams.
Also, a lot of fuel is wasted on red lights as people don’t turn off the engine.

TOOLS USED:
HARDWARE ARCHITECTURE: We shall use Raspberry Pi that is connected to 4 sets of LEDs that represent the traffic lights. The captured images and the reference images are fed to the Raspberry Pi. In real implementation, we will have an automated way to do this via a CCTV camera.



SOFTWARE ARCHITECTURE:
Python
OpenCV (Open Source Computer Vision Library)
ThingSpeak Cloud (For data analytics)
Data Analytics will also be performed which will help in future traffic planning and analysis.',
	'Introduction: Input is user provided description about how his day went in two-three lines. Using natural language processing, our program detects how user is feeling. He may be feeling depressed, feared, angry etc. Then a recommender system is used to show him content based on his current emotions. For example if user is feeling depressed, program will show him motivational thoughts, blogs etc.

Conceptual framework:
The project will be a combination of natural language processing and recommender system. The pipeline model built through NLP will put user input in any one of the classes ‘A’, ’B’, ’C’, ’D’ .
Class A: Anger
Class B: Minor Depression
Class C: Serious Depression
Class D: Fear
After this the recommender system will recommend quotes and speeches pertaining to a particular class in order to assist user. Python',
	'Introduction:The idea is to make a website where one can get the logo for their official/personal/commercial use just by a single click.

Design : The home page of the website will ask the user to sign in . After signing In the user will be asked to fill a form asking for their logo requirement ,Genre of logo and other info.



Features Provided: User can request for their logo by submitting the form. When the user will submit the form we will receive a request via en e-mail and within 24 hrs of request received , user will get their logo.

Tools/Skills Used : Website will be purely based on Django framework.
Logos will be designed using Adobe Photoshop.

Salient Features: 1.When a logo is selected by a user it is displayed on the gallery of the website
2. Any new user signing Up can refer to those logos

Application : Any Company/Student/professional going to start a new business/website requires a company logo. The idea is to help them in taking a one-step ahead.',
	'The project, Client Master, is a simple but sophisticated client manager program, made using the Python language. I started this project in my attempt help my father, who is an Investment Consultant. This is my trial version, and there is still a lot more to add to this project.

Purpose of Project

It deals with Client Relationship Management System (CRM).
 It helps the Investment Consultants to store each and every information related to their clients in a simple manner. The goal is to bring simple yet powerful client management system to the masses.
It also finds the maturity value i.e. the amount payable at the end of a particular period, in case of a fixed deposit. If a client wants to get an FD done on the basis of the estimated maturity value then he can easily do that with the help of this application. The Investment Consultant can add his/her fixed deposit details and easily view them as and when required.

Software Requirements

Python 2.7;Python’s standard package Tkinter is used.',
	'The aim of this project is to create a game in python in which the user is presented with an anagram of a word and has to guess the right word within a limited number of attempts.

Features of Project:

The user is given a fixed number of attempts to guess the correct word. The number of attempts is dependent on the length of the word.
After each incorrect attempt the user is provided with a hint of the correct word.
If the user is not able to guess the right word within the fixed number of attempt the correct word is displayed and the game moves on to the next word.
Ctrl+C or Ctrl+D exits the game.
Implementation:

This tutorial is valid only for Linux based systems. This tutorial is written on a Linux Mint 17.1 system. For implementing on other Linux systems (Redhat,Arch) see special note at the end of this tutorial.



In almost all the Linux based systems there is a file located at directory location “/usr/share/dict/” under different names like “cracklib-small”(Ubuntu based systems),”words”(Redhat,Arch) which contains words from dictionary and are often used by many applications to implement features such as “spell-check”.

In this project I will be using the same file to create a game of anagrams.

Reading the file can provide us with all the words required for the game. The words in the file are separated with a new-line so while reading the file we need to split the words based on the new-line character to get individual words. The code for the same would look like:. Python',
	'Introduction: The project ‘Breakout game in Python’ is proposed to recreate a classical game of Breakout by using the Python language. It is meant to be a fully functional game with scores, lives, game over, and high score management. The high scores can also be uploaded to a website. The game is playable with a standard keyboard and mouse.
Features: 
* Fully functional game with scores and lives.
* User interface having a main menu, game over screen and a high scores screen, along with the main game screen.
* Collision detection between two objects as well as bounds.
* Option to upload high scores to a website via FTP.
Tools Used: The pygame library which provides a lot of classes and methods to implement a game in the Python programming language along with the PyCharm IDE (JetBrains PyCharm Community Edition 2017) which is an easy-to-use IDE for Python developers. The entire game was developed in Python 3.6.
	Special instructions: In order to run the project, it is strongly recommended to download and install the latest versions of PyCharm IDE, Python, and the pygame library on the test machine. The test machine must also run Windows 7 Service Pack 1 or above and must have a supported graphics card and processor. Kindly download the files from the GitHub repository and open the folder BreakoutGame as a PyCharm project in PyCharm itself and run it from there to ensure that there are no directory structure issues.
FTP values of host name, username and password were removed from the GitHub files for privacy reasons. Can test this by introducing your own FTP host along with the appropriate username and password, and by uncommenting game.ftp_upload() in OverScene.py. Score file will be found in the /breakout directory of your host',
	'Idea
To design games using hand gestures. Simple games like pacman or you can build it yourself using some cool libraries available like in python it is PYGAME.

Tool
This project is based on Computer Vision.

Implementation
Can be implemented in any programming language but for simplicity take python. You can use its libraries like openCV,numpy .',
	' ');

$projectInt = array(
	'AI',
	'Artifical intellegence',
	'NLP',
	'Natural language',
	'FTP',
	'NTP',
	'Java',
	'C',
	'C++',
	'Python',
	'HTML',
	'PHP',
	'CSS',
	'Raspberry Pi',
	'API',
	'Linux',
	'Server',
	'openCV',
	'Redhat',
	'Arch',
	'XML',
	'Security',
	'UDP',
	'OpenGL',
	'WOL',
	'sentiment',
	'Machine Learning',
	'neural networking',
	'MySQL',
	'Database',
	'Android',
	'Apache',
	'JSP',
	'Servlet',
	'AJAX',
	'SQL',
	'Javascript',
	'JSON',
	'JQuery',
	'JDK',
	'Data analytics',
	'Networking',
	'Cryptography');

$supids = array(
	'1',
	'2',
	'3',
	'5',
	'54',
	'55',
	'56',
	'57',
	'58',
	'59',
	'60',
	'61',
	'62',
	'63',
	'64',
	'65',
	'66',
	'67',
	'68',
	'69',
	'70',
	'71',
	'72',
	'73',
	'74',
	'75',
	'76',
	'77',
	'78');
?>