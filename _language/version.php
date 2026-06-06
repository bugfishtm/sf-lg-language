<?php
	#	 ____  _   _ ___ _____ _____ _____ ___ ____  _   _ 
	#	/ ___|| | | |_ _|_   _| ____|  ___|_ _/ ___|| | | |
	#	\___ \| | | || |  | | |  _| | |_   | |\___ \| |_| |
	#	 ___) | |_| || |  | | | |___|  _|  | | ___) |  _  |
	#	|____/ \___/|___| |_| |_____|_|   |___|____/|_| |_|                       
	#									  __       _  _  _  _ __    __ 
	#									 / /(\/\/)( \( \( \( \\ \  / / 
	#									( (  )  (  ) )) )) )) )) )( (  
	#									 \_\(/\/\)(_/(_/(_/(_//_/  \_\ 
	
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
		Initialize the versioning array (mandatory)
	***********************************************************************************************************/	
		$x = array();

	/***********************************************************************************************************
		Module Setup
	***********************************************************************************************************/	

		/*******************************************************************************************************
			Unique Module Identifier
			 - This is a unique id for your module
			 - If you want your module in the public store contact the developers to get your unique module id.
			 - Request unique module id for official publication at the suitefish staff.
			 - If you do not have a registered unique module id start your rname with "xxx"
			 - Use maximum of 15 signs
			 - No special chars, only a-Z
			 - No numeric chars
			 - Underscore (_) prefix is dedicated to suitefish official releases
			 - This variable is mandatory
		*******************************************************************************************************/	
		$x["rname"] 			= "_language";

		/*******************************************************************************************************
			Available Languages 
			 - Short Codes of available languages in PHP Array
			 - This variable is mandatory
			 - Use language short code here like "de_DE" for german or "en_GB" for english.
		*******************************************************************************************************/	
		$x["lang"]				= array("example");		

		/*******************************************************************************************************
			Build Number
			 - Do only use integer values here
			 - Will extend the version number
			 - Relevant for database updates/changes
			 - Do not use special chars, not even dots
			 - This variable is mandatory
		*******************************************************************************************************/	
		$x["build"] 			= false;

		/*******************************************************************************************************
			Module Version
			 - Always add the build number at the end, seperated by a dot (.)
			 - Define the main Version number if the module.
			 - This variable is mandatory
		*******************************************************************************************************/
		$x["version"] 			= "1.10.100";	

		/*******************************************************************************************************
			Module Name 
			 - Define the Title of the Module displayed in different frontpage areas.
			 - Only text, no html codes
			 - This variable is mandatory
		*******************************************************************************************************/
		$x["name"] 				= "Template: Language Module";
		
		/*******************************************************************************************************
			Module Description 
			 - Define the Description of the Module displayed in different frontpage areas.
			 - Only text and simple html codes (like br, li, table)
			 - Do not use style, script or other kind of complex tags
			 - This variable is mandatory
		*******************************************************************************************************/
		$x["description"] 		= "Example of a language integration module designed for implementation within the Suitefish Administrator module.";
		
		/*******************************************************************************************************
			Module Type
			 - There are different Types of Modules inside Suitefish CMS
			 - The set ID 3 is dedicated to image modules and will than be recognized as one.
			 - Other possible values: 1 - Site | 2 - Extension | 3 - Image | 4 - Windows | 5 - Docker | 6 - Theme
			    7 - Language | 8 - Library
			 - This variable is mandatory
		*******************************************************************************************************/
		$x["type"] 				= 7;
		
		/*******************************************************************************************************
			Custom Update Server URL for this Module, if not the official Update Server
			 - If defined, an alternate Update Server will be used for updating this module.
			 - If false, default Suitefish Update Server will be used.
		*******************************************************************************************************/
		$x["custom_update_server"]  	= false;		
		
		/*******************************************************************************************************
			Minimal Suitefish Version to run this module
			 - Define the minimal version of CMS required to run this module.
			 - This variable is mandatory
		*******************************************************************************************************/
		$x["cms_version_min"] 			= "8.10.100";
		
		/*******************************************************************************************************
			Module Dependencies
			 - If this module requires another module to be active and running, make array("MODNAME", "MODNAME")
			 - Otherwhise set to false
		*******************************************************************************************************/	
		$x["dependencies"]		= false;
		
		/*******************************************************************************************************
			Module Conflicts
			 - If this module conflicts with another module, make array("MODNAME", "MODNAME")
			 - Otherwhise set to false
		*******************************************************************************************************/	
		$x["conflicts"]			= false;

		/*******************************************************************************************************
			Modules Parent Module
			 - Only for developers developing own site modules, who wanna copy or use or module functionality
				and assign modules to their own project, add your dependant project id here.
			 - If you change this, you will not be able to use this module in the official suitefish 
				administrator environment.
		*******************************************************************************************************/
		$x["parent_rname"] 		= false;

	/***********************************************************************************************************
		Additional Data
	***********************************************************************************************************/		

		/*******************************************************************************************************
			Module License
			 - gplv3, gplv2, mit, bsd, bsd2, ...
			 - can be false
		*******************************************************************************************************/
		$x["license"] 			= "gplv3";
		
		/*******************************************************************************************************
			Module Author Name
			 - can be false
		*******************************************************************************************************/
		$x["author"] 			= "Suitefish";
		
		/*******************************************************************************************************
			Module Author Mail
			 - can be false
		*******************************************************************************************************/
		$x["mail"] 				= false;
		
		/*******************************************************************************************************
			Module Author Website
			 - can be false
		*******************************************************************************************************/
		$x["website"] 			= false;
		
		/*******************************************************************************************************
			Module Documentation Website
			 - can be false
		*******************************************************************************************************/
		$x["documentation"] 	= "https://bugfishtm.github.io/suitefish-cms/";	
		
		/*******************************************************************************************************
			Module Github Website
			 - can be false
		*******************************************************************************************************/
		$x["github"] 			= "https://github.com/bugfishtm/sf-lg-language";	
		
		/*******************************************************************************************************
			Module Video URL
			 - a video url about the module if exists
			 - can be false
		*******************************************************************************************************/
		$x["video"] 			= false;	