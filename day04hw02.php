<?php
	// Day 4 Homework - Exercise 2
	// Write a short program to calculate the number of minutes in a week 
	// Use variables for the number of days in a week, the number of hours in a day, and the number of minutes in an hour

	// Initialize values for variables
	$DaysPerWeek=7;
	$HoursPerDay=24;
	$MinutesPerHour=60;

	// Calculate the number of minutes in a week

	$MinutesPerWeek=$DaysPerWeek*$HoursPerDay*$MinutesPerHour;
	
	// print the number of minutes in a week

	print "There are ";
	print $MinutesPerWeek;
	print " minutes per week.";
	print <br>;

	// Calculate and print the number of minutes per week in the Bilky Way, where there are 26 hours per day

	// Change the number of hours per day to 26 and re-calculate the number of minutes per week
	$HoursPerDay=26;
	$MinutesPerWeek=$DaysPerWeek*$HoursPerDay*$MinutesPerHour;

	// print the number of minutes in a week in the Bilky Way
	print "There are ";
	print $MinutesPerWeek;
	print " minutes per week in the Bilky Way.";
?>










































