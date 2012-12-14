<?php
namespace DeBugger\Themes;
/**
 * Debugger @version 2.0 pre release
 * 
 * @author Robert M. Parker <webmaster@yamiko.org>
 * 
 * @license
 * <This is a class for debugging code. It has an error handler and a few other useful methods>
 * Copyright (C) <2012>  Robert M. Parker <webmaster@yamiko.org>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or    
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the    
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License 
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * uses:
 *		syntaxhighlighter 3.0.83 <http://alexgorbatchev.com/SyntaxHighlighter/> 
 *			I modified the php brush to add numbers, user functions and 
 *			new keywords, constants and php function to the definitions.
 *			The styles folder is removed since I have themes which can output the css styles
 *      jQuery				<http://jquery.com/>
 * 
 */
class Midnight extends \DeBugger\Themes\STD{
	public 
			//background
			$BG								= '#0f192a', 
			$HighlightedLineBG				= '#253e5a', 
			$HighlightedLineHoverBG			= '#354e6a',
			//gutter
			$GutterText						= '#afafaf',
			$GutterBG						= 'transparent',
			$GutterBorder					= '#435a5f',
			$GutterHighlightedText			= '#0f192a',
			$GutterHighlightedBG			= '#435a5f',
			//syntax
			$Plain							= '#d1edff',
			$Keyword						= '#b43d3d',
			$Constant						= '#e0e8ff',
			$Function						= '#ffaa3e',
			$Variable						= '#ffaa3e',
			$String							= '#1dc116',
			$Script							= '#b43d3d',
			$Number							= 'yellow',
			$Comment						= '#428bdd';
}
?>