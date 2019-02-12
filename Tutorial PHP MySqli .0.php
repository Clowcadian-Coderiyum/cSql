<?php
//Class that replace mySqli function based on my needs on intuitive
//acces and operation around my sql database. Process of developing
//this class taught me that query worth to initialize functions 
//before calling for prepare and execute statement.

//--need to incorporate tutorial notes.
//--need to incorporate log class and stick to it to avoid html.
class cSql
{
	/*[TUTORIAL NOTE]
	Member variables and constructor were designed intuitively 
	first as I have experience and knowledge when dealing with
	sql, php and their combination and the requirements that
	that they poses. But it still took me a flow chart to get 
	a clear understanding on what, how, where and when to write
	them in. Now take an advice said by a professor of mine.
	[ADVICE]FLOW CHART FIRST[ADVICE] */
	
	/*[FUNC]MEMBER VARS
	Storing some to create an intuitive approach to an sql
	database. Allows to keep privious values and adjust
	them or add more on the fly with out having to provide
	all the mySqli syntaxes being repeated. */
	
	/*[FUNC]CONSTRUCTOR
	Initiation has optional argument, to help the programmer
	format his code with multiple statements that fill this
	sql object rather then a long statement. These arguments 
	than fill the object parameters in order to minimize
	repetetive code for the programmer using the class */
	function __construct() 
	{
		
	}
	
	/*STARTING DATABASE*/
	function dbStrt()
	{
		
	}
	
	/*SIMPLE QUERY*/
	function cQry()
	{
		
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