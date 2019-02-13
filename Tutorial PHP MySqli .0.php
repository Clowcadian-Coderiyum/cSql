<?php
/* Class that replace mySqli function based on my needs on intuitive
acces and operation around my sql database. Process of developing
this class taught me that query worth to initialize functions
before calling for prepare and execute statement.

--need to incorporate tutorial notes.
--need to incorporate log class and stick to it to avoid html.
--need to incorporate importing txt files as lists
--.ahk this for updating repository, save, copy and paste, open
	github, shortcut commit and publish
--once first draft finished apply refference documentation */
class cSql
{
	/*[TUTORIAL NOTE]*/
	/*THESE SECTIONS CAN BE SKIPED
	Member variables and constructor were designed intuitively
	first as I have experience and knowledge when dealing with
	sql, php and their combination and the requirements that
	that they poses. But it still took me a flow chart to get
	a clear understanding on what, how, where and when to write
	them in. Now take an advice said by a professor of mine.*/
	/*[ADVICE]FLOW CHART FIRST[ADVICE]*/
	/*[ADVICE]COMMENT LAST TO EXCEPTABLE DETAIL AS IF [ADVICE]*/
	/*[ADVICE]YOU ARE A TUTOR, ROOT YOUR SYSTEM IN.   [ADVICE]*/
	/*[TUTORIAL NOTE]*/
	/*When I begun on th hard comments I was able to find more
	bugs in the code such as wrong names, repeated variables, 
	so on a soft not commenting helps you to analyze your code
	and debug it at the same time.
	Due to changes in variable names after commenting the flow
	chart changed slightly and been erased. Up to you to figure
	out what happened*/

	/*[MEMBER VARIABLES]
	Storing some to create an intuitive approach to an sql
	database. Allows to keep privious values and adjust
	them or add more on the fly with out having to provide
	all the mySqli syntaxes being repeated. */
	var $server = "";	//?????????
	var $user = "";		//?????????
	var $pass = "";		//?????????
	var $db = "";		//?????????
	var $dbName = "";	//Database name
	var $tblName = "";	//Table name
	var $tblHead = "";	//Table Header that is required for
						//mySqli prepare and execute functions
						//ex. "(ID int(1))"
	var $inRows = "";	//Input rows that is optional
						//for mySqli select, insert and etc.
						//functions where the coder can
						//specify if he wants to query all("*")
						//or specified rows.
	var $inVals = "";	//Input values for speciefied input rows
	var $result = "";	//?????????
	var $argFrmt = "";	//Argument format string for mySqli
						//prepare function.
	var $qry = "";		//Query string for mySqli query, execute
						// and etc. functions.

	/*[CONSTRUCTOR]
	Initiation has main arguments( server, user, pass) to enter the mySql database and optional argument, to help the programmer
	format his code with multiple statements that fill this
	sql object rather then a long statement. These arguments
	than fill the object parameters in order to minimize
	repetetive code for the programmer using the class */
	function __construct($server, $user, $pass, $dbName = "", $tblName = "")
	{
		cSqlCon($server, $user, $pass);
		
		if($dbName != "") dbStrt($dbName);
		$this->cQry();
	}

	/*CONNECTION TO SQL*/
	function cSqlCon($server, $user, $pass)
	{
		$this->server = $server;
		$this->user = $user;
		$this->pass = $pass;
		$this->db = new mysqli($server, $user, $pass);
		
	}

	/*STARTING DATABASE*/
	function dbStrt($dbName)
	{
		$this->qry = 'CREATE DATABASE IF NOT EXISTS ' . $this->dbName;
	}

	/*SIMPLE QUERY*/
	function cQry()
	{
		$this->result = $this->db->query($this->qry);
	}

	/*STARTING TABLE*/
	function tblStart()
	{

	}

	/*ELECTING ROWS*/
	function cSel()
	{

	}

	/*INSERTING ROW(s?)*/
	function cIns()
	{

	}

	/*CHANGE VARIABLE TYPE*/
	function cVarTo()
	{

	}

	/*PREPARE AND EXECUTE*/
	function cPrpNX()
	{

	}





?>