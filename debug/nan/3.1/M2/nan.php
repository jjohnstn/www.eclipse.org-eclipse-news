<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# Copyright (c) 2007 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Debug Team
	# Date:			November 10, 2006
	#
	# Description: a new and noteworty entry for 3.1M2 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.1M2";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Debug Team";
	
	include("../../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Breakpoint groups</b> 
		    </td>
		    <td width="70%"> 
		      <p>The Breakpoints view allows breakpoints to be organized into groups. 
		        Breakpoints can be automatically grouped by type, project, or file with 
		        the <b>Group All By</b> actions, or you can create and name arbitrary 
		        groups with the <b>Add to Group</b> action. Groups are displayed as top-level 
		        items in a tree. Enabling and disabling a group enables and disables all 
		        breakpoints in that group. 
		      <p><img src="breakpoint_groups.gif" title="Breakpoint Groups" alt="Picture of group managment in the breakpoint view"> 
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Evaluation support: generics</b> 
		    </td>
		    <td width="70%"> 
		      <p>Java debug evaluations now support Java 5.0 generics. 
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Evaluation support: enhanced for loop</b> 
		    </td>
		    <td width="70%"> 
		      <p>Java debug evaluations now support the Java 5.0 enhanced for loop syntax. 
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b> Move to Ant 1.6.2 code completion</b> 
		    </td>
		    <td width="70%"> 
		      <p>The code completion in Eclipse has been updated for Ant 1.6.2
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b> </b>
		    </td>
		    <td width="70%"> 
		      <p>&nbsp;
		      </td>
		  </tr>
		<tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b> More folding in the Ant Editor</b> 
		    </td>
		    <td width="70%"> 
		      <p>Support has been added so that you can fold comments and the DOCTYPE declaration in the Ant Editor
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b> </b>
		    </td>
		    <td width="70%"> 
		      <p>&nbsp;
		      </td>
		  </tr>
		  
		</table>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>