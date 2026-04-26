<?php
	#	  ___ _   _ ___ _____ ___ ___ ___ ___ _  _ 
	#	 / __| | | |_ _|_   _| __| __|_ _/ __| || |
	#	 \__ \ |_| || |  | | | _|| _| | |\__ \ __ |
	#	 |___/\___/|___| |_| |___|_| |___|___/_||_|
	
	#	Copyright (C) 2026 Jan Maurice Dahlmanns [Bugfish]
	#	This file is part of the core library and is NOT included
	#	in any sublicense or third-party license agreements.

	#	This program is free software: you can redistribute it and/or modify
	#	it under the terms of the GNU General Public License as published by
	#	the Free Software Foundation, either version 3 of the License, or
	#	(at your option) any later version.

	#	This program is distributed in the hope that it will be useful,
	#	but WITHOUT ANY WARRANTY; without even the implied warranty of
	#	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	#	GNU General Public License for more details.

	#	You should have received a copy of the GNU General Public License
	#	along with this program.  If not, see <https://www.gnu.org/licenses/>.

	/***********************************************************************************************************
		Disable Hardlinking
	***********************************************************************************************************/	
	if(!is_array(@$object)) { @http_response_code(404); Header("Location: ../"); exit(); }
	
	/***********************************************************************************************************
		Changelog Release Text
	***********************************************************************************************************/	
	$x 					= array(); 				// Array for Changelog Information
	$x["title"] 		= "Stable 1.10.100"; 	// Title of the Changelogs Release (Version Type / Version Number)
	$x["rows_counter"] 	=  0; 					// Just for Rows to Counter up in Rows Array
	$x["rows"] 			=  array(); 			// Rows with Changelog Entries in Text Format. (No HTML)
		$x["rows"][$x["rows_counter"]++] 		=  "Example Release for developers and testing.";