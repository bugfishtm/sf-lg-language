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
		HTTP 404 - Page not Found Response Code
	***********************************************************************************************************/
	http_response_code(404);

	/***********************************************************************************************************
		Forward to parent Directory
	***********************************************************************************************************/	
	Header("Location: ../");